<?php get_header(); ?>
<?php global $redux_demo; ?>
<?php if (redux_demo_get_option('breadcrumb_on') && redux_demo_get_option('breadcrumb_on') == true) { ?>
    <?php global $redux_demo; ?>
    <?php royal_breadcrumb_color(); ?>
<?php } ?>


<?php $layout_class = aspace_single_layout_class(); ?>
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-left') { ?>
	<div class="mt-10 mb-10">
		<div class="rowflexible d-flex"><div id="primary" class="content-area d-flex main-sticky ">  <?php } elseif (redux_demo_get_option('single_sidebar_position') == 'sidebar-right') { ?>
		 <div class="mt-10 mb-10 main-sticky ">
				<div class="rowflexible"><div id="primary" class="content-area d-flex main-sticky "> <?php } elseif (redux_demo_get_option('single_sidebar_position') == 'no-sidebar') { ?>
					<div class="mt-10 mb-10">
				<div class="rowflexible"><div id="primary" class="content-area main-sticky">
					<?php } ?>
				<?php global $redux_demo; ?>
			
			
			<?php	if ((redux_demo_get_option('center_content_blog') == 'center') &&  redux_demo_get_option('single_sidebar_position') == 'no-sidebar') { ?>
					
						<main id="primary main" class="resize-sensor site-main col-md-12 <?php echo esc_attr($layout_class); ?>" role="main">
						<?php } else { ?>
							<main id="primary main" class="resize-sensor site-main col-md-8 <?php echo esc_attr($layout_class); ?>" role="main">
							<?php } ?> 
        <?php $blog_layout = 'card-grid'; ?>
            <?php
            while (have_posts()) : the_post();
                aspace_loop('card');
            endwhile; ?>
        <div class="card-pagination text-center form-group">
            <?php the_posts_pagination(
                array(
                    'prev_text'          => '<i class="fas fa-arrow-left style="color:black !important;"></i><span class="screen-reader-text">' . esc_html__('Previous page', 'aspace') . '</span>',
                    'next_text'          => '<span class="screen-reader-text">' . esc_html__('Next page', 'aspace') . '</span><i class="fas fa-arrow-right style="color:black !important;"></i>',
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'aspace') . ' </span>',
                )
            ); ?>
        </div>
    </main><!-- #primary -->

</div>

<?php
get_footer();