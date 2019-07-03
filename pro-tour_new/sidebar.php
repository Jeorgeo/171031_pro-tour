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
		<div id="js-toggle" class="left-panel__menu-toggle">
			<button class="header-menu-toggle"><span>menu</span></button>
		</div>
		<a href="<?php echo get_home_url(); ?>">
			<figure  class="logo-box">
				<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Туристическое агенство Pro-tour.by">
				<h1>Туристическое агенство <span class="hide-text">Pro-tour.by</span></h1>
			</figure>
		</a>
		<div class="social">
			<?php dynamic_sidebar( 'social_vk' ); ?>
			<?php dynamic_sidebar( 'social_ok' ); ?>
			<?php dynamic_sidebar( 'social_f' ); ?>
			<?php dynamic_sidebar( 'social_inst' ); ?>
		</div>
		<nav class="main-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'second-menu',
					'menu_id'        => 'Вспомогательное',
				) );
			?>
		</nav>
		<?php dynamic_sidebar( 'wiget_aside' ); ?>
		<?php dynamic_sidebar( 'wiget_tags' ); ?>

	</div>
</aside>
