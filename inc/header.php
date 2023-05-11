<?php

add_theme_support( 'menus' );

//Menu Register
register_nav_menus( array(
    'main_menu' => __('Main Menu', 'dgencyAnik')
));

function add_class_li($classes,$item,$args){
    if(isset($args->li_class)){
        $classes[]=$args->li_class;
    }
    if(isset($args->active_class) && in_array('current-menu-item', $classes)){
        $classes[]= $args->active_class;
    }
    return $classes;
}

add_filter( 'nav_menu_css_class', 'add_class_li', 10, 3 );

function add_anchor_class($attr,$item,$args){
    if(isset($args->a_class)){
        $attr['class']=$args->a_class;
    }
    return $attr;
}

add_filter( 'nav_menu_link_attributes', 'add_anchor_class', 10, 3);

//Theme Functions
function portfolio_header($wp_customize){
    $wp_customize->add_section('portfolio_logo', array(
        'title' => __('Header Logo', 'dgencyAnik'),
        'description' => __('Upload a logo to replace the default site title and tagline.', 'dgency_theme'),
    ));

    // Add a new setting for the logo image
    $wp_customize->add_setting('logo_image', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add a new control for the logo image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
        'label' => ('Upload Logo'),
        'section' => 'portfolio_logo',
        'settings' => 'logo_image',
    )));

}

add_action( 'customize_register', 'portfolio_header');
