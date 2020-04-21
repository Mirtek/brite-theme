<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brite
 */

?>

<footer class="page-footer">
      <div class="block-container">
        <!--Footer logo bgn-->
        <div class="page-footer__logo main-logo">
          <a class="main-logo__link" href="<?php echo home_url(); ?>" aria-label="Go to Home page.">
            <img class="main-logo__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-brite.svg" alt="Brite Logo."></a>
        </div>
        <!--Footer logo end-->
        <!--Footer navigation bgn-->
        <div class="page-footer__navigation">
          <ul class="page-footer__top-nav-list">
            <li class="page-footer__top-nav-item">
              <span class="page-footer__top-nav-title">PRODUCT</span>
              <?php 
                  $menu = wp_nav_menu(
                  array(
                    'theme_location' => 'menu-2',
                    'menu_id'        => false,
                    'container' => false,
                    'menu_class' => 'page-footer__sub-nav-list',
                    'echo' => 0
                  )
                );
                $menu = str_replace('class="menu-item', 'class="page-footer__sub-nav-item', $menu );
                echo $menu;
              ?>
            </li>
            <li class="page-footer__top-nav-item">
              <span class="page-footer__top-nav-title">COMPANY</span>
              <?php 
                  $menu = wp_nav_menu(
                  array(
                    'theme_location' => 'menu-3',
                    'menu_id'        => false,
                    'container' => false,
                    'menu_class' => 'page-footer__sub-nav-list',
                    'echo' => 0
                  )
                );
                $menu = str_replace('class="menu-item', 'class="page-footer__sub-nav-item', $menu );
                echo $menu;
              ?>
            </li>
            <li class="page-footer__top-nav-item">
              <span class="page-footer__top-nav-title">CONTACT</span>
              <ul class="page-footer__sub-nav-list">
                <li class="page-footer__sub-nav-item">
                  <a class="page-footer__nav-link" href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a>
                </li>
                <li class="page-footer__sub-nav-item">
                  <ul class="social">
                    <?php if (get_field('link_to_twitter', 'option')): ?>
                    <li class="social__item">
                      <a class="social__link" href="<?php echo get_field('link_to_twitter', 'option'); ?>" aria-label="Twitter.">
                        <?php echo brite_sprite_mono('icon-twitter'); ?>
                      </a>
                    </li>
                    <?php endif; ?>
                    <?php if (get_field('link_to_facebook', 'option')): ?>
                    <li class="social__item">
                      <a class="social__link" href="<?php echo get_field('link_to_facebook', 'option'); ?>" aria-label="Facebook.">
                        <?php echo brite_sprite_mono('icon-facebook'); ?>
                      </a>
                    </li>
                    <?php endif; ?>
                    <?php if (get_field('link_to_instagram', 'option')): ?>
                    <li class="social__item">
                      <a class="social__link" href="<?php echo get_field('link_to_instagram', 'option'); ?>" aria-label="Instagram.">
                        <?php echo brite_sprite_mono('icon-instagram'); ?>
                      </a>
                    </li>
                    <?php endif; ?>
                    <?php if (get_field('link_to_youtube', 'option')): ?>
                    <li class="social__item">
                      <a class="social__link" href="<?php echo get_field('link_to_youtube', 'option'); ?>" aria-label="Youtube.">
                        <?php echo brite_sprite_mono('icon-youtube'); ?>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!--Footer navigation end-->
        <!--Footer copyright bgn-->
        <div class="page-footer__copy">
          <p>Copyright © <?php echo date('Y'); ?> CodeNow. All rights reserved.</p>
        </div>
        <!--Footer copyright end-->
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
