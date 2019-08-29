<?php
/**
 * Template Name: О нас
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

get_header();

$opers = get_posts(
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
				'post_type' => 'partners',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
 ?>
 <div id="primary" class="content-area container">
	 <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
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
    <main class="site-main about">
			<section class="about-content">
				<h2 class="section-title section-title_dark-theme"><span class="color-orange">о</span> нас</h2>
				<article class="content-box">
					<ul class="content-box__img">
						<li>
							<a href="<?php echo get_field('about_img-2'); ?>">
								<img src="<?php echo get_field('about_img-2'); ?>" />
							</a>
						</li>
						<li>
							<a href="<?php echo get_field('about_img-3'); ?>">
								<img src="<?php echo get_field('about_img-3'); ?>" />
							</a>
						</li>
						<li>
							<a href="<?php echo get_field('about_img-4'); ?>">
								<img src="<?php echo get_field('about_img-4'); ?>" />
							</a>
						</li>
						<li class="current">
							<a href="<?php echo get_field('about_img-1'); ?>">
								<img src="<?php echo get_field('about_img-1'); ?>" />
							</a>
						</li>
					</ul>
					<div class="content-box__txt">
						<?php
				 			the_post();
				 			the_content();
				  	?>
					</div>
				</article>
			</section>
			<section class="about-partners">
				<h2 class="section-title section-title_dark-theme">Наши <span class="color-orange">партнеры</span></h2>
					<ul class="about-partners__logos">
						<?php
							foreach ($opers as $obj) {
								if($obj->post_name == 'archive') {
									continue;
							}
						?>
						<li>
							<a href="<?php echo get_field('p_link',$obj->ID); ?>">
								<img src="<?php echo get_field('p_img',$obj->ID); ?>" />
							</a>
						</li>
						<?php
						}
						?>
					</ul>
					<ul class="about-partners__principes">
						<li>Работаем только с проверенными туроператорами.</li>
						<li>Предоставляем честные цены от «производителя».</li>
						<li>Не навязываем предложения. Даем возможность самостоятельного подбора отдыха удобным <a href="http://pro-tour.by/aviatury/">поисковиком на нашем сайте</a></li>
						<li>Предоставлем услуги по <a href="http://pro-tour.by/insurens/">страхованию</a> от внезапных заболеваний и несчастных случаев на время поездки за границу</li>
						<li>Оказываем <a href="http://pro-tour.by/visa/">помощь в оформлении виз</a> для выезда за границу.</li>
					</ul>
				</section>
				<a name="contacts"></a>
				<section class="about-contacts">
					<h1 class="section-title section-title_dark-theme"><span class="color-orange">Наши</span> контакты</h1>
					<article class="about-contacts__contacts">
						<h3>ООО "ПРО-ТУР"</h3>
						<h5>Реквизиты:</h5>
						<p>
							УНП 591361984<br>
							ОКПО 501301274000<br>
							Расчетный счет BY92BAPB30122866700140000000<br>
							в OАО «Белагропромбанк» г. Лида ул. Тавлая, 4  код BAPBBY24457
						</p>
						<h5>Наш адрес:</h5>
						<p>
							г. Лида, ул. Победы, к.312<br>
							(Торгово-сервисный центр)
						</p>
						<div class="mobile-header__phone-box">
							<a class="mobile-header__phone-button phone-button velcom" href="tel:<?php echo get_field('vel_1', 711); ?>"><?php echo get_field('vel_12', 711); ?></a>
							<a class="mobile-header__phone-button phone-button mts" href="tel:<?php echo get_field('mts_1', 711); ?>"><?php echo get_field('mts_12', 711); ?></a>
							<a class="mobile-header__phone-button phone-button email" href="mailto:<?php echo get_field('email_1', 711); ?>"><?php echo get_field('email_1', 711); ?></a>
						</div>
					</article>
					<div class="about-contacts__map">
						<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A469161f2b4aee490f27eb35b7f06933b7a4e86f48cd66a630becc721ee8cfbae&amp;source=constructor" width="600" height="480" frameborder="0"></iframe>
					</div>
				</section>
				<section class="form-box">
					<h3 class="section-title section-title_dark-theme">Остались <span class="color-orange">вопросы?</span> Хотите заказать <span class="color-orange">консультацию?</span></h3>
					<p>заполните поля и мы свяжемся с Вами в ближайшее время</p>
					<form id="about_form" method="post" class="order-form">
						<!-- Hidden Required Fields -->
						<input type="hidden" name="project_name" value="заявка с pro-tour.by">
						<input type="hidden" name="admin_email" value="<?php echo get_field('email_form', 47); ?>">
						<input type="hidden" name="form_subject" value="Заявка со страницы <?echo the_title();?>">
						<!-- END Hidden Required Fields -->
						<input id="name" class="order-form__input name" type="text" name="name"
						value="" placeholder="Ваше имя" pattern="^([A-Za-zА-Яа-яЁё\.\-]{2,20})" required>
						<input id="phone" class="order-form__input phone" type="text" name="phone"
						value="" placeholder="Ваш телефон" required>
						<textarea id="message" class="order-form__input message" name="message" placeholder="Задайте вопрос"></textarea>
						<div class="order-form__сonsent">
							<button id="submit" class="btn cloud-link order-form__btn" type="submit" name="submit">
								Отправить
							</button>
							<div class="сonsent-box">
								<input id="сonsent-p" type="checkbox" name="сonsent" value="" required checked>
								<label for="сonsent-p">
									Согласие на обработку персональных данных
								</label>
							</div>
						</div>
					</form>
				</section>
  		</main><!-- #main about-->
		</div>
	</div><!-- #primary -->

<?php

get_footer();
