<?php
/**
 * Title: Hidden 404
 * Slug: silence/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":1,"align":"wide","fontSize":"xxxxx-large"} -->
	<h1 class="wp-block-heading alignwide has-xxxxx-large-font-size"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'silence' ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0">
	<!-- wp:paragraph {"textColor":"contrast-75"} -->
	<p class="has-contrast-75-color has-text-color"><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'silence' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'silence' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'silence' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'silence' ); ?>"} /-->
</div>
<!-- /wp:group -->
