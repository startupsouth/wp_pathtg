<?php


/**
 * 
 * Name:savings Archive
 * Template Name: Media page
 */

//get posts
?>
<?php get_header(); ?>


  <!-- hero section  -->
  <div class="container-fluid news div-sections hero-news">
    <div class="row justify-content-center gy-4">
      <div class="col-lg-5 pt-2">
        <h6 class="p-tag mb-3">TOP NEWS</h6>
        <h2 class="mb-4 text">Path to Growth Offers Over 2Billion in Loans</h2>
        <p class="mb-4 pe-lg-5">
          ‍Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
        </p>
        <div class="news-button">
          <button class="btn btn-loan"><a href="#">Read More</a></button>
        </div>
      </div>
      <div class="col-lg-6 text-lg-end news-img order-lg-last order-first">
        <img src="<?php echo get_template_directory_uri (); ?>/assets/images/recent-hero.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>


  <!-- read our recent news  -->
  <div class="container recent-news my-lg-5">
    <div class="row">
      <div class="col-lg-8 text-center mx-auto">
        <h2>Read our Recent News</h2>
        <p class="py-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim
        </p>
      </div>
    </div>
    <div class="row">
       <?php
      $args = array(
      'post_type'      => 'post',
       'category_name'  => 'media',
        'posts_per_page' => 12,
        );
         $query = new WP_Query($args);
         if ($query->have_posts()) :
         while ($query->have_posts()) : $query->the_post();
       ?>
      <div class="col-lg-3 tra-pro">
      <?php if (has_post_thumbnail()) : ?>
               <img src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="..." class="img-fluid mx-auto">
               <?php endif; ?>
        <?php the_title( '<h6  class="pt-2  text-start ps-5 ps-lg-0">', '</h6>' ) ;  ?> 
        <div class="p-tag-div pt-0 mt-0 ps-5 ps-lg-0">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="">
        <p style="text-align: start;" class="">
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
