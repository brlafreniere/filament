<?php

function get_page_header_image() {
    $banner_url = get_the_post_thumbnail_url();
    if (! $banner_url) {
        if (is_home() && get_option('page_for_posts')) {
            $blog_page_id = get_option('page_for_posts');
            $banner_url = get_the_post_thumbnail_url($blog_page_id);
        } else {
            $banner_url = get_theme_mod('site-banner-image');
        }
    }
    return $banner_url;
}

function improved_get_the_ID() {
    if (is_home()) {
        if (get_option('show_on_front') == 'page') {
            $page_id = get_option('page_for_posts');
        }
    } else {
        $page_id = get_the_ID();
    }

    return $page_id;
}

function get_header_text() {
    if (is_home()) {
        if (get_option('show_on_front') == 'page') {
            $page_id = get_option('page_for_posts');
            $header_text = get_post_meta($page_id, 'header-text', true);
            return $header_text;
        }
    } else if (is_front_page()) {
        return get_bloginfo('description');
    } else if (is_single()) {
        return get_the_title();
    } else {
        $page_id = get_the_ID();
        $header_text = get_post_meta($page_id, 'header-text', true);
        return $header_text;
    }
}

?>
