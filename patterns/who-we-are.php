<?php
/**
 * Title: Who we are
 * Slug: silence/who-we-are
 * Categories: text, silence
 * Keywords: Who we are
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--who-we-are","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--who-we-are" id="section-who-we-are">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:heading {"level":1,"className":"wp-block-heading has-xxxxxxx-large-font-size"} -->
			<h1 class="wp-block-heading has-xxxxxxx-large-font-size"><?php
				echo wp_kses_post(
					/* translators: Title for "Who we are" pattern */
					__( 'We make <br>creative things', 'silence' )
				);
				?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.5"}},"textColor":"contrast-secondary-text","className":"section__small-note"} -->
			<p class="section__small-note has-contrast-secondary-text-color has-text-color" style="padding-top:var(--wp--preset--spacing--30);line-height:1.5"><?php echo esc_html_x( 'We are obsessed with creativity — challenging what is, while defining what comes next.', 'Small text for "Who we are" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
			<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Hello there! 👋 We are an award-winning design agency with a talented team of digital creatives, product designers, developers, and problem solvers, ready to dedicate ourselves to provide a fresh perspective for the solutions you need.', 'Content for "Who we are" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
