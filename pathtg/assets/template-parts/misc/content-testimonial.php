  <!-- testimonial section / carousel  -->
  <div class="container-fluid testimonial div-sections">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
      <?php
      $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'featured testimonial',
                    'posts_per_page' => 9,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
        <div class="carousel-item <?php echo ($query->current_post === 0) ? 'active' : ''; ?>">
            <div class="container">
            <div class="row">
              <div class="col-lg-8 icon-text">
                  <img src="<?php echo get_template_directory_uri (); ?>/assets/images/icon-test.png" alt="">
                  <a href="<?php the_permalink(); ?>" target="_blank">
                  <p class="p-tag mb-5">
                  <?php
                    the_excerpt();
                    wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Posts:', 'ninestars'),
                     'after'  => '</div>',
                      ));
                  ?>
                  </p>
</a>
                 <?php the_title( '<h6 class="fw-bold">', '</h6>' ) ;  ?> 
                  <span class="my-2"><?php echo get_post_meta($post->ID, 'text', true); ?></span>
              </div>
              <div class="col-lg-4">
              <?php if (has_post_thumbnail()) : ?>
               <img src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="..." class="img-fluid">
                <?php endif; ?>
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
      <div class="carousel-buttons">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
    </div>
  </div>