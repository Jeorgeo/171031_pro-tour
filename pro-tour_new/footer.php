<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-tour_by
 */

?>

<footer class="footer">
	<div class="container footer__container">
		<section class="column-1">
			<h3 class="visuallyhidden">Туристическое агенство "ПРО-ТУР"</h3>
			<a href="#" class="logo footer__logo">
				<img src="<?bloginfo('template_url'); ?>/img/pro-tour_w.png" alt="Турагентство ПРО-ТУР логотип">
			</a>
			<p>
				ИП Шаховский Ю.С. УНП 590207139<br>
				Свидетельсто №590207139<br>
				о государственной регистрации.
				Выдано 30.03.2018 Кореличским районным исполнительным комитетом.<br>
				Юридический адрес:<br>
				231430, г.Кореличи, ул.Домейко, д.28<br>
				Зарегистрирован в Реестре субъектов туристической деятельности Республики Беларусь 28.05.2018<br>
			</p>
		</section>
		<section class="column-2">
			<h3>
				Информация
			</h3>
			<ul class="footer-menu">
				<li><a href="<?php the_permalink( 713 ); ?>">О нас</a></li>
				<li><a href="https://pro-tour.by/category/news/">Новости</a></li>
				<li><a href="#">Частые вопросы</a></li>
				<li><a href="#">Сертификаты и дипломы</a></li>
				<li><a href="#">Вакансии</a></li>
				<li><a href="#">Акции</a></li>
			</ul>
		</section>
		<section class="column-3">
			<h3>
				Услуги
			</h3>
			<ul class="footer-menu">
				<li><a href="<?php the_permalink( 719 ); ?>">Авиатуры</a></li>
				<li><a href="<?php the_permalink( 721 ); ?>">Автобусные туры</a></li>
				<li><a href="<?php the_permalink( 723 ); ?>">Cтрахование</a></li>
				<li><a href="<?php the_permalink( 708 ); ?>">Визовая поддержка</a></li>
				<li><a href="#">Корпоративный туризм</a></li>
				<li><a href="#">Подарочные сертификаты</a></li>
			</ul>
		</section>
		<section class="column-4">
			<article class="box-41">
				<h3>
					Давайте дружить
				</h3>
				<ul class="social">
					<li class="social__icon ins"><a href="<?php echo get_field('link_inst', 711); ?>" target="_blank" rel="nofollow">Инстаграмм</a></li>
					<li class="social__icon tel"><a href="<?php echo get_field('link_tel', 711); ?>" target="_blank" rel="nofollow">Телеграм</a></li>
					<li class="social__icon vk"><a href="<?php echo get_field('link_vk', 711); ?>" target="_blank" rel="nofollow">Вконтакте</a></li>
					<li class="social__icon fb"><a href="<?php echo get_field('link_f', 711); ?>" target="_blank" rel="nofollow">фейсбук</a></li>
					<li class="social__icon ok"><a href="<?php echo get_field('link_ok', 711); ?>" target="_blank" rel="nofollow">одноклассники</a></li>
				</ul>
				<div class="mobile-header__phone-box">
					<a class="mobile-header__phone-button phone-button velcom" href="tel:<?php echo get_field('vel_1', 711); ?>"><?php echo get_field('vel_12', 711); ?></a>
					<a class="mobile-header__phone-button phone-button mts" href="tel:<?php echo get_field('mts_1', 411); ?>"><?php echo get_field('mts_12', 711); ?></a>
				</div>
				<div class="header__adress adress">
					<p>
						<span class="color-w">Ждем вас в гости здесь:</span><br>
						г.Лида, ул. Победы, 37 <br>
						Торгово-сервисный центр<br>
						офис 312
					</p>
				</div>
				<div class="clock footer__clock">
					<p>
						<span class="color-w">Наши двери открыты:</span><br>
						пн-пт: 10:00 - 18:00<br>
						сб-вс: 10:00 - 16:00
					</p>
				</div>
			</article>
			<article class="box-42">
				<h3>
					Можно оплатить
				</h3>
				<ul class="payment">
					<li class="payment__icon erip">Ерип</li>
					<li class="payment__icon e-pos">е-пос</li>
					<li class="payment__icon visa">виза</li>
					<li class="payment__icon mastercard">мастеркард</li>
					<li class="payment__icon easy-pay">изи-пэй</li>
				</ul>
			</article>
		</section>
	</div>
	<section class="dark">
		<div class="container">
			<p>
	      Все права защищены. Перепечатка материалов разрешена только с указанием автора с активной ссылкой на сайт <a href="<?php echo get_permalink(47); ?>">PRO-tour.by</a><br>
				<a href="<?php echo get_permalink( 725 ); ?>">Политика конфиденциальности</a> Все предложения и цены на сайте носят информационный характер и не являются публичной афертой.
	    </p>
			<p>
				© 2019 - 2021 | Заряжено <a href="https://rstudio.by/" target="_blank">RStudio</a>
			</p>
		</div>
	</section>
</footer>
</div>
<div class="details-form">
	<div id="window" class="popup-question">
		<form id="js_form" method="post" class="cloud-form order-form">
		    <button class="popup-question-close" type="button">&times</button>
			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="pro-tour.by">
			<input type="hidden" name="admin_email" value="<?php echo get_field('email_form', 47); ?>">
			<input class="cloud-title" type="hidden" name="form_subject" value="Заявка с сайта.Консультация">
			<!-- END Hidden Required Fields -->
			<fieldset class="cloud-form__head">
                <h3 class="cloud-form__title">обратный звонок</h3>
                <p class="cloud-form__text">Оставьте ваши данные, и мы вам перезвоним</p>
            </fieldset>
            <fieldset class="cloud-form__client-info">
                 <label class="cloud-form__text">
                     Ваше имя
                     <input id="client-name" class="cloud-form__input" type="text" name="name" placeholder="Введите имя">
                 </label>
                    <label class="cloud-form__text">
                     Ваш телефон
                     <input id="phone" class="cloud-form__input" type="tel" name="phone" value="" placeholder="+375(___) ___-__-__" required>
                 </label>
                 <label class="cloud-form__text">
                     Комментарий
                     <textarea id="client-comment" class="cloud-form__comment" name="comment" placeholder="Введиет текст"></textarea>
                 </label>
            </fieldset>

            <fieldset class="cloud-form__client-action">
                 <label class="cloud-form__text">
                     <input class="cloud-form__сonsent" type="checkbox" name="agree" checked>
                     <span></span>
                     Согласие на обработку персональных данных
                 </label>
                 <a class="cloud-form__link" href="https://pro-tour.by/privacy-policy/" target="_blank">Политика конфиденциальности</a>
                 <button id="submit" class="btn cloud-form__submit disabled" type="submit" name="submit">Заказать звонок</button>
            </fieldset>
		</form>
	</div>
</div>
<div class="popup-question-thanks">
	<button class="popup-question-close" type="button">&times</button>
	 <h3 class="popup-question-thanks__title">Спасибо<span id="thanks__name"></span></h3>
     <p class="popup-question-thanks__text">Мы скоро с вами свяжемся</p>
     <button class="btn btn--excellent">отлично</button>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
 jQuery(function($){
 $("#phone").mask("+375(99) 999-99-99");
 });
 </script>

</body>
</html>
