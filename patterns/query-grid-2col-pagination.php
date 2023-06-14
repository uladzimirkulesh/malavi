<?php
/**
 * Title: Two column grid with pagination
 * Slug: silence/query-grid-2col-pagination
 * Categories: query, silence
 * Block Types: core/query
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"align":"full","className":"loop","layout":{"type":"default"}} -->
	<div class="wp-block-query alignfull loop">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"width":"100%","align":"wide"} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:post-date {"displayType":"modified"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true,"align":"wide"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
