<?php
/**
 * Title: Default Footer
 * Slug: silence/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-default"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-50"}}}},"textColor":"contrast-50","className":"alignfull footer-links","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group alignfull footer-links has-contrast-50-color has-text-color has-link-color has-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:navigation {"overlayMenu":"never","className":"footer-navigation","layout":{"type":"flex","justifyContent":"left"}} /-->

		<!-- wp:paragraph -->
		<p>
		<?php
		printf(
			/* Translators: Theme Author link. */
			esc_html__( 'Code by %s', 'silence' ),
			'<a href="' . esc_url( __( 'https://uladzimir.kulesh.eu', 'silence' ) ) . '"
			rel="nofollow">@UladzimirKulesh</a>' )
		?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
		<p class="has-contrast-color has-text-color has-link-color">
		<?php
		printf(
			/* Translators: Privacy Policy link. */
			'<a href="' . esc_url( __( '#', 'silence' ) ) . '"
			rel="nofollow">' . esc_html__( 'Privacy Policy', 'silence' ) . '</a>' )
		?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"right"} -->
		<p class="has-text-align-right">
		<?php
		printf(
			/* Translators: Copyright link. */
			esc_html__( '© 2023 %s', 'silence' ),
			'<a href="' . esc_url( __( 'https://silence.kulesh.eu', 'silence' ) ) . '"
			rel="nofollow">Silence Theme</a>' )
		?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
