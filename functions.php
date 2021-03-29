<?php
/**
 * Toborino functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Toborino
 */
include("inc/tbr.inc.php");
include("inc/clean-wp.inc.php");
include("inc/__class-wp-bootstrap-navwalker.php");
include("inc/__cpts.inc.php");
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'toborino_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function toborino_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Toborino, use a find and replace
		 * to change 'toborino' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'toborino', get_template_directory() . '/languages' );

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
		add_image_size( 'recentes', 100, 100, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'toborino' ),
				'menu-2' => esc_html__( 'Internal', 'toborino' ),
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
	}
endif;
add_action( 'after_setup_theme', 'toborino_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function toborino_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'toborino' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'toborino' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'toborino_widgets_init' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opções',
		'menu_title'	=> 'Opções Gerais',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position'		=> 24,
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Opções :: Ação',
		'menu_title'	=> 'CTA',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/** * Completely Remove jQuery From WordPress */
function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');

function posts_recentes() {
    $del_recent_posts = new WP_Query();
    $del_recent_posts->query('showposts=3');
        while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
	<!-- Single Recent Post-->
	<div class="single-recent-post d-flex align-items-center">
	<?php if(get_the_post_thumbnail_url($post->ID,'medium')){ ?>
	  <div class="post-thumb"><a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('recentes'); ?></a></div>
	<?php } ?>
	  <div class="post-content"><a class="post-title" href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a>
		<p class="post-date"><?php esc_html(the_date()); ?></p>
	  </div>
	</div>
        <?php endwhile;
    wp_reset_postdata();
}

function paginate_link_function(){
    global $wp_query;
    echo paginate_links(array(
        'current'=>max(1,get_query_var('paged')),
        'total'=>$wp_query->max_num_pages,
		'prev_text' => __( '<<', 'toborino' ),
		'next_text' => __( '>>', 'toborino' ),
        'type'=>'list', //default it will return anchor
    ));
}