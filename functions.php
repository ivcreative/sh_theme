<?php
/**
 * sh-theme functions and definitions
 *
 * @package sh-theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'sh_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sh_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sh-theme, use a find and replace
	 * to change 'sh-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sh-theme', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sh-theme' ),
        'footer' => __( 'Footer Menu', 'sh-theme' ),
        'mobile' => __( 'Mobile Menu', 'sh-theme' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sh_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sh_theme_setup
add_action( 'after_setup_theme', 'sh_theme_setup' );


    add_theme_support( 'post-thumbnails' ); 

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sh_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sh-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'sh_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sh_theme_scripts() {
    
    /* - - - - styles - - - - - */
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    if(is_rtl()){
        wp_enqueue_style( 'bootstrap-rtl-style', get_template_directory_uri() . '/css/bootstrap-rtl.min.css' );
    }
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
   
    
    /* - - - - plugins styles - - - - - */
    wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'chosen_css', get_template_directory_uri() . '/css/chosen.min.css' );
    /*wp_enqueue_style( 'chosen_css', get_template_directory_uri() . '/css/chosen.min.css' );*/
    wp_enqueue_style( 'chosen_css', get_template_directory_uri() . '/css/magnific-popup.css' );
    wp_enqueue_style( 'mCustomScrollbar_css', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css' );
    
    /* - - - - theme styles - nedd to be last - - - - - */
    wp_enqueue_style( 'sh-theme-style', get_stylesheet_uri() );
    
	/* - - - -  js - - - - - */
    wp_enqueue_script( 'sh-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'sh-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '',true );
    
    /* - - - - plugins js - - - - - */
    if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){
        wp_enqueue_script( 'live', get_template_directory_uri() . '/js/live.js', array(), '',true ); 
    }
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '',true );
    wp_enqueue_script( 'backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array('jquery'), '',true );
    /*wp_enqueue_script( 'chosen_jquery', get_template_directory_uri() . '/js/chosen.jquery.min.js', array('jquery'), '',true );*/
    wp_enqueue_script( 'bootstrap-tabcollapse', get_template_directory_uri() . '/js/bootstrap-tabcollapse.js', array('jquery'), '',true );
    /*wp_enqueue_script( 'spin', get_template_directory_uri() . '/js/spin.min.js', array('jquery'), '',true );*/
    wp_enqueue_script( 'scrolltofixed', get_template_directory_uri() . '/js/jquery-scrolltofixed-min.js', array('jquery'), '',true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '',true ); 
    /*
    docs here:
    http://manos.malihu.gr/jquery-custom-content-scroller/
    */

     wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '',true );
     wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '',true );
     wp_enqueue_script( 'mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '',true );
   
    
    
    /* - - - - have to be last - - - - - */
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '',true );
    
}
add_action( 'wp_enqueue_scripts', 'sh_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load Jetpack compatibility file.
 */
/*require get_template_directory() . '/inc/social_icons_with_acf_config.php';*/

/**
 * Allow SVG through WordPress Media Uploader
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*
Multiple excerpt lengths in wordpress
from http://stackoverflow.com/a/4086542/2721050

then in your template code you just use...
<?php echo excerpt(25); ?>

*/
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }

/*
WordPress is_child() function
http://www.kevinleary.net/wordpress-is_child-for-advanced-navigation/
*/
function is_child( $parent = '' ) {
    global $post;

    $parent_obj = get_page( $post->post_parent, ARRAY_A );
    $parent = (string) $parent;
    $parent_array = (array) $parent;

    if ( in_array( (string) $parent_obj['ID'], $parent_array ) ) {
        return true;
    } elseif ( in_array( (string) $parent_obj['post_title'], $parent_array ) ) {
        return true;    
    } elseif ( in_array( (string) $parent_obj['post_name'], $parent_array ) ) {
        return true;
    } else {
        return false;
    }
}
