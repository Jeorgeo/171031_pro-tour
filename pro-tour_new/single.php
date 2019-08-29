<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pro-tour_by
 */

get_header();
?>

<div id="primary" class="content-area container">
 <?/*php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); */?>
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
		<main id="main" class="site-main single-avia">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main single-avia-->
</div>
</div><!-- #primary -->

<?php
get_footer();
