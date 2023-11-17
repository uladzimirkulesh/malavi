<?php
/**
 * Title: Two column grid with pagination
 * Slug: malavi/query-grid-2col-pagination
 * Categories: posts, malavi
 * Block Types: core/query
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"width":"100%","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:post-terms {"term":"category"} /-->
			<!-- wp:post-date /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0"}}},"fontSize":"x-large"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
