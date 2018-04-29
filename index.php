<?php get_header(); ?>

<?php while (have_posts()) { ?>
    <?php the_post(); ?>

    <?php require(dirname(__FILE__) . "/_post_template.php"); ?>
    
<?php } ?>

<section style="display: flex; justify-content: space-between; margin: 50px 0px;">
    <span><?php echo previous_posts_link('&larr; Newer posts'); ?></span>
    <span><?php echo next_posts_link('Older posts &rarr;'); ?></span>
</section>

<?php get_footer(); ?>
