
<?php
/**
 * Architects Certificate Theme Functions
 */

// Theme setup
function architects_certificate_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'architects-certificate'),
        'footer' => __('Footer Menu', 'architects-certificate'),
    ));
}
add_action('after_setup_theme', 'architects_certificate_setup');

// Enqueue styles and scripts
function architects_certificate_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('architects-certificate-style', get_stylesheet_uri());
    
    // Enqueue Tailwind CSS (already loaded via CDN in template)
    // wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com');
    
    // Custom JavaScript for interactions
    wp_enqueue_script('architects-certificate-js', get_template_directory_uri() . '/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'architects_certificate_scripts');

// Add custom post types for services if needed
function create_services_post_type() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-hammer',
        )
    );
}
add_action('init', 'create_services_post_type');

// Add contact form handling
function handle_quote_form() {
    if (isset($_POST['submit_quote'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $service = sanitize_text_field($_POST['service']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Send email (configure with your email settings)
        $to = 'info@architectscertificate.co.uk';
        $subject = 'New Quote Request from ' . $name;
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nMessage: $message";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        wp_mail($to, $subject, $body, $headers);
        
        // Redirect with success message
        wp_redirect(add_query_arg('quote_sent', 'true', wp_get_referer()));
        exit;
    }
}
add_action('init', 'handle_quote_form');

// Customize WordPress admin
function architects_certificate_admin_styles() {
    echo '<style>
        #wpadminbar { background: #1e40af !important; }
        .wp-admin #wpadminbar .ab-item { color: #ffffff !important; }
    </style>';
}
add_action('admin_head', 'architects_certificate_admin_styles');
add_action('wp_head', 'architects_certificate_admin_styles');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Security: Remove WordPress version from RSS feeds
function remove_version_from_rss() {
    return '';
}
add_filter('the_generator', 'remove_version_from_rss');
?>
