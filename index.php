<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brite
 */

get_header();
?>
<main class="page-main">
      <section>
        <div class="block-container">
          <div class="blog-posts">
            <h1><?php echo get_field('blog_heading', 'option'); ?></h1>
            <p><?php echo get_field('blog_subheading', 'option'); ?></p>
            <!--Blog-posts list bgn-->
            <ul class="blog-posts__list">
<?php			while ( have_posts() ) :
				the_post();
?>
              <li class="blog-posts__item">
                <div class="post-card">
                  <div class="post-card__publish-date">
                    <span><?php echo get_the_date(); ?></span>
                  </div>
                  <div class="post-card__image"><a href="<?php the_permalink(); ?>" aria-label="Link to blog post.">
                      <?php echo the_post_thumbnail( 'large', array( 'alt' => $alt ) ); ?></a></div>
                  <div class="post-card__body">
                    <div class="post-card__heading h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="post-card__text">
                      <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <div class="post-card__author">
                      <div class="post-card__authors-avatar">
                      	<?php echo get_avatar( get_the_author_meta( 'ID' ), 90); ?>
                      </div>
                      <div class="post-card__authors-name">
                        <span>Asif Sultan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>	
<?php
      			/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
//				get_template_part( 'template-parts/content', get_post_type() ); 
			endwhile; ?>


            </ul>
            <!--Blog-posts list end-->
          </div>
          <!--Pagination bgn-->
          	<?php the_posts_pagination(array(
          		'show_all' => true,
          		'prev_next' => false,
          		'type' => 'plain',
          		'screen_reader_text' => ' ',
          	)); 
			?>
          <!--Pagination end-->
        </div>
      </section>
    </main>
<?php
//get_sidebar();
get_footer();
