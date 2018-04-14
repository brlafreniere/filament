<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />

        <title><?php wp_title(); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <style>
            body {
                background-image: url(<?= get_theme_mod('background-image'); ?>);
            }
            #site-banner {
                background-image: url(<?= get_page_header_image(); ?>);
                background-position: <?= get_post_meta(improved_get_the_ID(), 'banner-background-position', true) ?? null ?: 'center'; ?>;
            }
            #site-banner-overlay {
                background-color: <?= get_theme_mod('site-banner-overlay-color') ?? '#000000'; ?>;
                opacity: <?= get_theme_mod('site-banner-overlay-opacity') ?? '0.5'; ?>;
            }
            #site-banner p {
                width: <?= get_theme_mod('content-width'); ?>;
            }
            main {
                width: <?= get_theme_mod('content-width'); ?>;
            }
            #main-header-container {
                width: <?= get_theme_mod('content-width'); ?>;
            }
			body > footer > .wrapper {
                width: <?= get_theme_mod('content-width'); ?>;
			}
        </style>

        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <div id='main-header-container'>
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
            </div>
        </header>
        <?php if (get_theme_mod('site-banner-image') != '') { ?>
        <div id='site-banner'>
            <p>
                <?= get_header_text(); ?>
            </p>
            <div id='site-banner-overlay'></div>
        </div>
        <?php } ?>
        <main>
