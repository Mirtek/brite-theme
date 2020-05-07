<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<main class="page-main">
  <section class="contact">
    <div class="block-container">
      <div class="contact__hero">
        <h1 class="contact__heading"><?php the_field('heading'); ?></h1>
        <p><?php the_field('subheading'); ?></p>
      </div>
      <div class="contact__wrapper">
        <div class="contact__form-container">
          <!--Contact form bgn-->
			<?php echo do_shortcode('[contact-form-7 id="375" title="Contact US" html_class="contact-form form-default" html_id="contact-form"]'); ?>
          <!--Contact form end-->
        </div>
        <div class="contact__info-container">
          <ul class="contact__list">
            <li class="contact__item">
              <div class="contact__icon">
                <?php echo brite_sprite_multi('icon-location') ?>
              </div>
              <div class="contact__info">
                <h6 class="contact__title">Location</h6>
                <div class="contact__body">
                  <address><?php the_field('location'); ?></address>
                </div>
              </div>
            </li>
            <li class="contact__item">
              <div class="contact__icon">
              	<?php echo brite_sprite_multi('icon-email') ?>
              </div>
              <div class="contact__info">
                <h6 class="contact__title">Email</h6>
                <div class="contact__body">
                  <?php $email = get_field('email'); ?>
                  <a href="mailto:<?php echo $email ?>"><?php echo $email; ?></a>
                </div>
              </div>
            </li>
            <li class="contact__item">
              <div class="contact__icon">
                <?php echo brite_sprite_multi('icon-phone') ?>
              </div>
              <div class="contact__info">
                <h6 class="contact__title">Phone</h6>
                <div class="contact__body">
                  <?php $phone = get_field('phone'); 
                  		$phone_stripped = preg_replace('/[^0-9]/', '', $phone);
                  ?>
                  <a href="tel:+<?php echo $phone_stripped ?>"><?php echo $phone ?></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
