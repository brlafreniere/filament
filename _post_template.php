<section>
    <header>
        <h2>
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h2>
        <div style='display: inline-block; color: #9b9b9b;'>
            <?= get_the_date(); ?>
        </div>
    </header>
    <div>
        <?php the_content(); ?>
    </div>
    <footer>
    </footer>
</section>
