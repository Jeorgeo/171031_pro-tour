<?php
/**
 * Template Name: Авиатуры
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

get_header();
get_sidebar();

$avia = get_posts(
		array(
				'numberposts' => -1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'avia',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
 ?>
 
<main>
	<section class="search-section">
		<h3 class="content-title"><?php echo get_field( 'page-title' ); ?></h3>
		<?php echo get_field( 'search-box' ); ?>
	</section>
	<section class="avia__cards">
		<div class="avia__card">
			<a href="#" class="avia__card_img">
				<span class="card_img-more">Узнать подробнее</span>
				<img src="<?php bloginfo('template_url'); ?>/img/bg_main.jpg">
				<figure class="cards_img-stars">
					<span class="stars two-stars"> от 300р.</span>
					<span class="stars three-stars"> от 400р.</span>
					<span class="stars four-stars"> от 500р.</span>
					<span class="stars five-stars"> от 600р.</span>
				</figure>
			</a>
			<a href="#" class="avia__card_btn">
				Полетели!
			</a>
		</div>
		<div class="avia__card">
			<a href="#" class="avia__card_img">
				<span class="card_img-more">Узнать подробнее</span>
				<img src="<?php bloginfo('template_url'); ?>/img/bg_main.jpg">
				<figure class="cards_img-stars">
					<span class="stars two-stars"> от 300р.</span>
					<span class="stars three-stars"> от 400р.</span>
					<span class="stars four-stars"> от 500р.</span>
					<span class="stars five-stars"> от 600р.</span>
				</figure>
			</a>
			<a href="#" class="avia__card_btn">
				Полетели!
			</a>
		</div>
	</section>
</main>

<?php

get_footer();
