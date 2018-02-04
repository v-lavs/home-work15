<?php
/**
 * panakeia Theme Customizer
 *
 * @package panakeia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function panakeia_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'panakeia_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'panakeia_customize_partial_blogdescription',
        ));
    }

//-----------footer---------
    $wp_customize->add_section('bg-footer', array(
        'title' => 'background footer',
        'background' => _('#d75d0e'),
        'background-img' => (''),
        'priority' => 130,
    ));

    $wp_customize->add_setting('bg-footer-warm', array(
        'default' => '#d75d0e',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('bg-img-footer', array(
        'default' => get_stylesheet_directory_uri() . '/assets/img/kitchen.jpg',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 'bg-footer-warm', array(
                'label' => __('background footer', 'panakeia'),
                'section' => 'bg-footer',
                'settings' => 'bg-footer-warm',
            )));

    $wp_customize->add_control( new   WP_Customize_Image_Control( $wp_customize, 'bg-footer', array(
        'label' => __('Footer background-img', 'panakeia'),
        'section' => 'bg-footer',
        'settings' => 'bg-img-footer',
    )));

//    ------------banner-------------
    $wp_customize->add_section('banner-section', array(
        'title' => 'Banner section',
//        'background-img' => (get_stylesheet_directory_uri() . '/assets/img/cafe.jpg'),
        'background-img' => (''),
        'heading-banner' => (''),
        'banner-text' => (''),
        'priority' => 80,
    ));

    $wp_customize->add_control( new   WP_Customize_Image_Control( $wp_customize, 'banner-section', array(
        'label' => __('Banner background-img', 'panakeia'),
        'section' => 'banner-section',
        'settings' => 'banner-section',
    )));

    $wp_customize->add_setting('banner-section', array(
        'default' => get_stylesheet_directory_uri() . '/assets/img/cafe.jpg',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('heading-banner', array(
        'default' => ('Integer at tortor ut magna'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('banner-text', array(
        'default' => ('finibus lobortis sed quis tellus.'),
        'transport' => 'refresh',
    ));


    $wp_customize->add_control( new   WP_Customize_Image_Control( $wp_customize, 'banner-section', array(
                'label' => __('Banner background-img', 'panakeia'),
                'section' => 'banner-section',
                'settings' => 'banner-section',
            )));

    $wp_customize->add_control( 'heading-banner', array(
        'label' => __('Heading Banner section', 'panakeia'),
        'section' => 'banner-section',
        'settings' => 'heading-banner',
        'type' => 'text',
    ));

    $wp_customize->add_control( 'banner-text', array(
        'label' => __('Heading Banner section', 'panakeia'),
        'section' => 'banner-section',
        'settings' => 'banner-text',
        'type' => 'text',
    ));

//    ---------------section news------------
    $wp_customize->add_section('section-news', array(
        'title' => 'Section news',
        'background' => _('#edeff1'),
        'title-section' => (''),
        'priority' => 90,
    ));

    $wp_customize->add_setting('bg-section-news', array(
        'default' => '#edeff1',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('title-section', array(
        'default' => ('Our news'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 'bg-section-news', array(
            'label' => __('Background section', 'panakeia'),
            'section' => 'section-news',
            'settings' => 'bg-section-news',
        )));

    $wp_customize->add_control( 'title-section', array(
        'label' => __('Title section news', 'panakeia'),
        'section' => 'section-news',
        'settings' => 'title-section',
        'type' => 'text',
    ));

//    -------------section Newsletter---------

    $wp_customize->add_section('section-newsletter', array(
        'title' => 'Section Newsletter',
        'background-img' => _('#edeff1'),
        'title-section' => (''),
        'priority' => 90,
    ));

    $wp_customize->add_setting('bg-img-section', array(
        'default' => get_stylesheet_directory_uri() . '/assets/img/kitchen.jpg',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('title-section-newsletter', array(
        'default' => ('Newsletter'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('text-section-newsletter', array(
        'default' => ('Ut arcu arcu, faucibus eu risus blandit, pulvinar viverra justo. Phasellus arcu justo, 
        ullamcorper non diam sit amet, luctus condimentum metus'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
         new   WP_Customize_Image_Control( $wp_customize, 'bg-img-section', array(
            'label' => __('Background-image section', 'panakeia'),
            'section' => 'section-newsletter',
            'settings' => 'bg-img-section',
        )));

    $wp_customize->add_control( 'title-section-newsletter', array(
        'label' => __('Title section', 'panakeia'),
        'section' => 'section-newsletter',
        'settings' => 'title-section-newsletter',
        'type' => 'text',
    ));

    $wp_customize->add_control( 'text-section-newsletter', array(
        'label' => __('Text section', 'panakeia'),
        'section' => 'section-newsletter',
        'settings' => 'text-section-newsletter',
        'type' => 'text',
    ));

}

add_action('customize_register', 'panakeia_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function panakeia_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function panakeia_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function panakeia_customize_preview_js()
{
    wp_enqueue_script('panakeia-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'panakeia_customize_preview_js');
