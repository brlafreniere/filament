<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />

        <title><?php wp_title(); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <h1 id='logo'>
                <a href="<?= site_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <nav id='header-nav'>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_id' => 'header-menu',
                        'menu_class' => 'horizontal-menu',
                        'container' => false,
                    ));
                ?>
            </nav>
        </header>
        <hr />
        <main>
