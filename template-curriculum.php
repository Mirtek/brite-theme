<?php /* Template Name: Curriculum */ ?>
<?php get_header(); ?>

<main class="page-main">
  <!--Hero section bgn-->

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_section' ){
        get_template_part( 'builder-sections/block', 'hero_dark_bg' );
    }
    elseif ( get_row_layout() == 'courses_catalog' ){
    	get_template_part('builder-sections/block', 'courses_catalog_v2');
    }
    elseif ( get_row_layout() == 'all_courses' ){
    	get_template_part('builder-sections/block', 'all_courses');
    }
    elseif ( get_row_layout() == 'image_dark_bg_cta_section' ){

      get_template_part( 'builder-sections/block', 'image_dark_bg_cta' );
    }
    elseif ( get_row_layout() == 'icon_heading_text_section' ){

      get_template_part( 'builder-sections/block', 'icon_heading_text' );
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
