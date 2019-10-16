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
				<img src="<?bloginfo('template_url'); ?>/img/pro-tour_w.png" alt="">
			</a>
			<p>
				ООО "ПРО-ТУР" УНП 591361984<br>
				Свидетельсто №591361984<br>
				о государственной регистрации.
				Выдано 28.11.2017 Лидским районным исполнительным комитетом.<br>
				Юридический адрес:<br>
				231300, г.Лида, ул.Победы, д.37, к.312<br>
				Зарегистрирован в Реестре субъектов туристической деятельности Республики Беларусь 28.12.2017<br>
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
				© 2019 | Заряжено <a href="http://rstudio.by/" target="_blank">RStudio</a>
				<!--LiveInternet counter-->
				<script type="text/javascript">
document.write('<a href="//www.liveinternet.ru/click" '+
'target="_blank"><img src="//counter.yadro.ru/hit?t50.6;r'+
escape(document.referrer)+((typeof(screen)=='undefined')?'':
';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
';h'+escape(document.title.substring(0,150))+';'+Math.random()+
'" alt="" title="LiveInternet" '+
'border="0" width="31" height="31"><\/a>')
</script>
<!--/LiveInternet-->
			</p>
		</div>
	</section>
</footer>
<div class="wrap"></div>
<div id="window" class="popup-question">
	<div class="popup-question-close">
		close
	</div>
	<div class="details-form">
		<form id="js_form" method="post" class="cloud-form order-form">
			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="pro-tour.by">
			<input type="hidden" name="admin_email" value="<?php echo get_field('email_form', 711); ?>">
			<input class="cloud-title" type="hidden" name="form_subject" value="Заявка с сайта.Консультация">
			<!-- END Hidden Required Fields -->
			<label class="cloud-form__phone" for="phone">Ваш Телефон</label>
			<input id="phone" class="cloud-form__phone" type="text" name="phone"
			value="" placeholder="+375(___) ___-__-__" required>
			<label  class="cloud-form__message" for="message">Ваши пожелания</label>
			<textarea id="message" class="cloud-form__message" name="message"
			rows="4" cols="80" placeholder=""></textarea>
			<button id="submit" class="cloud-form__submit" type="submit" name="submit">
				Заказать звонок
			</button>
			<input id="сonsent-p" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required checked>
			<label class="cloud-form__сonsent" for="сonsent-p">
				Согласие на обработку персональных данных
			</label>
		</form>
	</div>
</div>
<div class="popup-question-thanks">
	<div class="popup-question-close">
		close
	</div>
	<div class="box-content">
		<p class="thanks">
			УРА! Спасибо!
		</p>
		<p>Сейчас наши специалисты закончат танцевать от счастья<span class="smile"></span><br> и мы сразу же вам перезвоним!</p>
	</div>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
 jQuery(function($){
 $("#phone").mask("+375(99) 999-99-99");
 });
 </script>

</body>
</html>
