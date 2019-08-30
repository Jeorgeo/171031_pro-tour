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
				'post_type' => 'visa',
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
 	 <main class="site-main visa">
	<section class="visa">
		<h1 class="section-title section-title_dark-theme">Визовая <span class="color-orange">поддержка</span></h1>
		<article class="content-box">
			<figure class="content-box__img">
				<img src="<?php echo get_field('visa_img'); ?>" />
			</figure>
			<div class="content-box__txt">
				<?php
					the_post();
					the_content();
				?>
			</div>
		</article>
	</section>
	<section class="visa-box">
		<h2 class="section-title section-title_dark-theme">Визы<span class="color-orange"> и </span>страны</h2>
		<span id="table"></span>
		<div class="visa-box__table">
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

					<?php
						foreach ($tabs as $obj) {
							if($obj->post_name == 'archive') {
									continue;
							}
					 ?>
					 <tr>
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
					 </tr>
						 <?php
	 		 				}
	 		 			 ?>

				</tbody>
			</table>
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
