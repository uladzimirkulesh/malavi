<?php
/**
 * Title: Keep in touch
 * Slug: silence/keep-in-touch
 * Categories: call-to-action, silence
 * Keywords: Keep in touch
 */
?>
<!-- wp:group {"tagName":"section","className":"pattern-call-to-action","layout":{"type":"default"}} -->
<section class="wp-block-group pattern-call-to-action">
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:separator {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"is-style-wide"} -->
		<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"align":"full"} -->
		<div class="wp-block-columns alignfull">
			<!-- wp:column {"width":"33.3333%"} -->
			<div class="wp-block-column" style="flex-basis:33.3333%">
				<!-- wp:heading {"level":6} -->
				<h6 class="wp-block-heading"><?php echo esc_html_x( 'Keep in touch', 'Title for call to action content', 'silence' ); ?></h6>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.6666%","layout":{"type":"default"}} -->
			<div class="wp-block-column" style="flex-basis:66.6666%">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2077","fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-large"} -->
				<p class="has-xx-large-font-size" style="font-style:normal;font-weight:400;line-height:1.2077"><?php
				printf(
					/* Translators: Call to action content. */
					esc_html__( 'Do you have a project in mind? Contact us and let’s work together, it’s just easy as writing an email: %s', 'silence' ),
					'<a href="' . esc_url( __( 'mailto:info@sitename.com', 'silence' ) ) . '"
					target="_blank" rel="noreferrer noopener">info@sitename.com</a>' )
				?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
