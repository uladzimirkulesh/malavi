<?php
/**
 * Title: Testimonials
 * Slug: malavi/testimonials
 * Categories: testimonials, malavi
 * Keywords: Testimonials
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--testimonials","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--testimonials" id="section-testimonials">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:heading {"fontSize":"xxxxxx-large"} -->
			<h2 class="wp-block-heading has-xxxxxx-large-font-size"><?php
			echo wp_kses_post(
				/* translators: Title for "Testimonials" pattern */
				__( 'And winning <br>hearts and trust', 'malavi' )
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

	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"className":"testimonials-list"} -->
	<div class="wp-block-columns testimonials-list">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.5em"}},"backgroundColor":"contrast-secondary-bg","className":"testimonials-list__item","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group testimonials-list__item has-contrast-secondary-bg-background-color has-background" style="border-radius:0.5em;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":80,"height":80,"style":{"border":{"radius":"50%"}},"className":"is-style-rounded"} -->
					<figure class="wp-block-image is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/testimonials-img-1.jpeg" alt="" style="border-radius:50%" width="80" height="80"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
					<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( '"They are a highly skilled and knowledgeable team with a dedication to delivering excellence."', 'Content for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Bennett Cole', 'Name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"contrast-secondary-text","fontSize":"small"} -->
					<p class="has-contrast-secondary-text-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Welmort Asia Realty', 'Company name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.5em"}},"backgroundColor":"contrast-secondary-bg","className":"testimonials-list__item","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials-list__item has-contrast-secondary-bg-background-color has-background" style="border-radius:0.5em;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":80,"height":80,"style":{"border":{"radius":"50%"}},"className":"is-style-rounded"} -->
					<figure class="wp-block-image is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/testimonials-img-2.jpeg" alt="" style="border-radius:50%" width="80" height="80"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
					<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( '"Working together we created a brand that has been very well received by the market. Great work."', 'Content for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Christian Brown', 'Name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"contrast-secondary-text","fontSize":"small"} -->
					<p class="has-contrast-secondary-text-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Global Branding Group', 'Company name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.5em"}},"backgroundColor":"contrast-secondary-bg","className":"testimonials-list__item","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials-list__item has-contrast-secondary-bg-background-color has-background" style="border-radius:0.5em;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":80,"height":80,"style":{"border":{"radius":"50%"}},"className":"is-style-rounded"} -->
					<figure class="wp-block-image is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/testimonials-img-3.jpeg" alt="" style="border-radius:50%" width="80" height="80"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
					<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( '"The team were highly motivated, responsive and energetic and delivered fully on every brief we gave them."', 'Content for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Georgie Tingey', 'Name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"contrast-secondary-text","fontSize":"small"} -->
					<p class="has-contrast-secondary-text-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Director OPTIC Capital', 'Company name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"className":"testimonials-list"} -->
	<div class="wp-block-columns testimonials-list">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.5em"}},"backgroundColor":"contrast-secondary-bg","className":"testimonials-list__item","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials-list__item has-contrast-secondary-bg-background-color has-background" style="border-radius:0.5em;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":80,"height":80,"style":{"border":{"radius":"50%"}},"className":"is-style-rounded"} -->
					<figure class="wp-block-image is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/testimonials-img-4.jpeg" alt="" style="border-radius:50%" width="80" height="80"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
					<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( '"They skillfully and meticulously create new innovative designs without changing our brand DNA."', 'Content for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Shirley Stokes', 'Name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"contrast-secondary-text","fontSize":"small"} -->
					<p class="has-contrast-secondary-text-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'OCHRA Worldwide', 'Company name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.5em"}},"backgroundColor":"contrast-secondary-bg","className":"testimonials-list__item","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials-list__item has-contrast-secondary-bg-background-color has-background" style="border-radius:0.5em;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":80,"height":80,"style":{"border":{"radius":"50%"}},"className":"is-style-rounded"} -->
					<figure class="wp-block-image is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/testimonials-img-5.jpeg" alt="" style="border-radius:50%" width="80" height="80"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
					<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html_x( '"I feel a sense of pride at what we achieved working together for the website launch. Great teamwork."', 'Content for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"contrast"} -->
					<p class="has-contrast-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Edmond Herrera', 'Name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"contrast-secondary-text","fontSize":"small"} -->
					<p class="has-contrast-secondary-text-color has-text-color has-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Founder Maruko Royale', 'Company name for "Testimonials" item', 'malavi' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"0.5em"}},"backgroundColor":"contrast-secondary-bg","className":"testimonials-list__item--more","layout":{"type":"constrained"}} -->
			<div class="wp-block-group testimonials-list__item--more has-contrast-secondary-bg-background-color has-background" style="border-radius:0.5em;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:heading {"level":6} -->
				<h6 class="wp-block-heading"><?php echo esc_html_x( 'Testimonials', 'Title for "Testimonials" more item', 'malavi' ); ?></h6>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast","fontSize":"x-large"} -->
				<p class="has-contrast-color has-text-color has-x-large-font-size"><?php
				echo wp_kses_post(
					/* translators: Content for "Testimonials" more item */
					__( 'Read more people\'s <br>testimonials.', 'malavi' )
				);
				?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"more-link"} -->
				<p class="more-link"><a href="#" target="_blank" rel="noreferrer noopener"><span class="material-icons">arrow_forward</span></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
