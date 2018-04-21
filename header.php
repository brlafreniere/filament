<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title(); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <h1 id='logo'>
                <a href="<?= site_url(); ?>">
                    <?php echo str_replace(' ', '&nbsp;', bloginfo('name')); ?>
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
        <main>
