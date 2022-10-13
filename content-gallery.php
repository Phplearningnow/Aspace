<?php
/* gallery */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 style="color:blue;">gallery templates</h1>
		<div class="entry-content container-content">
	<?php	//$pre_image = aspace_thumb_img(); 
	$urlas = get_the_post_thumbnail_url( );
	$url_img = get_post_thumbnail_id( );
	//   $image = the_post_thumbnail($post_id, 'large');
	//	echo get_the_post_thumbnail($post_id, 'large');
	//	$light_box_img = the_post_thumbnail('aspace_featured') ;
	?>	<?php if (has_post_thumbnail( )) { ?>
		<div class="post-thumbnail post-entry wp-block-image">
	<?php //the_post_thumbnail('aspace_big'); ?>
	<?php //echo aspace_prettybox( get_the_ID( ) ); ?>
	<?php do_action('aspace_pretty_init'); ?>
	</div>
	<?php } // if (has_post_thumbnail()) { the_post_thumbnail('aspace-featured'); } ?>
<div class="cat_icon_cat">
<?php //get_template_part('template-parts/content/entry_taxonomies'); ?>
</div>
<div class="cat_icon list-inline_2">
			<?php if (redux_demo_get_option('single_author_single') && redux_demo_get_option('single_author_single') == true ) { ?>
		    <?php ign_posted_by(); // show the main category ?>
			<?php } ?>		
<?php if (redux_demo_get_option('post_on_single_single') && redux_demo_get_option('post_on_single_single') == true ) { ?>
<?php get_template_part('template-parts/content/entry_meta_single', get_post_type()); } ?>
<?php get_template_part('template-parts/content/entry_meta'); ?>		
<?php if (redux_demo_get_option('tags_single_single') && redux_demo_get_option('tags_single_single') == true ) { ?>
			<?php get_template_part('template-parts/content/entry_taxonomies', get_post_type()); ?>
			<?php } ?>
<?php if (redux_demo_get_option('post_in_single_single') && redux_demo_get_option('post_in_single_single') == true ) { 
 get_template_part('template-parts/content/entry_cat_list_single', get_post_type()); } ?>
		
			<?php if (redux_demo_get_option('show_cat_main_single') && redux_demo_get_option('show_cat_main_single') == true ) { ?>
		    <?php echo ign_get_term_links(); ?>
			<?php } ?>
</div>
<?php if (redux_demo_get_option('show_single_title_single')) : ?>
			<?php if (redux_demo_get_option('show_single_title_single') && redux_demo_get_option('show_single_title_single') == true ) { ?>
				<?php the_title('<h2 class="card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
			<?php } ?>
			<?php endif; ?>
			<div class="content_post col-xl-12 col-md">
<?php the_content(); ?>
			</div>
			<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'aspace' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>	
	</article><!-- #post-## -->
