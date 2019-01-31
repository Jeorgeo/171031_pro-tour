<?php
/**
 * Template Name: Новости
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
				'post_type' => 'news',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
 ?>

<main class="autobus">
	<h1 class="content-title"><?php echo get_field( 'page-title' ); ?></h1>

	<section class="news-section">
		<div class="news-box">
			<div class="section__title-box">
				<span class="section-title">
					Акции
					<h3>
						Новости и Статьи
					</h3>
				</span>
			</div>
			<article>
		<?php
			foreach ($auto as $obj) {
				if($obj->post_name == 'archive') {
						continue;
				}
		 ?>

 			<a href="news/<?php echo $obj->post_name; ?>">
 				<img src="<?php echo get_field('n_img',$obj->ID); ?>">
 				<p>
 					<?php echo $obj->post_title; ?>
 					<span><?php echo get_field('n_descript',$obj->ID); ?>...</span>
 					<span>...Читать далee</span>
 				</p>
 			</a>

		<?php
		 }
		?>
		</article>
	</div>
	</section>
</main>

<?php

get_footer();
