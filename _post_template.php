<article class='post'>
    <header>
        <h2>
            <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
        </h2>
    </header>
    <div>
        <?php the_content(); ?>
    </div>
    <footer>
        <div style='display: inline-block; color: #9b9b9b; font-size: 14px;'>
            <i class="far fa-calendar-alt"></i> <?= get_the_date(); ?>
        </div>
    </footer>
</article>
