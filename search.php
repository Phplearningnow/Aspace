<?php
/**
 * The template for displaying search results pages
 * If you want to have this display with a sidebar, uncomment the sidebar out at the bottom.
 * Add the class .page-template-sidebar-right or left to the main element
 * Or just add the pull in sidebar
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */

get_header(); ?>
<?php if (redux_demo_get_option('header_fixed') == true ) { ?>
<div class="fix-bread mt-140"></div>
	<?php } ?>

	<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); 
?>

	<form method="get" class="col d-flex kb-live-search hkb-site-search searchform font-family-primary font-size-base line-height-2 mt-1" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="hkb-screen-reader-text"><?php echo _x( 'Search for:', 'label', 'aspace' ); ?></span>
	</label>
	<div class="input-group position-relative d-flex flex-column flex-lg-row hkb-search-wrapper  kb-live-search__inner-contents">
		<div class="input-group position-relative d-flex flex-column flex-lg-row hkb-search-wrapper  kb-live-search__inner-contents">
	<?php wp_dropdown_categories(); ?>
	</div></div>
		   <div class="col-md-6 pr-5px">
		   <input <?php if(is_admin()){ echo 'disabled'; }?> type="text" id="<?php echo $unique_id; ?>" class="hkb-site-search__field field form-control flex-fill kb-live-search__input"
	       placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'aspace' ); ?>"
	       value="<?php echo get_search_query(); ?>" name="s"/>
<div class="lds-ring position-absolute"></div>
<span class="input-group-append search-submit-wrapper kb-live-search__submit">
<button <?php if(is_admin()){ echo 'disabled'; }?> type="submit" class="kb-live-search__submit-button"><span class="iconify" data-icon="ant-design:search-outlined" data-inline="true"></span>
<i class="fas fa-search"></i>
	</button>
</span>


   <script type="text/javascript">
	   
	   var dropdown = document.getElementById("cat");
	   function onCatChange() {
		   if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			   location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
		   }
	   }
	   dropdown.onchange = onCatChange;
   </script></div>
	
</form>
<?php wp_reset_query(); ?>
<?php //} ?>

        


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
	<?php $search_r = ''; ?>
<?php   print $search_r; ?>
<?php	if ((redux_demo_get_option('center_content_blog') == 'center' ) &&  redux_demo_get_option('page_sidebar_position') == 'no-sidebar' ) { ?>
				<main id="main primary" class="<?php echo $mlresponsive ?> resize-sensor site-main col-md-12 main-sticky <?php echo esc_attr($page_layout_class); ?>" role="main">
			  
			  <?php } else { ?> 
				<main id="primary main" class="resize-sensor mobilecontent site-main laym col-md-8 main-sticky <?php echo esc_attr($page_layout_class); ?>">
			  
				  <?php } ?>
       


			<?php	if (have_posts()){
        $search_r = '<div class="container"> <h1 class="entry-title-search">'. esc_html__( 'Search Results for : ','aspace');print '"' . get_search_query() . '"'.'</h1></div>';
       
		  while (have_posts()) : the_post(); 
		
		//	plugin_dir_path( __FILE__ ) . '/aspace-options/post-grid-carousel/includes/templates/theme-4';
	get_template_part('/template-parts/post/theme-4');
              
            endwhile;
        } else {
        ?>
            <h2 class="entry-title-search"> <?php esc_html_e( 'We didn\'t find any results. Please try again with different search parameters. ', 'aspace' ); ?></h2>
           

        <?php
        }
        wp_reset_query(); ?>
		  

		  </main><!-- #primary -->
  

<?php 	if ('sidebar-right' == $page_layout_class ) :
		get_sidebar();
	endif; ?>
</div>
	
  <div class="card-pagination text-center form-group">
      <?php
      //	echo rt_pagination();
      the_posts_pagination(); ?>
    </div>  
<?php get_footer();
