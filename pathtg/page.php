<?php
/**
 * Template for dispalying all the pages.
 */
get_header();
?>

<?php get_template_part( 'assets/template-parts/header/content', 'page-hero' ); ?>

        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'assets/template-parts/pages/content', 'page' );
        endwhile;
        ?>
        

<?php get_template_part( 'assets/template-parts/misc/content', 'sponsors' ); ?>
<?php get_template_part( 'assets/template-parts/misc/content', 'newsletter' ); ?>
<?php
get_footer(); 