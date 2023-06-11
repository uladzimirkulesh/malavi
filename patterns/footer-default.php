<?php
/**
 * Title: Default Footer
 * Slug: silence/footer-default
 * Categories: footer, silence
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0">
	<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0"}}},"className":"alignfull row footer-links","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group row alignfull footer-links has-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:paragraph {"className":"copyright"} -->
		<p class="copyright"><?php
		printf(
			/* Translators: Copyright. */
			esc_html__( '© 2023 Silense Theme', 'silence' )
		) ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"theme-author"} -->
		<p class="theme-author"><?php
		printf(
			/* Translators: Email. */
			esc_html__( 'Code by %s', 'silence' ),
			'<a href="' . esc_url( __( 'kulesh.eu', 'silence' ) ) . '">Uladzimir Kulesh</a>' )
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
