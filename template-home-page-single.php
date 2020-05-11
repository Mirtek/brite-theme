<?php /* Template Name: HomePage tmp */ ?>
<?php get_header('tmp'); ?>
<main class="page-main">
  <!--Hero section bgn-->

<?php if ( have_rows('builder') ) { ?>

  <?php 
  while ( have_rows('builder') ) { 

    the_row(); 

    if ( get_row_layout() == 'hero_section' ){

      get_template_part( 'builder-sections-tmp/block', 'hero' );
    }
    elseif ( get_row_layout() == 'clients_section' ){

      get_template_part( 'builder-sections-tmp/block', 'clients' );
    }
    elseif ( get_row_layout() == 'meet_section') {
      get_template_part( 'builder-sections-tmp/block', 'meet');
    }
    elseif ( get_row_layout() == 'top_courses_section') {
      get_template_part( 'builder-sections-tmp/block', 'top_courses');
    }
    elseif ( get_row_layout() == 'features_and_testimonials_section') {
      get_template_part( 'builder-sections-tmp/block', 'features_and_testimonials');
    }
    elseif ( get_row_layout() == 'cta_section') {
      get_template_part( 'builder-sections-tmp/block', 'cta_with_bg');
    }
  }
  ?>

  

<?php } ?>
  <!--CTA section bgn-->

  <!--CTA section end-->
</main>
<?php get_footer('tmp'); ?>
<?php wp_footer(); ?>