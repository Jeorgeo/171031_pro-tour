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
      <h3>Идеи для вашего <span class="main-slider__title">отдыха</span> в июле</h3>
      <div class="main-slider__offers offers-box">
        <a href="#" class="offers-box__offer offer">
          <figure>
            <img src="<?bloginfo('template_url'); ?>/img/pro-tour_full.png" alt="">
          </figure>
          <p>
            <span class="offer__title"></span>
            <span class="offer__price"></span>
            Подробнее...
          </p>
        </a>
      </div>
    </div>
  </section>
  <section class="main-about">

  </section>
  <section class="main-avia">

  </section>
  <section class="main-auto">

  </section>
  <section class="main-opers">

  </section>
  <section class="main-news">

  </section>
</main>

<?
get_footer();
