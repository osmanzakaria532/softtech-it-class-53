<?php
/**
 * genesys functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package genesys
 */

if ( ! defined( 'genesys' ) ) {
	// Replace the version number of the theme on each release.
	define( 'genesys', '1.1.2' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function genesys_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on genesys, use a find and replace
		* to change 'genesys' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'genesys', get_template_directory() . '/languages' );

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
			'menu-1'      => esc_html__( 'Primary', 'genesys' ),
			'menu-2'      => esc_html__( 'Topbar', 'genesys' ),
			'footer-menu' => esc_html__( 'Footer', 'genesys' ),
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
			'genesys_custom_background_args',
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
add_action( 'after_setup_theme', 'genesys_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function genesys_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'genesys_content_width', 640 );
}
add_action( 'after_setup_theme', 'genesys_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function genesys_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'genesys' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'genesys' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Additional Sidebar', 'genesys' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'genesys' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//  registering second sidebar

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-Widget-1', 'genesys' ),
			'id'            => 'footer-widget-1',
			'description'   => esc_html__( 'Add widgets here.', 'genesys' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-Widget-2', 'genesys' ),
			'id'            => 'footer-widget-2',
			'description'   => esc_html__( 'Add widgets here.', 'genesys' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-Widget-3', 'genesys' ),
			'id'            => 'footer-widget-3',
			'description'   => esc_html__( 'Add widgets here.', 'genesys' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-Widget-4', 'genesys' ),
			'id'            => 'footer-widget-4',
			'description'   => esc_html__( 'Add widgets here.', 'genesys' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'genesys_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function genesys_scripts() {
	wp_enqueue_style( 'genesys-style', get_stylesheet_uri(), array(), genesys );
	wp_style_add_data( 'genesys-style', 'rtl', 'replace' );
	wp_enqueue_style('geneysys-bootstrap-css','get_template_directory_uri'().'/design-assets/lib/bootstrap.css');
	wp_enqueue_style('geneysys-fontawesome-css', get_template_directory_uri() .'/design-assets/lib/font-awesome/css/all.css'); 
	wp_enqueue_script('jquery');
	

	wp_enqueue_style('genesys-css','get_template_directory_uri'().'/design-assets/css/theme-ui.css');
	wp_enqueue_style( 'genesys-fonts', "https://fonts.googleapis.com/css2?family=Changa:wght@500&family=Days+One&family=Inter&family=League+Spartan:wght@500&family=Londrina+Solid&family=Montserrat:ital@1&family=Oswald&family=Poppins:ital,wght@0,400;1,200&family=Roboto&family=Roboto+Condensed&family=Rubik&family=Source+Sans+Pro&family=Ubuntu&family=Yanone+Kaffeesatz&display=swap", true );
	wp_enqueue_script( 'genesys-navigation', get_template_directory_uri() . '/js/navigation.js', array(), genesys, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'genesys_scripts' );

//Change the Customizer color palette presets
add_action('customize_controls_print_footer_scripts', function () {
	?>

	<script>
	jQuery(document).ready(function($){
	$('.wp-picker-container').iris({
	mode: 'hsl',
	controls: {
	horiz: 'h', // square horizontal displays hue
	vert: 's', // square vertical displays saturdation
	strip: 'l' // slider displays lightness
	},
	palettes: ['#91472c', '#6d775f', '#f9fffb', '#546a76', '#F2B7C6', '#87B38D', '#99EDCC', '#FFEE88', '#00CC99', '#BED558', '#DCD6F7', '#FFDA22', '#F0F8EA', '#F5F9E9', '#F4FAFF']
	})
	});
	</script>
	<?php
	});

	// setting excerpt lenth to 30 words

// tn custom excerpt length
		function genesys_custom_excerpt_length( $length ) {
		if ( is_admin() ) return $length;
			 return 20;
			}
			add_filter( 'excerpt_length', 'genesys_custom_excerpt_length', 999 );

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

function genesys_get_breadcrumbs() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';?>
	<img id="greater-than" src="<?php echo esc_url( get_template_directory_uri(). '/img/Greater-than.png');?>"/>

   <?php if (is_category() || is_single()) {
        echo "<span class='space'></span>";
        the_category(' &bull;');
            if (is_single()) {?>
                <img id="greater-than" src="<?php echo esc_url( get_template_directory_uri(). '/img/Greater-than.png');?>"/>
               <?php the_title();
            }
    } elseif (is_page()) {
        echo "<span class='space'></span>";
        echo the_title();
    } elseif (is_search()) {
        echo ";Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// 