<?php
function mdgm_customizer( $wp_customize ) {
    
    //HEADER CUSTOMIZE
    $wp_customize->add_section(
        'header_section',
        array(
            'title' => 'Header section',
            'priority' => 35,
        )
    );

    $wp_customize->add_setting(
        'header_type',
        array(
            'default' => 'default',
        )
    );

    $wp_customize->add_control(
        'header_type',
        array(
            'type' => 'radio',
            'label' => 'Header type',
            'section' => 'header_section',
            'choices' => array(
                'default' => 'Default',
                'sticky' => 'Sticky',
                'overlay' => 'Overlay',
            ),
        )
    );
    
    
    $wp_customize->add_section(
        'home_section',
        array(
            'title' => 'Home section',
            'priority' => 35,
        )
    );
    
    $wp_customize->add_setting(
        'slider_type',
        array(
            'default' => 'default',
        )
    );

    $wp_customize->add_control(
        'slider_type',
        array(
            'type' => 'radio',
            'label' => 'Slider type',
            'section' => 'home_section',
            'choices' => array(
                'default' => 'Default',
                'sticky' => 'Sticky',
                'overlay' => 'Overlay',
            ),
        )
    );
    
    $wp_customize->add_setting('team');
    
    $wp_customize->add_control(
        'team',
        array(
            'type' => 'checkbox',
            'label' => 'Hide team',
            'section' => 'home_section',
        )
    );
    
    $wp_customize->add_setting('features');
    
    $wp_customize->add_control(
        'features',
        array(
            'type' => 'checkbox',
            'label' => 'Hide features',
            'section' => 'home_section',
        )
    );
    
    $wp_customize->add_setting('clients');
    
    $wp_customize->add_control(
        'clients',
        array(
            'type' => 'checkbox',
            'label' => 'Hide clients',
            'section' => 'home_section',
        )
    );
    
    $wp_customize->add_setting('revs');
    
    $wp_customize->add_control(
        'revs',
        array(
            'type' => 'checkbox',
            'label' => 'Hide reviews',
            'section' => 'home_section',
        )
    );
    
    $wp_customize->add_setting('news');
    
    $wp_customize->add_control(
        'news',
        array(
            'type' => 'checkbox',
            'label' => 'Hide news',
            'section' => 'home_section',
        )
    );
    

} //END function mdgm_customizer


add_action( 'customize_register', 'mdgm_customizer' );
