<?php
/**
 * Title: Contacts
 * Slug: malavi/contacts
 * Categories: text, malavi
 * Keywords: Contacts
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--contacts","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--contacts" id="section-contacts">
	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--20)"/>
	<!-- /wp:separator -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Location', 'Title for "Contacts" pattern item', 'malavi' ); ?></h6>
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

		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Email us', 'Title for "Contacts" pattern item', 'malavi' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--10)"><?php
			echo wp_kses_post(
				/* translators: Content for "Contacts" pattern item */
				__( '<a href="mailto:info@sitename.com" target="_blank" rel="noreferrer noopener">info@sitename.com</a><br><a rel="noreferrer noopener" href="mailto:hello@sitename.com" target="_blank">hello@sitename.com</a>', 'malavi' )
				);
			?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Call us', 'Title for "Contacts" pattern item', 'malavi' ); ?></h6>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--10)"><?php
			echo wp_kses_post(
				/* translators: Content for "Contacts" pattern item */
				__( '<a href="tel:+1 234-765-9876">+1 234-765-9876</a><br><a href="tel:+1 254-987-4321">+1 254-987-4321</a>', 'malavi' )
				);
			?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} -->
			<h6 class="wp-block-heading"><?php echo esc_html_x( 'Work hours', 'Title for "Contacts" pattern item', 'malavi' ); ?></h6>
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
</section>
<!-- /wp:group -->
