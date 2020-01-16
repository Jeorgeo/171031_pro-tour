<?php
/**
 * Template Name: Главная
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

$id_av_poisk = 719;
$id_au_poisk = 721;

$avia = get_posts(
		array(
				'numberposts' => 4,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '8',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);

$avia_m = get_posts(
		array(
				'numberposts' => 1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '8',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);

$auto = get_posts(
		array(
				'numberposts' => 4,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '9',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);

$auto_m = get_posts(
		array(
				'numberposts' => 1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '9',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);

$news = get_posts(
		array(
				'numberposts' => 3,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '6',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);

$partners = get_posts(
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

<main>
  <section class="main-slider">
    <div class="container main-container">
      <h3>Идеи для вашего <span class="main-slider__title">отдыха</span></h3>
      <div class="main-slider__offers offers-box">
				<?php
          foreach ($avia_m as $obj) {
            if($obj->post_name == 'archive') {
              continue;
          }
					$thumb_avia = get_the_post_thumbnail($obj->ID);
        ?>
        <a href="<?php the_permalink($obj->ID); ?>" class="offers-box__offer offer">
          <figure>
            <img src="<? echo $thumb_avia; ?>" alt="Турагентсво ПРО-ТУР <?echo get_the_title($obj->ID);?> из Лиды">
          </figure>
          <div class="offer-content offer-content_main">
            <span class="offer__title"><?echo get_the_title($obj->ID);?></span>
            <span class="offer__price"><?php echo get_field('offer_price', $obj->ID); ?></span>
            <span class="offer__more">Подробнее...</span>
          </div>
        </a>
			  <?}?>
        <a href="<?php the_permalink( $id_av_poisk ); ?>" class="btn offers-box__btn avia-search">Поиск авиатура</a>
				<?php
          foreach ($auto_m as $obj) {
            if($obj->post_name == 'archive') {
              continue;
          }
					$thumb_auto = get_the_post_thumbnail($obj->ID);
        ?>
        <a href="<?php the_permalink( $obj->ID ); ?>" class="offers-box__offer offer">
          <figure>
            <img src="<? echo $thumb_auto; ?>" alt="Турагентсво ПРО-ТУР <?echo get_the_title($obj->ID);?> из Лиды ">
          </figure>
          <div class="offer-content">
            <span class="offer__title"><?echo get_the_title($obj->ID);?></span>
            <span class="offer__price"><?php echo get_field('offer_price', $obj->ID); ?></span>
            Подробнее...
          </div>
        </a>
				<?}?>
        <a href="<?php the_permalink( $id_au_poisk ); ?>" class="btn auto-search offers-box__btn">Поиск автобусных туров</a>
      </div>
      <div class="bg-box">
      </div>
    </div>
  </section>
	<section class="tour-type">
		<div class="container flex-box">
			<a class="tour-type__box" href="https://pro-tour.by/novogodnie-tury/">
				<figure class="tt-btn">
					<img src="<?bloginfo('template_url'); ?>/img/icon_newyear_w.png" alt="Новогодние и рождественские туры от ПРО-ТУР">
				</figure>
				<h5>Новогодние и рождественские туры</h5>
			</a>
			<!-- Будет блок для автивного отдыха
			<a class="tour-type__box" href="https://pro-tour.by/tury-na-osennie-kanikuly/">
				<figure class="tt-btn">
					<img src="<?bloginfo('template_url'); ?>/img/icon_school_w.png" alt="Туры на осенние каникулы от ПРО-ТУР">
				</figure>
				<h5>Активный отдых</h5>
			</a>!
			-->
			<a class="tour-type__box" href="https://pro-tour.by/bus-search/">
				<figure class="tt-btn">
					<img src="<?bloginfo('template_url'); ?>/img/icon_auto_o.png" alt="Автобусные и экскурсионные туры от ПРО-ТУР">
				</figure>
				<h5>Автобусные и экскурсионные туры</h5>
			</a>
			<a class="tour-type__box" href="https://pro-tour.by/avia-search/">
				<figure class="tt-btn">
					<img src="<?bloginfo('template_url'); ?>/img/icon_avia_o.png" alt="Авиатуры от ПРО-ТУР">
				</figure>
				<h5>Авиатуры</h5>
			</a>
		</div>
	</section>
  <section class="main-about">
    <div class="main-about__top">
      <div class="container main-container">
        <article class="main-about__text">
        <p>
          Какой ваш идеальный отдых?<br>
          В какой уголок мира мечтаете попасть?<br>
          А может хочется поделится эмоциями своих путешествий?
          Расскажите нам. Мы найдем отдых вашей мечты и поделимся всеми тонкостями идеального путешествия!
        </p>
        <p>
          ПРО-ТУР — туристическое агентство в городе Лида.<br>
          Бронирование и продажа туров с выездом из Гродно, Минска и Бреста.
          Бронирование и продажа авиабилетов. Бронирование отелей.
					Трансфер до Москвы и Киева.
          Визовая поддержка. Горящие туры. Раннее бронирование. Медицинское страхование для выезда за рубеж.
          Организация групповых поездок в республике Беларусь и за ее пределами.<br>
        </p>
        <p>
          Все это и многое другое наша команда с радостью предлагает вам!<br>
          Оставляйте заявку и мы подберем отдых для вас!
        </p>
          <a href="#" class="btn cloud-link main-about__btn"><span class="hidden">блок приемуществ</span>Оставить заявку</a>
      </article>
      </div>
    </div>
    <div class="main-about__icons">
      <div class="container main-container">
        <ul class="main-about__advantages">
          <li class="advantages__icon icon-like">
            <i></i>
            <span class="advantages__title">985 +</span>
            <p>купальников выгуляли наши путешественницы</p>
          </li>
          <li class="advantages__icon icon-clients">
            <i></i>
            <span class="advantages__title">3310 +</span>
            <p>Туристов зарядились эмоциями</p>
          </li>
          <li class="advantages__icon icon-cream">
            <i></i>
            <span class="advantages__title">999 +</span>
            <p>Тюбиков крема от загара израсходовано</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="main-avia">
    <div class="container">
      <h3 class="section-title">Авиатуры и авиабилеты</h3>
      <p>Несколько часов...и вы в другой точке мира, нежитесь на белоснежном пляже.</p>
      <div class="main-catalog flex-box">
        <?php
          foreach ($avia as $obj) {
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
            <a href="#" class="btn cloud-link card-box__btn"><span class="hidden"><?echo get_the_title( $obj->ID );?></span>Полететь</a>
          </div>
        </article>
        <?php
			}
        ?>
      </div>
    </div>
  </section>
  <section class="descriprion-box dark avia">
    <div class="container flex-box">
      <p>
        Не нашли что искали? Хотите найдти еще больше сказочных мест для отдыха? Тогда вам сюда!
      </p>
      <div class="button-box">
        <a href="#" class="btn offers-box__btn avia-search">Каталог стран</a>
        <a href="<?php echo get_permalink($id_av_poisk); ?>" class="btn offers-box__btn avia-search">поиск авиатуров</a>
      </div>
    </div>
  </section>
  <section class="descriprion-box dark auto">
    <div class="container">
      <h3 class="section-title white">Автобусные и экскурсионные туры</h3>
      <div class="title__text">
        <p>Новые открытия, впечатления, знакомства, селфи...<br>
           Прекрасная возможность увидить "матушку" Европу во всей красе.</p>
        <a href="<?php echo get_permalink($id_au_poisk); ?>" class="btn offers-box__btn avia-search">поиск экскурсий</a>
      </div>
    </div>
  </section>
  <section class="main-auto">
    <div class="container">
      <div class="main-catalog flex-box">
				<?php
          foreach ($auto as $obj) {
            if($obj->post_name == 'archive') {
              continue;
          }
					$img_auto = get_the_post_thumbnail($obj->ID);
        ?>
        <article class="main-avia card-box">
          <a class="card-box__more" href="<?php the_permalink($obj->ID); ?>">
            <figure class="card-box__img">
              <img src="<?echo $img_auto;?>" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4><?echo get_the_title( $obj->ID );?></h4>
            <p><?php echo get_field('offer_price', $obj->ID); ?></p>
            <a href="#2" class="btn cloud-link card-box__btn"><span class="hidden"><?echo get_the_title( $obj->ID );?></span>Поехать</a>
          </div>
        </article>
				<?php
			}
        ?>
      </div>
    </div>
  </section>
  <section class="main-news">
    <div class="container">
      <h3 class="section-title">Наши новости</h3>
    </div>
    <div class="container flex-box news-box">
			<?php
				foreach ($news as $obj) {
					if($obj->post_name == 'archive') {
						continue;
				}
				$img_news = get_the_post_thumbnail($obj->ID);
			?>
      <a href="<?php the_permalink($obj->ID); ?>" class="news-box__offer offer">
        <figure>
          <img src="<?echo $img_news; ?>" alt="<?echo get_the_title( $obj->ID );?>">
        </figure>
        <div class="offer-content">
          <span class="offer__title"><?echo get_the_title( $obj->ID );?></span>
          <span class="offer__price"><?echo get_the_excerpt( $obj->ID );?></span>
          <span class="offer__more">Подробнее...</span>
        </div>
      </a>
			<?php
		}
			?>
    </div>
    <div class="container">
      <a href="https://pro-tour.by/category/news/" class="btn card-box__btn">Все новости и статьи</a>
    </div>
  </section>
	<section class="main-opers">
    <div class="container">
      <h3 class="section-title">Наши друзья и партнеры</h3>
    </div>
    <div class="container">
      <div class="main-opers__slider">
				<?php/*
          foreach ($partners as $obj) {
            if($obj->post_name == 'archive') {
              continue;
          }
        ?>
        <figure class="main-opers__slide">
          <img src="<?php echo get_field('p_logo', $obj->ID); ?>" alt="<?echo get_the_title( $obj->ID );?>">
					<div class="cloud-descript">
            <h5><?echo get_the_title( $obj->ID );?></h5>
            <p>
              <span class="main-opers__type"><?php echo get_field('p_type', $obj->ID); ?></span><br>
              Год основания <?php echo get_field('p_year', $obj->ID); ?>
            </p>
          </div>
        </figure>
				<?php
			}
      */  ?>
      </div>
    </div>
  </section>
</main>

<?
get_footer();
