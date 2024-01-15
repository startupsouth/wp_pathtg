  <!-- news section  -->
  <div class="container-fluid pad-all news div-sections">
    <div class="row gy-4">
    <?php
      $args = array(
      'post_type'      => 'post',
       'category_name'  => 'featured new',
        'posts_per_page' => 3,
        );
         $query = new WP_Query($args);
         if ($query->have_posts()) :
         while ($query->have_posts()) : $query->the_post();
       ?>
      <div class="col-lg-6 pt-5">
        <h6 class="p-tag mb-3">IN THE NEWS</h6>
        <?php the_title( '<h2 class="mb-4">', '</h2>' ) ;  ?> 
        <p>
        <?php
                  the_excerpt();
                   wp_link_pages(array(
                   'before' => '<div class="page-links">' . esc_html__('Posts:', 'ninestars'),
                    'after'  => '</div>',
                    ));
               ?>
        </p>
        <!-- <p class="mb-5 pb-lg-3">
          ‍Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
          faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
        </p> -->
        <div class="news-button ms-4 ms-lg-0">
          <button class="btn btn-partner"><a href="<?php echo esc_url( get_permalink() ); ?>">See More</a></button>
        </div>
      </div>
      <div class="col-lg-6 text-lg-end order-lg-last order-first">
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