  <!-- welcome to path to growth  -->
  <div class="container-fluid pad-all p-t-grow div-sections pt-lg-5">
    <div class="row">
    <div class="col-lg-10  text-center mx-auto">
        <h2>Welcome to Path To Growth</h2>
        <p class="py-3 text-lg-center text-start">
          Pathtogrowth Entrepreneurship Centre is an NGO that provide critical financial, educational, and business
          support
          services to micro, small and medium enterprises (MSMEs)to help them grow, create jobs and spur economic
          development.
          We believe entrepreneurship is a powerful tool for lifting vulnerable women and youths out of poverty in
          Africa
        </p>
      </div>
    </div>
    <div class="row gy-3 gx-5">
    <?php
      $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'featured welcome',
                    'posts_per_page' => 12,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
      <div class="col-lg-4">
        <div class="p-t-grow-item-1 text-center text-white">
         <img src="<?php echo get_post_meta($post->ID, 'image-link', true); ?>" alt="" class="mb-3">
         <?php the_title( '<h6 class="fw-bold">', '</h6>' ) ;  ?> 
        <div class="div-pt">
        <?php
             the_excerpt();
             wp_link_pages(array(
             'before' => '<div class="page-links text-white">' . esc_html__('Posts:', 'ninestars'),
             'after'  => '</div>',
              )); ?>
              </div>
          <a href="<?php echo esc_url( get_permalink() ); ?>">Read More</a>
         <div class="overlay">
         <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" loading="lazy" alt="..." class="img-fluid">
                                    <?php endif; ?>
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