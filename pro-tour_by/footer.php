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
					Все права защищены.
					Предложение не является публичной офертой.
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
				г. Лида, ул. Победы, к.308<br>
				(Торгово-сервисный центр)
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
<div class="popup-question">
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
 $(".diamondswrap").diamonds({
	size: 250, // Size of the squares
	gap: 5 // Pixels between squares
	});
 $('#dg-container').gallery();
 });
 </script>

</body>
</html>
