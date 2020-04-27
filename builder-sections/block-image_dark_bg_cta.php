<section class="cutting-edge-platform">
  <div class="block-container">
    <div class="cutting-edge-platform__body">
      <h2 class="cutting-edge-platform__heading"><?php echo get_sub_field('heading'); ?></h2>
      <div class="cutting-edge-platform__stats">
        <div class="platform-stats">
          <div class="platform-stats__item">
            <div class="platform-stats__sub-title">
              <span>Over</span>
            </div>
            <div class="platform-stats__counter">
              <span><?php echo get_sub_field('first_number'); ?></span>
            </div>
            <div class="platform-stats__title">
              <p><?php echo get_sub_field('first_number_heading'); ?></p>
            </div>
          </div>
          <div class="platform-stats__item">
            <div class="platform-stats__sub-title">
              <span>Over</span>
            </div>
            <div class="platform-stats__counter">
              <span><?php echo get_sub_field('second_number'); ?></span>
            </div>
            <div class="platform-stats__title">
              <p><?php echo get_sub_field('second_number_heading'); ?></p>
            </div>
          </div>
          <div class="platform-stats__item">
            <div class="platform-stats__sub-title">
              <span>Over</span>
            </div>
            <div class="platform-stats__counter">
              <span><?php echo get_sub_field('third_number'); ?></span>
            </div>
            <div class="platform-stats__title">
              <p><?php echo get_sub_field('third_number_heading'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="btn btn_secondary btn_with-gold-shadow" href="<?php echo get_sub_field('primary_button_url'); ?>"><?php echo get_sub_field('primary_button_text'); ?></a>
    </div>
    <div class="cutting-edge-platform__image">
      <?php $image1 = get_sub_field('image');
            $image2 = get_sub_field('image_2x');
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
  </div>
</section>