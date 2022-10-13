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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php add_analytic_script(); ?>
<?php add_meta_desc(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php global $redux_demo; ?><?php echo redux_demo_get_option( 'favicon' ); ?>" rel="shortcut icon" />
<style>
 <?php get_template_part('inc/frame/color'); ?>
	</style>
	<?php wp_head(); ?>
</head>


<div id="aspace-body" class="page-template-redux-templates_canvas"><!-- aspace-body start 01-->
<?php if ( !is_plugin_active ('aspace-options/aspace-options.php')) { ?>
	<?php redux_plugin_check(); ?>
<?php } 
if (redux_demo_get_option('loader-animation') == 'three') { ?>
<div id="mainloader" class="loader ">
<img src="https://agency.dronstar.com/wp-content/uploads/2022/10/load-gif.gif" alt="aspace">
</div>
    <?php	} ?>
   

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
