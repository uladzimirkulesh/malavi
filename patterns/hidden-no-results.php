<?php
/**
 * Title: Hidden No Results Content
 * Slug: malavi/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'malavi' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'malavi' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'malavi' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'malavi' ); ?>"} /-->
