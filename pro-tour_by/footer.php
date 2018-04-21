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

<footer>
	<div class="footer-container">
		<div class="column-1">
			<a href="<?php echo get_home_url(); ?>">
				<figure class="logo-box">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Туристическое агенство Pro-tour.by">
					<h1>Туристическое агенство <span class="hide-text">Pro-tour.by</span></h1>
				</figure>
			</a>
			<div class="copy">
				<p>
					&copy; ООО "ПРО-ТУР"<br>
					УНП 591361984<br>
					Все права защищены.<br>
					Предложение не является публичной офертой.<br>
					<a href="#">Политика конфидинциальности</a>
				</p>
			</div>
		</div>
		<div class="column-2">
			<div class="social">
				<?php dynamic_sidebar( 'social_vk' ); ?>
				<?php dynamic_sidebar( 'social_ok' ); ?>
				<?php dynamic_sidebar( 'social_f' ); ?>
				<?php dynamic_sidebar( 'social_inst' ); ?>
			</div>
			<p>
				Наш адрес:<br>
				г. Лида, ул. Победы, д.37, к.308<br>
				(Торгово-сервисный центр)<br>
				Режим работы:<br>
				пн-пт: 10:00 - 17:30<br>
				сб-вс: 10:00 - 16:00
			</p>
			<div class="social">
				<div class="social-icons social_viber"><a href="tel:+375291321800"></a></div>
				<div class="social-icons social_watsapp"><a href="tel:+375291321800"></a></div>
				<div class="social-icons social_telegram"><a href="tel:+375291321800"></a></div>
			</div>
			<div class="contats_title velcom">
				<?php dynamic_sidebar( 'phone-v1' ); ?>
				<?php dynamic_sidebar( 'phone-v2' ); ?>
			</div>
			<div class="contats_title mts">
				<?php dynamic_sidebar( 'phone-m1' ); ?>
				<?php dynamic_sidebar( 'phone-m2' ); ?>
			</div>
			<div class="contats_title">
				<?php dynamic_sidebar( 'mail' ); ?>
				<?php dynamic_sidebar( 'skype' ); ?>
			</div>


		</div>
		<div class="column-3">
				<img src="<?php bloginfo('template_url'); ?>/img/map.jpg" alt="">
		</div>
	</div>
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
			<?php dynamic_sidebar( 'admin_mail' ); ?>
			<input class="cloud-title" type="hidden" name="form_subject" value="Заявка с сайта.Консультация">
			<!-- END Hidden Required Fields -->
			<label class="cloud-form__phone" for="phone">Оставьте Ваш номер телефона. Мы учтем все Ваши пожелания (если есть) и расскажем о самых интересных предложениях!</label>
			<input id="phone" class="cloud-form__phone" type="text" name="phone"
			value="" placeholder="+375(___) ___-__-__" required>
			<label  class="cloud-form__message" for="message">Ваши пожелания по отдыху</label>
			<textarea id="message" class="cloud-form__message" name="message"
			rows="4" cols="80" placeholder=""></textarea>
			<button id="submit" class="cloud-form__submit" type="submit" name="submit">
				Заказать звонок
			</button>
		</form>
	</div>
</div>
<div class="popup-question-thanks">
	<div class="popup-question-close">
		close
	</div>
	<div class="box-content">
		<p class="thanks">
			Спасибо!)
		</p>
		<p>Сейчас наши специалисты закончат танцевать от радости<span class="smile"></span><br> и мы сразу же вам перезвоним!</p>
	</div>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
 jQuery(function($){
 $("#phone").mask("+375(99) 999-99-99");
 $(".diamondswrap").diamonds({
	size: 250, // Size of the squares
	gap: 5 // Pixels between squares
	});
 $('#dg-container').gallery();
 });
 </script>
 <!-- BEGIN JIVOSITE CODE -->
<script type='text/javascript'>
(function(){ var widget_id = '21omWdZUFZ';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- END JIVOSITE CODE -->

</body>
</html>
