<?php
/**
 * Contains the header.
 */
?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
  <!-- header/navbar-section  -->
  <header>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white">
      <div class="container-fluid pad-all">
      <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if (has_custom_logo()) {
                printf(
                    '<a href="%1$s" class="navbar-brand"><img src="%2$s"/></a>',
                    esc_url(home_url()),
                    esc_url($logo[0])
                );
            } else {
                echo bloginfo('Jerry Jake is coming');
            }
            ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa fa-bars" onclick="barMenu(this)"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active-nav" href="html/about-us.html" role="button" aria-expanded="false">
                About Us
              </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                  Services <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu text-left" aria-labelledby="navbarDropdown">
                  <li><a href="html/what-we-do.html">Savings</a></li>
                  <li><a href="html/what-we-do-education.html">Educational</a></li>
                </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                Projects
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link -toggle" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
                Media <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu text-left" aria-labelledby="navbarDropdown">
                <li><a href="html/recent-news.html">Recent News</a></li>
                <li><a href="html/singles.html">Read More</a></li>
              </ul>
          </li>
            <li class="nav-item">
              <a class="nav-link -toggle" href="html/contact.html" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                Contact Us
              </a>
            </li>
          </ul> -->

          <?php
                if (has_nav_menu('navbar')) :
                    wp_nav_menu(array(
                        'theme_location' => 'navbar',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
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
        </div>
      </div>
    </nav>
  </header>