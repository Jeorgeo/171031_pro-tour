<?php
/**
 * Template Name: Страхование
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

get_header(); ?>

<div id="primary" class="content-area container">
	 <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	<div class="flex-sidebar">
		<aside class="main-header left-panel">
			<div class="left-panel__box">
				<nav class="news-sidebar__menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'pay-menu',
							'menu_id'        => 'sidebar_pay',
						) );
					?>
				</nav>
				<?php dynamic_sidebar( 'wiget_aside' ); ?>
			</div>
		</aside>
		<main class="site-main insurens">

			<?php the_post(); ?>
			<?php the_content(); ?>

			<section class="form-box">
				<h3 class="section-title section-title_dark-theme">Остались <span class="color-orange">вопросы?</span> Хотите заказать <span class="color-orange">консультацию?</span></h3>
				<p>заполните поля и мы свяжемся с Вами в ближайшее время</p>
				<form id="about_form" method="post" class="order-form">
					<!-- Hidden Required Fields -->
					<input type="hidden" name="project_name" value="pro-tour.by">
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
		</main><!-- #main insurens-->
	</div>
</div><!-- #primary -->
<?php
get_footer();
