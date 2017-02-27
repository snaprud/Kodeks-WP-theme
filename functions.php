<?php
/**
 * Kodeks functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kodeks
 */

if ( ! function_exists( 'kodeks_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kodeks_setup() {
    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Kodeks, use a find and replace
	 * to change 'kodeks' to the name of your theme in all the template files.
	 */
    load_theme_textdomain( 'kodeks', get_template_directory() . '/languages' );

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
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'kodeks' ),
    ) );

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'kodeks_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

}
endif;
add_action( 'after_setup_theme', 'kodeks_setup' );

/* JetPack Logo */

function kodeks_jetpack_support(){

    add_image_size( 'site-logo', 0, 80 );
    add_theme_support( 'site-logo', array(
        'header-text' => array(
        'site-title',
        'site-description'
    ),
        'size' => 'site-logo',
    )); 
}

add_action( 'after_setup_theme', 'kodeks_jetpack_support' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kodeks_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kodeks_content_width', 640 );
}
add_action( 'after_setup_theme', 'kodeks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kodeks_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'kodeks' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'kodeks' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'kodeks_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kodeks_scripts() {
    wp_enqueue_style( 'kodeks-style', get_stylesheet_uri() );

    wp_enqueue_script( 'kodeks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'kodeks-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kodeks_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function my_login_logo() { ?>
<style type="text/css">
    #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
        padding-bottom: 30px;
    }
</style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Admin page style */

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-style', get_template_directory_uri() . '/theme-css/theme-admin.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');

/* Edit footer-text */

function wpse_edit_footer() {
    add_filter( 'admin_footer_text', 'wpse_edit_text', 11 );
}

function wpse_edit_text($content) {
    return "WordPress Levert av <a href='http://kodes.no' target='_blank'>Kodeks AS</a>";
}

add_action( 'admin_init', 'wpse_edit_footer' );

/* Add search box to main navigation menu */
function add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
$items .= '<li class="menu-item menu-item-search">';
$items .= '<form method="get" class="menu-search-form" action="' . get_bloginfo('home') . '/"><p><input class="text_input" type="text" value="Søk" name="s" id="s" onfocus="if (this.value == \'Søk\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Søk\';}" /><input type="submit" class="my-wp-search" id="searchsubmit" value="search" /></p></form>';
$items .= '</li>';
	}
return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);

/* Remove edit-button */

add_filter( 'edit_post_link', '__return_false' );

/* WooCommerce */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="primary" class="content-area row small-12 medium-12">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}