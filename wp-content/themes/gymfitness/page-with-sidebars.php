<?php
/**
 * Template Name: Page with Sidebars
 */
get_header(); ?>

<main class="container page section with-sidebar">

    <div class="page-content">
        <?php get_template_part('partials/page-content');?>
    </div>

    <?php get_sidebar(); ?>


</main>

<?php get_footer(); ?>
