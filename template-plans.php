<?php /* Template Name: Plans */ ?>
<?php get_header(); ?>
<main class="page-main">

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'pricing_plans_tabs_section' ){
      get_template_part( 'builder-sections/block', 'pricing_plans_tabs' );
    }
    elseif ( get_row_layout() == 'pricing_table_horizontal_section' ){
      get_template_part( 'builder-sections/block', 'pricing_table_horizontal' );
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
