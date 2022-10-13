<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 'aspace'
 * @since 1.0
 */
?>
	<?php  //if( ( function_exists( 'is_shop' ) && is_shop() ) || ( function_exists( 'is_product' ) && is_product() ) ) { ?>
<?php	get_header(); ?> 
<?php //} ?>
<?php global $redux_demo; ?>
<div class="alignwide-single alignfull-single <?php echo redux_demo_get_option('filter-overlay-sa_slider'); ?>">
<?php slide_on_glo(); ?>
</div>





<?php add_filter( 'the_title', 'sow_max_title_length'); ?>

<?php  if (redux_demo_get_option('breadcrumb_on_page') && redux_demo_get_option('breadcrumb_on_page') == true ) { 
    royal_breadcrumb_color(); ?>
 <?php } ?>
<?php // } // else ?>
<?php //if ( is_front_page() || is_home() || is_page()) { 
  //if (redux_demo_get_option('breadcrumb_on' || 'breadcrumb_on_page') && redux_demo_get_option('breadcrumb_on' || 'breadcrumb_on_page') == true ) { 
// royal_breadcrumb_color(); ?>
<?php //} ?>
<?php //} ?>
<?php //get_template_part('/template-parts/bg/bg'); ?>



    <?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
      <?php if (redux_demo_get_option('active-widgets-meta-1') == true ) { ?>
       <?php   if (isset($redux_demo['active-widgets-meta-1']) && !empty($redux_demo['active-widgets-meta-1'])) { ?>
          <?php       foreach ($redux_demo['active-widgets-meta-1'] as $foot_page) { 
       
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

<?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-2') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-2']) && !empty($redux_demo['active-widgets-meta-2'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-2'] as $foot_page) { 
 
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
    <?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-3') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-3']) && !empty($redux_demo['active-widgets-meta-3'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-3'] as $foot_page) { 
 
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

<?php if(redux_demo_get_option('page_sidebar_position') == 'sidebar-left' ) { ?>
  <div class="rowflexible d-flex navmobilemyaccount3 main-sticky"> <?php } ?>

<?php if (redux_demo_get_option('page_sidebar_position') == 'sidebar-right' ) { ?>
	<div class="rowflexible rightsidebarmob d-flex navmobilemyaccount3 main-sticky">	<?php } ?>
	<!-- rewflex  -->

<?php if (redux_demo_get_option('page_sidebar_position') == 'no-sidebar' ) { ?>
	<div class="rowflexible "> 	<?php } ?>
<?php $page_layout_class = aspace_page_layout_class(); ?>
<?php global $redux_demo; ?>
	<?php
	$mlresponsive = '';
	if(redux_demo_get_option('page_sidebar_position') == 'no-sidebar' ) { 
    $mlresponsive = 'mlresponsive';
	} ?>

<?php 	if ('sidebar-left' == $page_layout_class ) :
		get_sidebar();
	endif; ?>
<?php	if ((redux_demo_get_option('center_content_blog') == 'center' ) &&  redux_demo_get_option('page_sidebar_position') == 'no-sidebar' ) { ?>
  <main id="main primary" class="<?php echo $mlresponsive ?> site-main col-md-12 rem-main-sticky main-sticky <?php echo esc_attr($page_layout_class); ?>" role="main">

<?php } else { ?> 
  <main id="primary main" class="mobilecontent col-md-8 site-main laym rem-main-sticky main-sticky<?php echo esc_attr($page_layout_class); ?>">

	<?php } ?>
      <?php 
        while (have_posts()) : the_post();
          aspace_loop();
        endwhile; ?>
      
      
    <div class="card-pagination text-center form-group">
      <?php
      //	echo rt_pagination();
      the_posts_pagination(array(
        'prev_text'          => '<i class="fas fa-arrow-left style="color:black !important;"></i><span class="screen-reader-text">' . esc_html__('Previous page', 'aspace') . '</span>',
        'next_text'          => '<span class="screen-reader-text">' . esc_html__('Next page', 'aspace') . '</span><i class="fas fa-arrow-right style="color:black !important;"></i>',
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'aspace') . ' </span>',
      )); ?>
    </div>
  </main><!-- #primary -->
<?php 	if ('sidebar-right' == $page_layout_class ) :
		get_sidebar();
	endif; ?>
  </div>
<?php //get_template_part('/template-parts/bg/bg-c'); ?>
<?php //  echo esc_html($redux_demo['active-widgets-meta-4']) ; ?>
        <?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-4') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-4']) && !empty($redux_demo['active-widgets-meta-4'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-4'] as $foot_page) { ?>
 	<div class="pt-30" style="clear:both;"></div>
   <div class=" mt-10"> 
<?php  if ( is_active_sidebar( $foot_page ) ) : ?>
    <?php dynamic_sidebar( $foot_page ); 
    endif; ?>
   </div>
    <?php } ?>
    <?php } ?>
    <?php //get_template_part('template-parts/body/body-4'); ?>
 <?php } ?>
<?php } 
     // Get the list of all registered sidebars using wp_registered_sidebars

?>
<?php reate_slide_footer(); ?>
<?php get_template_part('/template-parts/bg/bg-f'); ?>
<?php get_footer();
