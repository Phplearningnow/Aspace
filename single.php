
<?php
/**
 * The template for displaying singular
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */
get_header(); ?>
<?php global $redux_demo; ?>




    
<div class="alignwide-single alignfull-single <?php echo redux_demo_get_option('filter-overlay-sa_slider'); ?>">
<?php aspace_show_slidesingle(); ?>
</div>
<?php echo do_action( 'limit_string_on_posts' ); ?>
<?php global $redux_demo; ?>

<?php if (redux_demo_get_option('breadcrumb_on') && redux_demo_get_option('breadcrumb_on') == true) { ?>
	<?php royal_breadcrumb_color(); ?>
<?php } ?>

<?php
if ( is_singular( 'post' ) ) { ?>
<?php aspace_hover_image_single(); ?>
<?php $layout_class = aspace_single_layout_class(); ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-left') { ?>
	<div class="mt-10 mb-10">
		<div class="rowflexible content-area d-flex navmobilemyaccount3 main-sticky ">  <?php } elseif (redux_demo_get_option('single_sidebar_position') == 'sidebar-right') { ?>
		 <div class="mt-10 mb-10 main-sticky ">
				<div class="rowflexible content-area rightsidebarmob d-flex navmobilemyaccount3 main-sticky "> <?php } elseif (redux_demo_get_option('single_sidebar_position') == 'no-sidebar') { ?>
					<div class="mt-10 mb-10">
				<div class="rowflexible">
					<?php } ?>
				<?php global $redux_demo; ?>
			
				<?php
				if ('sidebar-left' == $layout_class) :
					get_sidebar();
				endif; ?>
			
			<?php	if ((redux_demo_get_option('center_content_blog') == 'center') &&  redux_demo_get_option('single_sidebar_position') == 'no-sidebar') { ?>
		


						<main id="primary main" class="resize-sensor site-main col-md-10 <?php echo esc_attr($layout_class); ?>" role="main">
						<?php } else { ?>
							<main id="primary main" class="resize-sensor site-main col-md-8 <?php echo esc_attr($layout_class); ?>" role="main">
							<?php } ?> 
			
							<?php
										global $redux_demo;
										if (have_posts()) {
											while (have_posts()) {
												the_post();
											?>

											
<article id="post-<?php the_ID(); ?>" <?php post_class('ml-2 mr-2'); ?>>
		<div class="entry-content-post container-content">
		
	<?php	//$pre_image = aspace_thumb_img(); 
	$urlas = get_the_post_thumbnail_url( );
	$url_img = get_post_thumbnail_id( );
	//   $image = the_post_thumbnail($post_id, 'large');
	//	echo get_the_post_thumbnail($post_id, 'large');
		
	//	$light_box_img = the_post_thumbnail('aspace_featured') ;
	?>	<?php if (has_post_thumbnail( )) { ?>
	
		<div class="post-thumbnail post-entry wp-block-image">
		
 <?php 
 

 
// $clasecount4 = gridlist_set_default_view();
 ?>
 <?php //$clasecount4 -> Aspace_Mockup1_notice_content(); ?>
 <?php //echo $clasecount4 ?>
 
 


	
 
 
 
 <?php //the_post_thumbnail('aspace_big'); ?>
	<?php //echo aspace_prettybox( get_the_ID( ) ); ?>
	<?php //do_action('aspace_pretty_init'); ?>
	</div>
	<?php } // if (has_post_thumbnail()) { the_post_thumbnail('aspace-featured'); } ?>

<div class="cat_icon list-inline_single">
			<?php if (redux_demo_get_option('single_author_single') && redux_demo_get_option('single_author_single') == true ) { ?>
		    <?php ign_posted_by(); // show the main category ?>
			<?php } ?>
			<?php $num_comments = get_comments_number(); ?>	
<?php if (redux_demo_get_option('post_on_single_single') && redux_demo_get_option('post_on_single_single') == true ) { ?>
	<div class="number d-flex">
		<div class="d-inline-block" style="width: 20%; margin-right: 20px"><?php  get_template_part('template-parts/content/entry_meta'); 
} ?></div> 
 <div class="d-inline-block"> <?php if ( comments_open() || comments_number()) {
	if  ( $num_comments > 1 ) {
	echo	$comments = $num_comments . esc_html__( ' Comments', 'aspace' ); } } ?>
		<ul class="commentlist">
<?php 		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

<p class="no-comments"><?php _e( 'Comments are closed.', 'aspace' ); ?></p>
<?php
endif;?>
</ul>
	</div></div>
<?php if (redux_demo_get_option('tags_single_single') && redux_demo_get_option('tags_single_single') == true ) { ?>
			<?php get_template_part('template-parts/content/entry_taxonomies_single', get_post_type()); ?>
			<?php } ?>
<?php if (redux_demo_get_option('post_in_single_single') && redux_demo_get_option('post_in_single_single') == true ) { 
 //get_template_part('template-parts/content/entry_cat_list_single', get_post_type()); 

 } ?>
		
			<?php if (redux_demo_get_option('show_cat_main_single') && redux_demo_get_option('show_cat_main_single') == true ) { ?>
		    <?php //echo ign_get_term_links(); ?>
			<?php } ?>
</div>
<?php if (redux_demo_get_option('show_single_title_single')) : ?>
			<?php if (redux_demo_get_option('show_single_title_single') && redux_demo_get_option('show_single_title_single') == true ) { ?>
				<?php the_title('<h2 class="card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
			<?php } ?>
			<?php endif; 
			$gallery = '';
		    if (has_block('gallery') )  {
			$gallery = 'content-gallery'; }
				?>
			<div class="<?php echo $gallery ?> content-image content-quote">
<?php the_content(); ?>	
			</div>
			<?php
			//not sure gutenberg eve has this anymore
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'aspace' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
	

	<section class="after-article">
 <div class="inner_article col-md-24">
 <?php get_template_part('template-parts/content/entry_shortitle', get_post_type()); ?>
	
 </div>
 <?php 
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	}
} else {
		get_template_part('template-parts/content/error');
								}
	  ?>
	
	</section>
	</div>
	</article><!-- #post-## -->
			<?php
	
										?>
							</main><!-- #main -->
							
					<?php
					if ('sidebar-right' == $layout_class) :
						get_sidebar();
					endif;
					?>	
</div>
<?php global $redux_demo; ?>
<?php
if (redux_demo_get_option('relpost_on') && redux_demo_get_option('relpost_on') == true) {  ?>
<?php $layout_class = aspace_single_layout_class(); ?>
<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
	<div class="smblog_masonry_numcol">
	<div class="sm-grid sm-effect masonry">		
	<div class="col-md-8 justifyContent card-grid" style="margin-top: 25px; margin-left:auto;"> <?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<div class="smblog_masonry_numcol">
	<div class="sm-grid sm-effect masonry">	
	<div class="col-md-8 justifyContent card-grid" style="margin-top: 25px;"> 	<?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
	<div class="smblog_masonry_numcol">
	<div class="sm-grid sm-effect masonry">	
	<div class="container justifyContent card-grid" style="margin-top: 25px;">	<?php } ?>
	<?php
	$mlresponsive = '';
	if(redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { 
    $mlresponsive = 'mlresponsive';
	} 	?>
				
					
					<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
	</div></div></div><?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	</div></div>	</div>	<?php } ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'no-sidebar' ) { ?>
				</div></div>	</div>	<?php } ?>



				<?php } ?>
				</div>
				<?php } ?>						
					<?php if (redux_demo_get_option('active-slider') && redux_demo_get_option('active-slider') == 3) { ?>
							<?php $slider_mainsb3 = redux_demo_get_option('slider-main-template31'); ?>
							<?php echo do_shortcode($slider_mainsb3); ?>
						<?php } ?>
						<?php get_template_part('/template-parts/bg/bg-f'); ?>
						
						<?php
						get_footer(); 
