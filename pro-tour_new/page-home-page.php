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
?>

<main>
  <section class="main-slider">
    <div class="container main-container">
      <h3>Идеи на ваш <span class="main-slider__title">отдых</span> в июле</h3>
      <div class="main-slider__offers offers-box">
        <a href="#" class="offers-box__offer offer">
          <figure>
            <img src="<?bloginfo('template_url'); ?>/pics/offer.jpg" alt="">
          </figure>
          <p>
            <span class="offer__title">Турция</span>
            <span class="offer__price">от 500 рублей</span>
            <span class="offer__more">Подробнее...</span>
          </p>
        </a>
        <a href="#" class="btn offers-box__btn avia-search">Поиск авиатура</a>
        <a href="#" class="offers-box__offer offer">
          <figure>
            <img src="<?bloginfo('template_url'); ?>/pics/offer.jpg" alt="">
          </figure>
          <p>
            <span class="offer__title">Затока</span>
            <span class="offer__price">от 300 рублей</span>
            Подробнее...
          </p>
        </a>
        <a href="#" class="btn auto-search offers-box__btn">Поиск экскурсионных туров</a>
      </div>
      <div class="bg-box">
      </div>
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
          ПРО-ТУР — турагентство в городе Лида.<br>
          Бронирование и продажа туров.
          Бронирование и продажа авиабилетов. Бронирование отелей.
          Визовая поддержка. Горящие туры. Раннее бронирование. Медицинское страхование для выезда за рубеж.
          Организация групповых поездок в республике Беларусь и за ее пределами.<br>
        </p>
        <p>
          Все это и многое другое наша команда с радостью предлагает вам!<br>
          Оставляйте заявку и мы подберем отдых для вас!
        </p>
          <a href="#" class="btn main-about__btn">Оставить заявку</a>
      </article>
      </div>
    </div>
    <div class="main-about__icons">
      <div class="container main-container">
        <ul class="main-about__advantages">
          <li class="advantages__icon icon-like">
            <i></i>
            <span class="advantages__title">98% +</span>
            <p>Довольных клиентов</p>
          </li>
          <li class="advantages__icon icon-clients">
            <i></i>
            <span class="advantages__title">2000 +</span>
            <p>Туристов зарядились эмоциями</p>
          </li>
          <li class="advantages__icon icon-cream">
            <i></i>
            <span class="advantages__title">900 +</span>
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
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Индия1</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Полететь</a>
          </div>
        </article>
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Индия1</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Полететь</a>
          </div>
        </article>
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Индия1</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Полететь</a>
          </div>
        </article>
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Индия1</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Полететь</a>
          </div>
        </article>
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
        <a href="#" class="btn offers-box__btn avia-search">поиск авиатуров</a>
      </div>
    </div>
  </section>
  <section class="descriprion-box dark auto">
    <div class="container">
      <h3 class="section-title white">Автобусные и экскурсионные туры</h3>
      <div class="title__text">
        <p>Новые открытия, впечатления, знакомства, селфи...<br>
           Прекрасная возможность увидить "матушку" Европу во всей красе.</p>
        <a href="#" class="btn offers-box__btn avia-search">поиск экскурсий</a>
      </div>
    </div>
  </section>
  <section class="main-auto">
    <div class="container">
      <div class="main-catalog flex-box">
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Одесса</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Поехать</a>
          </div>
        </article>
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Одесса</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Поехать</a>
          </div>
        </article>
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Одесса</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Поехать</a>
          </div>
        </article>
        <article class="main-avia card-box">
          <a class="card-box__more" href="#1">
            <figure class="card-box__img">
              <img src="<?bloginfo('template_url'); ?>/pics/card.jpg" alt="">
            </figure>
          </a>
          <div class="card-box__text">
            <h4>Одесса</h4>
            <p>от 300 рублей</p>
            <a href="#2" class="btn card-box__btn">Поехать</a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <section class="main-opers">
    <div class="container">
      <h3 class="section-title">Наши друзья и партнеры</h3>
    </div>
    <div class="container">
      <div class="main-opers__slider">
        <figure class="main-opers__slide">
          <img src="<?bloginfo('template_url'); ?>/pics/belavia_logo.gif" alt="">
          <div class="cloud-descript">
            <h5>Белавия</h5>
            <p>
              <span class="main-opers__type">Авиаперевозчик</span>
              Год основания 2010
            </p>
          </div>
        </figure>
        <figure class="main-opers__slide">
          <img src="<?bloginfo('template_url'); ?>/pics/belavia_logo.gif" alt="">
          <div class="cloud-descript">
            <h5>Белавия</h5>
            <p>
              <span class="main-opers__type">Авиаперевозчик</span>
              Год основания 2010
            </p>
          </div>
        </figure>
        <figure class="main-opers__slide">
          <img src="<?bloginfo('template_url'); ?>/pics/belavia_logo.gif" alt="">
          <div class="cloud-descript">
            <h5>Белавия</h5>
            <p>
              <span class="main-opers__type">Авиаперевозчик</span>
              Год основания 2010
            </p>
          </div>
        </figure>
        <figure class="main-opers__slide">
          <img src="<?bloginfo('template_url'); ?>/pics/belavia_logo.gif" alt="">
          <div class="cloud-descript">
            <h5>Белавия</h5>
            <p>
              <span class="main-opers__type">Авиаперевозчик</span>
              Год основания 2010
            </p>
          </div>
        </figure>
      </div>
    </div>
  </section>
  <section class="main-news">
    <div class="container">
      <h3 class="section-title">Наши новости</h3>
    </div>
    <div class="container flex-box news-box">
      <a href="#" class="news-box__offer offer">
        <figure>
          <img src="<?bloginfo('template_url'); ?>/pics/offer.jpg" alt="">
        </figure>
        <p>
          <span class="offer__title">Одесса - жемчужина у моря</span>
          <span class="offer__price">отдых в Одесской области</span>
          <span class="offer__more">Подробнее...</span>
        </p>
      </a>
      <a href="#" class="news-box__offer offer">
        <figure>
          <img src="<?bloginfo('template_url'); ?>/pics/offer.jpg" alt="">
        </figure>
        <p>
          <span class="offer__title">Одесса - жемчужина у моря</span>
          <span class="offer__price">отдых в Одесской области</span>
          <span class="offer__more">Подробнее...</span>
        </p>
      </a>
      <a href="#" class="news-box__offer offer">
        <figure>
          <img src="<?bloginfo('template_url'); ?>/pics/offer.jpg" alt="">
        </figure>
        <p>
          <span class="offer__title">Одесса - жемчужина у моря</span>
          <span class="offer__price">отдых в Одесской области</span>
          <span class="offer__more">Подробнее...</span>
        </p>
      </a>
    </div>
    <div class="container">
      <a href="#2" class="btn card-box__btn">Все новости и статьи</a>
    </div>
  </section>
</main>

<?
get_footer();
