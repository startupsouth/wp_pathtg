<?php


/**
 * 
 * Name:savings Archive
 * Template Name: Contact page
 */

//get posts
?>
<?php get_header(); ?>


  <!-- hero section  -->
  <div class="container div-sections hero pt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 pt-2 pt-lg-5">
        <span class="h6-tag mb-3 fw-bold">cONTACT us</span>
        <h2 class="mb-4 text pt-3">Questions Enquiries? Please feel free to contact us through these channels</h2>
      </div>
      <div class="col-lg-5 contact">
        <h6 class="mb-3 fw-bolder">Contact Information</h6>
        <ul class="p-0">
          <li class="d-flex p-2 pb-3">
          <img src="<?php echo get_template_directory_uri (); ?>/assets/images/location.svg" alt="" class="me-3">
             <span>
              C Block 19 Up, AbleGod Zone Ariaria  
              Off Polaris Bank by Faulks Road, 
              Aba, Abia State.
             </span>
          </li>
          <li class="p-2 mb-3"> <span>
            <img src="<?php echo get_template_directory_uri (); ?>/assets/images/mail-icon.svg" alt="" class="me-3">
          </i></span><a href="#" class="text-dark fw-light">info@pathtogrowth.org</a></li>
          <li class="py-2 d-flex p-2">
          <img src="<?php echo get_template_directory_uri (); ?>/assets/images/phone-icon.svg" alt="" class="me-3">
            <ul class="p-0">
              <li>+234 803 91 234 567</li>
              <li>+234 803 91 234 567</li>
            </ul>
           </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- get in touch / map section  -->
  <div class="container-fluid map pt-5 pb-5 mb-lg-0">
    <div class="row justify-content-center">
      <div class="col-lg-6 pe-lg-0">
        <!-- <img src="../images/map.png" alt="" class="img-fluid"> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8985858797328!2d7.3481035708443825!3d5.120041626538468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042995f9727b4f3%3A0xd09e20845637dada!2s44%20Faulks%20Rd%2C%20Aba%20450102%2C%20South%2C%20Abia!5e0!3m2!1sen!2sng!4v1690983871505!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map"> 
        </iframe>
      </div>
      <div class="col-lg-5 bg-white p-4 p-lg-2 pe-lg-3 ps-lg-3">
        <form class="row justify-content-center mt-lg-2">
        <h6>Get in touch</h6>
          <div class="col-lg-12 input-group mb-lg-2">
            <label for="name" class="py-3">Full Name</label>
            <input type="text" id="name" required>
          </div>
          <div class="col-lg-12 input-group mb-lg-2">
            <label for="email" class="py-3">Email Address</label>
            <input type="email" id="email" required>
          </div>
          <div class="col-lg-12 mb-3">
            <label for="textarea" class="py-3">Enter Message</label>
            <!-- <textarea name="textarea"  class="py-3"></textarea> -->
            <input type="text" id="textarea" required>
          </div>
          <div id="submit">
            <button type="submit" class="btn btn-loan fw-bold">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php get_template_part('assets/template-parts/misc/content', 'access');?>
     <?php get_footer(); ?>