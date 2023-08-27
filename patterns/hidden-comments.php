<?php
/**
 * Title: Hidden Comments
 * Slug: malavi/hidden-comments
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group">
	<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-comments" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:comments-title {"showPostTitle":false} /-->

		<!-- wp:comment-template -->
			<!-- wp:group {"tagName":"article","style":{"border":{"top":{"color":"var:preset|color|contrast-borders","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}}},"className":"comment-body","layout":{"type":"constrained"}} -->
			<article class="wp-block-group comment-body" style="border-top-color:var(--wp--preset--color--contrast-borders);border-top-width:1px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30)">
				<!-- wp:group {"tagName":"footer","style":{"spacing":{"blockGap":"1rem"}},"className":"comment-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<footer class="wp-block-group comment-meta">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-author-name /-->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-date /-->
							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</footer>
				<!-- /wp:group -->

				<!-- wp:comment-content {"className":"comment-content"} /-->

				<!-- wp:comment-reply-link {"className":"comment-reply"} /-->
			</article>
			<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-numbers /-->
			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} /-->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
