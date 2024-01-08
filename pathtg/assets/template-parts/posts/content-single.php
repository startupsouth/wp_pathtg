<?php
/**
 * Template part to display page content in single.php.
 */
?>

<div class="col-lg-12">

<span class="text"> <?php echo single_cat_title(); ?> </span>
   
   <h2 class=""> <?php the_title(); ?> </h2>
   <ul class="d-lg-flex p-0 text-icon my-lg-4" style="gap: 30px;">
            <li><span><i class="fa fa-user me-3"></i> <?php the_author(); ?></span></li>
            <li><span><i class="fa-sharp fa-regular fa-calendar-days me-3"></i> <?php echo get_the_date('F j, Y'); ?></span></li>
            <!-- <li><span><i class="fa-sharp fa-regular fa-eye me-3"></i>23 Views</span></li> -->
        </ul>
   <?php 
       /**
        * Page Thumbnail.
        */
       if ( has_post_thumbnail() ) :
           the_post_thumbnail( 'full', array('class' => 'img-fluid mb-4') ); // full, large, medium, custom size
       endif; 
       
           the_content();
       ?>
</div>


