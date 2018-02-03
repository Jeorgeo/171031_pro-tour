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
		<div id="wowslider-container1">
		<div class="ws_images"><ul>
			<li><img src="http://pro-tour.ru/data/images/16860.jpg" alt="16860" title="16860" id="wows1_0"/></li>
			<li><img src="http://pro-tour.ru/data/images/13840478023135767nevseoboi.com.ua.jpg" alt="1384047802-3135767-nevseoboi.com.ua" title="1384047802-3135767-nevseoboi.com.ua" id="wows1_1"/></li>
			<li><img src="http://pro-tour.ru/data/images/img_lastminute_268195.jpg" alt="img_lastminute_268195" title="img_lastminute_268195" id="wows1_2"/></li>
			<li><a href="http://wowslider.net"><img src="http://pro-tour.ru/data/images/turupobelarusi.jpg" alt="bootstrap slider" title="Turu-po-Belarusi" id="wows1_3"/></a></li>
			<li><img src="http://pro-tour.ru/data/images/fin.jpg" alt="fin" title="fin" id="wows1_4"/></li>
		</ul></div>
		<div class="ws_bullets"><div>
			<a href="#" title="16860"><span><img src="http://pro-tour.ru/data/tooltips/16860.jpg" alt="16860"/>1</span></a>
			<a href="#" title="1384047802-3135767-nevseoboi.com.ua"><span><img src="http://pro-tour.ru/data/tooltips/13840478023135767nevseoboi.com.ua.jpg" alt="1384047802-3135767-nevseoboi.com.ua"/>2</span></a>
			<a href="#" title="img_lastminute_268195"><span><img src="http://pro-tour.ru/data/tooltips/img_lastminute_268195.jpg" alt="img_lastminute_268195"/>3</span></a>
			<a href="#" title="Turu-po-Belarusi"><span><img src="http://pro-tour.ru/data/tooltips/turupobelarusi.jpg" alt="Turu-po-Belarusi"/>4</span></a>
			<a href="#" title="fin"><span><img src="http://pro-tour.ru/data/tooltips/fin.jpg" alt="fin"/>5</span></a>
		</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap carousel example</a> by WOWSlider.com v8.8</div>
		<div class="ws_shadow"></div>
		</div>
		<script type="text/javascript" src="engine1/wowslider.js"></script>
		<script type="text/javascript" src="engine1/script.js"></script>
		<!-- End WOWSlider.com BODY section -->

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
		<button class="btn order-btn call-section_btn cloud-link" type="button" name="button">Начать путешествие</button>
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
					<a href="<?php echo $obj->post_name; ?>" target="_blank">
						<div class="m-gal__shadow">
							<h5><?php echo $obj->post_title; ?></h5>
							<span class="m-gal__price"><?php echo get_field('d_price',$obj->ID); ?></span>
						</div>
						<img src="<?php echo get_field('d_img',$obj->ID); ?>" alt="<?php echo $obj->post_title; ?>">
					</a>
					<button class="cloud-link" type="button" name="button">Полетели</button>
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
				<a href="#" class="cloud-link">Поехали</a>
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
							<?php echo $obj->post_title; ?>
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
						<img src="<?php echo get_field('n_img',$obj->ID); ?>">
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
