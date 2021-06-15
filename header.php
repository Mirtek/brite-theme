<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Description">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&amp;family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php 
        $critical = '/css/critical-main.min.css';
        $file_path = get_stylesheet_directory() . $critical;
        if ( file_exists( $file_path ) ) {
            echo '<style critical-css>';
            echo file_get_contents( $file_path );
            echo '</style>';
        }
    ?>
	<?php wp_head(); ?>
  <?php 
  $cal_style = get_field('calendly_style');
  $cal_script = get_field('calendly_script');

  if ($cal_style && $cal_script) { ?>
  <link href="<?php echo $cal_style; ?>" rel="stylesheet">
  <script src="<?php echo $cal_script; ?>" async></script>

  <?php } ?>
</head>

<?php $page_template_slug=get_page_template_slug();
      $header_class_for_page = '';
if ($page_template_slug == 'template-curriculum.php' || 
    $page_template_slug == 'template-product.php' ||
    $page_template_slug == 'template-plans.php' ||
    $page_template_slug == 'template-plansv2.php' ||
    $page_template_slug == 'template-camps.php' ) {
    $header_class_for_page='header-on-color';
} else {
  $header_class_for_page='header-on-white';
}

?>


<body <?php body_class($header_class_for_page); ?>>
<?php wp_body_open(); ?>
	<header class="page-header">
      <div class="block-container">
        <!--Header logo bgn-->
        <div class="page-header__logo main-logo">
          <a class="main-logo__link" href="<?php echo home_url(); ?>" aria-label="Go to Home page.">
            <svg class="main-logo__image" role="img" aria-label="Brite Logo." xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 73 25">
              <defs></defs>
              <path class="main-logo__text" fill="#000" d="M10.72 16.11c0-1.54-.31-2.76-.93-3.66-.6-.9-1.56-1.35-2.88-1.35a5.37 5.37 0 00-2.97.87V21c.26.06.59.12.99.18.42.04.92.06 1.5.06a3.9 3.9 0 003.15-1.35 5.76 5.76 0 001.14-3.78zm3.72.06c0 1.26-.19 2.4-.57 3.42a7.1 7.1 0 01-4.08 4.23c-.98.38-2.09.57-3.33.57a21.35 21.35 0 01-6.15-.87V1.32l3.63-.6v8.13a7.3 7.3 0 013.57-.87c1.1 0 2.08.2 2.94.6.88.38 1.61.93 2.19 1.65a7.46 7.46 0 011.32 2.61c.32 1 .48 2.11.48 3.33zm12.68-4.59c-.3-.1-.72-.2-1.26-.3a8.21 8.21 0 00-4.05.15V24h-3.63V9.06a18.82 18.82 0 016.12-1.08c.24 0 .52.02.84.06.32.02.64.06.96.12.32.04.63.1.93.18.3.06.54.12.72.18l-.63 3.06zM33.94 24h-3.63V8.31h3.63V24zm.4-20.28c0 .68-.23 1.22-.67 1.62-.44.4-.96.6-1.56.6-.62 0-1.15-.2-1.59-.6-.44-.4-.66-.94-.66-1.62 0-.7.22-1.25.66-1.65.44-.4.97-.6 1.6-.6.6 0 1.11.2 1.55.6.44.4.66.95.66 1.65zm4.05.45l3.63-.6v4.74h5.58v3.03h-5.58v6.39c0 1.26.2 2.16.6 2.7.4.54 1.08.81 2.04.81.66 0 1.24-.07 1.74-.21.52-.14.93-.27 1.23-.39l.6 2.88c-.42.18-.97.36-1.65.54-.68.2-1.48.3-2.4.3a7.72 7.72 0 01-2.82-.45 4.2 4.2 0 01-1.77-1.29 5.3 5.3 0 01-.93-2.07c-.18-.82-.27-1.75-.27-2.79V4.17zm11.59 12.06c0-1.38.2-2.59.6-3.63.42-1.04.97-1.9 1.65-2.58a7.07 7.07 0 015.04-2.1c2.16 0 3.84.67 5.04 2.01 1.22 1.34 1.83 3.34 1.83 6l-.03.69c0 .24-.01.46-.03.66H53.73c.1 1.26.54 2.24 1.32 2.94.8.68 1.95 1.02 3.45 1.02a11.08 11.08 0 004.14-.75l.48 2.97a6.7 6.7 0 01-2.04.6 13.5 13.5 0 01-3.03.33c-1.38 0-2.58-.2-3.6-.6a6.94 6.94 0 01-2.52-1.71 7.17 7.17 0 01-1.47-2.58c-.32-1-.48-2.09-.48-3.27zm10.53-1.62c0-.5-.07-.97-.21-1.41a3.14 3.14 0 00-.63-1.17c-.26-.34-.6-.6-1-.78-.37-.2-.83-.3-1.37-.3a3.34 3.34 0 00-3.21 2.31c-.16.44-.27.89-.33 1.35h6.75z"></path>
              <path fill="#FF9800" d="M72.07 22.02c0 .7-.24 1.27-.72 1.71-.46.44-1.02.66-1.68.66-.68 0-1.25-.22-1.71-.66a2.26 2.26 0 01-.7-1.71c0-.7.24-1.27.7-1.71a2.32 2.32 0 011.7-.69c.67 0 1.23.23 1.69.69.48.44.72 1.01.72 1.71z"></path>
            </svg>
          </a>
        </div>
        <!--Header logo end-->
        <!--Main navigation bgn-->
		<?php
		$menu = wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container' => 'nav',
				'container_class' => 'main-navigation',
				'menu_class' => 'main-navigation__list',
				'echo' => 0

			)
		);
		$menu = str_replace('class="menu-item', 'class="menu-item main-navigation__item', $menu );
		$menu = str_replace('current_page_item', 'main-navigation__item_current', $menu);
		echo $menu;
		?>
        <!--Main navigation end-->
        <!--Header CTA bgn-->
        <div class="page-header__cta"><a class="page-header__cta-link" href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a></div>
        <!--Header CTA end-->
        <!--Burger button bgn-->
        <button class="page-header__burger burger-button" type="button">
          <span class="burger-button__click-region">
            <span class="burger-button__line"></span>
            <span class="burger-button__line"></span>
            <span class="burger-button__line"></span>
          </span>
        </button>
        <!--Burger button end-->
      </div>
    </header>