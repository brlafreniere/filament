<?php get_header(); ?>

<div class='grid'>
    <?php while (have_posts()) { ?>
        <?php the_post(); ?>

        <section class='content-box'>
            <header>
                <h2><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h2>
            </header>
            <div>
                <?= get_the_excerpt(); ?>
            </div>
            <footer>
                <div style='display: inline-block; color: #9b9b9b;'><?= get_the_date(); ?></div>
                <div style='display: inline-block; float: right;'>
                    <a href="<?= get_the_permalink(); ?>">Read More &rarr;</a>
                </div>
                <div style='clear: both;'></div>
            </footer>
        </section>
    <?php } ?>
</div>

<?php get_footer(); ?>
