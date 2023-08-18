<?php
/**
 * Title: Featured projects
 * Slug: silence/featured-projects
 * Categories: text, silence
 * Keywords: Featured projects
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"section section--featured-projects","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide section section--featured-projects" id="section-featured-projects">
	<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:heading {"fontSize":"xxxxxx-large"} -->
			<h2 class="wp-block-heading has-xxxxxx-large-font-size"><?php
			echo wp_kses_post(
				/* translators: Title for "Featured projects" pattern */
				__( 'Our projects is more <br>than fonts and <br>pictures', 'silence' )
			);
			?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"textColor":"contrast-secondary-text","className":"section__small-note"} -->
			<p class="section__small-note has-contrast-secondary-text-color has-text-color" style="padding-top:var(--wp--preset--spacing--20);line-height:1.5"><?php echo esc_html_x( 'Simplicity is not a style, it is more a philosophy about how to design something more effectively.', 'Small text for "Featured projects" pattern', 'silence' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"className":"projects-list","layout":{"type":"default"}} -->
	<div class="wp-block-group projects-list">
		<!-- wp:group {"tagName":"article","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"projects-list__item project-card","layout":{"type":"default"}} -->
		<article class="wp-block-group projects-list__item project-card" style="margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns alignfull" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"className":"project-card__featured-image"} -->
					<figure class="wp-block-image project-card__featured-image"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/project-img-1.jpg" alt=""/></a></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"project-card__body","layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group project-card__body">
						<!-- wp:heading {"level":3,"className":"project-card__title","fontSize":"xxxx-large"} -->
						<h3 class="wp-block-heading project-card__title has-xxxx-large-font-size"><a href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'A tech company\'s website built with Webflow', 'Title for project in the "Featured projects" pattern', 'silence' ); ?></a></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-text","className":"project-card__content"} -->
						<p class="project-card__content has-contrast-text-color has-text-color"><?php echo esc_html_x( 'We helped IPShtorm to create a clean and intuitive website and web application for a SaaS brand protection solution for Amazon sellers.', 'Content for project in the "Featured projects" pattern', 'silence' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"project-card__more-link","fontSize":"x-small"} -->
						<p class="project-card__more-link has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--60);text-transform:uppercase"><a rel="noreferrer noopener" href="#" target="_blank"><span class="link-text"><?php echo esc_html__( 'View case', 'silence' ) ?></span><span class="material-icons link-icon">arrow_forward</span></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->
		</article>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"projects-list__item project-card","layout":{"type":"default"}} -->
		<article class="wp-block-group projects-list__item project-card" style="margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns alignfull" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"className":"project-card__featured-image"} -->
					<figure class="wp-block-image project-card__featured-image"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/project-img-2.jpg" alt=""/></a></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"project-card__body","layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group project-card__body">
						<!-- wp:heading {"level":3,"className":"project-card__title","fontSize":"xxxx-large"} -->
						<h3 class="wp-block-heading project-card__title has-xxxx-large-font-size"><a rel="noreferrer noopener" href="#" target="_blank"><?php echo esc_html_x( 'A fitness company website design', 'Title for project in the "Featured projects" pattern', 'silence' ); ?></a></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-text","className":"project-card__content"} -->
						<p class="project-card__content has-contrast-text-color has-text-color"><?php echo esc_html_x( 'A highly immersive and interactive creative website that blurs the line between the real world and fairytale, built with WebGL and other fancy tech.', 'Content for project in the "Featured projects" pattern', 'silence' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"project-card__more-link","fontSize":"x-small"} -->
						<p class="project-card__more-link has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--60);text-transform:uppercase"><a rel="noreferrer noopener" href="#" target="_blank"><span class="link-text"><?php echo esc_html__( 'View case', 'silence' ) ?></span><span class="material-icons link-icon">arrow_forward</span></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->
		</article>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"className":"projects-list__item project-card","layout":{"type":"default"}} -->
		<article class="wp-block-group projects-list__item project-card" style="margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns alignfull" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"className":"project-card__featured-image"} -->
					<figure class="wp-block-image project-card__featured-image"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/project-img-3.jpg" alt=""/></a></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"project-card__body","layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group project-card__body">
						<!-- wp:heading {"level":3,"className":"project-card__title","fontSize":"xxxx-large"} -->
						<h3 class="wp-block-heading project-card__title has-xxxx-large-font-size"><a href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'Online platform for distance learning', 'Title for project in the "Featured projects" pattern', 'silence' ); ?></a></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-text","className":"project-card__content"} -->
						<p class="project-card__content has-contrast-text-color has-text-color"><?php echo esc_html_x( 'This product has won several design awards for the best website design, including Webby, Awwwards, and Red Dot. It has also been featured in over 100 publications, such as Entrepreneur and Mashable.', 'Content for project in the "Featured projects" pattern', 'silence' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"project-card__more-link","fontSize":"x-small"} -->
						<p class="project-card__more-link has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--60);text-transform:uppercase"><a rel="noreferrer noopener" href="#" target="_blank"><span class="link-text"><?php echo esc_html__( 'View case', 'silence' ) ?></span><span class="material-icons link-icon">arrow_forward</span></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->
		</article>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"article","className":"projects-list__item project-card","layout":{"type":"default"}} -->
		<article class="wp-block-group projects-list__item project-card">
			<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns alignfull" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"className":"project-card__featured-image"} -->
					<figure class="wp-block-image project-card__featured-image"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/project-img-4.jpg" alt=""/></a></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"project-card__body","layout":{"type":"constrained","justifyContent":"left"}} -->
					<div class="wp-block-group project-card__body">
						<!-- wp:heading {"level":3,"className":"project-card__title","fontSize":"xxxx-large"} -->
						<h3 class="wp-block-heading project-card__title has-xxxx-large-font-size"><a href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html_x( 'European digital magazine, powered by women', 'Title for project in the "Featured projects" pattern', 'silence' ); ?></a></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-text","className":"project-card__content"} -->
						<p class="project-card__content has-contrast-text-color has-text-color"><?php echo esc_html_x( 'Crafting a unique story through a website. Seamless user experience, animations, and UI design, where every element and interaction is thought through.', 'Content for project in the "Featured projects" pattern', 'silence' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"project-card__more-link","fontSize":"x-small"} -->
						<p class="project-card__more-link has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--60);text-transform:uppercase"><a rel="noreferrer noopener" href="#" target="_blank"><span class="link-text"><?php echo esc_html__( 'View case', 'silence' ) ?></span><span class="material-icons link-icon">arrow_forward</span></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"align":"full","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignfull has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->
		</article>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
