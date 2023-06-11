<?php
/**
 * Title: Grid
 * Slug: silence/loop-grid
 * Categories: posts, silence
 * Block Types: core/template-part/loop
 */
?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"className":"loop","layout":{"type":"default"}} -->
<div class="wp-block-query loop">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:post-template {"align":"full"} -->
				<!-- wp:post-featured-image {"isLink":true,"width":"100%","align":"wide"} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:post-date {"displayType":"modified"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true,"align":"wide"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|10"}}},"className":"pagination","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull pagination" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--10)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
		
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
