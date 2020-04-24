<?php /* Template Name: HomePage */ ?>
<?php get_header(); ?>
<main class="page-main">
  <!--Hero section bgn-->

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_section' ){

      get_template_part( 'builder-sections/block', 'hero' );
    }
    elseif ( get_row_layout() == 'clients_section' ){

      get_template_part( 'builder-sections/block', 'clients' );
    }
    elseif ( get_row_layout() == 'meet_section') {
      get_template_part( 'builder-sections/block', 'meet');
    }
    elseif ( get_row_layout() == 'top_courses_section') {
      get_template_part( 'builder-sections/block', 'top_courses');
    }
    elseif ( get_row_layout() == 'features_and_testimonials_section') {
      get_template_part( 'builder-sections/block', 'features_and_testimonials');
    }
    elseif ( get_row_layout() == 'cta_section') {
      get_template_part( 'builder-sections/block', 'cta_with_bg');
    }
  }
  ?>

  

<?php } ?>
  <!--CTA section bgn-->

  <!--CTA section end-->
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>