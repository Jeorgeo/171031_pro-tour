<?php
/**
 * Template Name: Отзывы
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

get_header();

?>

	<div id="primary" class="content-area container ">
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		<div class="flex-sidebar">
			<aside class="main-header left-panel">
				<div class="left-panel__box">
					<nav class="news-sidebar__menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'type-menu',
								'menu_id'        => 'sidebar_type',
							) );
						?>
					</nav>
					<?php dynamic_sidebar( 'wiget_aside' ); ?>
				</div>
			</aside>
			<main id="main" class="site-main reviews">
				<h1 class="section-title section-title_dark-theme">Отзывы <span class="color-orange">наших</span> туристов</h1>

			<?php

			$args = array(
                   'post_type' => 'reviews',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
               );

            query_posts($args);

			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-reviews', get_post_type() );

				endwhile;

				the_posts_navigation();
				//if (function_exists('wp_corenavi')) wp_corenavi();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div>

	</div><!-- #primary -->

<?php

get_footer();
