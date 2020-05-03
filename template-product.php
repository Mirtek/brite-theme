<?php /* Template Name: Product */ ?>
<?php get_header(); ?>

<main class="page-main">
  <!--Hero section bgn-->

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_section' ){
      get_template_part( 'builder-sections/block', 'hero_dark_bg_big' );
    }
    elseif ( get_row_layout() == 'top_courses_big_section' ){
      get_template_part( 'builder-sections/block', 'top_courses_big_product_page' );
    }
    elseif ( get_row_layout() == 'product_feature_white_background_section' ){
      get_template_part( 'builder-sections/block', 'product_feature_white_bg' );
    }
    elseif ( get_row_layout() == 'product_feature_dark_background_section' ){
      get_template_part( 'builder-sections/block', 'product_feature_dark_bg' );
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
