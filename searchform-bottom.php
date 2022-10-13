<?php
/**
 * The template for displaying searchform
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2 
 */
?>
<div class="d-flex">
       <?php if(redux_demo_get_option('search_btn_footer_off') == true ) { ?> 
<form method="get" id="searchform-4" action="<?php echo esc_url( home_url( '/' ) ); ?>" title="Search">    
<input type="text" class="form-input field" name="s" placeholder="<?php echo esc_attr( 'Search', 'aspace' ); ?>">
       <button class="" type="submit" name="submit" id="searchsubmita" value="Search"><i class="fa fa-search"></i></button> 
</form>
       <?php } ?> </div>