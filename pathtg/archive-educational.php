<?php


/**
 * 
 * Name:savings Archive
 * Template Name: educational page
 */

//get posts
?>
<?php get_header(); ?>

<!-- hero section  -->
<div class="container div-sections hero pt-5">
  <div class="row justify-content-center gy-4">
    <div class="col-lg-6 pt-2 pt-lg-5 order-lg-first order-last">
      <span class="h6-tag mb-3">What we do</span>
      <h2 class="mb-4 text pt-3 ps-0">Educational <br class="d-none d-lg-block"> Trainings</h2>
      <p class="mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. 
      </p>
      <div class="news-button">
        <button class="btn btn-partner"><a href="#">Contact Us </a></button>
      </div>
    </div>
    <div class="col-lg-6 text-lg-end news-img">
      <img src="<?php echo get_template_directory_uri (); ?>/assets/images/edu-img.png" alt="" class="img-fluid">
    </div>
  </div>
</div>

<!-- upcoming entrepreneur section  -->
<div class="container div-sections">
    <div class="row gx-lg-5 justify-content-center gy-5">
        <div class="col-lg-6">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/entr-1.png" alt="" class="img-fluid">
          <div class="d-lg-flex mt-3">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/entr-2.png" alt="" class="img-fluid second-img me-lg-3">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/entr-3.png" alt="" class="img-fluid third-img">
          </div>
        </div>
        <div class="col-lg-5 entre-item order-first order-lg-last">
            <h6 class="pb-1 small">Upcoming training</h6>
            <h4>Entrepreneurship</h4>
            <p class="py-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. 
            </p>
            <div class="d-flex mb-3" style="gap: 50px;">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/receipt-edit.svg" alt="">
                <div class="text">
                    <h6 class="small text-dark text-capitalize"><span style="font-weight: 600;">Shoemaking</span></h6>
                  <small>One line description</small>                </div>
            </div>
            <div class="d-flex mb-lg-5" style="gap: 50px;">
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/receipt-edit.svg" alt="">
                <div class="text">
                    <h6 class="small text-dark text-capitalize" ><span style="font-weight: 600;">Carpentry</span></h6>
                  <small>One line description</small>                </div>
            </div>
            <a href="#" style="font-weight: 700;  color: navy;" >Contact us for more information</a>
        </div>
    </div>
</div>

<!-- our training program section  -->
<div class="container div-sections training-program">
    <div class="row">
        <div class="col-lg-7">
          <h2 class="py-4 fw-bold">Some of our training programs </h2>
        </div>
      </div>
      <div class="row">
      <?php
      $args = array(
      'post_type'      => 'post',
      'category_name'  => 'training programs',
      'posts_per_page' => 12,
        );
         $query = new WP_Query($args);
          if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
          ?>
        <div class="col-lg-3 tra-pro">
        <?php if (has_post_thumbnail()) : ?>
               <img src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="..." class="img-fluid">
               <?php endif; ?>
          <?php the_title( '<h6  class="py-2 fw-bolder">', '</h6>' ) ;  ?>
          <a href="<?php echo esc_url( get_permalink() ); ?>"> 
          <p class="text-lg-start my-2">
          <?php
                  the_excerpt();
                   wp_link_pages(array(
                   'before' => '<div class="page-links">' . esc_html__('Posts:', 'ninestars'),
                    'after'  => '</div>',
                    ));
               ?>
          </p>
         </a>
        </div>
        <?php
       endwhile;
       wp_reset_postdata();
        else :
        echo '<p>No posts found.</p>';
        endif;
        ?>
      </div>
</div>

 <?php get_template_part('assets/template-parts/misc/content', 'access');?>
     <?php get_footer(); ?>