<section class="product-hero bg-graphic">
  <div class="block-container">
    <div class="product-hero__text">
      <h1 class="product-hero__heading"><?php echo get_sub_field('heading'); ?></h1>
      <button class="btn btn_pink-gradient" <?php echo get_field('onclick_link', 'option'); ?>><?php echo get_sub_field('primary_button_text') ?></button>
    </div>
    <div class="product-hero__image">
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