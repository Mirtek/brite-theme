<?php 

$bg_type = get_sub_field('background_type');

$data = get_dark_bg_secton_icon_n_classes($bg_type);

?>
<section class="product-feature <?php echo $data['section_classes']; ?>">
  <div class="block-container">
    <div class="product-feature__content">
      <div class="product-feature__icon">
        <?php echo brite_sprite_mono($data['section_icon']); ?>
      </div>
      <h2 class="product-feature__heading"><?php the_sub_field('heading'); ?></h2>
      <p><?php the_sub_field('feature_main_text') ?></p>
      <a class="btn btn_gold" href="<?php the_sub_field('primary_button_url'); ?>"><?php the_sub_field('primary_button_text'); ?></a>
    </div>
    <div class="product-feature__image">
      <?php $image1 = get_sub_field('image');
            $image2 = get_sub_field('image_2xv2');
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