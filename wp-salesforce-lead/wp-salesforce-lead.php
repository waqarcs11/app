<?php
/**
 * Plugin Name: WP Salesforce Lead Form
 * Description: Adds a shortcode [salesforce_lead_form] that renders a contact form and creates a Lead in Salesforce on submit.
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: wp-salesforce-lead
 */

if (!defined('ABSPATH')) {
    exit;
}

// Constants
if (!defined('WPSL_VERSION')) {
    define('WPSL_VERSION', '1.0.0');
}
if (!defined('WPSL_PLUGIN_FILE')) {
    define('WPSL_PLUGIN_FILE', __FILE__);
}
if (!defined('WPSL_PLUGIN_DIR')) {
    define('WPSL_PLUGIN_DIR', plugin_dir_path(__FILE__));
}
if (!defined('WPSL_PLUGIN_URL')) {
    define('WPSL_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// Activation: seed defaults
register_activation_hook(__FILE__, function () {
    $defaults = array(
        'environment'     => 'production', // production|sandbox
        'client_id'       => '',
        'client_secret'   => '',
        'username'        => '',
        'password'        => '',
        'security_token'  => '',
        'api_version'     => 'v58.0',
    );

    if (get_option('wpsl_settings') === false) {
        add_option('wpsl_settings', $defaults);
    }
});

// Includes
require_once WPSL_PLUGIN_DIR . 'includes/class-wpsl-admin.php';
require_once WPSL_PLUGIN_DIR . 'includes/class-wpsl-salesforce.php';
require_once WPSL_PLUGIN_DIR . 'includes/class-wpsl-form.php';

// Init
add_action('plugins_loaded', function () {
    \WPSL\Admin::init();
    \WPSL\Form::init();
});