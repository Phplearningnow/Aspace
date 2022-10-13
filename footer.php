<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #page and #content div and any content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2
 */

?>
</div><!-- #site-content -->

 <?php if( function_exists('is_shop') && is_shop() || ( function_exists('is_product') && is_product()) || ( function_exists('is_woocommerce') && is_woocommerce()) ? 'product' : ''){  ?>
<div>
 <?php } ?>


<?php global $redux_demo; ?>





<?php if (redux_demo_get_option('footer_two') == true) { ?>
		<?php get_template_part('template-parts/footer-cta/footer'); ?>
		<?php get_template_part('template-parts/footer-follow/footer'); ?>
	<?php	} ?> 
	<?php $margin_top_150 = ""; ?>
	<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
<?php $margin_top_150 = "mt-150"; ?>
<?php	} ?> 
<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
<?php $margin_top_150 = "mt-150"; ?>
<?php	} ?> 
	
	<footer id="colophon" class="<?php echo $margin_top_150; ?> site-footer rem-main-sticky main-sticky">
		<div class="foo clearas">
			<?php if (redux_demo_get_option('show_asp_img') && redux_demo_get_option('show_asp_img') == true) {  ?>
				<div class="pull-10 logofooaspace mt-2"><img src="<?php echo redux_demo_get_option('get_asp_img') ?>" alt="aspace-wordpress-theme"></div>
			<?php } ?>
			<?php if (redux_demo_get_option('footer_bottom')) : { ?>
					<?php global $redux_demo; ?>
					<?php $footer_layout = redux_demo_get_option('footer_columns');
					if (empty($footer_layout)) {
						$footer_layout = '';
					}
					if ($footer_layout == 1) {
						get_template_part('template-parts/footer/footer-1');
					} else if ($footer_layout == 2) {
						get_template_part('template-parts/footer/footer-2');
					} else if ($footer_layout == 3) {
						get_template_part('template-parts/footer/footer-3');
					} else if ($footer_layout == 4) {
						get_template_part('template-parts/footer/footer-4');
					} ?><?php }
			endif; ?>
		</div>
		<?php global $redux_demo;
		$foo_style = '';
		if (isset($redux_demo['foo_copy_align']) && $redux_demo['foo_copy_align'] == 'right_wf') {
			$foo_style = 'right';
		} elseif ($redux_demo['foo_copy_align'] ?? '' == 'center_wf') {
			$foo_style = 'center';
		} elseif ($redux_demo['foo_copy_align'] ?? '' == 'left_wf') {
			$foo_style = 'left';
		} ?>
	<?php	if (is_page() && (redux_demo_get_option('up_btn_footer_page') == true) ) { 
  	 get_template_part('template-parts/footer-v3/btnup');
}
else if ( is_home() && (redux_demo_get_option('up_btn_footer') == true) && (redux_demo_get_option('up_btn_footer_page') == true) ) {
	get_template_part('template-parts/footer-v3/btnup');
}
elseif (is_category() && (redux_demo_get_option('up_btn_footer') == true) ) {
		get_template_part('template-parts/footer-v3/btnup');
}  elseif (is_tag() && (redux_demo_get_option('up_btn_footer') == true) ) {
	get_template_part('template-parts/footer-v3/btnup');
}  elseif (is_single() && (redux_demo_get_option('up_btn_footer') == true) ) {
	get_template_part('template-parts/footer-v3/btnup');
}  elseif (function_exists ( 'is_woocommerce' ) && (redux_demo_get_option('up_btn_footer') == true) ) {
	get_template_part('template-parts/footer-v3/btnup');
}?>
		<?php if (redux_demo_get_option('up_btn_footer') == true) { ?>
	
		<?php } ?>
		<?php if (redux_demo_get_option('loader-animation') == 'one') { ?>
		<div id="load"><a href="#" class="spinner-snake scrollup2 theme11"></a></div>
		<?php } elseif (redux_demo_get_option('loader-animation') == 'two') { ?>
			<div id="inject-loader-wrapper" class="theme11">
			<div class="cssload-loader">
        <div class="cssload-inner cssload-one"></div>
        <div class="cssload-inner cssload-two"></div>
        <div class="cssload-inner cssload-three"></div>
    </div>
</div>
	<?php	} ?>

		<?php aut_search_form_footer(); ?>
		<?php get_template_part('/template-parts/bg/bg-b'); ?>
		<!-- body backgrounhd shapes -->
		<?php if (redux_demo_get_option('login_btn_footer') == true) { ?>
			<?php aspace_footer_mobile(); ?>
		<?php } ?>
		<div class="site-info clearas copy-<?php echo esc_attr($foo_style); ?> foo-moo">
			<?php global $redux_demo; ?>
			<?php $footer_copy = redux_demo_get_option('footer_copyright'); ?>
			<?php if (redux_demo_get_option('footer_copy') && redux_demo_get_option('footer_copy') == true) { ?>
				<div class="col-md-8 col-md-10 col-md-12 copy-center foocopyrighttext"> <?php echo  $redux_demo['footer_copyright'];
	          esc_attr(redux_demo_get_option('footer_copyright')); ?> </div>
			<?php } ?>
		</div>
	</footer>

	<?php wp_footer(); ?>
 <?php //get_template_part('inc/frame/js'); ?>
<?php //get_template_part('template-parts/footer/script'); ?>
</body>
</html>