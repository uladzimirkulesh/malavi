<?php
/**
 * Title: Grid
 * Slug: silence/loop-grid
 * Categories: posts, silence
 * Block Types: core/template-part/loop
 */
?>
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"wide"} -->
		<!-- wp:post-featured-image {"isLink":true,"width":"100%","align":"wide","style":{"border":{"radius":"0.5rem"}}} /-->
		<!-- wp:post-title {"isLink":true,"align":"wide"} /-->
		<!-- wp:post-excerpt /-->
		<!-- wp:post-date {"isLink":true} /-->
	<!-- /wp:post-template -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","layout":{"type":"flex","justifyContent":"left"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
