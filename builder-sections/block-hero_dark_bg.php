<section class="curriculum-hero bg-figures-white">
  <div class="block-container">
    <div class="curriculum-hero__text">
      <h1 class="curriculum-hero__heading"><?php echo get_sub_field('heading'); ?></h1>
      <a class="btn btn_secondary btn_with-gold-shadow" href="<?php echo get_sub_field('primary_button_url') ?>"><?php echo get_sub_field('primary_button_text') ?></a>
    </div>
    <div class="curriculum-hero__image">
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