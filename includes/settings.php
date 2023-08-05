<?php

// Import stuff
include plugin_dir_path(__FILE__) . 'dashboard_page.php';
include plugin_dir_path(__FILE__) . 'dashboard_setting.php';

add_action( 'admin_menu', 'feedstack_plugin_register_settings' );
add_action( 'admin_menu', 'feedstack_plugin_register_submenu_pages' );

function feedstack_plugin_register_settings() {
    // Add a new top-level menu item to the WordPress admin dashboard
    add_menu_page(
        __( 'Settings', 'settings' ), // Page title
        __( 'Feeds Manager', 'settings' ), // Menu title
        'manage_options', // Capability required to access this menu
        'feedstack_settings', // Menu slug
        'feedstack_plugin_settings_page', // Callback function to render the settings page
        'dashicons-feedback' // Icon URL or dashicon class
    );

    // Register settings and fields for the main option page
    add_action( 'admin_init', 'feedstack_plugin_settings_init' );
}

function feedstack_plugin_settings_init() {
    // Register the main option page settings
    register_setting( 'feedstack_options', 'contact_plugin_show_content', array(
        'type' => 'boolean',
        'default' => true,
    ) );

    register_setting( 'feedstack_options', 'contact_plugin_recepients_email', array(
        'type' => 'string',
        'default' => '',
    ) );

    register_setting( 'feedstack_options', 'contact_plugin_message', array(
        'type' => 'string',
        'default' => '',
    ) );
}






function feedstack_plugin_settings_page_result_analytics() {
    ?>
    <div class="wrap">
        <h1><?php _e( 'Result/Analytics', 'settings' ); ?></h1>
        <!-- Add form fields for the result and analytics settings here -->
    </div>
    <?php
}

function feedstack_plugin_register_submenu_pages() {

    add_submenu_page(
        'feedstack_settings', // Parent menu slug
        __( 'Dashboard', 'settings' ), // Page title
        __( 'Dashboard', 'settings' ), // Menu title
        'manage_options', // Capability required to access this menu
        'feedstack_settings', // Menu slug (same as parent menu slug to replace the default submenu)
        'feedstack_plugin_settings_page' // Callback function to render the submenu page
    );

    // Add the submenu page for "Create/Edit Forms" under the main "Feedstack" page
    add_submenu_page(
        'feedstack_settings', // Parent menu slug
        __( 'Settings', 'settings' ), // Page title
        __( 'Settings', 'settings' ), // Menu title
        'manage_options', // Capability required to access this menu
        'feedstack_settings_form', // Menu slug
        'feedstack_plugin_settings_page_form' // Callback function to render the submenu page
    );

    // Add the submenu page for "Result/Analytics" under the main "Feedstack" page
    add_submenu_page(
        'feedstack_settings', // Parent menu slug
        __( 'About Feedstack', 'settings' ), // Page title
        __( 'About Feedstack', 'settings' ), // Menu title
        'manage_options', // Capability required to access this menu
        'feedstack_settings_result_analytics', // Menu slug
        'feedstack_plugin_settings_page_result_analytics' // Callback function to render the submenu page
    );
}






