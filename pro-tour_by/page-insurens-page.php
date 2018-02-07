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

	<div id="primary" class="content-area">
		<main id="main" class="page_insurens">

			<?php the_post(); ?>
			<?php the_content(); ?>

			<section class="about-form">
				<h3 class="content-title">Остались <span class="text_pro">вопросы?</span> Хотите заказать <span class="text_pro">консультацию?<span></h3>
				<div class="form-box">
					<p>заполните поля и мы свяжемся с Вами в ближайшее время</p>
					<form id="about_form" method="post" class="order-form">
						<!-- Hidden Required Fields -->
						<input type="hidden" name="project_name" value="pro-tour.by">
						<!--input type="hidden" name="admin_email" value=""!-->
						<?php dynamic_sidebar( 'admin_mail' ); ?>
						<input type="hidden" name="form_subject" value="Заявка со страницы о страховнии">
						<!-- END Hidden Required Fields -->
						<textarea id="message" class="form__message" name="message" placeholder="Задайте вопрос"></textarea>
						<input id="name" class="form__name" type="text" name="name"
						value="" placeholder="Ваше имя" required>
						<input id="phone" class="cloud-form__phone" type="text" name="phone"
						value="" placeholder="Ваш телефон" required>
						<button id="submit" class="cloud-form__submit" type="submit" name="submit">
							Отправить
						</button>
						<input id="сonsent-p" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required checked>
						<label class="cloud-form__сonsent" for="сonsent-p">
							Согласие на обработку персональных данных
						</label>
					</form>
				</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
