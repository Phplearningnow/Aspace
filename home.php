
<?php
/**
 * The template for displaying homepage
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */
get_header(); ?>
  
<?php add_filter( 'the_title', 'sow_max_title_length'); ?>


<?php global $redux_demo; ?>
<?php if (is_page()) { 
  if (redux_demo_get_option('breadcrumb_on_page') && redux_demo_get_option('breadcrumb_on_page') == true ) { 
 royal_breadcrumb_color(); ?>
 <?php } ?>
<?php } else ?>
<?php if ( is_front_page() || is_home() ) { 
  if (redux_demo_get_option('breadcrumb_on') && redux_demo_get_option('breadcrumb_on') == true ) { 
 royal_breadcrumb_color(); ?>
<?php } ?>
<?php } ?>
<div class="foov1 clearas">
	<?php global $redux_demo; ?>
	<?php if (redux_demo_get_option('widgets-show-on-home') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-1-home') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-1-home']) && !empty($redux_demo['active-widgets-meta-1-home'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-1-home'] as $foot_page) { 
 
  if ( is_active_sidebar( $foot_page ) ) : ?>
    <?php dynamic_sidebar( $foot_page ); 
    endif; ?>
    <?php } ?>
    <?php } ?>
    <?php //get_template_part('template-parts/body/body-4'); ?>
 <?php } ?>
<?php } 
     // Get the list of all registered sidebars using wp_registered_sidebars
?>
</div>
 <div class="over-pgcu"> 
<?php echo do_shortcode("[pgcu]"); ?>
 </div> 

<div class="foov1 clearas">
	<?php global $redux_demo; ?>
	<?php if (redux_demo_get_option('widgets-show-on-home') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-2-home') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-2-home']) && !empty($redux_demo['active-widgets-meta-2-home'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-2-home'] as $foot_page) { 
 
  if ( is_active_sidebar( $foot_page ) ) : ?>
    <?php dynamic_sidebar( $foot_page ); 
    endif; ?>
    <?php } ?>
    <?php } ?>
    <?php //get_template_part('template-parts/body/body-4'); ?>
 <?php } ?>
<?php } 
     // Get the list of all registered sidebars using wp_registered_sidebars
?>
</div>
<?php $layout_class = aspace_single_layout_class(); ?>
<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
<div class="rowflexible d-flex rem-main-sticky main-sticky"> <?php } ?>
<!-- rewflex  -->
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<div class="rowflexible rightsidebarmob d-flex rem-main-sticky main-sticky">	<?php } ?>
	<!-- rewflex  -->
<?php if (redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
	<div class="rowflexible "> 	<?php } ?>
	<!-- rewflex  -->
<?php $layout_class = aspace_single_layout_class(); ?>
<?php global $redux_demo; ?>
	<?php
	$mlresponsive = '';
	if(redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { 
    $mlresponsive = 'mlresponsive';
	}
	if ('sidebar-left' == $layout_class) :       
		get_sidebar();
	endif;
	if ((redux_demo_get_option('center_content_blog') == 'center' ) &&  redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
		<main id="main primary" class="<?php echo $mlresponsive ?> site-main col-md-12 rem-main-sticky main-sticky <?php echo esc_attr($layout_class); ?>" role="main">
<!-- main -->
<?php } else { ?> 
	  <main id="primary main" class="mobilecontent mobilecontent site-main laym col-md-8 rem-main-sticky main-sticky <?php echo esc_attr($layout_class); ?>">
<!-- main -->
	<?php } ?>

	<?php if (redux_demo_get_option('widgets-show-on-home') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-4-home') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-4-home']) && !empty($redux_demo['active-widgets-meta-4-home'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-4-home'] as $foot_page) { ?>
 <div class="mt-10"> <!-- dinamic sidebar start- end -->
 <?php if ( is_active_sidebar( $foot_page ) ) : ?>
    <?php dynamic_sidebar( $foot_page ); ?>
	</div><!-- dinamic sidebar start- end -->
<?php   endif; ?>
    <?php } ?>
    <?php } ?>
	<?php } ?>
<?php } ?>

  <?php  echo do_shortcode('[simple_masonry]'); ?>
  <!-- solo el load more estara dentro si es fullwidth o without sidebar -->
  <?php if (redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
<?php if (redux_demo_get_option('load_more_on_grid') == 'yes' ) { 
			do_shortcode('[ajax-loadmore-button]');
		} elseif (redux_demo_get_option('load_more_on_grid') == 'no' ) { ?>
			<div class="card-pagination text-center form-group"><!-- pag start -->
			 <?php
				the_posts_pagination(array(
					'prev_text'          => '<i class="fas fa-arrow-left style="color:black !important;"></i><span class="screen-reader-text">' . esc_html__('Previous page', 'aspace') . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . esc_html__('Next page', 'aspace') . '</span><i class="fas fa-arrow-right style="color:black !important;"></i>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'aspace') . ' </span>',
				)); ?>
						</div><!-- pag end -->
		<?php	}	?>

	<?php } ?>
		</main> <!-- main -->
		<?php
	if ('sidebar-right' == $layout_class) : ?>
	<?php	get_sidebar(); ?>
	<?php endif; ?> 
	</div><!-- sidebar right active  -->
	<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
	<?php if (redux_demo_get_option('load_more_on_grid') == 'yes' ) { 
			do_shortcode('[ajax-loadmore-button]');
		} elseif (redux_demo_get_option('load_more_on_grid') == 'no' ) { ?>
			<div class="card-pagination text-center form-group" style="margin-left: auto;"><!-- pag start -->
			 <?php
				the_posts_pagination(array(
					'prev_text'          => '<i class="fas fa-arrow-left style="color:black !important;"></i><span class="screen-reader-text">' . esc_html__('Previous page', 'aspace') . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . esc_html__('Next page', 'aspace') . '</span><i class="fas fa-arrow-right style="color:black !important;"></i>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'aspace') . ' </span>',
				)); ?>
				</div><!-- pag end -->
		<?php	}	?>
	
<?php } ?>
<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<?php if (redux_demo_get_option('load_more_on_grid') == 'yes' ) { 
			do_shortcode('[ajax-loadmore-button]');
		} elseif (redux_demo_get_option('load_more_on_grid') == 'no' ) { ?>
			<div class="card-pagination text-center form-group">
			 <?php
				the_posts_pagination(array(
					'prev_text'          => '<i class="fas fa-arrow-left style="color:black !important;"></i><span class="screen-reader-text">' . esc_html__('Previous page', 'aspace') . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . esc_html__('Next page', 'aspace') . '</span><i class="fas fa-arrow-right style="color:black !important;"></i>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'aspace') . ' </span>',
				)); ?>
					</div><!-- pag end -->
		<?php	}	?>
	
<?php } ?>
		<?php if (redux_demo_get_option('active-slider') && redux_demo_get_option('active-slider') == 3 ) { ?>
        <?php $slider_mainb3 = redux_demo_get_option('slider-main-template21'); ?>
<?php echo do_shortcode($slider_mainb3); ?>
<?php } ?>

<?php if (redux_demo_get_option('widgets-show-on-home') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-4-home') == true ) { ?>
	
 <?php   if (isset($redux_demo['active-widgets-meta-4-home']) && !empty($redux_demo['active-widgets-meta-4-home'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-4-home'] as $foot_page) { ?>
		<div class="pt-30" style="clear:both;"></div>
 <div class="mt-10"> 
 <?php if ( is_active_sidebar( $foot_page ) ) : ?>
    <?php dynamic_sidebar( $foot_page ); ?>
	</div>
<?php   endif; ?>
    <?php } ?>
    <?php } ?>

    <?php //get_template_part('template-parts/body/body-4'); ?>
 <?php } ?>
<?php } 
     // Get the list of all registered sidebars using wp_registered_sidebars
?>


<?php

get_footer(); 