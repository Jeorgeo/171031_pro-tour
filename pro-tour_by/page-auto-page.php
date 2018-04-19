<?php
/**
 * Template Name: Автобусные туры
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

$auto = get_posts(
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
				'post_type' => 'auto',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
 ?>

<main class="autobus">
	<h1 class="content-title"><?php echo get_field( 'page-title' ); ?></h1>

	<section class="avia__cards">
		<?php
			foreach ($auto as $obj) {
				if($obj->post_name == 'archive') {
						continue;
				}
		 ?>
		<div class="avia__card">
			<a href="<?php echo $obj->post_name; ?>" target="_blank" class="avia__card_img">
				<span class="card_img-more">Узнать подробнее</span>
				<img src="<?php echo get_field('d_img',$obj->ID); ?>">
				<figure class="cards_img-stars">
					<h5><?php echo $obj->post_title; ?></h5>
					<div class="stars-box">
						<span><?php echo get_field('d_price',$obj->ID); ?></span>
					</div>


				</figure>
			</a>
			<a href="#" class="avia__card_btn">
				Поехали!
			</a>
		</div>
		<?php
		 }
		?>
	</section>
</main>

<?php

get_footer();
