<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WPStrapFolio
 */
?>

	</div><!-- #main -->
</div><!-- #page -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info">
			<?php do_action( 'wpstrapfolio_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wpstrapfolio' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wpstrapfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wpstrapfolio' ), 'WP StrapFolio', '<a href="http://www.wpstrapcode.com" rel="designer">WP Strap Code</a>' ); ?>
		</div><!-- .site-info -->
	</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>