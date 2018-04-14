<?php

class BlaineFreelanceTheme {
    public static function enqueue_scripts() {
        wp_enqueue_style('main-style', get_stylesheet_uri());
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', ['jquery'], false, true);
    }
    public static function register_menus() {
        register_nav_menu('header-menu', __('Header Menu'));
    }
    public static function register_customizer_objects($wp_customize) {
        $wp_customize->add_panel('theme-options-panel', array(
            'title' => __('Blaine Freelance Theme Options'),
            'priority' => 0
        ));
        $wp_customize->add_section('general-options', array(
            'title' => __('General'),
            'priority' => 0,
            'panel' => 'theme-options-panel'
        ));
        $wp_customize->add_section('site-banner', array(
            'title' => __('Site Banner'),
            'priority' => 0,
            'panel' => 'theme-options-panel'
        ));

        $wp_customize->add_setting('site-banner-image', array(
            'default' => ''
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'site-banner-image',
                array(
                    'label' => __('Site Banner Image', 'blainefreelance-theme'),
                    'section' => 'site-banner',
                    'settings' => 'site-banner-image',
                )
            )
        );



        $wp_customize->add_setting('site-banner-overlay-color', array(
            'default' => '#000000'
        ));
        $wp_customize->add_control(
            new WP_Customize_Color_Control( 
                $wp_customize, 
                'site-banner-overlay-color', 
                array(
                    'label' => __('Site Banner Overlay Color', 'mytheme'),
                    'section' => 'site-banner',
                    'settings' => 'site-banner-overlay-color',
                )
            ) 
        );



        $wp_customize->add_setting('site-banner-overlay-opacity', array(
            'default' => '0.8'
        ));
        $wp_customize->add_control('site-banner-overlay-opacity', array(
            'type' => 'text',
            'label' => 'Site Banner Overlay Opacity',
            'section' => 'site-banner',
        ));



        $wp_customize->add_setting('content-width', array(
            'default' => '1000px'
        ));
        $wp_customize->add_control('content-width', array(
            'type' => 'text',
            'label' => 'Content Width',
            'section' => 'general-options',
        ));



        $wp_customize->add_setting('background-image', array(
            'default' => ''
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'theme-background-image',
                array(
                    'label' => __('Background Image', 'blainefreelance-theme'),
                    'section' => 'general-options',
                    'settings' => 'background-image',
                )
            )
        );
    }
    public static function load() {
        add_theme_support('post-thumbnails');

        require(get_stylesheet_directory() . '/lib/theme_options.php');
        require(get_stylesheet_directory() . '/lib/custom-fields-meta-box.php');

        add_action('wp_enqueue_scripts', array(get_called_class(), 'enqueue_scripts'));
        add_action('init', array(get_called_class(), 'register_menus'));
        add_action('customize_register', array(get_called_class(), 'register_customizer_objects'));
    }
}

BlaineFreelanceTheme::load();

?>
