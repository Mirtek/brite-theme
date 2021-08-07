<?php 

global $wpdb;

$scratch_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Scratch\" and post_type = 'course' and post_status = 'publish'" );
$minecraft_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Minecraft\" and post_type = 'course' and post_status = 'publish'" );
$roblox_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Roblox\" and post_type = 'course' and post_status = 'publish'" );

$python_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Python\" and post_type = 'course' and post_status = 'publish'" );
$java_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Javascript\" and post_type = 'course' and post_status = 'publish'" );
$webdev_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Web-dev\" and post_type = 'course' and post_status = 'publish'" );
$unity_results = $wpdb->get_results( "SELECT COUNT(*) as count FROM `wp_posts` inner join wp_postmeta on id=post_id where meta_key=\"technology_select\" and meta_value = \"Unity\" and post_type = 'course' and post_status = 'publish'" );

?>

<section class="courses-catalog">
  <div class="block-container">
    <div class="courses-catalog__block">
      <h2 class="courses-catalog__heading">Our curated course catalog</h2>
      <p class="courses-catalog__sub-heading">From top content creators.</p>
      <h4 class="courses-catalog__title">Technologies</h4>
      <div class="courses-catalog__cards-container">
        <!--Each ".courses.jsCoursesSlider"-block contain items for slick-on-mobile slider. We have 8 slides in the first slider and 4 slides in the second.-->
        <div class="courses jsCoursesSlider"><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Scratch" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-scratch.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-scratch@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-scratch.png" alt="Scratch logo." loading="lazy" width="77" height="77">
                </div>
                <h5 class="courses-catalog-card__heading">Scratch</h5>
                <span class="courses-catalog-card__info"><?php echo $scratch_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Minecraft" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-minecraft.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-minecraft@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-minecraft.png" alt="Minecraft logo." loading="lazy" width="68" height="75">
                </div>
                <h5 class="courses-catalog-card__heading">Minecraft</h5>
                <span class="courses-catalog-card__info"><?php echo $minecraft_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Roblox" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-roblox.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-roblox@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-roblox.png" alt="Roblox logo." loading="lazy" width="74" height="75">
                </div>
                <h5 class="courses-catalog-card__heading">Roblox</h5>
                <span class="courses-catalog-card__info"><?php echo $roblox_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Python" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-python.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-python@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-python.png" alt="Python logo." loading="lazy" width="75" height="75">
                </div>
                <h5 class="courses-catalog-card__heading">Python</h5>
                <span class="courses-catalog-card__info"><?php echo $python_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Javascript" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-javascript.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-javascript@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-javascript.png" alt="JavaScript logo." loading="lazy" width="41" height="76">
                </div>
                <h5 class="courses-catalog-card__heading">JavaScript</h5>
                <span class="courses-catalog-card__info"><?php echo $java_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Web-dev" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-web-dev.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-web-dev@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-web-dev.png" alt="Web Development logo." loading="lazy" width="119" height="71">
                </div>
                <h5 class="courses-catalog-card__heading">Web Development</h5>
                <span class="courses-catalog-card__info"><?php echo $webdev_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?technology=Unity" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-unity.png, <?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-unity@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-technologies-png/icon-unity.png" alt="Unity logo." loading="lazy" width="72" height="75">
                </div>
                <h5 class="courses-catalog-card__heading">Unity</h5>
                <span class="courses-catalog-card__info"><?php echo $unity_results[0]->count; ?> Courses</span>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card courses-catalog-card_see-all">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/" tabindex="-1">
                <div class="courses-catalog-card__see-all-icon">
                  <svg class="icon-fill icon-arrow-up" aria-label="Arrow right icon.">
                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-mono.svg#icon-arrow-up"></use>
                  </svg>
                </div>
                <h5 class="courses-catalog-card__heading">See All</h5>
              </a>
            </div>
          </div></div>
      </div>
    </div>
    <!--Possible icons for .courses-catalog-card__tech-list:-->
    <!--icon-arduino_tech, icon-c_tech, icon-css_tech, icon-html_tech, icon-js_tech, icon-kodakid_tech, icon-lua_tech, icon-minecraft_tech, icon-python_tech, icon-java_tech, icon-roblox_tech, icon-scratch_tech, icon-unity_tech, icon-unreal_tech-->
    <div class="courses-catalog__block">
      <h4 class="courses-catalog__title">Content Providers</h4>
      <div class="courses-catalog__cards-container">
        <div class="courses jsCoursesSlider"><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?provider=Codakid" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codakid2-x1.png, <?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codakid2-x2.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codakid2-x1.png" alt="CodaKid logo." loading="lazy" width="166" height="53">
                </div>
                <h5 class="courses-catalog-card__title">CodaKid</h5>
                <ul class="courses-catalog-card__tech-list">
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-minecraft_tech" aria-label="Minecraft icon.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-minecraft_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-roblox_tech" aria-label="Roblox icon.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-roblox_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-python_tech" aria-label="Python.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-python_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-scratch_tech" aria-label="Scratch.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-scratch_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-kodakid_tech" aria-label="Kodakid.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-kodakid_tech"></use>
                    </svg>
                  </li>
                </ul>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?provider=Code Kingdoms" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codekingdoms-x1.png, <?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codekingdoms-x2.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codekingdoms-x1.png" alt="Code Kingdom logo." loading="lazy" width="83" height="47">
                </div>
                <h5 class="courses-catalog-card__title">Code Kingdom</h5>
                <ul class="courses-catalog-card__tech-list">
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-minecraft_tech" aria-label="Minecraft icon.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-minecraft_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-roblox_tech" aria-label="Roblox icon.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-roblox_tech"></use>
                    </svg>
                  </li>
                </ul>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/?provider=Code Combat" tabindex="-1">
                <div class="courses-catalog-card__image">
                  <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codecombat-x1.png, <?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codecombat-x1.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-codecombat-x1.png" alt="Code Combat logo." loading="lazy" width="168" height="37">
                </div>
                <h5 class="courses-catalog-card__title">Code Combat</h5>
                <ul class="courses-catalog-card__tech-list">
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-minecraft_tech" aria-label="Minecraft icon.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-minecraft_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-roblox_tech" aria-label="Roblox icon.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-roblox_tech"></use>
                    </svg>
                  </li>
                  <li class="courses-catalog-card__tech-item">
                    <svg class="icon icon-python_tech" aria-label="Python.">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-multi.svg#icon-python_tech"></use>
                    </svg>
                  </li>
                </ul>
              </a>
            </div>
          </div><div class="courses__item">
            <div class="courses-catalog-card courses-catalog-card_see-all">
              <a class="courses-catalog-card__link" href="<?php echo get_home_url(); ?>/all-courses/" tabindex="-1">
                <div class="courses-catalog-card__see-all-icon">
                  <svg class="icon-fill icon-arrow-up" aria-label="Arrow right icon.">
                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/sprites/sprite-mono.svg#icon-arrow-up"></use>
                  </svg>
                </div>
                <h5 class="courses-catalog-card__heading">See All</h5>
              </a>
            </div>
          </div></div>
      </div>
    </div>
  </div>
</section>