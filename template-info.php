<?php /* Template Name: Info */ ?>

<?php get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="page-main">
      <article class="page-content">
        <div class="block-container">
		 <h1><?php the_title(); ?></h1>
		 <?php the_content(); ?>
      </article>
    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php
//get_sidebar();
get_footer();
