<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pro-tour_by
 */

get_header();
?>

	<div id="primary" class="content-area container">
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
  		<main id="main" class="site-main country">
			  <figure class="country-slider">
				<img src="http://pro-tour.by/wp-content/uploads/2018/03/pro-tourby_Albaniya-1.jpg" alt="  Албания">
				<div class="flag-box">
          <a rel="nofollow" href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D0%B1%D0%B0%D0%BD%D0%B8%D1%8F" class="flag-box__title" target="_blank">
            <span class="flag_img">
              <img src="http://pro-tour.by/wp-content/uploads/2018/03/pro-tourby_Albaniya-flag.jpg" alt="Албания">
            </span>
            <h1>Албания</h1>
          </a>
        </div>
			  </figure>
				<section class="country-description">
					<p>
						Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32
					</p>
				</section>
			  <section class="country-informers">
					<ul class="country__info-box">
            <li>
              <span>Язык:</span> Албанский
					  </li>
            <li>
              <span>Валюта:</span> Лек
					  </li>
            <li>
              <span>Виза:</span> с 15 мая до ноября виза для белорусов не нужна
				  	</li>
					  <li>
						  <span>Время полёта из Минска:</span> ~ 2часа
					  </li>
          </ul>
					<ul class="country__meteo-box">
						<!-- Gismeteo informer START -->
							<link rel="stylesheet" type="text/css" href="https://nst1.gismeteo.by/assets/flat-ui/legacy/css/informer.min.css">
								<div id="gsInformerID-4iAn5InySocouA" class="gsInformer" style="width:300px;height:227px">
	       					<div class="gsIContent">
	        					<div id="cityLink">
	            				<a href="https://www.gismeteo.by/weather-tirana-3257/" target="_blank" title="Погода в Тиране"><img src="https://nst1.gismeteo.by/assets/flat-ui/img/gisloader.svg" width="24" height="24" alt="Погода в Тиране"></a>
	        					</div>
	        					<div class="gsLinks">
	            			<table>
	                		<tr>
	                    	<td>
	                        <div class="leftCol">
	                            <a href="https://www.gismeteo.by/" target="_blank" title="Погода в Тиране">
	                                <img alt="Погода в Тиране" src="https://nst1.gismeteo.by/assets/flat-ui/img/logo-mini2.png" align="middle" border="0" width="11" height="16" />
	                                <img src="https://nst1.gismeteo.by/assets/flat-ui/img/informer/gismeteo.svg" border="0" align="middle" style="left: 5px; top:1px">
	                            </a>
	                            </div>
	                            <div class="rightCol">
	                                <a href="https://www.gismeteo.by/weather-tirana-3257/2-weeks/" target="_blank" title="Погода в Тиране на 2 недели">
	                                    <img src="https://nst1.gismeteo.by/assets/flat-ui/img/informer/forecast-2weeks.ru.svg" border="0" align="middle" style="top:auto" alt="Погода в Тиране на 2 недели">
	                                </a>
	                            </div>
	                         </td>
	                			 </tr>
	            		 		</table>
	        					</div>
	    					 </div>
            	</div>
							<script async src="https://www.gismeteo.by/api/informer/getinformer/?hash=4iAn5InySocouA"></script>
						<!-- Gismeteo informer END -->
					</ul>
					<ul class="country__news-box">
						<article id="post-88" <?php post_class('',88); ?>>
						  <?php
						  $thumb = get_the_post_thumbnail( 88 );
						  ?>
							<a href="<?php echo get_post_permalink( 88 ); ?>" class="news-box__offer offer">
								<figure>
									<?php echo $thumb;?>
								</figure>
								<div class="offer-content">
									<span class="offer__title"><?echo get_the_title( 88 );?></span>
									<span class="offer__price"><?echo get_the_excerpt( 88 );?></span>
									<span class="offer__more">Подробнее...</span>
								</div>
							</a>
						</article><!-- #post-88 -->
					</ul>
			  </section>
			  <section class="main-catalog flex-box">
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
			  </section>
				<div class="button-box">
        	<a href="#" class="btn offers-box__btn avia-search">оставить заявку</a>
        	<a href="#" class="btn offers-box__btn avia-search">начать поиск</a>
        </div>
  		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
