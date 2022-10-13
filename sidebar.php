<?php
/**
 * The sidebar containing the main widget areas
 * the data-moveat will move the entire sidebar-holder into the right panel at 1200 pixels
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */
?>
<?php $right_side_space = '0'; ?>
<?php if ( redux_demo_get_option('header_wide') == 'boxed-var' ) { ?>
	<?php $right_side_space = redux_demo_get_option('sidebar_right_space_widely') ?>
	<?php } ?>
	
<?php if (is_page()) { ?>
	<?php if (redux_demo_get_option('page_sidebar_position') == 'sidebar-left' ) { ?>
		<?php if (is_active_sidebar('main-sidebar')) { ?>
			<aside id="secondary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area d-inline-block span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-left:<?php echo $right_side_space; ?>px; margin-left:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
<?php } 
   if (redux_demo_get_option('page_sidebar_position') == 'sidebar-right' ) { ?>
		<?php if ( is_active_sidebar('main-sidebar')) { ?>
			<aside id="secundary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-right:<?php echo $right_side_space; ?>px; margin-right:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
	<?php } 
?>
<?php }
 if ( is_front_page() || is_home() ) { ?>
	<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-left') { ?>
	<?php if (is_active_sidebar('main-sidebar')) { ?>
	<aside id="secondary sidebar" class="sidebar-shadow home-page-sidebar   rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area d-inline-block span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-left:<?php echo $right_side_space; ?>px; margin-left:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
<?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<?php if ( is_active_sidebar('main-sidebar')) { ?>
	<aside id="secundary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-right:<?php echo $right_side_space; ?>px; margin-right:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
	
	<?php } ?>
<?php } 
 if (is_single()) { ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
	<?php if (is_active_sidebar('main-sidebar')) { ?>
	<aside id="secondary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar  rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area d-inline-block span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-left:<?php echo $right_side_space; ?>px; margin-left:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
<?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<?php if ( is_active_sidebar('main-sidebar')) { ?>
		<aside id="secundary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar  rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-right:<?php echo $right_side_space; ?>px; margin-right:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
	
	<?php } ?>
<?php } 
 if (is_archive()) { ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
	<?php if (is_active_sidebar('main-sidebar')) { ?>
	<aside id="secondary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area d-block span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-left:<?php echo $right_side_space; ?>px; margin-left:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
<?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) 
{ ?>
	<?php if ( is_active_sidebar('main-sidebar')) { ?>
	<aside id="secondary sidebar" class="sidebar-shadow home-page-sidebar   mobilesidebar rem-sidebar-inner sidebar__inner navmobilemyaccount2 widget-area sidebar-area span-4 sidebar-bg sidebar" role="complementary">
	<div style="padding-right:<?php echo $right_side_space; ?>px; margin-right:<?php echo $right_side_space; ?>px;">
	<?php dynamic_sidebar('main-sidebar'); ?>
	</div>
</aside><!-- #secondary -->
<?php } ?>
	<?php } ?>
<?php }  ?>