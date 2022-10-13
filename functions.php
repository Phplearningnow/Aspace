<?php

/**
 * Aspace functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2
 *
 * The first file to look at is theme.config.json where you can quickly set up some theme settings
 * like google fonts, icons for various areas and logo position
 * you can also set the mobile menu by editing the mobile_menu_type option to open as app-menu or leave blank to open regular
 * default_acf_header_block: add your post types here to force them to have a header block when a new post is made.
 *
 * Then you should set your CSS variables in variables.scss
 *
 * Once those are both edited, you can come here and add image sizes, widgets and anything else
 * Remember it might not be necessary to enqueue js files here as any js file starting with an underscore will be added automatically to the front end js build
 * That will work only if the file is inside the inc or parts folders.
 * This ability also works for any scss file added with an underscore in those folders too.
 * This also works for underscored php files.
 * therefore all php files in the inc folder are already automatically included
 *
 * Besides adding image sizes, you may find you dont have to do much in here.
 */

/**
 * Aspace only works in WordPress 4.5 or later. Here we check before allowing the theme to be used.
 * There is nothing here for you to do.
 */
if (version_compare($GLOBALS['wp_version'], '5.5', '<')) {
	//require get_template_directory() . '/inc/core/back-compat.php';

	return;
}


/**
 * Register Custom Navigation Walker
 */
require_once(trailingslashit(get_template_directory()) . '/inc/class-aspace-started.php');

require_once(ABSPATH . 'wp-admin/includes/plugin.php');
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'redux_register_required_plugins'); 
require_once(trailingslashit(get_template_directory()) . '/inc/install-plugins.php'); 

/**
 * Fire on the initialization of WordPress.
 */
add_action('after_setup_theme', 'aspace_setup');
if (!function_exists('aspace_setup')) :
	function aspace_setup()
	{
		// Register theme features.
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');
	 	add_theme_support(
			'woocommerce'
		); 
		load_theme_textdomain('aspace');
		add_theme_support('post-thumbnails');
		add_image_size('aspace_full', 1200, 630, true);
		add_image_size('aspace_big', 900, 440, true);
		add_image_size('aspace_featured', 640, 360, true);
		add_image_size('aspace_square', 300, 300, true);
		add_image_size('aspace_grid', 370, 270, true);
		add_image_size('aspace_slider', 1920, 550, true);
		add_image_size('aspace_small', 580, 300, true);
		add_image_size('aspace_thumbnail', 300, 200, true);
		add_image_size('aspace_mini', 150, 100, true);
		set_post_thumbnail_size(220, 150);
		add_theme_support('automatic-feed-links');
		register_nav_menus(array(
			'primary' => esc_html__('Primary Menu', 'aspace'),
			'custom' => esc_html__('Custom Menu for top on header or where you need it use the shortcode', 'aspace'),
			'footer' => esc_html__('Footer Menu', 'aspace')
		));
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support('align-wide');
		add_theme_support('responsive-embeds');
		add_theme_support('wp-block-styles');
		add_theme_support('editor-styles');
		add_theme_support('post-formats', array('video', 'quote', 'link', 'gallery', 'image', 'audio'));
		add_post_type_support('post', 'post-formats');
		add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
		add_theme_support('custom-background', apply_filters('aspace_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => ''
		)));
	}
endif;


require get_template_directory() . '/inc/core/_extras.php';
/*
	 * tinymce styles
	  */
 add_editor_style(array(
	get_template_directory_uri() . '/dist/frontEnd.css?' . wp_get_theme()->get('Version'),
	//aspace_google_fonts_url()
)); 

function aspace_content_width()
{
	$GLOBALS['content_width'] = 730;
}
add_action('after_setup_theme', 'aspace_content_width', 0);
//require get_template_directory() . '/inc/core/grid_list_toggle.php'; 
require get_template_directory() . '/inc/enqueue.php';

function aspace_design_scripts()
{
	global $wp;

	if (aspace_get_config('google_fonts')) {
		wp_enqueue_style('aspace-design-fonts', aspace_google_fonts_url(), array(), wp_get_theme()->get('Version'));
	}

	wp_enqueue_style('aspace-design-styles-gallery', get_stylesheet_uri(), '', wp_get_theme()->get('Version'));
	wp_enqueue_style('aspace-design-styles-gallery', get_theme_file_uri('/dist/frontEnd.css'), '', wp_get_theme()->get('Version'));

	wp_enqueue_script(
		'aspace-design-custom-js',
		get_template_directory_uri() . '/dist/frontEnd_bundle.js',
		array(
			'jquery',
			'polyfill'
		),
		wp_get_theme()->get('Version'),
		true
	);

	wp_localize_script('aspace-design-custom-js', 'frontEndAjax', array(
		'ajaxurl'    => admin_url('admin-ajax.php'),
		'nonce'      => wp_create_nonce('ajax_nonce'),
		'url'        => home_url(),
		'currentUrl' => home_url($wp->request)
	));
}

add_action('wp_enqueue_scripts', 'aspace_design_scripts');

function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function my_filter_plugin_updates($value)
{
	if (isset($value->response['facebook-comments-plugin/facebook-comments.php'])) {
		unset($value->response['facebook-comments-plugin/facebook-comments.php']);
	}
	return $value;
}
add_filter('site_transient_update_plugins', 'my_filter_plugin_updates');


//main functions


require get_template_directory() . '/inc/template-functionsv2.php';
require get_template_directory() . '/inc/_custom_queries.php'; 

	require get_template_directory() . '/inc/core/woocommerce.php';
  

require get_template_directory() . '/inc/bmi/img-hover-blog3.php';
//require get_template_directory() . '/inc/bmi/img-hover-blog4.php';
require get_template_directory() . '/inc/bmi/class-aspace-footer-login.php';
require get_template_directory() . '/inc/bmi/class-aspace-login.php';
require get_template_directory() . '/inc/bmi/img-hover.php';
require get_template_directory() . '/inc/bmi/img-hover-single.php';
//core
require_once get_parent_theme_file_path('/inc/core/dev-helpers.php');
require get_template_directory() . '/inc/core/template-classes.php';
require get_template_directory() . '/inc/core/template-category.php';
require get_template_directory() . '/inc/core/_template-tags.php';
// WooCommerce

require get_template_directory() . '/inc/demos-free-ocdi.php';




require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/_optional_filters.php';
require get_template_directory() . '/lib/metaboxes.php';


//require get_template_directory() . '/inc/style-block/block.php';
require get_template_directory() . '/inc/section_header/index.php';
require get_template_directory() . '/inc/post-like.php';


