<?php
/**
 * Title: Default Footer
 * Slug: silence/footer-default
 * Categories: footer, silence
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"className":"footer__inner","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer__inner" style="margin-top:0">
	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0"}}},"className":"footer__container","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group alignwide footer__container has-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:navigation {"overlayMenu":"never","className":"footer__navigation","fontSize":"small"} /-->

		<!-- wp:paragraph {"className":"footer__copyright"} -->
		<p class="footer__copyright"><?php
		printf(
			/* translators: Copyright. */
			esc_html__( '© 2023 %s.', 'silence' ),
			'<a href="' . esc_url( __( 'https://uladzimirkulesh.com', 'silence' ) ) . '">Uladzimir Kulesh</a>' )
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
