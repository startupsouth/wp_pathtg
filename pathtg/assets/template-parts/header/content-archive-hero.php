
<!-- hero_section-->
<div class="div_section mb-0 pb-0 inner-hero-section-page container-fluid"  style="background-image:linear-gradient( rgba(10, 30, 54, 0.8), rgba(10, 30, 54, 0.8)), url(' <?php if (has_post_thumbnail()) {echo get_the_post_thumbnail_url();} else { echo get_template_directory_uri() . '/assets/images/hero-section-bg.png';} ?>'); background-size: cover; background-position: top; background-repeat: no-repeat;" >
<div class="row">
  <div class="col-lg-12  col-md-12 text-hero">
  <div class="text">
          <?php   single_cat_title( '<h1 class="text-white">', '</h1>' ); ?>
        </div>
  </div>
</div>
  </div>

 
 
 


  

