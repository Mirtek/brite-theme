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
        </div>
      </div>
    <?php } ?>
    </div>
    <?php } ?>
    <!--Features block (with Slick slider) end-->
  </div>
</section>