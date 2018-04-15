<?php

class Filament {
    public static function enqueue_scripts() {
        wp_enqueue_style('main-style', get_stylesheet_uri());
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', ['jquery'], false, true);
    }
    public static function register_menus() {
        register_nav_menu('header-menu', __('Header Menu'));
    }
    public static function load() {
        add_theme_support('post-thumbnails');

        add_action('wp_enqueue_scripts', array(get_called_class(), 'enqueue_scripts'));
        add_action('init', array(get_called_class(), 'register_menus'));
    }
}

Filament::load();

?>
