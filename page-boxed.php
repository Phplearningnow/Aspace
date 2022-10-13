<?php 
/** Template name: page-boxed 
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */
?>
<?php get_header(); ?>
<?php global $redux_demo; ?>
<?php slide_on_glo(); ?>
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
<div>
<?php if (is_page()) { 
  if (redux_demo_get_option('breadcrumb_on_page') && redux_demo_get_option('breadcrumb_on_page') == true ) { 
 royal_breadcrumb_color(); ?>
<?php } ?>
 <?php } ?>
<?php if ( is_front_page() || is_home() ) { 
  if (redux_demo_get_option('breadcrumb_on') && redux_demo_get_option('breadcrumb_on') == true ) { 
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
<?php $layout_sidebar_page = aspace_page_layout_class(); ?>
<div class="clear-both container">
<div class="clear-both"></div>
<div class="rowflexible">
  <?php global $redux_demo; ?>
  <?php
  $get_class453 = '';
  if ('sidebar-left' == $layout_sidebar_page) :
    $get_class453 = "col-md-8";
    get_sidebar();
  endif;
  if ('sidebar-right' == $layout_sidebar_page) :
    $get_class453 = "col-md-8";
  endif;
  ?>
    <div id="primary" class="laym <?php echo $get_class453; ?>  mb-xs-24 <?php echo esc_attr($layout_sidebar_page); ?> siteleft">
    <main id="main" class="site-main" role="main">

    <section class="pt-30">
      <?php
        ($blog_style = 'card'); 
        while (have_posts()) : the_post();
          aspace_loop();
        endwhile;
      ?>
    </section><!-- .entry-content -->
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
    </div>
  <?php
  if ('sidebar-right' == $layout_sidebar_page) :
    $get_class453 = "col-md-8";
    get_sidebar();
  endif;
  ?>
</div>
</div>
<?php get_template_part('/template-parts/bg/bg-c'); ?>
<?php//  echo esc_html($redux_demo['active-widgets-meta-4']) ; ?>
        <?php if (redux_demo_get_option('widgets-show-on') == true ) { ?> 
<?php if (redux_demo_get_option('active-widgets-meta-4') == true ) { ?>
 <?php   if (isset($redux_demo['active-widgets-meta-4']) && !empty($redux_demo['active-widgets-meta-4'])) { ?>
    <?php       foreach ($redux_demo['active-widgets-meta-4'] as $foot_page) { 
 
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
<?php reate_slide_footer(); ?>
<?php get_template_part('/template-parts/bg/bg-f'); ?>
<?php get_footer();?>

