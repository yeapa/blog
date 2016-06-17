<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage nuvio_element
 * @since Nuvio Element 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'nuvioelement_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'nuvioelement' ) ); ?>"><?php printf( __( 'Powered by %s', 'nuvioelement' ), 'WordPress' ); ?></a> | 
        Designed by <a href="http://nuviotemplates.com">Nuvio Templates</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>