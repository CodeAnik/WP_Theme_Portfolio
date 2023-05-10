<?php
//Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'dgencyAnik'));


//Theme Functions
function portfolio_header($wp_customize){
    $wp_customize->add_section('portfolio_header_area', array(
        'title' => __('Header Area', 'dgencyAnik'),
    ));

    $wp_customize->add_setting('portfolio_logo', array(
        'default' => get_bloginfo( 'template_directory').'/img/logo.png',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio_logo', array(
        'label' => __('Logo', 'dgencyAnik'),
        'section' => 'portfolio_header_area',
        'settings' => 'portfolio_logo'
    )));

}

add_action( 'customize_register', 'portfolio_header');
