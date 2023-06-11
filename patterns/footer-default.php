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

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0"}}},"className":"alignfull row footer-links","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group row alignfull footer-links has-small-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:navigation {"overlayMenu":"never","className":"footer-navigation","layout":{"type":"flex","justifyContent":"left"}} /-->

		<!-- wp:paragraph {"className":"email"} -->
		<p class="email"><?php
		printf(
			/* Translators: Email. */
			esc_html__( 'Email: %s', 'silence' ),
			'<a href="' . esc_url( __( 'mailto:uladzimir@kulesh.eu', 'silence' ) ) . '">uladzimir@kulesh.eu</a>' )
		?></p>
		<!-- /wp:paragraph -->

		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '<!-- wp:paragraph --><p class="privacy-policy">', '</p><!-- /wp:paragraph -->' );
		}
		?>

		<!-- wp:paragraph {"className":"copyright"} -->
		<p class="copyright"><?php
		printf(
			/* Translators: Copyright. */
			esc_html__( '© 2023 Uladzimir Kulesh', 'silence' )
		) ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
