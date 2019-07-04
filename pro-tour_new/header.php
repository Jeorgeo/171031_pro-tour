<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-tour_by
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?151"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="mobile-header header__top-box shadow-small">
			<div class="container header__container">
				<button class="mobile-header__hamburger hamburger hamburger-elastic" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<a href="#" class="logo header__logo">
					<img src="<?bloginfo('template_url'); ?>/img/pro-tour_full.png" alt="">
				</a>
				<a href="#" class="logo mobile-header__logo">
					<img src="<?bloginfo('template_url'); ?>/img/pro-tour_w.png" alt="">
				</a>
				<div class="header__slogan">
					<p>
						Мир открыт - <br>открой себя миру!
					</p>
				</div>
				<div class="header__adress">
					<p>
						г.Лида Торгово-сервисный центр пав.312
						<span>ул. Победы, 37</span>
					</p>
				</div>
				<div class="mobile-header__phone-box">
					<a class="mobile-header__phone-button phone-button velcom" href="#">+375(29)132-18-00</a>
					<a class="mobile-header__phone-button phone-button mts" href="#">+375(29)899-18-00</a>
				</div>
				<a href="#" class="btn header__btn">заказать звонок</a>
			</div>
		</div>
		<div class="header__menu menu active shadow-small">
			<div class="container menu__container">
				<nav class="main-menu">
					<div id="Вспомогательное" class="menu">
						<ul>
							<li class="page_item current_page_item"><a href="#" aria-current="page">Главная</a></li>
							<li class="page_item "><a href="#">Страны</a>
								<ul class="sub-menu">
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="#">египет</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="#">китай</a></li>
									<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="#">турция</a></li>
								</ul>
							</li>
							<li class="page_item "><a href="#">Услуги</a></li>
							<li class="page_item "><a href="#">Информация</a></li>
							<li class="page_item "><a href="#">Оплата</a></li>
							<li class="page_item "><a href="#">Отзывы</a></li>
							<li class="page_item "><a href="#">Контакты</a></li>
						</ul>
					</div>
				</nav>
				<nav class="icon-menu">
					<ul>
						<li>
							<a href="#"><span class="icon-menu__icon avia"></span>авиатуры</a>
						</li>
						<li>
							<a href="#"><span class="icon-menu__icon auto"></span>автобусные туры</a>
						</li>
						<li>
							<a href="#"><span class="icon-menu__icon ins"></span>инстаграмм</a>
						</li>
						<li>
							<a href="#"><span class="icon-menu__icon vk"></span>вконтакте</a>
						</li>
						<li>
							<a href="#"><span class="icon-menu__icon ok"></span>одноклассники</a>
						</li>
						<li>
							<a href="#"><span class="icon-menu__icon fb"></span>фейсбук</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>


	</header>
