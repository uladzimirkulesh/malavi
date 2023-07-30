<?php
/**
 * Title: Page header
 * Slug: silence/page-header
 * Categories: text, silence
 * Keywords: Page header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"page-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide page-header" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:heading {"level":1,"fontSize":"xxxxxx-large"} -->
			<h1 class="wp-block-heading has-xxxxxx-large-font-size"><?php
			echo wp_kses_post(
				/* translators: Title for "Page header" pattern */
				__( 'A few words about <br>development <br>process', 'silence' )
			);
			?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--20);flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"contrast-secondary-text","className":"page-header--small-note"} -->
			<p class="page-header--small-note has-contrast-secondary-text-color has-text-color" style="line-height:1.5"><?php echo esc_html_x( '[ See how software is developed and how it can help your business compete. Discover software development innovations and technologies. ]', 'Small text for "Page header" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
