<?php 

$icon = get_field('icon_type'); 
$icon_class= get_camps_feature_icon_proper_name($icon);
?>

<section class="camps-feature">
  <div class="block-container">
    <div class="camps-feature__content">
      <div class="camps-feature__icon">
        <?php echo brite_sprite_mono($icon_class); ?>
      </div>
      <h2 class="camps-feature__heading"><?php the_sub_field('heading'); ?></h2>
      <p><?php the_sub_field('feature_main_text') ?></p>
    </div>
    <div class="camps-feature__image bg-figures-small">
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