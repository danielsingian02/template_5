<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 10,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( '© Copyright 2021 HOA Management ', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);

$wp_customize->add_setting( 'Footer_text',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum nunc turpis arcu dui cursus habitasse elit tempus nisi.', 'Footer_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Footer_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Footer description text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);


//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'banner_section', 
    array(
        'title'         => __( 'Banner Section Options', 'banner_section' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);


$wp_customize->add_setting( 'banner_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', 
    array(
        'priority'    => 40,
        'section'     => 'banner_section',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as banner Image',
    ) 
));

//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'second_section_heading',
    array(
        'default'           => __( 'Welcome To Our Home', 'second_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'second_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum nunc turpis arcu dui cursus habitasse elit tempus nisi. Id nunc feugiat id vel sollicitudin aenean. Volutpat, id viverra elit nisi. Pharetra, quisque enim neque justo, ac venenatis in vitae. Eleifend elementum quis accumsan risus dictum ornare augue at eu. Accumsan, faucibus morbi amet nunc. Tincidunt sed nulla tincidunt sit eu.', 'second_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);

$wp_customize->add_setting( 'top_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset2.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'top_image', 
    array(
        'priority'    => 40,
        'section'     => 'second_section_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'bottom_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset3.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bottom_image', 
    array(
        'priority'    => 40,
        'section'     => 'second_section_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'second_section_button_text',
    array(
        'default'           => __( 'News & Announcements ', 'second_section_button_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 1 text',
        'description' => 'Text put here will be shown in second sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'second_section_button_url',
    array(
        'default'           => __( '#', 'second_section_button_url' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_url', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 1 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'second_section_button_text2',
    array(
        'default'           => __( 'Upcoming Events ', 'second_section_button_text2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_text2', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 2 text',
        'description' => 'Text put here will be shown in second sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'second_section_button_url2',
    array(
        'default'           => __( '#', 'second_section_button_url2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_url2', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 2 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'second_section_button_text3',
    array(
        'default'           => __( ' Board Meeting Notice & Agenda ', 'second_section_button_text3' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_text3', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 3 text',
        'description' => 'Text put here will be shown in second sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'second_section_button_url3',
    array(
        'default'           => __( '#', 'second_section_button_url3' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_url3', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 3 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'second_section_button_text4',
    array(
        'default'           => __( ' Member Announcements ', 'second_section_button_text4' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_text4', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 4 text',
        'description' => 'Text put here will be shown in second sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'second_section_button_url4',
    array(
        'default'           => __( '#', 'second_section_button_url4' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_url4', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 4 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'second_section_button_text5',
    array(
        'default'           => __( ' Site Search ', 'second_section_button_text5' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_text5', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 5 text',
        'description' => 'Text put here will be shown in second sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'second_section_button_url5',
    array(
        'default'           => __( '#', 'second_section_button_url5' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_url5', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 5 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);
//button
$wp_customize->add_setting( 'second_section_button_text6',
    array(
        'default'           => __( ' Documents ', 'second_section_button_text6' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_text6', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 6 text',
        'description' => 'Text put here will be shown in second sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'second_section_button_url6',
    array(
        'default'           => __( '#', 'second_section_button_url6' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_button_url6', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Button 6 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);


//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'third_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'map',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset4.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'map', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));
$wp_customize->add_setting( 'third_heading',
    array(
        'default'           => __( 'We are One', 'third_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'third_description',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum nunc turpis arcu dui cursus habitasse elit tempus nisi. Id nunc feugiat id vel sollicitudin aenean. Volutpat, id viverra elit nisi. Pharetra, quisque enim neque justo, ac venenatis in', 'third_description' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_description', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

}
?>