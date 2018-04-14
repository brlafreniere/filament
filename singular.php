<?php get_header(); ?>

<article class='content-box'>
    <?php the_post(); ?>
    <header>
        <div style='display: none;'>
            <h2><?= get_the_title(); ?></h2>
        </div>
    </header>
    <div>
        <?php the_content(); ?>
    </div>
    <footer>
        <?php comments_template(); ?>
    </footer>
</article>

<?php get_footer(); ?>
