<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pro-tour_by
 */

get_header();
get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page-404">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Что-то пошло не так. Мы не можем найти такую страницу', 'pro-tour_by' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Похоже, в этом месте ничего нет. Попробуйте поиск или вернуться на главную?', 'pro-tour_by' ); ?></p>

					<?php
						get_search_form();


					?>

					<a href="<?php echo get_home_url(); ?>">На главную</a>

					<?php

						/* translators: %1$s: smiley */

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			<div class="bg-box">

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
