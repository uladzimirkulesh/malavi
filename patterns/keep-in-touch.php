<?php
/**
 * Title: Keep in touch
 * Slug: silence/keep-in-touch
 * Categories: call-to-action, silence
 * Keywords: Keep in touch
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--keep-in-touch","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--keep-in-touch" id="section-keep-in-touch">
	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--20)"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Keep in touch', 'Title for "Keep in touch" pattern', 'silence' ); ?></h6>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%","layout":{"type":"default"}} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.1}},"textColor":"contrast","fontSize":"xxxx-large"} -->
			<p class="has-contrast-color has-text-color has-xxxx-large-font-size" style="line-height:1.1"><?php
			echo wp_kses_post(
				/* translators: "Keep in touch" pattern content. */
				__( 'Do you have a project in mind? Contact us and let’s work together, it’s just easy as writing an email: <a href="mailto:hello@sitename.com" target="_blank" rel="noreferrer noopener">hello@sitename.com</a>', 'silence' )
				);
			?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
