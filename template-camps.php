<?php /* Template Name: Camps */ ?>
<?php get_header(); ?>
<main class="page-main">
  <!--Hero section bgn-->
<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_section' ){
      get_template_part( 'builder-sections/block', 'hero_dark_bg_camps' );
    }
    elseif ( get_row_layout() == 'camps_feature_section' ){
      get_template_part( 'builder-sections/block', 'camps_feature' );
    }
    elseif ( get_row_layout() == 'camps_pricing_table_section' ){
      get_template_part( 'builder-sections/tables/subblock', 'camps_table' );
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
