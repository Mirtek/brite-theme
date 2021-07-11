<section class="award-courses">
  <div class="block-container">
    <h2 class="award-courses__heading"><?php the_sub_field('heading'); ?></h2>
    <div class="award-courses__stats-block">
      <div class="platform-stats">
        <div class="platform-stats__item">
          <div class="platform-stats__sub-title">
            <span>Over</span>
          </div>
          <div class="platform-stats__counter">
            <span><?php the_sub_field('first_number'); ?></span>
          </div>
          <div class="platform-stats__title">
            <p><?php the_sub_field('first_number_heading'); ?></p>
          </div>
        </div>
        <div class="platform-stats__item">
          <div class="platform-stats__sub-title">
            <span>Over</span>
          </div>
          <div class="platform-stats__counter">
            <span><?php the_sub_field('second_number'); ?></span>
          </div>
          <div class="platform-stats__title">
            <p><?php the_sub_field('second_number_heading'); ?></p>
          </div>
        </div>
        <div class="platform-stats__item">
          <div class="platform-stats__sub-title">
            <span>Over</span>
          </div>
          <div class="platform-stats__counter">
            <span><?php the_sub_field('third_number'); ?></span>
          </div>
          <div class="platform-stats__title">
            <p><?php the_sub_field('third_number_heading'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="award-courses__courses-block">
      <div class="courses jsCoursesSlider">
        <?php //4 items ?>
        <?php if ( have_rows('courses_first_row') ) { ?>
          <?php while ( have_rows('courses_first_row') ) { 
            the_row();
            ?>
            <div class="courses__item">
              <div class="course-card">
                <div class="course-card__image">
                  <?php $image1 = get_sub_field('image_1');
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

</div>
<!--Courses block end-->
</section>