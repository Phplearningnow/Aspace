<?php

/**
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2
 */
get_header(); ?>
<?php global $redux_demo; ?>
<?php $metadata = wp_get_attachment_metadata(); ?>
<?php aspace_show_slidesingle(); ?>
<?php global $redux_demo; ?>
<?php if (redux_demo_get_option('breadcrumb_on') && redux_demo_get_option('breadcrumb_on') == true) { ?>
	<?php royal_breadcrumb_color(); ?>
<?php } ?>
</div>
<div class="rowflexible">
	<div id="primary" class="content-area">
		<main id="primary main" class="site-main col-md-12 " role="main">
			<?php if (have_posts()) while (have_posts()) : the_post(); ?>
				<div class="entry-content">
					<div id="attachment" class="place-content-center entry-attachment container justifyContent text-center entry-attachment row align-center">
						<div class="col">
							<?php if (wp_attachment_is_image()) :
								$attachments = array_values(get_children(array('post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID')));
								foreach ($attachments as $k => $attachment) {
									if ($attachment->ID == $post->ID)
										break;
								}
								$k++;
								// If there is more than 1 image attachment in a gallery
								if (count($attachments) > 1) {
									if (isset($attachments[$k]))
										// get the URL of the next image attachment
										$next_attachment_url = get_attachment_link($attachments[$k]->ID);
									else
										// or get the URL of the first image attachment
										$next_attachment_url = get_attachment_link($attachments[0]->ID);
								} else {
									// or, if there's only 1 image attachment, get the URL of the image
									$next_attachment_url = wp_get_attachment_url();
								}
							?>
								<p class="attachment"><a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr(get_the_title()); ?>" rel="attachment"><?php
																																										$attachment_size = size_format(filesize(get_attached_file($attachment_id)), 2);
																																										//$before_attachment_url = wp_get_attachment_image( $post->ID, array( $attachment_size, 9999 ) ); // filterable image width with, essentially, no limit for image height.
																																								do_action('aspace_pretty_init'); ?>
										<div>
											<h2 class="strong"><?php the_title(); ?></h2>
										</div>

									</a></p>

									<div class="entry-meta">
					<span class="entry-date"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></span>

					<span class="full-size-link"><a href="<?php echo esc_url( wp_get_attachment_url() ); ?>"><?php echo esc_html( $metadata['width'] ); ?> &times; <?php echo esc_html( $metadata['height'] ); ?></a></span>

					<span class="parent-post-link"><a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>" rel="gallery"><?php echo get_the_title( $post->post_parent ); ?></a></span>
					<?php edit_post_link( __( 'Edit', 'aspace' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-meta -->
						</div>

						<?php endif;

							endwhile;


	get_footer(); ?>