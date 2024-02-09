<?php
/**
 * Contains footer
 */
?>

 <!-- footer section  -->
 <footer class="p-5 ps-3 text-white">
    <div class="container-fluid pad-all">
      <div class="row justify-content-center pb-5">
        <div class="col-lg-4">
          <img src="<?php echo get_template_directory_uri (); ?>/assets/images/ptg-logo.png" alt="">
          <p class="py-3 tex">
            Lorem ipsum dolor amet, consectetur adipiscing elit. Eget nisl nunc quam ac sed turpis volutpat. Cursus sed massa non nisi, placerat.
          </p>
          <ul class="p-0 d-flex" style="gap: 40px;">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </ul>
        </div>
        <div class="col-lg-2 quick-link">
          <h6 class="mb-4 ps-0">Quick Links</h6>
          <ul class="p-0">
          <?php
                if (has_nav_menu('quick_link')) :
                    wp_nav_menu(array(
                        'theme_location' => 'quick_link',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav p-0 mb-2 mb-lg-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'pathtg')
                    );
                endif;
                ?>
            <!-- <li><a href="#">Our Vision </a></li>
            <li><a href="#">Our Mision </a></li>
            <li><a href="#">Our Impact </a></li>
            <li><a href="#">Press </a></li>
            <li><a href="#">Careers </a></li> -->
          </ul>
        </div>
        <div class="col-lg-3 services">
          <h6 class="mb-4 ps-0">Services</h6>
          <ul class="p-0">
          <?php
                if (has_nav_menu('services')) :
                    wp_nav_menu(array(
                        'theme_location' => 'services',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav p-0 mb-2 mb-lg-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'pathtg')
                    );
                endif;
                ?>
            <!-- <li><a href="#">Loans & Savings</a></li>
            <li><a href="#">Financial Education</a></li>
            <li><a href="#">Economic Empowerment </a></li>
            <li><a href="#">MSME Incubation Hub </a></li>
            <li><a href="#">MSME Training</a></li> -->
          </ul>
        </div>
        <div class="col-lg-3 reach">
          <h6 class="mb-4 ps-0">Reach Us</h6>
          <ul class="p-0">
            <li class="d-lg-flex">
              <span>
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/Message.svg" alt="" class="me-3">
                </span>
                <small>
            <a href="#">
                hello@pathtogrowth.com
              </a>
              </small>
            </li>
            <li class="py-2">
              <span>
                <img src="<?php echo get_template_directory_uri (); ?>/assets/images/phone.svg" alt="" class="me-3">
            </span>
              <small> +234 90765 43210</small>
            </li>
            <li class="d-flex">
              <span>
              <img src="<?php echo get_template_directory_uri (); ?>/assets/images/map.svg" alt="" class="me-3 mt-4">
              </span>
              <small>
                44 Faulks Road, Ariaria Market Road, Aba, Abia State, Nigeria</small>
              </li>
          </ul>
        </div>
      </div>
      <div class="row justify-content-center terms">
          <div class="col-lg-6">
            <p class="tex">© 2024 Path to Growth. All rights reserved</p>
          </div>
          <div class="col-lg-6 text-lg-end terms-item">
            <span><a href="#">Terms & Conditions</a>  <span class="dot">|</span> </span>
            <span><a href="#">Privacy Policy</a> <span class="dot">|</span> </span>
            <span><a href="#">Sitemap</a>  <span class="dot">|</span> </span>
            <span><a href="#">Disclaimer</a></span>
          </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  <script>
     barMenu = (icons) => icons.classList.toggle('fa-times');
  </script>

</body>

 
</html>

