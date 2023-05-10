<?php


//============================ Add about Section=============================================
//Dynamics all of this setion details
/*
include_once ABSPATH . '../wp-includes/class-wp-customize-control.php';
// Add new section in Customize
function custom_theme_customize_register( $wp_customize ) {

    // Add About Me section
    $wp_customize->add_section( 'about_me_section', array(
        'title'       => __( 'About Me', 'dgencyAnik' ),
        'description' => __( 'Add information about yourself', 'dgencyAnik' ),
        'priority'    => 30,
    ) );

    // Add Skills repeater field
    $wp_customize->add_setting( 'skills_repeater', array(
        'default'           => '',
        'sanitize_callback' => 'custom_theme_sanitize_repeater',
    ) );

    $wp_customize->add_control( new WP_Customize_Repeater_Control( $wp_customize, 'skills_repeater', array(
        'label'   => __( 'Skills', 'dgencyAnik' ),
        'section' => 'about_me_section',
        'priority' => 10,
        'description' => __( 'Add your skills with title and icon', 'dgencyAnik' ),
        'fields'  => array(
            'title' => array(
                'type'        => 'text',
                'label'       => __( 'Title', 'dgencyAnik' ),
                'description' => __( 'Enter the title for the skill', 'dgencyAnik' ),
            ),
            'icon' => array(
                'type'        => 'icon',
                'label'       => __( 'Icon', 'dgencyAnik' ),
                'description' => __( 'Select an icon for the skill', 'dgencyAnik' ),
            ),
        ),
    ) ) );

}

add_action( 'customize_register', 'custom_theme_customize_register' );


// Sanitize repeater field
function custom_theme_sanitize_repeater( $input ) {
    $input_decoded = json_decode( $input, true );
    $sanitized = array();
    foreach ( (array) $input_decoded as $item ) {
        $sanitized_item = array();
        foreach ( $item as $key => $value ) {
            if ( 'title' === $key ) {
                $sanitized_item['title'] = sanitize_text_field( $value );
            } elseif ( 'icon' === $key ) {
                $sanitized_item['icon'] = esc_url_raw( $value );
            }
        }
        if ( ! empty( $sanitized_item ) ) {
            $sanitized[] = $sanitized_item;
        }
    }
    return json_encode( $sanitized );
}
*/

function portfolio_about_me( $wp_customize ) {

/*

    // Add About Me section
    $wp_customize->add_section( 'about_me_section', array(
        'title'       => __( 'About Me', 'Portfolio' ),
        'description' => __( 'Add information about yourself', 'Portfolio' ),
        'priority'    => 30,
    ) );

    // Add About Myself setting and control
    $wp_customize->add_setting( 'about_myself', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'about_myself', array(
        'label'    => __( 'About Yourself in Short Description', 'Portfolio' ),
        'type'     => 'textarea',
        'section'  => 'about_me_section',
        'priority' => 10,
    ) );

    // Add Main Skills setting and control
    $wp_customize->add_setting( 'about_main_skills', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_main_skills', array(
        'label'    => __( 'Main Skills', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'about_me_section',
        'priority' => 20,
    ) );

    // Add Skill #1 setting and control
    $wp_customize->add_setting( 'skill_1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'skill_1', array(
        'label'    => __( 'Skill #1', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'about_me_section',
        'priority' => 30,
    ) );

    // Add Skill #2 setting and control
    /*
    $wp_customize->add_setting( 'skill_2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'skill_2', array(
        'label'    => __( 'Skill #2', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'about_me_section',
        'priority' => 40,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'skill_2', array(   
        'label' => 'Skills Images',
        'section' => 'about_me_section',
        'setting' => 'skill_2',
        'priority' => 50
    )));
    */
    
    
    /*
    // Add Skills panel
    $wp_customize->add_panel( 'skills_panel', array(
        'title'    => __( 'Skills', 'Portfolio' ),
        'priority' => 30,
    ));

    // Add Skill #1 section
    $wp_customize->add_section( 'skill_2_section', array(
        'title'       => __( 'Skill #2', 'Portfolio' ),
        'priority'    => 10,
        'panel'       => 'skills_panel',
    ));

    // Add Skill #1 text setting and control
    $wp_customize->add_setting( 'skill_2_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'skill_2_title', array(
        'label'    => __( 'Skill Title', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'skill_2_section',
        'priority' => 10,
    ));

    // Add Skill #1 image setting and control
    $wp_customize->add_setting( 'skill_2_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'skill_2_image', array(
        'label'    => __( 'Skill Image', 'Portfolio' ),
        'section'  => 'skill_2_section',
        'priority' => 20,
    )));

    // Add Skill #1 section
    $wp_customize->add_section( 'skill_2_section', array(
        'title'       => __( 'Skill #2', 'Portfolio' ),
        'priority'    => 10,
        'panel'       => 'skills_panel',
    ));

    // Add Skill #1 text setting and control
    $wp_customize->add_setting( 'skill_2_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'skill_2_title', array(
        'label'    => __( 'Skill Title', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'skill_2_section',
        'priority' => 10,
    ));

    

    // Add Skill #2 image setting and control
    $wp_customize->add_setting( 'skill_2_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'skill_2_image', array(
        'label'    => __( 'Skill Image', 'Portfolio' ),
        'section'  => 'skill_2_section',
        'priority' => 20,
    )));


    // Add Skill #3 setting and control
    $wp_customize->add_setting( 'skill_3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'skill_3', array(
        'label'    => __( 'Skill #3', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'about_me_section',
        'priority' => 60,
    ) );

    // Add Skill #4 setting and control
    $wp_customize->add_setting( 'skill_4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'skill_4', array(
        'label'    => __( 'Skill #4', 'Portfolio' ),
        'type'     => 'text',
        'section'  => 'about_me_section',
        'priority' => 70,
    ) );
*/
$wp_customize->add_section( 'about_me_section', array(
    'title'      => __( 'About Me', 'Portfolio' ),
    'priority'   => 30,
));

// Add about myself setting and control
$wp_customize->add_setting( 'about_myself', array(
    'default'           => '',
    'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control( 'about_myself', array(
    'label'    => __( 'About Myself', 'Portfolio' ),
    'type'     => 'textarea',
    'section'  => 'about_me_section',
    'priority' => 10,
));

// Add additional about myself setting and control
$wp_customize->add_setting( 'about_myself_additional', array(
    'default'           => '',
    'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control( 'about_myself_additional', array(
    'label'    => __( 'Additional About Myself', 'Portfolio' ),
    'type'     => 'textarea',
    'section'  => 'about_me_section',
    'priority' => 20,
));

// Add skill settings and controls
for ( $i = 1; $i <= 4; $i++ ) {
    // Add skill title setting and control
    $wp_customize->add_setting( 'skill_' . $i . '_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'skill_' . $i . '_title', array(
        'label'    => sprintf( __( 'Skill #%d Title', 'Portfolio' ), $i ),
        'type'     => 'text',
        'section'  => 'about_me_section',
        'priority' => 30 + $i,
    ));

    // Add skill image setting and control
    $wp_customize->add_setting( 'skill_' . $i . '_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'skill_' . $i . '_image', array(
        'label'    => sprintf( __( 'Skill #%d Image', 'Portfolio' ), $i ),
        'section'  => 'about_me_section',
        'settings' => 'skill_' . $i . '_image',
        'priority' => 30 + $i,
    )));

}
}

add_action( 'customize_register', 'portfolio_about_me' );