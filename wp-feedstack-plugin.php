<?php
/*
Plugin Name: Feedstack Feedback
Description: Collect feedback from website users using Feedstack API.
Version: 1.0
Author: Your Name
*/

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Load Carbon Fields
add_action('after_setup_theme', 'feedstack_load_carbon_fields');

function feedstack_load_carbon_fields() {
    \Carbon_Fields\Carbon_Fields::boot();
}

// Include the settings file
include plugin_dir_path(__FILE__) . 'includes/settings.php';

// Enqueue required styles and scripts
function feedstack_enqueue_scripts() {
    // Check if the feedback form is enabled before enqueuing scripts and styles
    if (get_option('feedstack_feedback_enabled', true)) {
        wp_enqueue_style('feedstack-styles', plugin_dir_url(__FILE__) . 'css/styles.css');
        wp_enqueue_script('feedstack-scripts', plugin_dir_url(__FILE__) . 'javascript/scripts.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'feedstack_enqueue_scripts');

// Function to create the feedback form HTML
function feedstack_feedback_form_html() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/feedback_form.html';
    return ob_get_clean();
}

// Activation hook - Enable the feedback form on plugin activation
function feedstack_plugin_activation() {
    update_option('feedstack_feedback_enabled', true);
}
register_activation_hook(__FILE__, 'feedstack_plugin_activation');

// Deactivation hook - Disable the feedback form on plugin deactivation
function feedstack_plugin_deactivation() {
    update_option('feedstack_feedback_enabled', false);
}
register_deactivation_hook(__FILE__, 'feedstack_plugin_deactivation');

// Filter to append the feedback form to the page content
function feedstack_render_feedback_form() {
    // Check if the feedback form is enabled
    if (get_option('feedstack_feedback_enabled', true)) {
        $feedback_form_html = feedstack_feedback_form_html();
        echo $feedback_form_html;
    }
}
add_filter('wp_footer', 'feedstack_render_feedback_form');

// Add the admin settings page using Carbon Fields
add_action('carbon_fields_register_fields', 'feedstack_plugin_register_settings');


