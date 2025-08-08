<?php
namespace WPSL;

if (!defined('ABSPATH')) {
    exit;
}

class Form
{
    public static function init(): void
    {
        add_shortcode('salesforce_lead_form', [__CLASS__, 'renderShortcode']);
        add_action('init', [__CLASS__, 'handlePost']);
        add_action('wp_enqueue_scripts', [__CLASS__, 'registerAssets']);
    }

    public static function registerAssets(): void
    {
        wp_register_style('wpsl-form', WPSL_PLUGIN_URL . 'assets/css/form.css', [], WPSL_VERSION);
    }

    public static function handlePost(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        if (!isset($_POST['wpsl_action']) || $_POST['wpsl_action'] !== 'submit_lead') {
            return;
        }

        if (!isset($_POST['wpsl_nonce']) || !wp_verify_nonce(sanitize_text_field($_POST['wpsl_nonce']), 'wpsl_submit')) {
            return;
        }

        // Honeypot (bots will fill it)
        if (!empty($_POST['website'])) {
            // Pretend success
            self::redirectWithStatus('success');
        }

        $firstName = isset($_POST['first_name']) ? sanitize_text_field(wp_unslash($_POST['first_name'])) : '';
        $lastName  = isset($_POST['last_name']) ? sanitize_text_field(wp_unslash($_POST['last_name'])) : '';
        $company   = isset($_POST['company']) ? sanitize_text_field(wp_unslash($_POST['company'])) : '';
        $email     = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
        $phone     = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
        $message   = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';
        $sourceUrl = isset($_POST['source_url']) ? esc_url_raw(wp_unslash($_POST['source_url'])) : home_url('/');

        if (empty($lastName) || empty($company) || empty($email)) {
            self::redirectWithStatus('error');
        }

        $fields = [
            'FirstName'       => $firstName,
            'LastName'        => $lastName,
            'Company'         => $company,
            'Email'           => $email,
            'Phone'           => $phone,
            'Description'     => $message,
            'LeadSource'      => 'Website',
            'Website'         => parse_url($sourceUrl, PHP_URL_HOST),
        ];

        $result = Salesforce::createLead($fields);
        if ($result['success']) {
            self::redirectWithStatus('success');
        }

        self::redirectWithStatus('error');
    }

    private static function redirectWithStatus(string $status): void
    {
        $redirect = isset($_POST['redirect']) ? esc_url_raw(wp_unslash($_POST['redirect'])) : '';
        if (!$redirect) {
            $redirect = isset($_POST['_wp_http_referer']) ? esc_url_raw(wp_unslash($_POST['_wp_http_referer'])) : wp_get_referer();
        }
        if (!$redirect) {
            $redirect = home_url(add_query_arg([]));
        }

        $url = add_query_arg(['wpsl' => $status], $redirect);
        wp_safe_redirect($url);
        exit;
    }

    public static function renderShortcode($atts = [], $content = null)
    {
        wp_enqueue_style('wpsl-form');

        $atts = shortcode_atts([
            'redirect' => '',
        ], $atts, 'salesforce_lead_form');

        $status = isset($_GET['wpsl']) ? sanitize_text_field(wp_unslash($_GET['wpsl'])) : '';

        ob_start();
        ?>
        <div class="wpsl-form-container">
            <?php if ($status === 'success') : ?>
                <div class="wpsl-notice wpsl-success"><?php echo esc_html__('Thanks! We\'ve received your details.', 'wp-salesforce-lead'); ?></div>
            <?php elseif ($status === 'error') : ?>
                <div class="wpsl-notice wpsl-error"><?php echo esc_html__('Sorry, something went wrong. Please try again later.', 'wp-salesforce-lead'); ?></div>
            <?php endif; ?>

            <form class="wpsl-form" method="post" action="">
                <?php wp_nonce_field('wpsl_submit', 'wpsl_nonce'); ?>
                <input type="hidden" name="wpsl_action" value="submit_lead" />
                <input type="hidden" name="source_url" value="<?php echo esc_attr((is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" />
                <?php if (!empty($atts['redirect'])): ?>
                    <input type="hidden" name="redirect" value="<?php echo esc_url($atts['redirect']); ?>" />
                <?php endif; ?>

                <p class="wpsl-field">
                    <label for="first_name"><?php esc_html_e('First Name', 'wp-salesforce-lead'); ?></label>
                    <input type="text" id="first_name" name="first_name" />
                </p>
                <p class="wpsl-field">
                    <label for="last_name"><?php esc_html_e('Last Name', 'wp-salesforce-lead'); ?> *</label>
                    <input type="text" id="last_name" name="last_name" required />
                </p>
                <p class="wpsl-field">
                    <label for="company"><?php esc_html_e('Company', 'wp-salesforce-lead'); ?> *</label>
                    <input type="text" id="company" name="company" required />
                </p>
                <p class="wpsl-field">
                    <label for="email"><?php esc_html_e('Email', 'wp-salesforce-lead'); ?> *</label>
                    <input type="email" id="email" name="email" required />
                </p>
                <p class="wpsl-field">
                    <label for="phone"><?php esc_html_e('Phone', 'wp-salesforce-lead'); ?></label>
                    <input type="tel" id="phone" name="phone" />
                </p>
                <p class="wpsl-field">
                    <label for="message"><?php esc_html_e('Message', 'wp-salesforce-lead'); ?></label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </p>

                <!-- Honeypot -->
                <div style="position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden;">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" />
                </div>

                <p>
                    <button type="submit" class="button button-primary"><?php esc_html_e('Submit', 'wp-salesforce-lead'); ?></button>
                </p>
            </form>
        </div>
        <?php
        return ob_get_clean();
    }
}