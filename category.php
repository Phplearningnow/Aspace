<?php

/**
 * The template for displaying category page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2
 */




get_header();
?>


<?php //echo do_action( 'limit_string_on_posts' ); ?>
<?php global $redux_demo; ?>
<?php aspace_show_slidesingle(); ?>



<?php //echo do_action( 'limit_string_on_posts' ); ?>
<?php global $redux_demo; ?>
<?php aspace_show_slidesingle(); ?>
<?php $layout_class = aspace_single_layout_class(); ?>
<?php if(redux_demo_get_option('single_sidebar_position') == 'sidebar-left' ) { ?>
<div class="rowflexible displayFlex d-flex navmobilemyaccount3 main-sticky"> <?php } ?>
<!-- rewflex  -->
<?php if (redux_demo_get_option('single_sidebar_position') == 'sidebar-right' ) { ?>
	<div class="rowflexible navmobilemyaccount3 main-sticky"> 	<?php } ?>
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
		<main id="main primary" class="<?php echo $mlresponsive ?> resize-sensor site-main col-md-12 main-sticky <?php echo esc_attr($layout_class); ?>" role="main">
<!-- main -->
<?php } else { ?> 
	  <main id="primary main" class="resize-sensor site-main laym col-md-8 main-sticky <?php echo esc_attr($layout_class); ?>">
<!-- main -->
	<?php } ?>
			
	
						
          <!-- Title & Description -->
          <header class="page-header mb-4">
            <h1><?php single_cat_title(); ?></h1>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
          </header>

          <!-- Grid Layout -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="card horizontal mb-4">
                <div class="row">
                  <!-- Featured Image-->
                  <?php if (has_post_thumbnail())
                    echo '<div class="card-img-left-md col-lg-5">' . get_the_post_thumbnail(null, 'medium') . '</div>';
                  ?>
                  <div class="col">
                    <div class="card-body">
                      <?php bootscore_category_badge(); ?>
                      <!-- Title -->
                      <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                      <!-- Meta -->
                      <?php if ('post' === get_post_type()) : ?>
                        <small class="text-muted mb-2">
                          <?php
                          bootscore_date();
                          bootscore_author();
                          bootscore_comments();
                          bootscore_edit();
                          ?>
                        </small>
                      <?php endif; ?>
                      <!-- Excerpt & Read more -->
                      <div class="card-text mt-auto">
                        <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'aspace'); ?></a>
                      </div>
                      <!-- Tags -->
                      <?php bootscore_tags(); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
				
          <!-- Pagination -->
	

						</main><!-- #main -->


							
					<?php
					if ('sidebar-right' == $layout_class) :
						get_sidebar();
					endif;
					?>	
</div><!-- col -->


			
						<?php if (redux_demo_get_option('active-slider') && redux_demo_get_option('active-slider') == 3) { ?>
							<?php $slider_mainsb3 = redux_demo_get_option('slider-main-template31'); ?>
							<?php echo do_shortcode($slider_mainsb3); ?>
						<?php } ?>
						<?php get_template_part('/template-parts/bg/bg-f'); ?>
						
						<?php
						get_footer(); 
