<?php

// Add Posrtfolio Skills Section Functions
// Register the customizer section
function my_customizer_sections($wp_customize) {
    $wp_customize->add_section('my_skills_section', array(
        'title' => 'My Skills',
        'priority' => 30,
    ));
}
add_action('customize_register', 'my_customizer_sections');

// Add customizer settings for skills
function my_customizer_settings($wp_customize) {
    // Add New Button
    $wp_customize->add_setting('add_new_skills', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('add_new_skills', array(
        'label' => 'Add New Skill',
        'section' => 'my_skills_section',
        'type' => 'button',
        'button_label' => 'Add New',
        'button_attrs' => array(
            'id' => 'add-new-skill',
        ),
    ));

    // Dynamic skills
    for ($i = 1; $i <= 20; $i++) {
        $wp_customize->add_setting('skill' . $i . '_title', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('skill' . $i . '_title', array(
            'label' => 'Skill ' . $i . ' Title',
            'section' => 'my_skills_section',
            'type' => 'text',
            'input_attrs' => array(
                'class' => 'skill-title',
                'data-index' => $i,
            ),
        ));

        $wp_customize->add_setting('skill' . $i . '_level', array(
            'default' => '0',
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_control('skill' . $i . '_level', array(
            'label' => 'Skill ' . $i . ' Level',
            'section' => 'my_skills_section',
            'type' => 'number',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'class' => 'skill-level',
                'data-index' => $i,
            ),
        ));
    }
}
add_action('customize_register', 'my_customizer_settings');

