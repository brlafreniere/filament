<?php

class Filament {
    public static function enqueue_scripts() {
        wp_enqueue_style('main-style', get_stylesheet_uri());
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', ['jquery'], false, true);
    }
    public static function register_menus() {
        register_nav_menu('header-menu', __('Header Menu'));
    }
    public static function register_customizer($customizer) {
        $customizer->add_panel('general_options', [
            'title' => 'General Theme Options',
            'priority' => 0
        ]);
        $customizer->add_section('general_options', [
            'title' => 'Copyright',
            'panel' => 'general_options'
        ]);

        $customizer->add_setting('copyright_text', []);
        $customizer->add_control('copyright_text', [
            'label' => 'Copyright Text',
            'section' => 'general_options',
            'type' => 'text',
        ]);
    }
    public static function load() {
        add_theme_support('post-thumbnails');

        add_action('wp_enqueue_scripts', array(get_called_class(), 'enqueue_scripts'));
        add_action('init', array(get_called_class(), 'register_menus'));
        add_action('customize_register', array(get_called_class(), 'register_customizer'));
    }
}

Filament::load();

?>
