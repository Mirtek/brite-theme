<?php /* Template Name: HomePage */ ?>
<?php get_header(); ?>
<main class="page-main">
  <!--Hero section bgn-->

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_section' ){

      get_template_part( 'builder-sections/block', 'hero' );
    }
    elseif ( get_row_layout() == 'clients_section' ){

      get_template_part( 'builder-sections/block', 'clients' );
    }

  }
  ?>

  

<?php } ?>

  <!--Meet section bgn-->
  <section class="meet bg-figures-light">
    <div class="block-container">
      <div class="meet__body">
        <h2>Meet Our Custom Branded LMS Platform</h2>
        <p>CodeHS is a comprehensive teaching platform for helping schools teach computer science. We provide web-based curriculum, teacher tools and resources, and professional development.</p>
        <a class="btn btn_secondary" href="#">About Product</a>
      </div>
      <div class="meet__image">
        <img srcset="img/lms/lms-main-tablet-x1.png, img/lms/lms-main-tablet-x2.png 2x" src="img/lms/lms-main-tablet-x1.png" alt="LMS platform on tablet." loading="lazy" width="561" height="400">
      </div>
    </div>
  </section>
  <!--Meet section end-->
  <!--Top cources section bgn-->
  <section class="top-courses bg-circles">
    <div class="block-container">
      <h2>Our Top Tier Courses</h2>
      <ul class="top-courses__list">
        <li class="top-courses__item top-courses__item_circle-1">
          <svg class="icon logo-arduino" aria-label="Arduino logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-arduino"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-2">
          <svg class="icon logo-lua" aria-label="Lua logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-lua"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-3">
          <svg class="icon logo-html" aria-label="HTML logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-html"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-4">
          <svg class="icon logo-css" aria-label="CSS logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-css"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-5">
          <svg class="icon logo-python" aria-label="Python logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-python"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-6">
          <svg class="icon logo-c" aria-label="С# logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-c"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-7">
          <svg class="icon logo-unreal" aria-label="Unreal logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-unreal"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-8">
          <svg class="icon logo-java" aria-label="Java logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-java"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-9">
          <svg class="icon logo-unity" aria-label="Unity logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-unity"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-10">
          <svg class="icon logo-roblox" aria-label="Roblox logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-roblox"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-11">
          <svg class="icon logo-minecraft" aria-label="Minecraft cube.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-minecraft"></use>
          </svg>
        </li>
        <li class="top-courses__item top-courses__item_circle-12">
          <svg class="icon logo-js" aria-label="JavaScript logo.">
            <use xlink:href="img/sprites/sprite-multi.svg#logo-js"></use>
          </svg>
        </li>
      </ul>
      <a class="btn btn_secondary" href="#">Learn More</a>
    </div>
  </section>
  <!--Top cources section end-->
  <!--Features and testimonials section bgn-->
  <section class="features-testimonials">
    <div class="block-container">
      <!--Features block (with Slick slider) bgn-->
      <div class="features jsMobileSlider">
        <div class="features_item">
          <div class="feature-card">
            <img src="img/lms/lms-frame-student-management.svg" alt="Student Management screen." loading="lazy" width="276" height="189">
            <h5 class="feature-card__heading">Student Management</h5>
            <p>Varius imperdiet aenean urna placerat pellentesque arcu. Nunc, ac urna, suspendisse sed.</p>
          </div>
        </div>
        <div class="features_item">
          <div class="feature-card">
            <img src="img/lms/lms-frame-user-management.svg" alt="User Management screen." loading="lazy" width="276" height="189">
            <h5 class="feature-card__heading">User Management</h5>
            <p>Varius imperdiet aenean urna placerat pellentesque arcu. Nunc, ac urna, suspendisse sed.</p>
          </div>
        </div>
        <div class="features_item">
          <div class="feature-card">
            <img src="img/lms/lms-frame-family-management.svg" alt="Family Management screen." loading="lazy" width="276" height="189">
            <h5 class="feature-card__heading">Family Management</h5>
            <p>Varius imperdiet aenean urna placerat pellentesque arcu. Nunc, ac urna, suspendisse sed.</p>
          </div>
        </div>
        <div class="features_item">
          <div class="feature-card">
            <img src="img/lms/lms-frame-student-progress-management.svg" alt="Student Progress Management screen." loading="lazy" width="276" height="189">
            <h5 class="feature-card__heading">Student Progress Management</h5>
            <p>Varius imperdiet aenean urna placerat pellentesque arcu. Nunc, ac urna, suspendisse sed.</p>
          </div>
        </div>
        <div class="features_item">
          <div class="feature-card">
            <img src="img/lms/lms-frame-scheduling-and-billing.svg" alt="Scheduling and Billing screen." loading="lazy" width="276" height="189">
            <h5 class="feature-card__heading">Scheduling and Billing</h5>
            <p>Varius imperdiet aenean urna placerat pellentesque arcu. Nunc, ac urna, suspendisse sed.</p>
          </div>
        </div>
        <div class="features_item">
          <div class="feature-card">
            <img src="img/lms/lms-frame-check-In-out.svg" alt="Check In/Out screen." loading="lazy" width="276" height="188">
            <h5 class="feature-card__heading">Check In/Out</h5>
            <p>Varius imperdiet aenean urna placerat pellentesque arcu. Nunc, ac urna, suspendisse sed.</p>
          </div>
        </div>
      </div>
      <!--Features block (with Slick slider) end-->
      <!--Testimonials block (with Slick slider) bgn-->
      <div class="testimonials">
        <h2>What Parents Say:</h2>
        <div class="testimonials-slider">
          <button class="testimonials-slider__arrow testimonials-slider__arrow_previous" type="button" aria-label="Previous">
            <svg class="icon-fill icon-arrow-previous" aria-label="icon">
              <use xlink:href="img/sprites/sprite-mono.svg#icon-arrow-previous"></use>
            </svg>
          </button>
          <button class="testimonials-slider__arrow testimonials-slider__arrow_next" type="button" aria-label="Next">
            <svg class="icon-fill icon-arrow-next" aria-label="icon">
              <use xlink:href="img/sprites/sprite-mono.svg#icon-arrow-next"></use>
            </svg>
          </button>
          <div class="testimonials-slider__wrapper jsTestimonialsSlider">
            <div class="testimonials-slider__slide">
              <div class="testimonial">
                <div class="testimonial__text-cloud">
                  <p>Fermentum egestas facilisis ultrices varius ultrices sit. Urna, viverra viverra auctor nisi, tempor eu faucibus ac.</p>
                </div>
                <div class="testimonial__author">
                  <div class="testimonial__author-avatar">
                    <img src="http://via.placeholder.com/90x90" alt="Authors name." loading="lazy" width="90" height="90">
                  </div>
                  <div class="testimonial__author-name">
                    <p>Sara J.</p>
                  </div>
                  <div class="testimonial__author-about">
                    <p>Mum of genius</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonials-slider__slide">
              <div class="testimonial">
                <div class="testimonial__text-cloud">
                  <p>Fermentum egestas facilisis ultrices varius ultrices sit. Urna, viverra viverra auctor nisi, tempor eu faucibus ac. Sit duis lacus gravida ac tempus ipsum orci vel imperdiet. Sit duis lacus gravida ac tempus ipsum orci vel imperdiet.</p>
                </div>
                <div class="testimonial__author">
                  <div class="testimonial__author-avatar">
                    <img src="http://via.placeholder.com/90x90" alt="Authors name." loading="lazy" width="90" height="90">
                  </div>
                  <div class="testimonial__author-name">
                    <p>Alexander J.</p>
                  </div>
                  <div class="testimonial__author-about">
                    <p>Dad of genius</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonials-slider__slide">
              <div class="testimonial">
                <div class="testimonial__text-cloud">
                  <p>Fermentum egestas facilisis ultrices varius ultrices sit. Urna, viverra viverra auctor nisi, tempor eu faucibus ac. Sit duis lacus gravida ac tempus ipsum orci vel imperdiet.</p>
                </div>
                <div class="testimonial__author">
                  <div class="testimonial__author-avatar">
                    <img src="http://via.placeholder.com/90x90" alt="Authors name." loading="lazy" width="90" height="90">
                  </div>
                  <div class="testimonial__author-name">
                    <p>Veronika J.</p>
                  </div>
                  <div class="testimonial__author-about">
                    <p>Mum of genius</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonials-slider__slide">
              <div class="testimonial">
                <div class="testimonial__text-cloud">
                  <p>Fermentum egestas facilisis ultrices varius ultrices sit. Urna, viverra viverra auctor nisi, tempor eu faucibus ac. Sit duis lacus gravida ac tempus ipsum orci vel imperdiet. Sit duis lacus gravida ac tempus ipsum orci vel imperdiet.</p>
                </div>
                <div class="testimonial__author">
                  <div class="testimonial__author-avatar">
                    <img src="http://via.placeholder.com/90x90" alt="Authors name." loading="lazy" width="90" height="90">
                  </div>
                  <div class="testimonial__author-name">
                    <p>Yuriy J.</p>
                  </div>
                  <div class="testimonial__author-about">
                    <p>Dad of genius</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonials-slider__slide">
              <div class="testimonial">
                <div class="testimonial__text-cloud">
                  <p>Urna, viverra viverra auctor nisi, tempor eu faucibus ac. Sit duis lacus gravida ac tempus ipsum orci vel imperdiet.</p>
                </div>
                <div class="testimonial__author">
                  <div class="testimonial__author-avatar">
                    <img src="http://via.placeholder.com/90x90" alt="Authors name." loading="lazy" width="90" height="90">
                  </div>
                  <div class="testimonial__author-name">
                    <p>Dana J.</p>
                  </div>
                  <div class="testimonial__author-about">
                    <p>Mum of genius</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Testimonials block (with Slick slider) end-->
    </div>
  </section>
  <!--Features and testimonials section end-->
  <!--CTA section bgn-->
  <section class="cta bg-figures">
    <div class="block-container">
      <h2>Ready to start teaching?</h2>
      <a class="btn btn_white" href="#">Learn More</a>
    </div>
  </section>
  <!--CTA section end-->
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>