  <!-- our supporter  -->
  <div class="container support div-sections py-lg-5">
    <p class="py-3">our <br> Supporters</p>
    <div class="row gy-3 ms-lg-4">
    <?php
      $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'featured support',
                    'posts_per_page' => 9,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
      <div class="col-lg-2 col-6">
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" loading="lazy" alt="...">
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