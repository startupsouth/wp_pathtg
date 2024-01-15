<?php


/**
 * 
 * Name:About Archive
 * Template Name: About-page
 */

//get posts
?>
<?php get_header(); ?>

<div class="container-fluid-xxl pad-all hero-section-about div-sections">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <h6 class="text mb-4">About Us</h6>
        <h2>
          We exist to provide critical financial & business support to MSMEs
        </h2>
      </div>
      <div class="col-lg-7">
        <h6 class="pt-5 mt-lg-4 mb-3">
          From providing micro lending services to MSMEs, we have gone even further to provide financial and business
          eduction to ensure that you grow
        </h6>
        <p class="pt-0 ps-lg-0 ps-3">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Suspendisse
          varius enim elementum tristique.
        </p>
      </div>
    </div>
  </div>

  <!-- about image section  -->
  <div class="container-fluid pad-all div-sections py-0 about-section-img">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <img src="<?php echo get_template_directory_uri (); ?>/assets/images/about-img.png" alt="" class="">
      </div>
    </div>
  </div>

  <!-- mission / vision section  -->
  <div class="container-fluid mission-vision div-sections pt-4 pt-lg-5">
    <div class="row justify-content-center pt-lg-4">
      <div class="col-lg-6 pt-0  mission-vision-item">
        <span class="h6-tag">our mission</span>
        <h6 class="text py-3">
          To enhance economic opportunity for the poor through access to financial and business support
          services, enterprise education
        </h6>
        <p class="py-3 ps-lg-0">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
          faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
        </p>
      </div>
      <div class="col-lg-6 pt-0  mission-vision-item">
        <span class="h6-tag">our Vision</span>
        <h6 class="text py-3">
          Our core vision is to be the leading civil society organization that handholds women and youth from poverty to
          thriving business owners in Africa
        </h6>
        <p class="py-3 p-lg-3 ps-lg-0">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
          faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
        </p>
      </div>
    </div>
  </div>


  <!-- objective section  -->
  <div class="container-fluid pad-all div-sections">
    <h2 class="py-4">Our Objectives</h2>
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <span class="h6-tag"> Monetary Impact</span>
        <p class="py-3 ps-lg-0 p-lg-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
        </p>
      </div>
      <div class="col-lg-4">
        <span class="h6-tag">Social Impact</span>
        <p class="py-3 ps-lg-0 p-lg-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
        </p>
      </div>
      <div class="col-lg-4">
        <span class="h6-tag">Business Impact</span>
        <p class="py-3 ps-lg-0 p-lg-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
          Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
        </p>
      </div>
    </div>
  </div>


  <!-- key partner section  -->
  <div class="container-fluid pad-all div-sections">
    <div class="row justify-content-center">
      <div class="col-lg-3">
        <h2>Our Key Partners</h2>
      </div>
      <div class="col-lg-9 pt-3">
        <div class="row gy-4">
        <?php
      $args = array(
      'post_type'      => 'post',
       'category_name'  => 'featured key-partners',
        'posts_per_page' => 12,
        );
         $query = new WP_Query($args);
         if ($query->have_posts()) :
         while ($query->have_posts()) : $query->the_post();
       ?>
          <div class="col-lg-3 col-6">
          <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="..." class="img-fluid">
         <?php endif; ?>
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
    </div>
  </div>


  <!-- team section  -->
  <div class="container-fluid pad-all team div-sections">
    <h2 class="text-center py-4">Our Team</h2>
    <div class="row gy-5 gx-lg-5">
    <?php
      $args = array(
      'post_type'      => 'post',
      'category_name'  => 'featured team',
      'posts_per_page' => 8,
        );
         $query = new WP_Query($args);
          if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
          ?>
      <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-5">
            <?php if (has_post_thumbnail()) : ?>
               <img src="<?php the_post_thumbnail_url();?>" loading="lazy" alt="..." class="img-fluid img-top">
               <?php endif; ?>
            </div>
            <div class="col-lg-7 card-body text-lg-start">
              <?php the_title( '<h6  class="h6-tag card-title">', '</h6>' ) ;  ?> 
              <span><?php echo get_post_meta($post->ID, 'team', true); ?></span>
             <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-lg-start">
             <p class="card-text">
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


