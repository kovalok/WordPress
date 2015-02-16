<?php
/**
 * The template for displaying search forms in WPStrapFolio
 *
 * @package WPStrapFolio
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'wpstrapfolio' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Type Search Term & Hit Enter &hellip;', 'placeholder', 'wpstrapfolio' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wpstrapfolio' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'wpstrapfolio' ); ?>">
</form>
