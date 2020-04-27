<section class="curriculum-courses">
  <div class="block-container">
    <h2 class="visuallyhidden">Top Tier Courses</h2>
    <!--Logos list block bgn-->
    <ul class="curriculum-courses__logos-list">
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-java'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-lua'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-python-text'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-unreal'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-arduino'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-html'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-css'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-c'); ?>
      </li>
      <li class="curriculum-courses__logos-item">
        <?php echo brite_sprite_multi('logo-unity-text'); ?>
      </li>
    </ul>
    <!--Logos list block end-->
    <!--Courses block bgn-->
    <div class="curriculum-courses__courses-block">
      <!--Each ".courses.jsCoursesSlider"-block contain items for slick-on-mobile slider. For now we have 4 slides in first slider and 6 slides in second. Should be ease to add/remove sliders and add/remove slide in each sliders-->
      <div class="courses jsCoursesSlider">
        <?php //4 items ?>
        <?php if ( have_rows('courses_first_row') ) { ?>
        <?php while ( have_rows('courses_first_row') ) { 
            the_row();
        ?>
        <div class="courses__item">
          <div class="course-card">
            <div class="course-card__image">
            <?php $image1 = get_sub_field('image');
                  $image2 = get_sub_field('image_2x');
            ?>
            <?php 
             if ($image1 && $image2) { 
               echo img_srcset_2x($image1, $image2); 
             }  
             elseif ($image1 && !$image2) {
               echo img_srcset($image1);
             }
             
            ?>
            </div>
            <div class="course-card__body">
              <div class="course-card__category">
                <p><?php echo get_sub_field('course_item_topic'); ?></p>
              </div>
              <div class="course-card__title">
                <p><?php echo get_sub_field('course_item_heading'); ?></p>
              </div>
              <div class="course-card__text">
                <p><?php echo get_sub_field('course_item_copy'); ?></p>
              </div>
            </div>
          </div>
        </div>        
        <?php } ?>
        <?php } ?>

      </div>
      <div class="courses jsCoursesSlider">
        <?php //4 items ?>
        <?php if ( have_rows('courses_second_row') ) { ?>
        <?php while ( have_rows('courses_second_row') ) { 
            the_row();
        ?>
        <div class="courses__item">
          <div class="course-card">
            <div class="course-card__image">
            <?php $image1 = get_sub_field('image');
                  $image2 = get_sub_field('image_2x');
            ?>
            <?php 
             if ($image1 && $image2) { 
               echo img_srcset_2x($image1, $image2); 
             }  
             elseif ($image1 && !$image2) {
               echo img_srcset($image1);
             }
             
            ?>
            </div>
            <div class="course-card__body">
              <div class="course-card__category">
                <p><?php echo get_sub_field('course_item_topic'); ?></p>
              </div>
              <div class="course-card__title">
                <p><?php echo get_sub_field('course_item_heading'); ?></p>
              </div>
              <div class="course-card__text">
                <p><?php echo get_sub_field('course_item_copy'); ?></p>
              </div>
            </div>
          </div>
        </div>        
        <?php } ?>
        <?php } ?>

      </div>
    </div>
    <!--Courses block end-->
  </div>
</section>