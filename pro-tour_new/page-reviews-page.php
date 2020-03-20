<?php
/**
 * Template Name: Отзывы
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

get_header();

?>

	<div id="primary" class="content-area container ">
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
			<main id="main" class="site-main reviews">
                <h1 class="section-title section-title_dark-theme"><span class="color-orange">о</span>тзывы</h1>

                <p>Отдых – это хорошо! А хороший отдых – просто великолепно!</p>

                <p>Мы обожаем подбирать для вас отличный отдых и вдохновляемся, когда вы рассказываете нам свои впечатления.
                   Как отдохнули? Не стесняйтесь – поделитесь своими эмоциями!</p>
                <div class="reviews__inner">
                     <div class="reviews__social">
                     <h3>открыть или оставить отзыв в:</h3>
                     <div class="reviews__container">
                           <a href="https://www.g.page/protourby/review" target="_blank" nofollow>
                               <svg class="reviews__icon">
                                    <use xlink:href="<?bloginfo('template_url'); ?>/img/sprite.svg#google"></use>
                               </svg>
                           </a>
                            <a href="https://yandex.by/maps/org/pro_tur/45471421445/?ll=25.296019%2C53.891147&z=18" target="_blank" nofollow>
                                <svg class="reviews__icon">
                                     <use xlink:href="<?bloginfo('template_url'); ?>/img/sprite.svg#yandex"></use>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/stories/highlights/17848963783497896/" target="_blank" nofollow>
                                 <svg class="reviews__icon">
                                      <use xlink:href="<?bloginfo('template_url'); ?>/img/sprite.svg#instagram"></use>
                                 </svg>
                            </a>
                     </div>
                     </div>
                     <div class="reviews__social">
                            <h3>оставить отзыв на сайте:</h3>
                            <button class="btn reviews__btn">оставить отзыв</button>
                     </div>
                </div>

             <div class="reviews__content">
                 <div class="reviews__clients">
                 <div class="reviews__quotes"></div>
                     <div class="reviews__text">
                         <span class="reviews__client-name">Инна</span>
                         <span class="reviews__client-date">18 сентября 2019 г.</span>
                         <p>Решили с мужем отправиться на отдых в Турцию. Выбрали это агенство и не пожалели. Нашим путешествием
                             занималась замечательная девушка Анастасия. Отдохнули просто волшебно! Очень жаль, что отдых закончился...</p>
                     </div>
                 </div>
                 <div class="reviews__clients">
                 <div class="reviews__quotes"></div>
                     <div class="reviews__text">
                         <span class="reviews__client-name">Виктория</span>
                         <span class="reviews__client-date">20 декабря 2019 г.</span>
                         <p>В Pro-tour работают очень приятные девушки, которые подобрали для нас хороший тур цена=качество. Так как в выбранной
                             нами стране, мы ни разу не были и не знали какой отель выбрать, девушки подсказали по отзывами своих предыдущих...</p>
                     </div>
                 </div>
                 <div class="reviews__clients">
                     <div class="reviews__quotes"></div>
                     <div class="reviews__text">
                         <span class="reviews__client-name">Ольга</span>
                         <span class="reviews__client-date">29 января 2020 г.</span>
                         <p>В декабре отдыхали в Шарм-эль-Шейхе. Спасибо компании ПРО-ТУР за прекрасную организацию отдыха.</p>
                     </div>
                 </div>
             </div>
                <ul class="reviews__control">
                <li class="reviews__point"></li>
                <li class="reviews__point"></li>
                <li class="reviews__point reviews__point--selected"></li>
                <li class="reviews__point"></li>
                <li class="reviews__point"></li>
            </ul>

			</main><!-- #main -->
		</div>

	</div><!-- #primary -->

<?php

get_footer();
