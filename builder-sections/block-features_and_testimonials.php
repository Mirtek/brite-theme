<section class="features-testimonials">
  <div class="block-container">
    <!--Features block (with Slick slider) bgn-->
    <?php if ( have_rows('features') )  { ?>
    <div class="features jsMobileSlider">
    <?php while( have_rows('features') ) {
      the_row();
      $image1 = get_sub_field('image');
      $feature_name = get_sub_field('feature_name');
      $feature_about_text = get_sub_field('feature_about_text');
    ?>
      <div class="features_item">
        <div class="feature-card">
          <?php echo img_srcset($image1); ?>
          <h5 class="feature-card__heading"><?php echo $feature_name; ?></h5>
          <p><?php echo $feature_about_text; ?></p>
        </div>
      </div>
    <?php } ?>
    </div>
    <?php } ?>
    <!--Features block (with Slick slider) end-->
    <!--Testimonials block (with Slick slider) bgn-->
    <div class="testimonials">
      <h2><?php echo get_sub_field('testimonials_heading'); ?></h2>
      <div class="testimonials-slider">
        <button class="testimonials-slider__arrow testimonials-slider__arrow_previous" type="button" aria-label="Previous">
          <?php brite_sprite_mono('icon-arrow-previous'); ?>
          <svg class="icon-fill icon-arrow-previous" aria-label="icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites/sprite-mono.svg#icon-arrow-previous"></use>
          </svg>
        </button>
        <button class="testimonials-slider__arrow testimonials-slider__arrow_next" type="button" aria-label="Next">
          <svg class="icon-fill icon-arrow-next" aria-label="icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprites/sprite-mono.svg#icon-arrow-next"></use>
          </svg>
        </button>
        <?php if ( have_rows('testimonials') ) { ?>
        <div class="testimonials-slider__wrapper jsTestimonialsSlider">
          <?php while ( have_rows('testimonials') ) {
          the_row(); ?>
          <div class="testimonials-slider__slide">
            <div class="testimonial">
              <div class="testimonial__text-cloud">
                <p><?php echo get_sub_field('testimonial_text'); ?></p>
              </div>
              <div class="testimonial__author">
                <div class="testimonial__author-avatar">
                  <?php $image1 = get_sub_field('author_pic'); 
                        $image2 = get_sub_field('author_pic_2x');
                  ?>
                  <?php 
                   if ($image1 && $image2) { 
                     echo img_srcset_2x($image1, $image2); 
                   }  
                   elseif ($image1 && !$image2) {
                     echo img_srcset($image1);
                   }
                   
                  ?>
                </div>
                <div class="testimonial__author-name">
                  <p><?php echo get_sub_field('author_name'); ?></p>
                </div>
                <div class="testimonial__author-about">
                  <p><?php echo get_sub_field('author_about'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php } //endwhile ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <!--Testimonials block (with Slick slider) end-->
  </div>
</section>