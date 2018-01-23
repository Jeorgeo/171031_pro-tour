<?php
/**
 * Template Name: Главная
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

$tops = get_posts(
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
				'post_type' => 'tops',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
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
$news = get_posts(
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
); ?>

<main>
	<section class="main-slider">
		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
		<div id="wowslider-container">
		<div class="ws_images"><ul>
			<?php
				foreach ($tops as $obj) {
					if($obj->post_name == 'archive') {
							continue;
					}
			 ?>
			<li>
				<a href="<?php echo get_field('s_link',$obj->ID); ?>" target="_blank"><img src="<?php echo get_field('s_img',$obj->ID); ?>" alt="<?php echo get_field('s_title',$obj->ID); ?>" title="<?php echo get_field('s_title',$obj->ID); ?>" id="<?php echo get_field('s_id',$obj->ID); ?>"/></a>
			</li>
			<?php
 				}
 			 ?>
		</ul></div>
		<div class="ws_bullets">
			<div>
				<?php
					foreach ($tops as $obj) {
						if($obj->post_name == 'archive') {
								continue;
						}
				 ?>
			  <a href="#" title="<?php echo get_field('short_title',$obj->ID); ?>">
					<span><img src="<?php echo get_field('s_img',$obj->ID); ?>" width="96" height="48" alt="<?php echo get_field('s_title',$obj->ID); ?>"/><?php echo get_field('short_title',$obj->ID); ?></span>
					</a>
				<?php
	 				}
	 			 ?>
			</div>
		</div>
		<div class="ws_shadow"></div>
		</div>

	</section>
	<section class="arrow-section">
		<div class="box-arrow">
			<a href="#search">search</a>
		</div>
		<span id="search"></span>
	</section>

	<section class="search-section">
		<?php echo get_field( 'search-box' ); ?>
	</section>

	<section class="call-section">
		<div class="call-section_text">
			<p>
			 <?php echo get_field( 'button-text' ); ?>
			</p>
		</div>
		<button class="btn order-btn call-section_btn" type="button" name="button">Начать путешествие</button>
	</section>
	<section class="avia">
		<div class="main-gallery">
			<div class="m-gal__slide">
				<article>
					<span class="section-title">
						PRO-
						<h3>
							авиатуры
						</h3>
					</span>
					<span>
						<p>
							<?php echo get_field( 'avia-text-1' ); ?>
						</p>
						<div class="btn-box">
							<span class="hover-text">
								<?php echo get_field( 'avia-text-2' ); ?>
							</span>
						</div>
					</span>
				</article>
			</div>
			<div class="m-gal-box diamondswrap">
				<div class="m-gal__slide item">
					<a href="">
						<img src="" alt="">
					</a>
				</div>
				<?php
					foreach ($avia as $obj) {
						if($obj->post_name == 'archive') {
								continue;
						}
				 ?>
				<div class="m-gal__slide item">
					<a href="<?php echo $obj->post_name; ?>">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5><?php echo $obj->post_title; ?></h5>
							<span class="m-gal__price"><?php echo get_field('d_price',$obj->ID); ?></span>
						</div>
						<img src="<?php echo get_field('d_img',$obj->ID); ?>" alt="<?php echo $obj->post_title; ?>">
					</a>
				</div>
				<?php
	 				}
	 			 ?>
			</div>
		</div>
	</section>
	<section class="auto">
		<article>
			<div class="btn-text">
				<span class="section-title">
					PRO-
					<h3>
						автобусные туры
					</h3>
				</span>
				<!--<p>
					Прекрасная возможность увидить "матушку" Европу во всей красе.
				</p>!-->
				<p>
					<?php echo get_field( 'auto-text' ); ?>
				</p>
			</div>
			<div class="btn-box">
				<span class="hover-text">
					еще больше автобусных путешествий
				</span>
				<a href="#">Поехали</a>
			</div>
		</article>
		<div class="container">
			<section id="dg-container" class="dg-container">
				 <div class="dg-wrapper">
					 <?php
	 					foreach ($auto as $obj) {
	 						if($obj->post_name == 'archive') {
	 								continue;
	 						}
	 				 ?>
					<a href="<?php echo $obj->post_name; ?>">
						<img src="<?php echo get_field('d_img',$obj->ID); ?>" alt="<?php echo $obj->post_title; ?>">
						<div>
							<?php echo $obj->post_title; ?><br>
							<span><?php echo get_field('d_price',$obj->ID); ?></span>
						</div>
					</a>
					<?php
		 				}
		 			 ?>
				 </div>
					<nav>
						<span class="dg-prev"><</span>
						<span class="dg-next">></span>
					</nav>
			</section>
			</div>
		</section>
	</div>
	<section class="news">
		<div class="news-box">
			<div class="section__title-box">
				<span class="section-title">
					PRO-
					<h3>
						Новости
					</h3>
				</span>
			</div>
			<div class="container">
				<?php
				 foreach ($news as $obj) {
					 if($obj->post_name == 'archive') {
							 continue;
					 }
				?>
				<article>
					<a href="<?php echo $obj->post_name; ?>">
						<img src="<<?php echo get_field('n_img',$obj->ID); ?>">
						<p>
							<?php echo $obj->post_title; ?>
							<span><?php echo get_field('n_descript',$obj->ID); ?></span>
							<span>Читать далee...</span>
						</p>
					</a>
				</article>
				<?php
					}
				 ?>
			</div>
		</div>
		<div class="social-box">
			<div class="section__title-box">
				<span class="section-title">
					PRO-
					<h3>
						нас в социальных сетях
					</h3>
				</span>
			</div>
			<div class="container">
				<article class="wigets">
					<?php echo get_field( 'wigets' ); ?>
				</article>
			</div>
		</div>
	</section>
</main>

<?php

get_footer();
