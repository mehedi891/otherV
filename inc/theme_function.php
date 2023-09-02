<?php

function eflHeadFooterLogo ($wp_customize){
    $wp_customize -> add_section('headerArea', array(
        'title' => __('Logo Change','efoli'),
        'description' => 'Change Header and Footer Logo Here',
    ));

    $wp_customize -> add_setting('logoNormal',array(
        'default' => get_bloginfo('template_directory').'/assets/images/logo-coral.png',
    ));

    $wp_customize -> add_setting('logoSticky',array(
        'default' => get_bloginfo('template_directory').'/assets/images/logo-coral2.png',
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'logoNormal',array(
        'label' => 'Normal Logo Upload',
        'description' => 'Upload Your Normal Logo Here',
        'section' => 'headerArea',
        'setting' => 'logoNormal'

    )));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'logoSticky',array(
        'label' => 'Sticky Logo Upload',
        'description' => 'Upload Your Sticky Logo Here',
        'section' => 'headerArea',
        'setting' => 'logoSticky'

    )));
}

add_action('customize_register','eflHeadFooterLogo');
