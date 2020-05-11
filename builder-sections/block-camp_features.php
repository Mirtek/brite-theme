<?php 

$link = get_sub_field('button_link');
$text = get_sub_field('button_text');
 ?>
<section class="camps-features">
  <div class="block-container">
    <h2 class="camps-features__heading"><?php the_sub_field('features_heading'); ?></h2>
    <ul class="camps-features__list">
      <li class="camps-features__item">
        <div class="feature">
          <div class="feature__icon">
            <?php echo brite_sprite_mono('icon-content'); ?>
          </div>
          <h6 class="feature__heading"><?php the_sub_field('heading_1'); ?></h6>
          <?php if (get_sub_field('subheading_1')) { ?>
          <span class="feature__sub-heading"><?php echo get_sub_field('subheading_1'); ?></span>
          <?php } ?>
        </div>
      </li>
      <li class="camps-features__item">
        <div class="feature">
          <div class="feature__icon">
            <?php echo brite_sprite_mono('icon-plan'); ?>
          </div>
          <h6 class="feature__heading"><?php the_sub_field('heading_2'); ?></h6>
          <?php if (get_sub_field('subheading_2')) { ?>
          <span class="feature__sub-heading"><?php echo get_sub_field('subheading_2'); ?></span>
          <?php } ?>
        </div>
      </li>
      <li class="camps-features__item">
        <div class="feature">
          <div class="feature__icon">
            <?php echo brite_sprite_mono('icon-material'); ?>
          </div>
          <h6 class="feature__heading"><?php the_sub_field('heading_3') ?></h6>
          <?php if (get_sub_field('subheading_3')) { ?>
          <span class="feature__sub-heading"><?php echo get_sub_field('subheading_3'); ?></span>
          <?php } ?>
        </div>
      </li>
      <li class="camps-features__item">
        <div class="feature">
          <div class="feature__icon">
            <?php echo brite_sprite_mono('icon-support'); ?>
          </div>
          <h6 class="feature__heading"><?php the_sub_field('heading_4') ?></h6>
          <?php if (get_sub_field('subheading_4')) { ?>
          <span class="feature__sub-heading"><?php echo get_sub_field('subheading_4'); ?></span>
          <?php } ?>
        </div>
      </li>
    </ul>
    <?php if( $link && $text) { ?>
        <a class="btn btn_primary" href="<?php echo $link; ?>"><?php echo $text; ?></a>
    <?php } ?>
  </div>
</section>