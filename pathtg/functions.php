<?php
/**
 * pathtg functions and definitions.
 */

if ( ! function_exists( 'pathtg_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
		function pathtg_setup() {
			/*
			* Make theme available for translation.
			* Translations can be filed in the /languages/ directory.
			* If you're building a theme based on Crafty Press, use a find and replace
			* to change 'pathtg' to the name of your theme in all the template files.
			*/
			load_theme_textdomain( 'pathtg', get_template_directory() . '/languages' );

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

			// Set up the WordPress core custom background feature.
			add_theme_support(
				'custom-background',
				apply_filters(
					'pathtg_custom_background_args',
					array(
						'default-color' => 'ffffff',
						'default-image' => '',
					)
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
				)
			);

			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );

			/**
			 * Add support for core custom logo.
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

			/**
			 * Add Support for Custom Page Header.
			 */
			// add_theme_support(
			// 	'custom-header',
			// 	array(
			// 		'flex-width'     => true,
			// 		'width'          => 1600,
			// 		'flex-height'    => true,
			// 		'height'         => 450,
			// 		'default-image'  => '',
			// 	)
			// );

			/**
			 * Add Post Type Support.
			 */
			add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );
			

			// This theme uses wp_nav_menu() in one location.
			register_nav_menus(
				array(
					'navbar'        => esc_html__( 'Navbar', 'pathtg' ),
					'services'         => esc_html__( 'Services Menu', 'pathtg' ),
					'quick_link'  => esc_html__( 'Quick Link', 'pathtg' ),
				)
			);

			add_filter( 'show_admin_bar', '__return_false' );
		}
}

add_action( 'after_setup_theme', 'pathtg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pathtg_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pathtg_content_width', 1170 );
}
add_action( 'after_setup_theme', 'pathtg_content_width', 0 );

/**
 * Register Sidebar widget area.
 *
 * @since 1.0.0
 */
function pathtg_sidebar_widgets_init() {
	// Default Sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pathtg' ),
			'id'            => 'default-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pathtg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'pathtg_sidebar_widgets_init' );

/**
 * Enqueue public scripts and styles.
 */
function pathtg_public_scripts() {
	// Styles.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), wp_rand(), 'all' );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/font_6/css/all.min.css', array(), wp_rand(), 'all' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', array(), wp_rand(), 'all' );


	// Custom stylesheet.
	wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), wp_rand(), 'all' );

	// Scripts.
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array( 'jquery' ), wp_rand(), true );
}
add_action( 'wp_enqueue_scripts', 'pathtg_public_scripts' );

/**
 * Enqueue admin scripts and styles.
 */

// function pathtg_admin_scripts() {
// 	// Admin styles.
// 	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), wp_rand(), 'all' );
// }
// add_action( 'admin_enqueue_scripts', 'pathtg_admin_scripts' );


 require_once('bootstrap_5_wp_nav_menu_walker.php');

function remove_menu_item_classes($classes, $item, $args) {
    // Specify the classes you want to remove
    $classes_to_remove = array(
        'menu-item',
        'menu-item-type-custom',
        'menu-item-object-custom',
        'nav-item-8'
    );

    // Remove the specified classes from the array
    $classes = array_diff($classes, $classes_to_remove);

    return $classes;
}

add_action( 'admin_enqueue_scripts', 'admin_enqueue_scripts_callback' );

function admin_enqueue_scripts_callback() {

// WordPress media uploader scripts
    if ( ! did_action( 'wp_enqueue_media' ) ) {
	wp_enqueue_media();
    }
// our uploader.js 
    wp_enqueue_script('uploaderjs', get_stylesheet_directory_uri() . '/assets/javascript/uploader.js', array(), "1.0", true);
}

add_filter('nav_menu_css_class', 'remove_menu_item_classes', 10, 3);

add_action( 'category_add_form_fields', 'category_add_form_fields_callback' );
function category_add_form_fields_callback() {
    $image_id = null;
    ?>

    <div id="category_custom_image"></div>
    <input 
          type="hidden" 
          id="category_custom_image_url"     
          name="category_custom_image_url">
    <div style="margin-bottom: 20px;">
        <span>Category Image </span>
        <a href="#" 
            class="button custom-button-upload" 
            id="custom-button-upload">Upload image</a>
        <a href="#" 
            class="button custom-button-remove" 
            id="custom-button-remove" 
            style="display: none">Remove image</a>
    </div>

<?php 

}


add_action( 'create_term', 'custom_create_term_callback' );

function custom_create_term_callback($term_id) {
    // add term meta data
    add_term_meta( 
        $term_id, 
        'term_image',   
        esc_url($_REQUEST['category_custom_image_url'])
    );

}

add_action ( 'category_edit_form_fields', 'category_edit_form_fields_callback', 10, 2 );

function category_edit_form_fields_callback($ttObj, $taxonomy) {

    $term_id = $ttObj->term_id;
    $image = '';
    $image = get_term_meta( $term_id, 'term_image', true );

    ?>
    <tr class="form-field term-image-wrap">
      <th scope="row"><label for="image">Image</label></th>
	<td>
        <?php if ( $image ): ?>
        <span id="category_custom_image">
           <img src="<?php echo $image; ?>" style="width: 100%"/>
        </span>
        <input 
           type="hidden" 
           id="category_custom_image_url" 
           name="category_custom_image_url">
                
        <span>
           <a href="#" 
             class="button custom-button-upload" 
             id="custom-button-upload" 
             style="display: none">Upload image</a>
           <a href="#" class="button custom-button-remove">Remove image</a>                    
        </span>
        <?php else: ?>
        <span id="category_custom_image"></span>
        <input 
            type="hidden" 
            id="category_custom_image_url" 
            name="category_custom_image_url">
        <span>
           <a href="#" 
              class="button custom-button-upload" 
              id="custom-button-upload">Upload image</a>
           <a href="#" 
              class="button custom-button-remove" 
              style="display: none">Remove image</a>
        </span>
        <?php endif; ?>
        </td>
    </tr>
        
    <?php
}

add_action( 'edit_term', 'edit_term_callback' );

function edit_term_callback($term_id) {
    $image = '';
    $image = get_term_meta( $term_id, 'term_image' );

    if ( $image )
    update_term_meta( 
        $term_id, 
        'term_image', 
        esc_url( $_POST['category_custom_image_url']) );

    else
    add_term_meta( 
        $term_id, 
        'term_image', 
        esc_url( $_POST['category_custom_image_url']) );
}

