<?php
// Minimal theme functions for headless WordPress
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
});

// Remove unnecessary frontend functionality
add_action('wp', function() {
    if (!is_admin() && defined('WP_HEADLESS') && WP_HEADLESS) {
        wp_redirect(home_url('/wp-admin/'));
        exit;
    }
});
