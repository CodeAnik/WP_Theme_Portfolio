<?php
// hero section functions
function portfolio_hero($wp_customize){
    //hero section
    $wp_customize->add_section('portfolio_hero', array(
        'title' => __('portfolio Hero', 'dgencyAnik'),
        'description' => sprintf(__('Options for Hero Sections', 'dgencyAnik')),
        'priority' => 130
    ));

    $wp_customize->add_setting('person_image', array(
        'default' => get_bloginfo('template_directory').'/img/img_avatar.png',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'person_image', array(
        'label' => 'Hero Image',
        'section' => 'portfolio_hero',
        'setting' => 'person_image',
        'priority' => 1
    )));

    $wp_customize->add_setting('welcome_text', array(
        'default' => _x('HELLO', 'Portfolio'),
        'type' =>'theme_mod'
    ));
    $wp_customize->add_control('welcome_text', array(
        'label' => __('Welcome Text', 'Portfolio'),
        'section' => 'portfolio_hero',
        'priority' => 2
    ));

    $wp_customize->add_setting('hero_heading_name', array(
        'default' => _x('John Doe', 'Portfolio'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('hero_heading_name', array(
        'label' => __('Your Name', 'Portfolio'),
        'section' => 'portfolio_hero',
        'priority' => 3
    ));

    $wp_customize->add_setting('hero_expertise', array(
        'default' => _x('Web Developer & Graphics Designer', 'Portfolio'),
        'type' =>'theme_mod'
    ));
    $wp_customize->add_control('hero_expertise', array(
        'label' => __('Your Expertise Name', 'Portfolio'),
        'section' => 'portfolio_hero',
        'priority' => 4
    ));


    $wp_customize->add_setting('hero_btn_url', array(
        'default' => __('https://drive.google.com/file/d/1JYMyS_MP__SqEEWSdGAoMWSOKsXfKEez/view?usp=sharing', 'Portfolio'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_btn_url', array(
        'label' => __('Button URL', 'Portfolio'),
        'section' => 'portfolio_hero',
        'priority' => 5
    ));


    $wp_customize->add_setting('hero_btn_text', array(
        'default' => _x('MY RESUME', 'Portfolio'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('hero_btn_text', array(
        'label' => __('Button Text', 'Portfolio'),
        'section' => 'portfolio_hero',
        'priority' => 6
    ));

    //Socail Media Control
    // Add section for social media
    $wp_customize->add_section('portfolio_social_media', array(
        'title' => __('Social Media', 'dgencyAnik'),
    ));
    
    // Define available social media options
    $social_media_options = array(
        'facebook' => __('Facebook', 'dgencyAnik'),
        'twitter' => __('Twitter', 'dgencyAnik'),
        'instagram' => __('Instagram', 'dgencyAnik'),
        'linkedin' => __('LinkedIn', 'dgencyAnik'),
        'behance' => __('Behance', 'dgencyAnik'),
        'dribble' => __('Dribbble', 'dgencyAnik'),
        'github' => __('GitHub','dgencyAnik'),
        'youtube' => __('YouTube', 'dgencyAnik'),
    );
    
    // Loop through each social media option and add a setting and control for it
    foreach ($social_media_options as $option => $label) {
        $wp_customize->add_setting('social_media_' . $option . '_link', array(
            'default' => '',
            'type' => 'theme_mod',
        ));

        $wp_customize->add_control('social_media_' . $option . '_link', array(
            'label' => $label . ' ' . __('Link', 'dgencyAnik'),
            'section' => 'portfolio_social_media',
            'priority' => count($social_media_options),
            'type' => 'text',
        ));
    }

    //About Me Section
    /*
    $wp_customize->add_section('portfolio_about', array(
        'title' => __('Portfolio About', 'dgencyAnik'),
    ));
    $wp_customize->add_setting('portfolio_about_heading', array(
        'default' => _x('About Me', 'Portfolio'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control('portfolio_about_heading', array(
        'label' => __('About Section Heading', 'Portfolio'),
        'section' => 'portfolio_about',
        'priority' => 1
    ));
    // Add About Section Description
    $wp_customize->add_setting('portfolio_about_description', array(
        'default' => _x('I am Anik Khan. I am a Website Developer and I am very passionate and dedicated to my work. I have a lot of experience as a professional Website Developer and have acquired the skills and knowledge necessary to make your project a success. To build my career in a challenging environment, where I can utilize my knowledge, skill, and sincerity to achieve desirable goals through a team-based management approach.', 'Portfolio'),
        'type'    => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'portfolio_about_description', array(
        'label' => __('About Section Description', 'Portfolio'),
        'section' => 'portfolio_about',
        'priority' => 2,
        'type' => 'textarea'
    )));
    */

}

add_action( 'customize_register', 'portfolio_hero' );