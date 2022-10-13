<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
  * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */

get_header(); ?>

<?php if (redux_demo_get_option('header_fixed') == true ) { ?>
<div class="fix-bread mt-140"></div>
	<?php } ?>
	<div id="primary" class="error-404 not-found content-area layout-center-content">
		<main id="main" class="site-main" role="main">

			<div class="container-content text-center">
				<div class="h1 title-404">404</div>
					<p><?php _e( 'It looks like nothing was found at this location.', 'aspace' ); ?></p>
					<a class="button mb-50" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Go To Home', 'aspace' ); ?></a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
