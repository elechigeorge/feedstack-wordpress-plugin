<?php

function feedback_form_settings_init() {
    add_settings_section(
        'feedback_form_section',
        '',
        'feedback_form_section_callback',
        'general'
    );

    add_settings_field(
        'feedstack_feedback_enabled',
        'Enable Feedback Form',
        'feedstack_feedback_enabled_callback',
        'general',
        'feedback_form_section'
    );

    
}

add_action( 'admin_init', 'feedback_form_settings_init' );

function feedback_form_section_callback() {

}

function feedstack_feedback_enabled_callback() {
    $enabled = get_option( 'feedstack_feedback_enabled' );
    ?>

    <div class = 'form-switch form-check'>
    <input type = 'checkbox' class = '' role = 'switch' name = 'feedstack_feedback_enabled' value = '1' <?php checked( '1', $enabled );
    ?> />
    <label><?php echo ( $enabled === '1' ) ? 'Enabled' : 'Disabled';
    ?></label>
    </div>
    <?php

}