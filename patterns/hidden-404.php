<?php
/**
 * Title: Hidden 404
 * Slug: silence/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"className":"page-header","layout":{"type":"constrained"}} -->
<header class="wp-block-group page-header" style="margin-bottom:var(--wp--preset--spacing--10)">
	<!-- wp:heading {"textAlign":"center","level":1,"align":"full","style":{"spacing":{"margin":{"right":"0","left":"0"}}},"fontSize":"xxxx-large"} -->
	<h1 class="wp-block-heading alignfull has-text-align-center has-xxxx-large-font-size" style="margin-right:0;margin-left:0"><?php echo esc_html_x( 'Not Found', 'Error code for a webpage that is not found.', 'silence' ); ?></h1>
	<!-- /wp:heading -->
</header>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"contrast-50"} -->
		<p class="has-text-align-center has-contrast-50-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html_x( 'Error 404: The page you were looking for cannot be found.', 'Message to convey that a webpage could not be found', 'silence' ); ?></p>
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
</div>
<!-- /wp:group -->
