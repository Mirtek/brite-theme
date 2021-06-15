<section class="home-hero">
  <div class="block-container">
    <div class="partner-logo">
      <div class="partner-logo__text">
        <span>Accelerated by</span>
      </div>
      <div class="partner-logo__image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-techstars_black.png" alt="Techstars Logo.">
      </div>
    </div>
    <div class="home-hero__text">
      <h1><?php echo get_sub_field('heading'); ?></h1>
      <p><?php echo get_sub_field('subheading'); ?></p>
    </div>
    <div class="home-hero__video bg-figures-small">
    <div class="home-hero__video-container">
      <video autoplay="" loop="" muted="" preload="" playsinline="" poster="<?php echo get_template_directory_uri(); ?>/img/home-hero-video.jpg">
        <source src="<?php echo get_template_directory_uri(); ?>/img/home-hero-video.webm" type="video/webm">
        <source src="<?php echo get_template_directory_uri(); ?>/img/home-hero-video.mp4" type="video/mp4">
      </video>
    </div>
    </div>
    <div class="home-hero__buttons">
      <a class="btn btn_primary" href="<?php echo get_sub_field('primary_button_url') ?>"><?php echo get_sub_field('primary_button_text') ?></a>
      <a class="btn btn_bordered" href="<?php echo get_sub_field('secondary_button_url') ?>"><?php echo get_sub_field('secondary_button_text') ?></a>
    </div>
  </div>
</section>