<?php
/**
* Template name: Homepage Template
**/
get_header();
?>

<main>
    <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content/content-page');
        endwhile;
    ?>
</main>

<?php /** get_slider();
          *adds the main footer containing meta, search etc **/?>

<?php get_footer(); ?>
