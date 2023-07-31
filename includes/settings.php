<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function feedstack_plugin_register_settings() {
    Container::make( 'theme_options', 'Feedstack API ' )
    ->set_icon( 'dashicons-feedback' )
    ->add_tab( __( 'Activation' ), array(
        Field::make( 'text', 'crb_first_name', 'First Name' ),
        Field::make( 'text', 'crb_last_name', 'Last Name' ),
        Field::make( 'text', 'crb_position', 'Position' ),
    ) )
    ->add_tab( __( 'Form Settings' ), array(
        Field::make( 'text', 'crb_email', 'Notification Email' ),
        Field::make( 'text', 'crb_phone', 'Phone Number' ),
    ) )
    ->add_tab( __( 'Advanced Settings' ), array(
      Field::make( 'text', 'crb_color', 'Notification Email' ),
      Field::make( 'text', 'crb_format', 'Phone Number' ),
  ) );

}