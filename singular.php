<?php get_header(); ?>

<?php the_post(); ?>

<?php require(dirname(__FILE__) . "/_post_template.php"); ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
