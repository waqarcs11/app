<?php
namespace WPSL;

if (!defined('ABSPATH')) {
    exit;
}

class Admin
{
    public static function init(): void
    {
        add_action('admin_menu', [__CLASS__, 'registerMenu']);
        add_action('admin_init', [__CLASS__, 'registerSettings']);
    }

    public static function registerMenu(): void
    {
        add_options_page(
            __('Salesforce Lead Settings', 'wp-salesforce-lead'),
            __('Salesforce Lead', 'wp-salesforce-lead'),
            'manage_options',
            'wpsl-settings',
            [__CLASS__, 'renderSettingsPage']
        );
    }

    public static function registerSettings(): void
    {
        register_setting('wpsl_settings_group', 'wpsl_settings', [
            'type'              => 'array',
            'sanitize_callback' => [__CLASS__, 'sanitizeSettings'],
            'default'           => [
                'environment'    => 'production',
                'client_id'      => '',
                'client_secret'  => '',
                'username'       => '',
                'password'       => '',
                'security_token' => '',
                'api_version'    => 'v58.0',
            ],
        ]);

        add_settings_section(
            'wpsl_main_section',
            __('Salesforce Connection', 'wp-salesforce-lead'),
            function () {
                echo '<p>' . esc_html__(
                    'Enter your Salesforce Connected App credentials. For Sandbox, choose Sandbox environment.',
                    'wp-salesforce-lead'
                ) . '</p>';
            },
            'wpsl-settings'
        );

        self::addField('environment', __('Environment', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $env     = isset($options['environment']) ? $options['environment'] : 'production';
            ?>
            <select name="wpsl_settings[environment]">
                <option value="production" <?php selected($env, 'production'); ?>><?php esc_html_e('Production', 'wp-salesforce-lead'); ?></option>
                <option value="sandbox" <?php selected($env, 'sandbox'); ?>><?php esc_html_e('Sandbox', 'wp-salesforce-lead'); ?></option>
            </select>
            <?php
        });

        self::addField('client_id', __('Consumer Key (Client ID)', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $val     = isset($options['client_id']) ? $options['client_id'] : '';
            printf('<input type="text" class="regular-text" name="wpsl_settings[client_id]" value="%s" />', esc_attr($val));
        });

        self::addField('client_secret', __('Consumer Secret (Client Secret)', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $val     = isset($options['client_secret']) ? $options['client_secret'] : '';
            printf('<input type="password" class="regular-text" name="wpsl_settings[client_secret]" value="%s" autocomplete="new-password" />', esc_attr($val));
        });

        self::addField('username', __('Salesforce Username', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $val     = isset($options['username']) ? $options['username'] : '';
            printf('<input type="email" class="regular-text" name="wpsl_settings[username]" value="%s" />', esc_attr($val));
        });

        self::addField('password', __('Salesforce Password', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $val     = isset($options['password']) ? $options['password'] : '';
            printf('<input type="password" class="regular-text" name="wpsl_settings[password]" value="%s" autocomplete="new-password" />', esc_attr($val));
        });

        self::addField('security_token', __('Security Token', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $val     = isset($options['security_token']) ? $options['security_token'] : '';
            printf('<input type="text" class="regular-text" name="wpsl_settings[security_token]" value="%s" />', esc_attr($val));
            echo '<p class="description">' . esc_html__(
                'Find or reset under: Salesforce Setup → My Personal Information → Reset My Security Token.',
                'wp-salesforce-lead'
            ) . '</p>';
        });

        self::addField('api_version', __('API Version', 'wp-salesforce-lead'), function ($args) {
            $options = get_option('wpsl_settings', []);
            $val     = isset($options['api_version']) ? $options['api_version'] : 'v58.0';
            printf('<input type="text" class="regular-text" name="wpsl_settings[api_version]" value="%s" />', esc_attr($val));
            echo '<p class="description">' . esc_html__(
                'Format like v58.0. Keep default unless you know you need a different version.',
                'wp-salesforce-lead'
            ) . '</p>';
        });
    }

    private static function addField(string $id, string $label, callable $callback): void
    {
        add_settings_field($id, $label, $callback, 'wpsl-settings', 'wpsl_main_section');
    }

    public static function sanitizeSettings($input)
    {
        $output = [];
        $output['environment']    = (isset($input['environment']) && $input['environment'] === 'sandbox') ? 'sandbox' : 'production';
        $output['client_id']      = isset($input['client_id']) ? sanitize_text_field($input['client_id']) : '';
        $output['client_secret']  = isset($input['client_secret']) ? sanitize_text_field($input['client_secret']) : '';
        $output['username']       = isset($input['username']) ? sanitize_email($input['username']) : '';
        $output['password']       = isset($input['password']) ? $input['password'] : '';
        $output['security_token'] = isset($input['security_token']) ? sanitize_text_field($input['security_token']) : '';
        $output['api_version']    = isset($input['api_version']) ? sanitize_text_field($input['api_version']) : 'v58.0';
        return $output;
    }

    public static function renderSettingsPage(): void
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        ?>
        <div class="wrap">
            <h1><?php esc_html_e('Salesforce Lead Settings', 'wp-salesforce-lead'); ?></h1>
            <form action="options.php" method="post">
                <?php
                settings_fields('wpsl_settings_group');
                do_settings_sections('wpsl-settings');
                submit_button(__('Save Settings', 'wp-salesforce-lead'));
                ?>
            </form>
            <hr />
            <h2><?php esc_html_e('Shortcode', 'wp-salesforce-lead'); ?></h2>
            <p><code>[salesforce_lead_form]</code></p>
            <p class="description"><?php esc_html_e('Place the shortcode on a page to display the form.', 'wp-salesforce-lead'); ?></p>
        </div>
        <?php
    }
}