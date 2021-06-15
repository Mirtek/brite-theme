<?php /* Template Name: Plans v2 */ ?>

<?php define('BR_TEMPLATE', 'Plansv2'); ?>
<?php get_header(); ?>
<main class="page-main">

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_plans' ){
      get_template_part( 'builder-sections/block', 'hero_plans' );
    }
    elseif ( get_row_layout() == 'plansv2') {
      get_template_part( 'builder-sections/block', 'plansv2');
    }
    elseif ( get_row_layout() == 'camps_features_section' ){
      get_template_part( 'builder-sections/block', 'camp_features' );
    }
    elseif ( get_row_layout() == 'cta_section') {
      get_template_part( 'builder-sections/block', 'cta_with_bg');
    }
  }
  ?>
<?php } ?>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
