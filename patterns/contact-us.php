<?php
/**
 * Title: Contact us
 * Slug: silence/contact-us
 * Categories: text, silence
 * Keywords: Contact us
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--contact-us","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--contact-us" id="section-contact-us">
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Contact us', 'Small title for "Contact us" pattern', 'silence' ); ?></h6>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php
				echo wp_kses_post(
				/* translators: Title for "Contact us" pattern */
				__( 'Let\'s create something great together. <br>Contact us and let\'s bring your vision to life.', 'silence' )
				);
				?></h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Adress', 'Small title for "Contact us" pattern', 'silence' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--10)"><?php
				echo wp_kses_post(
				/* translators: Adress for "Contact us" pattern */
				__( '501 Passaic Avenue, Harrison,<br>New York 07329', 'silence' )
				);
				?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Instagram', 'Text for Instagram link for "Contact us" pattern', 'silence' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:0"><a href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'LinkedIn', 'Text for LinkedIn link for "Contact us" pattern', 'silence' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"contact-link","fontSize":"xxxxxxx-large"} -->
			<p class="contact-link has-xxxxxxx-large-font-size"><a href="#"><?php echo esc_html_x( 'Contact us', 'Text for "Contact us" link for "Contact us" pattern', 'silence' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"contact-icon"} -->
			<p class="contact-icon"><a href="#" target="_blank" rel="noreferrer noopener"><span class="material-icons">arrow_forward</span></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
