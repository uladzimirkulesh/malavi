<?php
/**
 * Title: Hidden No Results Content
 * Slug: silence/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
    <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"contrast-75"} -->
    <p class="has-contrast-75-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'silence' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'silence' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'silence' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'silence' ); ?>"} /-->
</div>
<!-- /wp:group -->
