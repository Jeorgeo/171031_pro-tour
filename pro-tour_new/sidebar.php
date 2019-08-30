<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-tour_by
 */

?>

<aside class="main-header left-panel">
	<div class="left-panel__box">
		<nav class="news-sidebar__menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'news-menu',
					'menu_id'        => 'sidebar_news',
				) );
			?>
		</nav>
		<?php dynamic_sidebar( 'wiget_aside' ); ?>
	</div>
</aside>
