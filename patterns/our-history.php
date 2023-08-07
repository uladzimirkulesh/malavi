<?php
/**
 * Title: Our history
 * Slug: silence/our-history
 * Categories: text, silence
 * Keywords: Our history
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--our-history","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--our-history" id="section-our-history">
	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--20)"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Our history', 'Small title for "Our history" pattern', 'silence' ); ?></h6>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'We were founded in 2015. Over the past years, we have grown in all plans – we have learned to implement large-scale projects and not be afraid to take on pilot tasks in our field, we have built long-term and trusting relationships with partners around the world.', 'Text for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Our focus isn’t the size of the project, but the size of the ideas. We’re committed to collaboration — with our clients, with our partners, and with each other — working together to unlock our best thinking and create timeless work that inspires.', 'Text for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"textColor":"contrast","fontSize":"xxxxxxx-large"} -->
			<p class="has-contrast-color has-text-color has-xxxxxxx-large-font-size"><?php echo esc_html_x( '18', 'Number for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast-secondary-text"} -->
			<p class="has-contrast-secondary-text-color has-text-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Years of experience.', 'Number text for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"textColor":"contrast","fontSize":"xxxxxxx-large"} -->
			<p class="has-contrast-color has-text-color has-xxxxxxx-large-font-size"><?php echo esc_html_x( '25', 'Number for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast-secondary-text"} -->
			<p class="has-contrast-secondary-text-color has-text-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Team members.', 'Number text for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"textColor":"contrast","fontSize":"xxxxxxx-large"} -->
			<p class="has-contrast-color has-text-color has-xxxxxxx-large-font-size"><?php echo esc_html_x( '76', 'Number for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast-secondary-text"} -->
			<p class="has-contrast-secondary-text-color has-text-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Projects comleted.', 'Number text for "Our history" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/our-history-img.jpg","hasParallax":true,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","align":"full"} -->
	<div class="wp-block-cover alignfull has-parallax" style="min-height:100vh">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>

		<div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/our-history-img.jpg)"></div>

		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size"></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->
</section>
<!-- /wp:group -->
