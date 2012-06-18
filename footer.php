<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'victoria_park_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'victoria_park' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'victoria_park' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'victoria_park' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'victoria_park' ), 'victoria_park', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>