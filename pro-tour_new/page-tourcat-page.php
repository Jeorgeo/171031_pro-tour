<?php
/**
 * Template Name: Тур по типу
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

$tourcat = get_field('tourcat_num');

$tours = get_posts(
		array(
				'numberposts' => 4,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => $tourcat,
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
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
 	 <main class="site-main bus">
	<section class="bus-search">
		<h1 class="section-title section-title_dark-theme"><?echo the_title();?></h1>
    <?
      the_post();
      the_content();
    ?>
    <div class="main-catalog flex-box">
      <?php
        foreach ($tours as $obj) {
          if($obj->post_name == 'archive') {
            continue;
        }
        $img_avia = get_the_post_thumbnail($obj->ID);
      ?>
      <article class="main-avia card-box">
        <a class="card-box__more" href="<?php the_permalink($obj->ID); ?>">
          <figure class="card-box__img">
            <img src="<?echo $img_avia;?>" alt="<?echo get_the_title( $obj->ID );?> от ПРО-ТУР">
          </figure>
        </a>
        <div class="card-box__text">
          <h4><?echo get_the_title( $obj->ID );?></h4>
          <p><?php echo get_field('offer_price', $obj->ID); ?></p>
          <a href="#" class="btn cloud-link card-box__btn"><span class="hidden"><?echo get_the_title( $obj->ID );?></span><?php echo get_field('offer_btn', $obj->ID); ?></a>
        </div>
      </article>
      <?php
    }
      ?>
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
