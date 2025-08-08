<?php
namespace WPSL;

if (!defined('ABSPATH')) {
    exit;
}

class Salesforce
{
    /**
     * Retrieve an OAuth access token from Salesforce. Caches in a transient for ~20 minutes.
     */
    public static function getAccessToken(): array
    {
        $settings = get_option('wpsl_settings', []);
        $environment   = isset($settings['environment']) ? $settings['environment'] : 'production';
        $clientId      = isset($settings['client_id']) ? $settings['client_id'] : '';
        $clientSecret  = isset($settings['client_secret']) ? $settings['client_secret'] : '';
        $username      = isset($settings['username']) ? $settings['username'] : '';
        $password      = isset($settings['password']) ? $settings['password'] : '';
        $securityToken = isset($settings['security_token']) ? $settings['security_token'] : '';

        if (empty($clientId) || empty($clientSecret) || empty($username) || empty($password)) {
            return [ 'success' => false, 'error' => __('Salesforce credentials are not configured.', 'wp-salesforce-lead') ];
        }

        $base = $environment === 'sandbox' ? 'https://test.salesforce.com' : 'https://login.salesforce.com';
        $transientKey = 'wpsl_sf_token_' . md5($environment . '|' . $username);
        $cached = get_transient($transientKey);
        if (is_array($cached) && isset($cached['access_token']) && isset($cached['instance_url'])) {
            return [ 'success' => true, 'token' => $cached['access_token'], 'instance_url' => $cached['instance_url'] ];
        }

        $body = [
            'grant_type'    => 'password',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'username'      => $username,
            // Password concatenated with security token as required by SF Username-Password OAuth flow
            'password'      => $password . $securityToken,
        ];

        $response = wp_remote_post($base . '/services/oauth2/token', [
            'timeout' => 20,
            'body'    => $body,
        ]);

        if (is_wp_error($response)) {
            return [ 'success' => false, 'error' => $response->get_error_message() ];
        }

        $code = wp_remote_retrieve_response_code($response);
        $data = json_decode(wp_remote_retrieve_body($response), true);

        if ($code !== 200 || !is_array($data) || empty($data['access_token']) || empty($data['instance_url'])) {
            $msg = isset($data['error_description']) ? $data['error_description'] : __('Failed to obtain Salesforce token.', 'wp-salesforce-lead');
            return [ 'success' => false, 'error' => $msg ];
        }

        // Cache for 20 minutes
        set_transient($transientKey, [
            'access_token' => $data['access_token'],
            'instance_url' => $data['instance_url'],
        ], MINUTE_IN_SECONDS * 20);

        return [ 'success' => true, 'token' => $data['access_token'], 'instance_url' => $data['instance_url'] ];
    }

    /**
     * Create a Lead sObject in Salesforce.
     *
     * @param array $fields Associative array of Lead fields
     */
    public static function createLead(array $fields)
    {
        $tokenData = self::getAccessToken();
        if (!$tokenData['success']) {
            return $tokenData;
        }

        $settings = get_option('wpsl_settings', []);
        $apiVersion = isset($settings['api_version']) ? $settings['api_version'] : 'v58.0';

        $endpoint = trailingslashit($tokenData['instance_url']) . 'services/data/' . $apiVersion . '/sobjects/Lead/';

        $args = [
            'timeout' => 20,
            'headers' => [
                'Authorization' => 'Bearer ' . $tokenData['token'],
                'Content-Type'  => 'application/json',
            ],
            'body'    => wp_json_encode($fields),
            'method'  => 'POST',
        ];

        $response = wp_remote_post($endpoint, $args);

        if (is_wp_error($response)) {
            return [ 'success' => false, 'error' => $response->get_error_message() ];
        }

        $code = wp_remote_retrieve_response_code($response);
        $data = json_decode(wp_remote_retrieve_body($response), true);

        if ($code === 201 && isset($data['id'])) {
            return [ 'success' => true, 'id' => $data['id'] ];
        }

        // Salesforce returns array of errors sometimes
        if (is_array($data)) {
            if (isset($data[0]['message'])) {
                return [ 'success' => false, 'error' => $data[0]['message'] ];
            }
            if (isset($data['message'])) {
                return [ 'success' => false, 'error' => $data['message'] ];
            }
        }

        return [ 'success' => false, 'error' => __('Unknown error creating Lead.', 'wp-salesforce-lead') ];
    }
}