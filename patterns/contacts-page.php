<?php
/**
 * Title: Contacts Page
 * Slug: malavi/contacts-page
 * Categories: text, malavi
 * Keywords: Contacts Page
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--contacts-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--contacts-page" id="section-contacts-page">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:heading {"fontSize":"xxxxxxx-large"} -->
			<h2 class="wp-block-heading has-xxxxxxx-large-font-size"><?php echo esc_html_x( 'Contacts', 'Title for "Contacts Page" pattern', 'malavi' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"xxx-large"} -->
			<p class="has-xxx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html_x( 'If you’re interested in working with us, or collaborating on a project, we’d love to hear from you.', 'Text for "Contacts Page" pattern', 'malavi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:separator -->
				<hr class="wp-block-separator has-alpha-channel-opacity"/>
				<!-- /wp:separator -->

				<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:heading {"level":6} -->
						<h6 class="wp-block-heading"><?php echo esc_html_x( 'Address', 'Small title for "Contacts Page" pattern', 'malavi' ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
						<p style="margin-top:var(--wp--preset--spacing--10)"><?php
						echo wp_kses_post(
							/* translators: Content for "Contacts" pattern item */
							__( '501 Passaic Avenue, Harrison, <br>New York 07329', 'malavi' )
						);
						?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:heading {"level":6} -->
						<h6 class="wp-block-heading"><?php echo esc_html_x( 'Work hours', 'Small title for "Contacts Page" pattern', 'malavi' ); ?></h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
						<p style="margin-top:var(--wp--preset--spacing--10)"><?php
						echo wp_kses_post(
							/* translators: Content for "Contacts" pattern item */
							__( 'Mon - Fri: 8am - 6pm<br>Sat - Sun: Closed', 'malavi' )
						);
						?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:separator -->
				<hr class="wp-block-separator has-alpha-channel-opacity"/>
				<!-- /wp:separator -->

				<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<h6 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Get in Touch', 'Small title for "Contacts Page" pattern', 'malavi' ); ?></h6>
				<!-- /wp:heading -->

				<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
				<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--10)">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:paragraph -->
						<p><?php
						echo wp_kses_post(
							/* translators: Content for "Contacts" pattern item */
							__( '<a href="mailto:info@sitename.com" target="_blank" rel="noreferrer noopener">info@sitename.com</a><br><a rel="noreferrer noopener" href="mailto:hello@sitename.com" target="_blank">hello@sitename.com</a>', 'malavi' )
							);
						?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:paragraph -->
						<p><?php
						echo wp_kses_post(
							/* translators: Content for "Contacts" pattern item */
							__( '<a href="tel:+1 234-765-9876">+1 234-765-9876</a><br><a href="tel:+1 254-987-4321">+1 254-987-4321</a>', 'malavi' )
							);
						?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:separator -->
				<hr class="wp-block-separator has-alpha-channel-opacity"/>
				<!-- /wp:separator -->

				<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<h6 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Social networks', 'Small title for "Contacts Page" pattern', 'malavi' ); ?></h6>
				<!-- /wp:heading -->

				<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
				<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--10)">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:paragraph -->
						<p><a rel="noreferrer noopener" href="#" target="_blank"><?php echo esc_html_x( 'LinkedIn', 'Text for LinkedIn link for "Contact Page" pattern', 'malavi' ); ?></a><br><a rel="noreferrer noopener" href="#" target="_blank"><?php echo esc_html_x( 'Facebook', 'Text for Facebook link for "Contact Page" pattern', 'malavi' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:paragraph -->
						<p><a href="http://localhost:3000/wordpress/contact/#"><?php echo esc_html_x( 'Twitter', 'Text for Twitter link for "Contact Page" pattern', 'malavi' ); ?></a><br><a rel="noreferrer noopener" href="http://localhost:3000/wordpress/about/#" target="_blank"><?php echo esc_html_x( 'Instagram', 'Text for Instagram link for "Contact Page" pattern', 'malavi' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:separator -->
				<hr class="wp-block-separator has-alpha-channel-opacity"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/contacts-page-img.jpg","dimRatio":0,"minHeight":100,"minHeightUnit":"%","isDark":false,"style":{"border":{"radius":"0.5em"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover is-light" style="border-radius:0.5em;min-height:100%">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>

				<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/contacts-page-img.jpg" data-object-fit="cover"/>

				<div class="wp-block-cover__inner-container">
					<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
					<p class="has-text-align-center has-large-font-size"></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
