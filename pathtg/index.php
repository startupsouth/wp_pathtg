<?php
/* *
 * The main template file. */

get_header();
?>


   <?php 
   get_template_part( 'assets/template-parts/header/content', 'home-hero' );
   get_template_part('assets/template-parts/misc/content', 'welcome');
   get_template_part('assets/template-parts/misc/content', 'impact');
   get_template_part('assets/template-parts/misc/content', 'benefit');
   get_template_part('assets/template-parts/misc/content', 'testimonial');
   get_template_part('assets/template-parts/misc/content', 'support');
   get_template_part('assets/template-parts/misc/content', 'news');
   get_template_part('assets/template-parts/misc/content', 'access');
   ?>

    
<?php get_footer(); ?>