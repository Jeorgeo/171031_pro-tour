<?php
/**
 * Template Name: Визовая поддержка
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

$tabs = get_posts(
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
				'post_type' => 'tabs',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
 ?>

<main>
	<section class="visa">
		<h3 class="content-title"><?php echo get_field( 'page-title' ); ?></h3>
		<div class="content-box">
			<div class="page-image">
				<img src="<?php echo get_field( 'page-image' ); ?>">
			</div>
			<div class="page-content">
				<?php echo get_field( 'page-content' ); ?>
			</div>
		</div>
	</section>
	<section class="visa_tabs">
		<h3 class="content-title">Визы и <span class="text_pro">страны</span></h3>
		<div class="table-box">
			<table>
				<tbody>
					<tr>
						<th>
							Страна посещения
						</th>
						<th>
							Условия посещения
						</th>
						<th>
							Стоимость визы
						</th>
						<th>
							Сайт представительства (визового центра)
						</th>
					</tr>
					<tr>
						<?php
							foreach ($tabs as $obj) {
								if($obj->post_name == 'archive') {
										continue;
								}
						 ?>
						 <td>
						 	<?php echo get_field('country',$obj->ID); ?>
						 </td>
						 <td>
						 	<?php echo get_field('visa_discr',$obj->ID); ?>
						 </td>
						 <td>
						 	<?php echo get_field('visa_price',$obj->ID); ?>
						 </td>
						 <td>
							 <a href="<?php echo get_field('visa_link',$obj->ID); ?>" target="_blank"><?php echo get_field('visa_link',$obj->ID); ?></a>

						 </td>
						 <?php
	 		 				}
	 		 			 ?>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<section class="about-form">
		<h3 class="content-title">Остались <span class="text_pro">вопросы?</span> Хотите заказать <span class="text_pro">консультацию?<span></h3>
		<div class="form-box">
			<p>заполните поля и мы свяжемся с Вами в течении 10 минут</p>
			<form id="about_form" method="post" class="order-form">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="pro-tour.by">
				<!--input type="hidden" name="admin_email" value=""!-->
				<?php dynamic_sidebar( 'admin_mail' ); ?>
				<input type="hidden" name="form_subject" value="Заявка со страницы о нас">
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
</main>

<?php

get_footer();
