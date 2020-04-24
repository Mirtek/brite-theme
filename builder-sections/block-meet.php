<section class="meet bg-figures-light">
  <div class="block-container">
    <div class="meet__body">
      <h2><?php echo get_sub_field('heading'); ?></h2>
      <p><?php echo get_sub_field('subheading'); ?></p>
      <?php 
       $btn_url = get_sub_field('primary_button_url');
       $btn_text = get_sub_field('primary_button_text');
       ?>
      <?php if ($btn_url && $btn_text) { ?>
      <a class="btn btn_secondary" href="<?php echo $btn_url; ?>"><?php echo $btn_text; ?></a>
      <?php } ?>
    </div>
    <div class="meet__image">
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