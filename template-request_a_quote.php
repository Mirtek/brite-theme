<?php /* Template Name: Request a Quote */ ?>
<?php get_header(); ?>
<main class="page-main">
  <section class="request bg-graphic">
    <div class="block-container">
      <h1 class="request__heading">Request a Quote</h1>
      <div class="request__form-container">
      	<?php echo do_shortcode('[contact-form-7 id="353" title="Contact form 1" html_id="request-form" html_class="request-form form-default"]'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
