<?php
/**
 * Header file for the Aspace WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php add_analytic_script(); ?>
<?php add_meta_desc(); ?>
<style>
 <?php  get_template_part('inc/frame/color'); ?>
	</style>
	<?php wp_head(); ?>
</head>
<?php
        $app_menu = aspace_get_config("mobile_menu_type", 'regular_menu'); //accepts svg icon or 'app' which renders the special = to x
        ?>
<body <?php body_class( $app_menu ); ?>>
		<?php if ( function_exists( 'wp_body_open' ) ) 
		{
			wp_body_open();
		} else {
			do_action('wp_body_open');
		} 
	?>
<div id="aspace-body" class="container">


<?php if (redux_demo_get_option('lay_header') == 1 ) { ?>
		<?php get_template_part('template-parts/content-header-right'); ?>
	
		<?php  } else if (redux_demo_get_option('lay_header') == 12 ) { ?>
			<?php get_template_part('template-parts/content-header-left'); ?>
<?php } elseif (redux_demo_get_option('lay_header') == 2 ) { ?>
			<?php get_template_part('template-parts/content-header'); ?>
<?php } elseif (redux_demo_get_option('lay_header') == 3 ) { ?>
			<?php get_template_part('template-parts/content-header'); ?>
<?php } elseif (redux_demo_get_option('lay_header') == 4 ) { ?>
			<?php get_template_part('template-parts/content-header'); ?>
<?php } elseif (redux_demo_get_option('lay_header') == 5 ) { ?>
			<?php get_template_part('template-parts/content-header'); ?>
<?php } ?>