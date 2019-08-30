<?php
/**
 * The template for displaying single avia post
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
				the_post();
				the_content();
			?>
			<a href="#" class="btn cloud-link card-box__btn">Оставить заявку</a>
			<?
				the_post_navigation();
			?>
	</main><!-- #main single-avia-->
</div>
</div><!-- #primary -->

<?php
get_footer();
