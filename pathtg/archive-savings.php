<?php


/**
 * 
 * Name:savings Archive
 * Template Name: savings page
 */

//get posts
?>
<?php get_header(); ?>

  <!-- hero section  -->
  <div class="container div-sections hero pt-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 pt-2 pt-lg-5 order-lg-first order-last">
        <span class="h6-tag mb-3">What we do</span>
        <h2 class="mb-4 text pt-3 ps-0">Path to Growth Savings & Loans</h2>
        <p class="mb-4">
          ‍Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
        </p>
        <div class="news-button">
          <button class="btn btn-loan"><a href="#">Apply for Loan</a></button>
        </div>
      </div>
      <div class="col-lg-6 text-lg-end news-img">
        <img src="<?php echo get_template_directory_uri (); ?>/assets/images/what-we-do.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>


  <!-- providing loan services  -->
  <div class="container providing-loan">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center py-5">
        <h2>Providing loan services to <br> those who need it</h2>
        <p class="py-3">
          Pathtogrowth Entrepreneurship Centre is an NGO that provide critical financial, educational, and business
          support
          services to micro, small and medium enterprises (MSMEs)to help them grow, create jobs and spur economic
          development.
          We believe entrepreneurship is a powerful tool for lifting vulnerable women and youths out of poverty in
          Africa
        </p>
      </div>
      <div class="col-lg-10">
        <div class="row justify-content-center gx-lg-5 d-lg-flex" style="gap: 2em ;">
          <div class="col-lg-4">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/loan-amt.png" alt="" class="img-fluid loan-im">
          </div>
          <div class="col-lg-6">
            <h4 class="pb-2">How it works</h4>
            <h6 class="ps-0"><span class="me-3">1.</span>Select loan amount</h6>
            <p class="ms-lg-4 ps-lg-3 py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere
              libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="row justify-content-center gx-lg-5 d-lg-flex" style="gap: 2em ;">
          <div class="col-lg-4">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/apply-loan-img.png" alt="" class="img-fluid loan-img">
          </div>
          <div class="col-lg-6 apply-loan">
            <h6 class="ps-0"><span class="me-3">2.</span> Apply for loan</h6>
            <p class="ms-lg-4 ps-lg-3 py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere
              libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="row justify-content-center gx-lg-5 d-lg-flex" style="gap: 2em ;">
          <div class="col-lg-4">
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/inst-loan.png" alt="" class="img-fluid loan-img-3">
          </div>
          <div class="col-lg-6 instant-loan">
            <h6 class="ps-0"><span class="me-3">3.</span> Get loan instantly</h6>
            <p class="ms-lg-4 ps-lg-3 py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere
              libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('assets/template-parts/misc/content', 'access');?>
     <?php get_footer(); ?>
