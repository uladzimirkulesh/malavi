<?php
/**
 * Title: What we are doing
 * Slug: silence/what-we-are-doing
 * Categories: text, silence
 * Keywords: What we are doing
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","className":"pattern-what-we-are-doing theme-contrast","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull pattern-what-we-are-doing theme-contrast has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:column {"width":"75%"} -->
			<div class="wp-block-column" style="flex-basis:75%">
				<!-- wp:heading {"textColor":"base","fontSize":"xxxxxx-large"} -->
				<h2 class="wp-block-heading has-base-color has-text-color has-xxxxxx-large-font-size"><?php
				echo wp_kses_post(
					/* translators: Title for "What we are doing" pattern */
					__( 'We build a stable code <br>using modern <br>solutions', 'silence' )
				);
				?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"base-border","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-text-color has-base-border-color has-alpha-channel-opacity has-base-border-background-color has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php echo esc_html_x( 'Developing digital products since 2015. We help bring ideas to life and create digital products that work.', 'Content for "What we are doing" pattern', 'silence' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
