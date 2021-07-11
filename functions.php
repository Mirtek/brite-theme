<?php
/**
 * brite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brite
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'brite_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function brite_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on brite, use a find and replace
         * to change 'brite' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'brite', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'brite' ),
                'menu-2' => esc_html__( 'Footer1', 'brite' ),
                'menu-3' => esc_html__( 'Footer2', 'brite' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'brite_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'brite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brite_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'brite_content_width', 640 );
}
add_action( 'after_setup_theme', 'brite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brite_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'brite' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'brite' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'brite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brite_scripts() {
    wp_enqueue_style( 'brite-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'brite-style', 'rtl', 'replace' );

    wp_enqueue_script( 'brite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'brite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'brite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.min.css', array(), filemtime(get_stylesheet_directory() .'/css/main.min.css'), 'all'  );
    /*Enqueue The Scripts*/
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), filemtime(get_stylesheet_directory() .'/js/main.min.js'), 'all'  );
    wp_enqueue_script( 'bundle-js', get_template_directory_uri() . '/js/bundle.min.js', array('jquery'), filemtime(get_stylesheet_directory() .'/js/bundle.min.js'), 'all'  );

    if (defined('BR_TEMPLATE') && BR_TEMPLATE === 'Plansv2' ) {
      wp_enqueue_script( 'tooltip-js', get_template_directory_uri() . '/js/tooltips.min.js', array('jquery'), filemtime(get_stylesheet_directory() .'/js/tooltips.min.js'), 'all'  );
    }

}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );




function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'menu-1' ) {
      // add the desired attributes:
      $atts['class'] = 'main-navigation__link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

function add_specific_menu_location_atts2( $atts, $item, $args ) {
    // check if the item is in the footer1 menu
    if( $args->theme_location == 'menu-2' ) {
      // add the desired attributes:
      $atts['class'] = 'page-footer__nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts2', 10, 3 );

function add_specific_menu_location_atts3( $atts, $item, $args ) {
    // check if the item is in the footer2 menu
    if( $args->theme_location == 'menu-3' ) {
      // add the desired attributes:
      $atts['class'] = 'page-footer__nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts3', 10, 3 );


function brite_sprite_mono($icon) {
    $name = explode('-', $icon)[1];

    return '<svg class="icon-fill '.$icon.'" aria-label="'.$name.' icon.">
        <use xlink:href="'.get_template_directory_uri().'/img/sprites/sprite-mono.svg#'.$icon.'"></use>
    </svg>';
}

function brite_sprite_multi($icon) {
    $name = explode('-', $icon)[1];

    return '<svg class="icon '.$icon.'" aria-label="'.$name.' logo.">
        <use xlink:href="'.get_template_directory_uri().'/img/sprites/sprite-multi.svg#'.$icon.'"></use>
    </svg>';
}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

add_action( 'admin_init', 'hide_editor_home' );
 
function hide_editor_home() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
    if($template_file == 'template-home-page.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}

function img_srcset_2x($image1, $image2) {
$out = '<img srcset="'.$image1['url'].', '.$image2['url'].' 2x" src="'.$image1['url'].'" alt="'.$image1['alt'].'" loading="lazy" width="'.$image1['width'].'" height="'.$image1['height'].'">';
  return $out;
}

function img_srcset($image1) {
$out = '<img srcset="'.$image1['url'].'" src="'.$image1['url'].'" alt="'.$image1['alt'].'" loading="lazy" width="'.$image1['width'].'" height="'.$image1['height'].'">';
  return $out;
}

  add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }


function get_white_bg_secton_icon_n_classes($bg_type) {
    switch ($bg_type) {
      case 'figures light':
        $data['section_classes']='product-feature_content-management bg-figures-light';
        $data['section_icon']='icon-date';
        break;
      case 'lines':
        $data['section_classes']='product-feature_family-management bg-lines';
        $data['section_icon']='icon-family-management';
        break;
      case 'squares':
        $data['section_classes']='product-feature_scheduling bg-squares';
        $data['section_icon']='icon-scheduling';
        break;
      case 'lines diagonal':
        $data['section_classes']='product-feature_session-management bg-lines-diagonal';
        $data['section_icon']='icon-active-session';
        break;
      case 'figures light 2':
        $data['section_classes']='product-feature_billing bg-figures-light';
        $data['section_icon']='icon-billing';
        break;
      default:
        $data['section_classes']='product-feature_content-management bg-figures-light';
        $data['section_icon']='icon-date';
    }
    return $data;
}

function get_dark_bg_secton_icon_n_classes($bg_type) {
    switch ($bg_type) {
      case 'circles':
        $data['section_classes']='product-feature_user-management bg-circles';
        $data['section_icon']='icon-user-management';
        break;
      case 'waves':
        $data['section_classes']='product-feature_staff-management bg-waves';
        $data['section_icon']='icon-staff-management';
        break;
      case 'radial':
        $data['section_classes']='product-feature_check-in-out bg-radial';
        $data['section_icon']='icon-check-in-out';
        break;
      case 'waves bold':
        $data['section_classes']='product-feature_progress bg-waves-bold';
        $data['section_icon']='icon-student-progress';
        break;
      case 'radial mixed':
        $data['section_classes']='product-feature_support bg-radial-mixed';
        $data['section_icon']='icon-forum';
        break;
      default:
        $data['section_classes']='product-feature_user-management bg-circles';
        $data['section_icon']='icon-user-management';
    }
    return $data;
}

function get_plans_styling_classes($styling_data) {
    switch ($styling_data) {
      case 'green':
        $data='plan-card_silver';
        break;
      case 'yellow_and_big':
        $data='plan-card_gold';
        break;
      case 'red':
        $data='plan-card_platinum';
        break;
      default:
        $data='plan-card_silver';
    }
    return $data;
}

function get_plans_btn_styling_classes($styling_data) {
    switch ($styling_data) {
      case 'green':
        $data='btn_blue';
        break;
      case 'yellow_and_big':
        $data='btn_gold';
        break;
      case 'red':
        $data='btn_red';
        break;
      default:
        $data='btn_blue';
    }
    return $data;
}

function get_camps_feature_icon_proper_name($icon) {
    switch ($styling_data) {
      case 'content':
        $data='icon-content';
        break;
      case 'plans':
        $data='icon-plan';
        break;
      case 'material':
        $data='icon-material';
        break;
      case 'support':
        $data='icon-support';
        break;
      default:
        $data='icon-content';
    }
    return $data;
}

add_filter( 'wpcf7_form_elements', 'dd_wpcf7_form_elements_replace' );
function dd_wpcf7_form_elements_replace( $content ) {
    // $name == Form Tag Name [textarea* your-message] 
    $name = 'name="number-students"';
    $str_pos = strpos( $content, $name );
    if (false !== $str_pos) {
        $content = substr_replace( $content, ' required="required" ', $str_pos, 0 );
    }
    return $content;
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

add_filter('wpcf7_autop_or_not', '__return_false');

define('WP_POST_REVISIONS', 3);


add_action( 'init', 'register_course' );
function register_course(){
    register_post_type('course', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Courses',
            'singular_name'      => 'Course',
            'add_new'            => 'Add Course',
            'add_new_item'       => 'Add New Course',
            'edit_item'          => 'Edit Course',
            'new_item'           => 'New Course',
            'view_item'          => 'View Course',
            'search_items'       => 'Search Courses',
            'not_found'          => 'Not Found Courses',
            'not_found_in_trash' => 'Not Found Courses in Trash',
            'menu_name'          => 'Courses',
        ),
        'description'         => 'Courses',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => false,
        'show_in_menu'          => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-screenoptions',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post',
        //'map_meta_cap'      => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor', 'custom-fields', 'author', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => false,
    ) );
}


if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  
}

function acf_load_technology_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
    
    // get the textarea value from options page without any formatting
    $choices = get_field('technology', 'option', false);

    
    // explode the value so that each line is a new array piece
    $choices = explode("\n", $choices);

    
    // remove any unwanted white space
    $choices = array_map('trim', $choices);

    
    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice ] = $choice;
            
        }
        
    }
    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=technology_select', 'acf_load_technology_field_choices');

function acf_load_provider_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
    
    // get the textarea value from options page without any formatting
    $choices = get_field('provider', 'option', false);

    
    // explode the value so that each line is a new array piece
    $choices = explode("\n", $choices);

    
    // remove any unwanted white space
    $choices = array_map('trim', $choices);

    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice ] = $choice;
            
        }
        
    }
    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=provider_select', 'acf_load_provider_field_choices');

function acf_load_level_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();
    
    // get the textarea value from options page without any formatting
    $choices = get_field('level', 'option', false);

    
    // explode the value so that each line is a new array piece
    $choices = explode("\n", $choices);

    
    // remove any unwanted white space
    $choices = array_map('trim', $choices);

    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice ] = $choice;
            
        }
        
    }
    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=level_select', 'acf_load_level_field_choices');


function brite_normalize_tech_image($technology) {

$array = array('logo_java'=> 'Java',
               'logo_minecraft'=> 'Minecraft',
               'logo_python' => 'Python',
               'logo_roblox' => 'Roblox',
               'logo_scratch'=>'Scratch',
               'logo_unity+c-sharp'=>'Unity',
               'logo_html+css'=>'Web-dev',
               'logo_arduino'=>'Arduino',
               'logo_javascript'=>'Javascript',
               'logo_lua' => 'Lua',
          );
  
  $file_name = array_search($technology, $array);

  return $file_name ? $file_name : $technology;
}

function brite_normalize_provider_image($provider) {

$array = array('logo_codakid'=> 'Codakid',
               'logo_codekingdoms'=> 'Code Kingdoms',
               'logo_codecombat' => 'Code Combat',
          );
  
  $file_name = array_search($provider, $array);

  return $file_name ? $file_name : $provider;
}


function generate_tech_img($technology) {

$image_name = brite_normalize_tech_image($technology);
?>

<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/card-images/card-tech-<?php echo $image_name; ?>.png, <?php echo get_stylesheet_directory_uri(); ?>/img/card-images/card-tech-<?php echo $image_name; ?>@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-images/card-tech-<?php echo $image_name; ?>.png" alt="<?php echo $technology; ?> logo." loading="lazy">
<?php
}

function generate_provider_img($provider) {

$image_name = brite_normalize_provider_image($provider);
?>

<img srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/card-images/card-provider-<?php echo $image_name; ?>.png, <?php echo get_stylesheet_directory_uri(); ?>/img/card-images/card-provider-<?php echo $image_name; ?>@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-images/card-provider-<?php echo $image_name; ?>.png" alt="<?php echo $provider; ?> logo." loading="lazy">

<?php
}


function brite_register_query_vars( $vars ) {
    $vars[] = 'course_name';
    $vars[] = 'technology';
    $vars[] = 'provider';
    return $vars;
}
add_filter( 'query_vars', 'brite_register_query_vars' );