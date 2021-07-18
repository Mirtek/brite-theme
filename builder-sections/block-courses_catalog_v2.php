<section class="courses-catalog">
  <div class="block-container">
    <div class="courses-catalog__block">
      <a href="#catalogheading" id="catalogheadinglink" class="visuallyhidden">catalog heading</a>
      <h2 class="courses-catalog__heading" id="catalogheading">Top rated courses from best creators</h2>
      <!--Filter-search form bgn-->
      <div class="courses-catalog__filters-search">
        <form class="search-filters-form" action="<?php echo get_permalink(); ?>">
          <div class="search-filters-form__search-container">
            <label class="visuallyhidden" for="coursesSearch">Search courses input</label>
            <input type="text" placeholder="Search" name="course_name" id="coursesSearch">
            <button type="submit" aria-label="Search button.">
              <svg class="icon-fill icon-search" aria-label="Search icon.">
                <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-mono.svg#icon-search"></use>
              </svg>
            </button>
          </div>
          <div class="search-filters-form__filters-container">
            <div class="search-filters-form__filter-wrapper">
              <label class="visuallyhidden" for="coursesTechnology">Sort courses by technology</label>
              <select name="technology" id="coursesTechnology">
                <option disabled="" selected="">Technology:</option>
                <option value="technology_all">All</option>
                <option value="Scratch">Scratch</option>
                <option value="Roblox">Roblox</option>
                <option value="Minecraft">Minecraft</option>
                <option value="Python">Python</option>
                <option value="Web-dev">HTML/CSS</option>
                <option value="Arduino">Arduino</option>
                <option value="Unreal Engine">Unreal Engine</option>
                <option value="Unity">Unity</option>
                <option value="Java">Java</option>
                <option value="Javascript">Javascript</option>
                <option value="Lua">Lua</option>
                <option value="Specialty Courses">Specialty Courses</option>
              </select>
            </div>
            <div class="search-filters-form__filter-wrapper">
              <label class="visuallyhidden" for="coursesProvider">Sort courses by provider</label>
              <select name="provider" id="coursesProvider">
                <option disabled="" selected="">Provider:</option>
                <option value="provider_all">All</option>
                <option value="Codakid">CodaKid</option>
                <option value="Code Kingdoms">CodeKingdoms</option>
                <option value="Code Combat">CodeCombat</option>
              </select>
            </div>
            <div class="search-filters-form__filter-wrapper">
                <div class="search-filters-form__reset"><a href="<?php echo get_home_url() ?>/all-courses/#catalogheading">Clear all</a></div>
            </div>
          </div>
        </form>
      </div>
      <!--Filter-search form end-->
      <!--Courses output view block bgn-->
      <?php 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $course_name = (get_query_var('course_name')) ? get_query_var('course_name') : "";
      $technology = (get_query_var('technology')) ? get_query_var('technology') : "";
      $provider = (get_query_var('provider')) ? get_query_var('provider') : "";

      // var_dump($technology);
      // var_dump($provider);

      if (!$technology && !$provider ) {
     //       var_dump('none set');

       $args = array(  
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'paged' => $paged,
        's' => $course_name,
      );   
     }

     if ($technology && !$provider) {
   //  var_dump('tech set');

      $args = array(  
        'post_type' => 'course',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'paged' => $paged,
        's' => $course_name,
        'meta_key' => 'technology_select',
        'meta_value' => $technology
      );

    }

    if (!$technology && $provider ) {
   //  var_dump('prov set');

     $args = array(  
      'post_type' => 'course',
      'post_status' => 'publish',
      'posts_per_page' => 8, 
      'orderby' => 'title', 
      'order' => 'ASC',
      'paged' => $paged,
      's' => $course_name,
      'meta_key' => 'provider_select',
      'meta_value' => $provider
    );   
   }

   if ($technology && $provider ) {
//var_dump('both set');
    $args = array(  
      'post_type' => 'course',
      'post_status' => 'publish',
      'posts_per_page' => 8, 
      'orderby' => 'title', 
      'order' => 'ASC',
      'paged' => $paged,
      's' => $course_name,
            // 'meta_key' => 'technology_select',
            // 'meta_value' => $technology
      'meta_query' => array(
                        'relation' => 'AND', // both of below conditions must match
                        'tech_clause' => array(
                          'key' => 'technology_select',
                          'value' => $technology,
                        ),
                        'provider_clause' => array(
                          'key' => 'provider_select',
                          'value' => $provider,
                        ), 
                      ),
    );
  }



  $loop = new WP_Query( $args ); 
//        var_dump($loop);
  if ($loop->have_posts() ) :
    ?>
    <div class="courses-catalog__cards-container">
      <ul class="courses-catalog__cards-list">
        <!--Single-course card bgn-->
        <?php    while ( $loop->have_posts() ) : $loop->the_post(); 

          $data = array();
          $data['technology'] = get_field('technology_select');
          $data['provider'] = get_field('provider_select');
          $data['level'] = get_field('level_select');
          $data['duration'] = get_field('duration');
          $data['age'] = get_field('age_recommended');
          ?>
          <li class="courses-catalog__cards-item">
            <div class="course-single-card">
              <div class="course-single-card__header">
                <div class="course-single-card__technology-logo">
                  <?php generate_tech_img($data['technology']); ?>
                </div>
                <div class="course-single-card__provider-logo">
                  <?php generate_provider_img($data['provider']); ?>
                </div>
              </div>
              <div class="course-single-card__image">
                <?php echo get_the_post_thumbnail(get_the_ID()); ?>
              </div>
              <div class="course-single-card__body">
                <div class="course-single-card__labels">
                  <div class="course-single-card__label <?php echo brite_normalize_level_class($data['level']); ?>">
                    <span><?php echo $data['level']; ?></span>
                  </div>
                  <div class="course-single-card__label course-single-card__label_age">
                    <span><?php echo $data['age']; ?>+</span>
                  </div>
                </div>
                <div class="course-single-card__meta">
                  <div class="course-single-card__meta-technology">
                    <span><?php echo $data['technology']; ?></span>
                  </div>
                  <div class="course-single-card__meta-timing">
                    <span><?php echo $data['duration']; ?> hrs</span>
                  </div>
                </div>
                <h3 class="course-single-card__heading"><?php the_title(); ?></h3>
                <div class="course-single-card__info">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </li>
        <?php endwhile;          ?>
      </ul>

    </div>
     <div class="courses-catalog__pagination">
    <?php
    echo "<nav class=\"navigation pagination\"><div class=\"nav-links\">";
    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $loop->max_num_pages,
      'prev_next' => false
    ) );
    echo "</div></nav>"; ?>
      </div>
    <?php wp_reset_postdata();  ?>
  <?php endif; ?>

    </div>
  </div>
</section>