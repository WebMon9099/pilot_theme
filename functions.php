<?php

/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.4-alpha', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twentysixteen_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * Create your own twentysixteen_setup() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 */
	function twentysixteen_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */
		load_theme_textdomain('twentysixteen');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Twenty Sixteen 1.2
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 240,
				'width'       => 240,
				'flex-height' => true,
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1200, 9999);

		// This theme uses wp_nav_menu() in three (Modified by PILOTABILITY.COM) locations.
		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'twentysixteen'),
				'secondary' => __('Secondary Menu', 'logged-in-users'),
				'social'  => __('Social Links Menu', 'twentysixteen'),
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

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			)
		);

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style(array('css/editor-style.css', twentysixteen_fonts_url()));

		// Load regular editor styles into the new block-based editor.
		add_theme_support('editor-styles');

		// Load default block styles.
		add_theme_support('wp-block-styles');

		// Add support for responsive embeds.
		add_theme_support('responsive-embeds');

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __('Dark Gray', 'twentysixteen'),
					'slug'  => 'dark-gray',
					'color' => '#1a1a1a',
				),
				array(
					'name'  => __('Medium Gray', 'twentysixteen'),
					'slug'  => 'medium-gray',
					'color' => '#686868',
				),
				array(
					'name'  => __('Light Gray', 'twentysixteen'),
					'slug'  => 'light-gray',
					'color' => '#e5e5e5',
				),
				array(
					'name'  => __('White', 'twentysixteen'),
					'slug'  => 'white',
					'color' => '#fff',
				),
				array(
					'name'  => __('Blue Gray', 'twentysixteen'),
					'slug'  => 'blue-gray',
					'color' => '#4d545c',
				),
				array(
					'name'  => __('Bright Blue', 'twentysixteen'),
					'slug'  => 'bright-blue',
					'color' => '#007acc',
				),
				array(
					'name'  => __('Light Blue', 'twentysixteen'),
					'slug'  => 'light-blue',
					'color' => '#9adffd',
				),
				array(
					'name'  => __('Dark Brown', 'twentysixteen'),
					'slug'  => 'dark-brown',
					'color' => '#402b30',
				),
				array(
					'name'  => __('Medium Brown', 'twentysixteen'),
					'slug'  => 'medium-brown',
					'color' => '#774e24',
				),
				array(
					'name'  => __('Dark Red', 'twentysixteen'),
					'slug'  => 'dark-red',
					'color' => '#640c1f',
				),
				array(
					'name'  => __('Bright Red', 'twentysixteen'),
					'slug'  => 'bright-red',
					'color' => '#ff675f',
				),
				array(
					'name'  => __('Yellow', 'twentysixteen'),
					'slug'  => 'yellow',
					'color' => '#ffef8e',
				),
			)
		);

		// Indicate widget sidebars can use selective refresh in the Customizer.
		add_theme_support('customize-selective-refresh-widgets');
	}
endif; // twentysixteen_setup
add_action('after_setup_theme', 'twentysixteen_setup');

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width()
{
	$GLOBALS['content_width'] = apply_filters('twentysixteen_content_width', 840);
}
add_action('after_setup_theme', 'twentysixteen_content_width', 0);

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Sixteen 1.6
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentysixteen_resource_hints($urls, $relation_type)
{
	if (wp_style_is('twentysixteen-fonts', 'queue') && 'preconnect' === $relation_type) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter('wp_resource_hints', 'twentysixteen_resource_hints', 10, 2);

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Sidebar', 'twentysixteen'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your sidebar.', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Content Bottom 1', 'twentysixteen'),
			'id'            => 'sidebar-2',
			'description'   => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Content Bottom 2', 'twentysixteen'),
			'id'            => 'sidebar-3',
			'description'   => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Sidebar User Menu', 'twentysixteen'),
			'id'            => 'sidebar-user-menu',
			'description'   => __('Appears inside the User Profile Menu', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'twentysixteen_widgets_init');

if (!function_exists('twentysixteen_fonts_url')) :
	/**
	 * Register Google fonts for Twenty Sixteen.
	 *
	 * Create your own twentysixteen_fonts_url() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function twentysixteen_fonts_url()
	{
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
		if ('off' !== _x('on', 'Merriweather font: on or off', 'twentysixteen')) {
			$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
		}

		/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
		if ('off' !== _x('on', 'Montserrat font: on or off', 'twentysixteen')) {
			$fonts[] = 'Montserrat:400,700';
		}

		/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
		if ('off' !== _x('on', 'Inconsolata font: on or off', 'twentysixteen')) {
			$fonts[] = 'Inconsolata:400';
		}

		if ($fonts) {
			$fonts_url = add_query_arg(
				array(
					'family' => urlencode(implode('|', $fonts)),
					'subset' => urlencode($subsets),
				),
				'https://fonts.googleapis.com/css'
			);
		}

		return $fonts_url;
	}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection()
{
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'twentysixteen_javascript_detection', 0);

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts()
{
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), null);

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1');

	// Theme stylesheet.
	wp_enqueue_style('twentysixteen-style', get_stylesheet_uri());

	// Theme block stylesheet.
	wp_enqueue_style('twentysixteen-block-style', get_template_directory_uri() . '/css/blocks.css', array('twentysixteen-style'), '20181230');

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array('twentysixteen-style'), '20160816');
	wp_style_add_data('twentysixteen-ie', 'conditional', 'lt IE 10');

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style('twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array('twentysixteen-style'), '20160816');
	wp_style_add_data('twentysixteen-ie8', 'conditional', 'lt IE 9');

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style('twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array('twentysixteen-style'), '20160816');
	wp_style_add_data('twentysixteen-ie7', 'conditional', 'lt IE 8');

	// Load the html5 shiv.
	wp_enqueue_script('twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');
	wp_script_add_data('twentysixteen-html5', 'conditional', 'lt IE 9');

	wp_enqueue_script('twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_singular() && wp_attachment_is_image()) {
		wp_enqueue_script('twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20160816');
	}

	wp_enqueue_script('twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20181230', true);

	wp_localize_script(
		'twentysixteen-script',
		'screenReaderText',
		array(
			'expand'   => __('expand child menu', 'twentysixteen'),
			'collapse' => __('collapse child menu', 'twentysixteen'),
		)
	);
}
add_action('wp_enqueue_scripts', 'twentysixteen_scripts');

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Twenty Sixteen 1.6
 */
function twentysixteen_block_editor_styles()
{
	// Block styles.
	wp_enqueue_style('twentysixteen-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20181230');
	// Add custom fonts.
	wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), null);
}
add_action('enqueue_block_editor_assets', 'twentysixteen_block_editor_styles');

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes($classes)
{
	// Adds a class of custom-background-image to sites with a custom background image.
	if (get_background_image()) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter('body_class', 'twentysixteen_body_classes');

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb($color)
{
	$color = trim($color, '#');

	if (strlen($color) === 3) {
		$r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
		$g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
		$b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
	} elseif (strlen($color) === 6) {
		$r = hexdec(substr($color, 0, 2));
		$g = hexdec(substr($color, 2, 2));
		$b = hexdec(substr($color, 4, 2));
	} else {
		return array();
	}

	return array(
		'red'   => $r,
		'green' => $g,
		'blue'  => $b,
	);
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr($sizes, $size)
{
	$width = $size[0];

	if (840 <= $width) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ('page' === get_post_type()) {
		if (840 > $width) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if (840 > $width && 600 <= $width) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif (600 > $width) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter('wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10, 2);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
	if ('post-thumbnail' === $size) {
		if (is_active_sidebar('sidebar-1')) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10, 3);

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args($args)
{
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter('widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args');

register_sidebar(array(
	'name' => 'sidebar-left',
	'before_widget' => '<div class="sidebar-box">',
	'after_widget' => '</div>',
	'before_title' => '<div class="widget-title">',
	'after_title' => '</div>'
));

register_sidebar(array(
	'name' => 'sidebar-user-menu',
	'before_widget' => '<div class="sidebar-user-menu-box">',
	'after_widget' => '</div>',
	'before_title' => '<div class="widget-title">',
	'after_title' => '</div>'
));

// Customisations ////////////////////////////////////////////////////////////////////

// add theme custom css & js
add_action('wp_enqueue_scripts', 'custom_scripts');

/**
 * Load our main stylesheet.
 */
function custom_scripts()
{

	$version = filemtime(get_template_directory() . '/js/custom/common.js'); // Gets the file modification time

	wp_enqueue_script('common-js', get_template_directory_uri() . '/js/custom/common.js', ['jquery'], $version);

	wp_localize_script('common-js', 'myScriptData', array(
        'homeUrl' => home_url()
    ));

	wp_localize_script('common-js', 'settings', ['ajaxUrl' => admin_url('admin-ajax.php')]);

	wp_enqueue_style('common-css', get_template_directory_uri() . '/css/custom/common.css');
}

// User profile menu

add_action('wp_ajax_load_profile_menu_content', 'load_profile_menu_content');

function load_profile_menu_content()
{
	$result['status'] = 'error';

	if (
		is_user_logged_in() && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
	) {
		$result['status'] = 'success';
		ob_start();
		dynamic_sidebar('sidebar-user-menu');
		$sb = ob_get_clean();
		$result['data'] = $sb; //'Content retrieved by Ajax call';
		$result = json_encode($result);
	}

	echo $result;
	die;
}

function my_login_stylesheet()
{
	wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/css/custom/login.css');
	//wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');

// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p($content)
{
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');
	return $content;
}
add_filter('the_content', 'disable_wp_auto_p', 0);

function wpb_hook_javascript()
{
?>
	<script>
		(function() {
			$(function() {
				var toggle;
				return toggle = new Toggle('.toggle');
			});

			this.Toggle = (function() {
				Toggle.prototype.el = null;

				Toggle.prototype.tabs = null;

				Toggle.prototype.panels = null;

				function Toggle(toggleClass) {
					this.el = $(toggleClass);
					this.tabs = this.el.find(".tab");
					this.panels = this.el.find(".panel");
					this.bind();
				}

				Toggle.prototype.show = function(index) {
					var activePanel, activeTab;
					this.tabs.removeClass('active');
					activeTab = this.tabs.get(index);
					$(activeTab).addClass('active');
					this.panels.hide();
					activePanel = this.panels.get(index);
					return $(activePanel).show();
				};

				Toggle.prototype.bind = function() {
					var _this = this;
					return this.tabs.unbind('click').bind('click', function(e) {
						return _this.show($(e.currentTarget).index());
					});
				};

				return Toggle;

			})();

		}).call(this);
	</script>
<?php
}
add_action('wp_head', 'wpb_hook_javascript');

function aa_sort_all_archives($query)
{
	// Only sort main query.
	if (!$query->is_main_query()) {
		return;
	}
	// Only sort category archives.
	if (!is_category()) {
		return;
	}
	$query->set('order', 'ASC');
	$query->set('orderby', 'post_title');
}

add_action('pre_get_posts', 'aa_sort_all_archives');

function prefix_category_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'prefix_category_title');

function arphabet_widgets_init()
{

	register_sidebar(array(
		'name'          => 'Knowledgebase Sidebar',
		'id'            => 'knowledgebase_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'arphabet_widgets_init');

function tutsplus_burger_menu_scripts()
{

	wp_enqueue_script('burger-menu-script', get_stylesheet_directory_uri() . '/scripts/burger-menu.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'tutsplus_burger_menu_scripts');

function video_modal_scripts()
{

	wp_enqueue_script('video-modal-script', get_stylesheet_directory_uri() . '/scripts/video-modal.js?v=2', array('jquery'));
}
add_action('wp_enqueue_scripts', 'video_modal_scripts');

function help_menu_scripts()
{

	wp_enqueue_script('help-menu-script', get_stylesheet_directory_uri() . '/scripts/help-menu.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'help_menu_scripts');

function ifpat_menu_scripts()
{

	wp_enqueue_script('ifpat-menu-script', get_stylesheet_directory_uri() . '/scripts/ifpatInfo.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'ifpat_menu_scripts');

function payment_menu_script()
{

	wp_enqueue_script('payment-menu-script', get_stylesheet_directory_uri() . '/scripts/payment-menu.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'payment_menu_script');

function payment_info_script()
{

	wp_enqueue_script('payment-info-script', get_stylesheet_directory_uri() . '/scripts/paymentInfo.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'payment_info_script');

function mobile_footer_visibility()
{

	wp_enqueue_script('mobile-footer-visibility', get_stylesheet_directory_uri() . '/scripts/mobile-footer-visibility.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'mobile_footer_visibility');

function register_activity_style()
{
	if (is_page_template('page_activity.php')) {
		wp_enqueue_style('activity', get_stylesheet_directory_uri() . '/style_activity.css');
	}
}
add_action('wp_enqueue_scripts', 'register_activity_style');

function register_knowledgebase_style()
{
	if (is_page_template('page_knowledgebase.php')) {
		wp_enqueue_style('knowledgebase', get_stylesheet_directory_uri() . '/style_knowledgebase.css');
	}
}
add_action('wp_enqueue_scripts', 'register_knowledgebase_style');

function register_faq_style()
{
	if(is_page('frequently-asked-questions')){
		$version = filemtime(get_template_directory() . '/style_faq.css'); // Gets the file modification time
		wp_enqueue_style('faq', get_stylesheet_directory_uri() . '/style_faq.css', array(), $version);
	}
}
add_action('wp_enqueue_scripts', 'register_faq_style');

function register_userguide_style()
{
	if (is_page_template('page_userguide.php')) {
		wp_enqueue_style('knowledgebase', get_stylesheet_directory_uri() . '/style_userguide.css');
	}
}
add_action('wp_enqueue_scripts', 'register_userguide_style');

add_filter('login_display_language_dropdown', '__return_false');

add_filter('wp_mail_content_type', function ($content_type) {
	return 'text/html';
});

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');

register_sidebar(array(
	'name' => __('Activity Page Sidebar', 'pilotaptitudetest'),
	'id' => 'activity-page-sidebar',
	'description' => __('A widget area located within Activity Page Sidebar', 'pilotaptitudetest'),
	'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

register_sidebar(array(
	'name' => __('User Guide Sidebar', 'pilotaptitudetest'),
	'id' => 'userguide-page-sidebar',
	'description' => __('A widget area located within User Guide Page Sidebar', 'pilotaptitudetest'),
	'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));

function pat_latest_articles()
{

	/* Get all sticky posts */
	$sticky = get_option('sticky_posts');

	/* Sort the stickies with the newest ones at the top */
	rsort($sticky);

	/* Get the 5 newest stickies (change 5 for a different number) */
	$sticky = array_slice($sticky, 0, 6);

	/* Query sticky posts */
	$the_query = new WP_Query(array('post__in' => $sticky, 'ignore_sticky_posts' => 1));
	// The Loop
	if ($the_query->have_posts()) {
		$return .= '<div class="pat-latest-articles"><ul>';
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$return .= '<a href="' . get_permalink() . '"><li style="border-right: 4px solid ' . get_field("article-color") . '"><img src="' . get_field("organisation-image") . '"><div class="_inner_container"><div class="_article_title">' . get_the_title() . '</div></br><div class="_modification_date">Updated: ' . get_the_modified_date("j M o") . '</div></div></li></a>';
		}
		$return .= '</ul></div>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $return;
}
add_shortcode('latest_articles', 'pat_latest_articles');


function my_theme_enqueue_styles() {
    $version = filemtime(get_template_directory() . '/style.css'); // Gets the file modification time
    wp_enqueue_style('my-theme-style', get_stylesheet_uri(), array(), $version);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function additional_template_styles() {
    if ( is_page_template( 'page_product.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/product-page-template.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'additional_template_styles' );

function other_prep_template_styles() {
    if ( is_page_template( 'page_other_prep.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/other-prep-template.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'other_prep_template_styles' );

// Increase per process SQL records scanned for EOT Reminder Emails

			add_filter ('ws_plugin__s2member_pro_eot_reminders_per_process', 'prefix_set_eot_per_process');
			
			function prefix_set_eot_per_process(){
				$per_process = 75;
				return $per_process;
				}

add_action('template_redirect', 'redirect_logged_in_users_to_dashboard');

function redirect_logged_in_users_to_dashboard() {
    // Check if the current page is the specific page you want to apply the redirect on
    if (is_page('/homepage')) {
        if (is_user_logged_in()) {
            wp_redirect('/dashboard');
            exit;
        }
    }
}

function redirect_logged_in_users() {
    // Check if the user is logged in
    if (is_user_logged_in()) {
        // Get the current page template
        $template = get_page_template_slug();

        // Check if the current template is 'page_product.php' or 'page_other_prep.php'
        if ($template == 'page_product.php' || $template == 'page_other_prep.php') {
            // Redirect the user to the '/activities' page
            wp_redirect('/activities');
            exit;
        }
    }
}

// Hook the redirect function to the 'template_redirect' action
add_action('template_redirect', 'redirect_logged_in_users');

function load_post_styles() {
    if (is_single() || is_category()) {
        wp_enqueue_style('post-styles', get_stylesheet_directory_uri() . '/knowledgebase-styles.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'load_post_styles');

function show_post_name($atts) {
    $post_title = get_the_title();
    return $post_title;
}
add_shortcode('post_name', 'show_post_name');

function using_our_software_shortcode() {
    ob_start();
    $html = file_get_contents(get_template_directory() . '/using-our-software.html');
    $html = do_shortcode($html);
    echo $html;
    return ob_get_clean();
}
add_shortcode('using-our-software', 'using_our_software_shortcode');

function faq_flying_schools_shortcode() {
    ob_start();
    $html = file_get_contents(get_template_directory() . '/faq-flying-schools.html');
    $html = do_shortcode($html);
    echo $html;
    return ob_get_clean();
}
add_shortcode('faq-flying-schools', 'faq_flying_schools_shortcode');

function faq_aptitude_tests_shortcode() {
    ob_start();
    $html = file_get_contents(get_template_directory() . '/faq-aptitude-tests.html');
    $html = do_shortcode($html);
    echo $html;
    return ob_get_clean();
}
add_shortcode('faq-aptitude-tests', 'faq_aptitude_tests_shortcode');

function faq_cadet_schemes_shortcode() {
    ob_start();
    $html = file_get_contents(get_template_directory() . '/faq-cadet-schemes.html');
    $html = do_shortcode($html);
    echo $html;
    return ob_get_clean();
}
add_shortcode('faq-cadet-schemes', 'faq_cadet_schemes_shortcode');

function faq_airlines_shortcode() {
    ob_start();
    $html = file_get_contents(get_template_directory() . '/faq-airlines.html');
    $html = do_shortcode($html);
    echo $html;
    return ob_get_clean();
}
add_shortcode('faq-airlines', 'faq_airlines_shortcode');

function faq_skills_shortcode() {
    ob_start();
    $html = file_get_contents(get_template_directory() . '/faq-skills.html');
    $html = do_shortcode($html);
    echo $html;
    return ob_get_clean();
}
add_shortcode('faq-skills', 'faq_skills_shortcode');