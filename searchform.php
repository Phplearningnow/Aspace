<?php
/**
 * Template for displaying search forms in Aspace
 *
 * Can be gotten using get_search_form();
  * @package Aspace
 * @since 1.0
 * @version 1.1.5.9.2
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); 
?>
		 	<style>@media (min-width:768px) {
		.dgwt-wcas-search-form, .aws-search-form, .is-search-form  { margin-top: 5px}
	}</style>
	<?php $id_ivory = ''; ?>
  <?php	if (class_exists('TH_Advance_Product_Search')) {
 echo do_shortcode('[th-aps]'); ?>
 <?php } elseif (class_exists('Ivory_Search')) { ?>
		<?php echo do_shortcode('[ivory-search id="35243"]'); ?>
<?php } elseif ( class_exists( 'AWS_Main' ) ) { ?>
		<?php echo do_shortcode('[aws_search_form]'); ?>
			<?php } elseif ( class_exists( 'DGWT_WC_Ajax_Search' ) ) { ?>
		<?php echo do_shortcode('[fibosearch]'); ?>
	<?php	} else { ?>
<form method="get" class="kb-live-search hkb-site-search searchform font-family-primary font-size-base line-height-2 mt-1" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="hkb-screen-reader-text"><?php echo _x( 'Search for:', 'label', 'aspace' ); ?></span>
	</label>
	
		   <input <?php if(is_admin()){ echo 'disabled'; }?> type="text" id="<?php echo $unique_id; ?>" class="hkb-site-search__field field form-control flex-fill kb-live-search__input"
	       placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'aspace' ); ?>"
	       value="<?php echo get_search_query(); ?>" name="s"/>
<div class="lds-ring position-absolute"></div>
<span class="input-group-append search-submit-wrapper kb-live-search__submit">
<button <?php if(is_admin()){ echo 'disabled'; }?> type="submit" class="kb-live-search__submit-button"><span class="iconify" data-icon="ant-design:search-outlined" data-inline="true"></span>
<i class="fas fa-search"></i>
	</button>
</span>
	
</form>
<?php } ?>