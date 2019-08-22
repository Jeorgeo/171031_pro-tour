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
		<main id="main" class="site-main single-news">

		<?php if ( have_posts() ) : ?>

			<h1><? the_title(); ?></h1>
			<?

			the_post();
			the_content();
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
