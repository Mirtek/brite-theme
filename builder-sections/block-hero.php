<section class="home-hero">
  <div class="block-container">
    <div class="home-hero__text">
      <h1><?php echo get_sub_field('heading'); ?></h1>
      <p><?php echo get_sub_field('subheading'); ?></p>
    </div>
    <div class="home-hero__image bg-figures-small">
      <?php $image1 = get_sub_field('image');
            $image2 = get_sub_field('image_2x');
      ?>
      <?php if ($image1 && $image2) { ?>

      <img srcset="<?php echo $image1['url'] ?>, <?php echo $image2['url'] ?> 2x" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>" loading="lazy" width="<?php echo $image1['width']; ?>" height="<?php echo $image1['height']; ?>">



      <?php } elseif ($image1 && !$image2) { ?>
      <img srcset="<?php echo $image1['url'] ?>" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt'] ?>" loading="lazy" width="<?php echo $image1['width']; ?>" height="<?php echo $image1['height']; ?>">
      <?php } ?>
    </div>
    <div class="home-hero__buttons">
      <a class="btn btn_primary" href="<?php echo get_sub_field('primary_button_url') ?>"><?php echo get_sub_field('primary_button_text') ?></a>
      <a class="btn btn_bordered" href="<?php echo get_sub_field('secondary_button_url') ?>"><?php echo get_sub_field('secondary_button_text') ?></a>
    </div>
  </div>
</section>