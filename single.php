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
	<div class="page-content">
		<div class="block-container block-container_with-aside">
	      <article class="">
	        <div class="block-container">
	         <?php if (has_post_thumbnail()) { ?>
	          <div class="featured-image"><?php the_post_thumbnail('large'); ?></div>
			 <?php } ?>
			 <h1><?php the_title(); ?></h1>
			 <?php the_content(); ?>
	      </article>
	      <aside class="page-aside">
	      	<?php $banner_image = get_field('banner_image', 'option');
	      		  $banner_url = get_field('banner_url', 'option');  ?>
	      	<?php if ( $banner_url && $banner_image ) : ?>
            <div class="aside-widget aside-widget_banner">
              <div class="aside-banner">
                <a class="aside-banner__link" href="<?php echo $banner_url; ?>" target="_blank">
                  <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                </a>
              </div>
            </div>
	        <?php endif; ?>
            <div class="aside-widget aside-widget_sticky">
              <h3 class="aside-widget__heading">Recent posts</h3>
				<?php 
				   global $post;
				   $post_id = array($post->ID);
				   // the query
				   $the_query = new WP_Query( array(
				      'posts_per_page' => 3,
				      'post__not_in' => $post_id,
				   )); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>
	              <ul class="aside-recent-posts">
	
				  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	                <li class="aside-recent-posts__item">
	                  <a class="aside-recent-posts__link" href="<?php the_permalink(); ?>">
	                    <div class="aside-recent-posts__image">
	                      <?php the_post_thumbnail('thumbnail'); ?>
	                    </div>
	                    <div class="aside-recent-posts__content">
	                      <h4 class="aside-recent-posts__heading"><?php the_title(); ?></h4>
	                    </div>
	                  </a>
	                </li>
				  <?php endwhile; ?>
				  <?php wp_reset_postdata(); ?>
				  </ul>
				<?php else : ?>
				  <p><?php __('No News'); ?></p>
				<?php endif; ?>
            </div>
          </aside>		
		</div>
	</div>

    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php
//get_sidebar();
get_footer();
