<?php
/**
 * Title: Hidden 404
 * Slug: silence/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","align":"wide","className":"page-header","layout":{"type":"default"}} -->
<header class="wp-block-group alignwide page-header">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxxxxxx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xxxxxxx-large-font-size"><?php echo esc_html_x( 'Not Found', 'Error code for a webpage that is not found.', 'silence' ); ?></h1>
	<!-- /wp:heading -->
</header>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"contrast-secondary-text"} -->
	<p class="has-text-align-center has-contrast-secondary-text-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html_x( 'Error 404: The page you were looking for cannot be found.', 'Message to convey that a webpage could not be found', 'silence' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Home Page', 'silence' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
