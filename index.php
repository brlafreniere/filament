<?php get_header(); ?>

<?php while (have_posts()) { ?>
    <?php the_post(); ?>

    <div class='post'>
        <?php require(dirname(__FILE__) . "/_post_template.php"); ?>
    </div>
<?php } ?>

<?php get_footer(); ?>
