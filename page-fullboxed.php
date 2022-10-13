<?php 
/** Template name: page-fullboxed 
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */
get_header('boxed'); ?>
<div>
<?php slide_on_fullboxedglo(); ?>
<?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-above') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-above']) && !empty($redux_demo['active-widgets-meta-above'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-above'] as $foot_page) { 
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
<div class="foov1 clearas">
<?php global $redux_demo; ?>
<?php if (is_page()) { 
  if (redux_demo_get_option('breadcrumb_on_page') && redux_demo_get_option('breadcrumb_on_page') == true ) { 
 royal_breadcrumb_color(); ?>
 <?php } ?>
<?php } else ?>
<?php if ( is_front_page() || is_home() || is_page()) { 
  if (redux_demo_get_option('breadcrumb_on' || 'breadcrumb_on_page') && redux_demo_get_option('breadcrumb_on' || 'breadcrumb_on_page') == true ) { 
 royal_breadcrumb_color(); ?>
<?php } ?>
<?php } ?>
<?php get_template_part('/template-parts/bg/bg'); ?>
<div class="foov1 clearas">
<?php if (redux_demo_get_option('body_bottom')) : { ?>
	<?php global $redux_demo; ?>
	<?php $body_layout = redux_demo_get_option('body_columns');
	if (empty($body_layout)) {
		$body_layout = '';
	}
	if ($body_layout == 1) { ?>
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
<?php	} ?><?php } endif; ?>
</div>
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

<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
<div class="rowflexible displayFlex d-flex main-sticky"> <?php } ?>

<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<div class="rowflexible main-sticky">	<?php } ?>
	

<?php if (redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
	<div class="rowflexible "> 	<?php } ?>
<?php $layout_pageclass = aspace_page_layout_class(); ?>
<?php global $redux_demo; ?>
	<?php
	$mlresponsive = '';
	if(redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { 
    $mlresponsive = 'mlresponsive';
	}
	if ('sidebar-left' == $layout_pageclass) :
		get_sidebar();
	endif;
	if ((redux_demo_get_option('center_content_blog') == 'center' ) &&  redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
		<main id="main primary" class="<?php echo $mlresponsive ?> resize-sensor site-main col-md-12 main-sticky <?php echo esc_attr($layout_class); ?>" role="main">

<?php } else { ?> 
	  <main id="primary main" class="resize-sensor site-main laym col-md-8 main-sticky <?php echo esc_attr($layout_pageclass); ?>">

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
  <?php
	if ('sidebar-right' == $layout_pageclass) : ?>
    <?php	get_sidebar(); ?>
    <?php endif; ?> 
  </div>
<?php get_template_part('/template-parts/bg/bg-c'); ?>
<?php //  echo esc_html($redux_demo['active-widgets-meta-4']) ; ?>
        <?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-4') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-4']) && !empty($redux_demo['active-widgets-meta-4'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-4'] as $foot_page) { ?>
 	<div class="pt-30" style="clear:both;"></div>
   <div class="main-sticky mt-10 sidebar"> 
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
