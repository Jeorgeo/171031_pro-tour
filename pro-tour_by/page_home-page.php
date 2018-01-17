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

$wowslider = get_posts(
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
				'post_type' => 'reviews',
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
				'post_type' => 'reviews',
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
				'post_type' => 'reviews',
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
				'post_type' => 'reviews',
				'post_parent' => '',
				'post_status' => 'publish'
		)
); ?>

<main>
	<section class="main-slider">
		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
		<div id="wowslider-container">
		<div class="ws_images"><ul>
			<li>
				<a href="http://htmlbook.ru/"><img src="<?php bloginfo('template_url'); ?>/data/images/16860.jpg" alt="test" title="test" id="wows1_0"/>		</a>
			</li>
			<li><img src="<?php bloginfo('template_url'); ?>/data/images/13840478023135767nevseoboi.com.ua.jpg" alt="test1" title="test2" id="wows1_1"/></li>
			<li><img src="<?php bloginfo('template_url'); ?>/data/images/img_lastminute_268195.jpg" alt="test2" title="test2" id="wows1_2"/></li>
			<li><img src="<?php bloginfo('template_url'); ?>/data/images/turupobelarusi.jpg" alt="test3" title="test3" id="wows1_3"/></li>
			<li><img src="<?php bloginfo('template_url'); ?>/data/images/fin.jpg" alt="test4" title="test4" id="wows1_4"/></li>
		</ul></div>
		<div class="ws_bullets">
			<div>
			  <a href="#" title="16860"><span><img src="<?php bloginfo('template_url'); ?>/data/images/16860.jpg" width="96" height="48" alt="16860"/>1</span></a>
			  <a href="#" title="1384047802-3135767-nevseoboi.com.ua"><span><img src="<?php bloginfo('template_url'); ?>/data/tooltips/13840478023135767nevseoboi.com.ua.jpg" alt="1384047802-3135767-nevseoboi.com.ua"/>2</span></a>
			  <a href="#" title="img_lastminute_268195"><span><img src="<?php bloginfo('template_url'); ?>/data/tooltips/img_lastminute_268195.jpg" alt="img_lastminute_268195"/>3</span></a>
		  	<a href="#" title="Turu-po-Belarusi"><span><img src="<?php bloginfo('template_url'); ?>/data/tooltips/turupobelarusi.jpg" alt="Turu-po-Belarusi"/>4</span></a>
			  <a href="#" title="fin"><span><img src="<?php bloginfo('template_url'); ?>/data/tooltips/fin.jpg" alt="fin"/>5</span></a>
			</div>
		</div>
		<div class="ws_shadow"></div>
		</div>

	</section>
	<section class="arrow-section">
		<!--
		<span>
			Более 100 проверенных туроператоров готовы предложить вам отдых <span class="big-text">здесь</span>
		</span>
		!-->
		<div class="box-arrow">
			<a href="#search">search</a>
		</div>
		<span id="search"></span>
	</section>

	<section class="search-section">

		<!--Начало кода 2345.by. Просто скопируйте этот код в любую страницу/в любое место вашего сайта. Все обновления, исправления и улучшения будут происходить автоматически. Это открытая бета (ПО открыто для пользователей 26 декабря 2017). Релиз планируется 1 марта 2018 (к релизу ПО будет оптимизировано и мы развернем его в облаке с автоподключаемыми вычислительными ресурсами). Если вы заметили баг, отвалился/переехал нужный вам туроператор, то сообщите в тех-поддержку.--><iframe scrolling="no" width="100%" frameborder="0" id="www.2345.by" src="http://2345.by/?Module=true&Module_City=%D0%9A%D0%B8%D0%B5%D0%B2&Module_Country=%D0%95%D0%B3%D0%B8%D0%BF%D0%B5%D1%82&Module_DatesRange=auto1&Module_NightsFrom=7&Module_NightsTo=10&Module_Adults=2&Module_Childs=0&Module_AgeChd1=0&Module_AgeChd2=0&Module_StarsFrom=3*&Module_PansionFrom=BB&Module_AviaWarranty=true&Module_HotelWarranty=false&Module_HideOperators=true&Module_AutoStart=false&Module_NationalCurrency=BYN&Module_CurrencyMode=real_currency&Module_PriceCorrection=1.00&Module_ImageIsLogo=true&Module_AviaDetails=true&Module_HotelDonor=TopHotels&Module_Phone=%2B375291321800&Module_Font=Tahoma&Module_BgColor=%23f3f4f7&Module_HrefColor=%23448aae&Module_Color1=%23354b4d&Module_Color2=%23d37225&Module_NameForTab1=PRO-%D0%BF%D0%BE%D0%B8%D1%81%D0%BA&Module_NameForTab2=%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8&Module_NameForTab3=%D0%9A%D0%B0%D0%BA%20%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BF%D0%BE%D0%B8%D1%81%D0%BA%D0%BE%D0%BC&Module_IconForTab1=fa-paper-plane&Module_IconForTab2=fa-cogs&Module_IconForTab3=fa-info-circle%20&Module_TxtUrl1=&Module_TxtUrl2=http%3A%2F%2F2345.by%2Fup%2Fcall.txt&Module_BgUrl=http%3A%2F%2F2345.by%2Fup%2Fwallpaper.jpg&Module_ImageUrl=&Module_Cities=%D0%91%D1%80%D0%B5%D1%81%D1%82%2C%D0%92%D0%B0%D1%80%D1%88%D0%B0%D0%B2%D0%B0%2C%D0%92%D0%B8%D0%BB%D1%8C%D0%BD%D1%8E%D1%81%2C%D0%92%D0%B8%D1%82%D0%B5%D0%B1%D1%81%D0%BA%2C%D0%93%D0%BE%D0%BC%D0%B5%D0%BB%D1%8C%2C%D0%93%D1%80%D0%BE%D0%B4%D0%BD%D0%BE%2C%D0%9A%D0%B8%D0%B5%D0%B2%2C%D0%9C%D0%B8%D0%BD%D1%81%D0%BA%2C%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&Module_Countries=%D0%90%D0%B1%D1%85%D0%B0%D0%B7%D0%B8%D1%8F%2C%D0%90%D0%B2%D1%81%D1%82%D1%80%D0%B8%D1%8F%2C%D0%91%D0%BE%D0%BB%D0%B3%D0%B0%D1%80%D0%B8%D1%8F%2C%D0%92%D1%8C%D0%B5%D1%82%D0%BD%D0%B0%D0%BC%2C%D0%93%D1%80%D0%B5%D1%86%D0%B8%D1%8F%2C%D0%94%D0%BE%D0%BC%D0%B8%D0%BD%D0%B8%D0%BA%D0%B0%D0%BD%D0%B0%2C%D0%95%D0%B3%D0%B8%D0%BF%D0%B5%D1%82%2C%D0%98%D0%B7%D1%80%D0%B0%D0%B8%D0%BB%D1%8C%2C%D0%98%D0%BD%D0%B4%D0%B8%D1%8F%2C%D0%98%D0%BD%D0%B4%D0%BE%D0%BD%D0%B5%D0%B7%D0%B8%D1%8F%2C%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F%2C%D0%9A%D0%B8%D0%BF%D1%80%2C%D0%9A%D1%83%D0%B1%D0%B0%2C%D0%9C%D0%B0%D0%BB%D1%8C%D0%B4%D0%B8%D0%B2%D1%8B%2C%D0%9C%D0%B0%D0%BB%D1%8C%D1%82%D0%B0%2C%D0%9E%D0%90%D0%AD%2C%D0%A1%D0%B5%D0%B9%D1%88%D0%B5%D0%BB%D1%8B%2C%D0%A1%D0%BB%D0%BE%D0%B2%D0%B0%D0%BA%D0%B8%D1%8F%2C%D0%A1%D0%BB%D0%BE%D0%B2%D0%B5%D0%BD%D0%B8%D1%8F%2C%D0%A2%D0%B0%D0%B8%D0%BB%D0%B0%D0%BD%D0%B4%2C%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F%2C%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0%2C%D0%A5%D0%BE%D1%80%D0%B2%D0%B0%D1%82%D0%B8%D1%8F%2C%D0%A7%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE%D1%80%D0%B8%D1%8F&Module_Operators=alatan%2Cbalkan%2Cbg%2Cvokrugsveta%2Cvtour%2Cjoinup%2Csardinia3d%2Cltours%2Cmouzenidis%2Cnatalie%2Cpegas%2Cpodevus%2Crozav%2Crosting%2Csmok%2Csolvex%2Ctez%2Ctoptour"><div class="DoNotRemoveOrEditThisCopyrightBlock">© Программное обеспечение <a href="http://2345.by/">2345.BY</a>" - все права защищены. Программное обеспечение 2345.BY распространяется по лицензии FREEWARE (за пользование программным обеспечением 2345.BY не нужно платить деньги). Программное обеспечение 2345.BY может быть использовано для извлечения прибыли туристическими компаниями. Запрещено коммерческое распространение программного обеспечения 2345.BY, распространение без ссылки на лицензионное соглашение. Полный текст лицензионного соглашения доступен по адресу: <a href="http://2345.by/up/licence.txt">2345.by/up/licence.txt</a> ©</div></iframe><script type="text/javascript" src="http://2345.by/js/frame_resizer_js/iframeResizer.min.js"></script><script type="text/javascript">iFrameResize({widthCalculationMethod:"scroll"});</script><!--Конец кода 2345.by-->
	</section>

	<section class="call-section">
		<div class="call-section_text">
			<p>
			 команда PRO-tour.by - бывалые путешественники, оставляйте заявку и мы подберем отдых для Вас и поделимся с Вами всеми тонкостями туризма
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
							Несколько часов...<br> и вы в другой точке мира нежитесь на белоснежном пляже.
						</p>
						<div class="btn-box">
							<span class="hover-text">
								Хотите увидеть еще больше сказочных мест для отдыха?
							</span>
							<a href="#">Полетели</a>
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
				<div class="m-gal__slide item">
					<a href="#">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>ГОА</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Грузия</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Тайланд</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>ОАЭ</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Куба</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Испания</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Египет</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Турция</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
				<div class="m-gal__slide item">
					<a href="">
						<div class="m-gal__shadow">
							<button type="button" name="button">Полетели</button>
							<h5>Вьетнам</h5>
							<span class="m-gal__price">от 350 р.</span>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/img/gallery.jpg" alt="">
					</a>
				</div>
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
					Новые открытия, впечатления, может быть знакомства, селфи...
				</p>
			</div>
			<div class="btn-box">
				<span class="hover-text">
					еще больше автобусных путешествий
				</span>
				<a href="">Поехали</a>
			</div>
		</article>
		<div class="container">
			<section id="dg-container" class="dg-container">
				 <div class="dg-wrapper">
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/1.jpg" alt="image1">
						<div>test</div>
					</a>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/2.jpg" alt="image1">
						<div>test</div>
					</a>
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/3.jpg" alt="image1">
						<div>test</div>
					</a>
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
				<article>
					<a href="">
						<img src="<?php bloginfo('template_url'); ?>/img/pro-insurance.jpg" alt="">
						<p>
							Топовая новость №1
							<span>Читать далee...</span>
						</p>
					</a>
				</article>
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

					<!-- VK Widget -->
					<div id="vk_groups"></div>
					<script type="text/javascript">
					VK.Widgets.Group("vk_groups", {mode: 3, color1: 'FBF6D0', color3: '364B4E'}, 150143446);
					</script>
				</article>
			</div>
		</div>
	</section>
</main>

<?php

get_footer();
