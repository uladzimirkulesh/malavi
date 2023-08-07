<?php
/**
 * Title: Our agency
 * Slug: silence/our-agency
 * Categories: text, silence
 * Keywords: Our agency
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--our-agency","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--our-agency" id="section-our-agency">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:heading {"level":1,"fontSize":"xxxxxxx-large"} -->
			<h1 class="wp-block-heading has-xxxxxxx-large-font-size"><?php
			echo wp_kses_post(
				/* translators: Title for "Our agency" pattern */
				__( 'We are - <br>Kalipso Design', 'silence' )
			);
			?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Our agency', 'Small title for "Our agency" pattern', 'silence' ); ?></h6>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
			<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( 'From the moment our company was founded, we have helped our clients find exceptional solutions for their businesses, creating memorable brands and digital products.', 'Text for "Our agency" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:image -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/our-agency-img.jpg" alt=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
