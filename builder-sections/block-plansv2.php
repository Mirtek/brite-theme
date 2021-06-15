<?php $silver = get_sub_field('silver_plan'); 
      $platinum = get_sub_field('platinum_plan'); 
?>
<section class="plans">
        <div class="block-container">
          <div class="plans__cards">
            <!--Plan card bgn-->
            <div class="plan-card plan-card_silver">
              <h3 class="plan-card__heading"><?php echo $silver['heading']; ?></h3>
              <div class="plan-card__text">
                <p><?php echo $silver['subheading']; ?></p>
              </div>
              <ul class="plan-card__advantage-list">
                  <?php foreach ($silver['features'] as $key => $value) { ?>
                  <li class="plan-card__advantage-item">
                    <span><?php echo $value['feature']; ?><span class="plan-card__tooltip" data-tooltip="" data-tooltip-text="<?php echo $value['tooltip_data']; ?>"><?php echo brite_sprite_mono('icon-question'); ?></span>
                    </span>
                  </li>
                  <?php } ?>
              </ul>
              <div class="plan-card__featured-text">
                <p><?php echo $silver['text_before_price']; ?>
                  <span class="plan-card__tooltip" data-tooltip="" data-tooltip-text="<?php echo $silver['tooltip_before_price']; ?>">
                    <?php echo brite_sprite_mono('icon-question'); ?>
                  </span>
                </p>
              </div>
              <div class="plan-card__price">
                <span class="plan-card__price_value"><?php echo $silver['price']; ?></span>
                <span class="plan-card__price_text">per student /month</span>
              </div>
              <div class="plan-card__btn">
                <a class="btn btn_blue" href="<?php echo $silver['button_url']; ?>"><?php echo $silver['button_text']; ?></a>
              </div>
              <?php if ($silver['demo_call_onclick_js']) { ?>
              <div class="plan-card__shedule">
                <button class="calendly-button" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/gobrite/demo'});return false;">
                  <?php echo brite_sprite_mono('icon-calendar'); ?>
                  <span><?php echo $silver['demo_call_text']; ?></span>
                </button>
              </div>
              <?php } ?>
            </div>
            <div class="plan-card plan-card_platinum">
              <h3 class="plan-card__heading"><?php echo $platinum['heading']; ?></h3>
              <div class="plan-card__text">
                <p><?php echo $platinum['subheading']; ?></p>
              </div>
              <ul class="plan-card__advantage-list">
                  <?php foreach ($platinum['features'] as $key => $value) { ?>
                  <li class="plan-card__advantage-item">
                    <span><?php echo $value['feature']; ?><span class="plan-card__tooltip" data-tooltip="" data-tooltip-text="<?php echo $value['tooltip_data']; ?>"><?php echo brite_sprite_mono('icon-question'); ?></span>
                    </span>
                  </li>
                  <?php } ?>
              </ul>
              <div class="plan-card__featured-text">
                <p><?php echo $platinum['text_before_price']; ?>
                  <span class="plan-card__tooltip" data-tooltip="" data-tooltip-text="<?php echo $platinum['tooltip_before_price']; ?>">
                    <?php echo brite_sprite_mono('icon-question'); ?>
                  </span>
                </p>
              </div>
              <div class="plan-card__price">
                <span class="plan-card__price_value"><?php echo $platinum['price']; ?></span>
                <span class="plan-card__price_text">per student /month</span>
              </div>
              <div class="plan-card__btn">
                <a class="btn btn_red" href="<?php echo $platinum['button_url']; ?>"><?php echo $platinum['button_text']; ?></a>
              </div>
              <?php if ($platinum['demo_call_onclick_js']) { ?>
              <div class="plan-card__shedule">
                <button class="calendly-button" onclick="<?php echo $platinum['demo_call_onclick_js']; ?>">
                  <?php echo brite_sprite_mono('icon-calendar'); ?>
                  <span><?php echo $platinum['demo_call_text']; ?></span>
                </button>
              </div>
              <?php } ?>
            </div>
          </div>
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