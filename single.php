<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brite
 */

get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="page-main">
      <article class="page-content">
        <div class="block-container">
         <?php if (has_post_thumbnail()) { ?>
          <div class="featured-image"><?php the_post_thumbnail('large'); ?></div>
		 <?php } ?>
		 <h1><?php the_title(); ?></h1>
		 <?php the_content(); ?>
      </article>
    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php
//get_sidebar();
get_footer();
