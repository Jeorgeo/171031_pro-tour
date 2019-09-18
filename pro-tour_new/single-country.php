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
				<img src="<?php echo get_field('сountry_slide'); ?>" alt="<?echo get_the_title();?> от ПРО-ТУР">
				<div class="flag-box">
          <a rel="nofollow" href="<?php echo get_field('сountry_info'); ?>" class="flag-box__title" target="_blank">
            <span class="flag_img">
              <img src="<?php echo get_field('сountry_flag'); ?>" alt="<?echo get_the_title();?> флаг">
            </span>
            <h1><?echo get_the_title();?></h1>
          </a>
        </div>
			  </figure>
				<section class="country-description">
					<?
						the_post();
						the_content();
						$id_news = get_field('id_news');
						$id_offer_1 = get_field('id_offer_1');
						$id_offer_2 = get_field('id_offer_2');
						$id_offer_3 = get_field('id_offer_3');
					?>
				</section>
			  <section class="country-informers">
					<ul class="country__info-box">
            <li>
              <span>Язык:</span> <?php echo get_field('сountry_lang'); ?>
					  </li>
            <li>
              <span>Валюта:</span> <?php echo get_field('сountry_money'); ?>
					  </li>
            <li>
              <span>Виза:</span> <?php echo get_field('сountry_visa'); ?>
				  	</li>
					  <li>
						  <span>Сезон:</span> <?php echo get_field('сountry_season'); ?>
					  </li>
						<li>
						  <span>Время полёта из Минска:</span> ~ <?php echo get_field('сountry_fly'); ?>
					  </li>
          </ul>
					<ul class="country__meteo-box">
						<li>
							<?php echo get_field('сountry_meteo'); ?>
						</li>
					</ul>
					<div class="country__news-box">
						<?php if ($id_news): ?>
							<article id="post-<?$id_news?>" <?php post_class('',	$id_news); ?>>
								<?php
								$thumb = get_the_post_thumbnail( $id_news );
								?>
								<a href="<?php echo get_post_permalink( $id_news ); ?>" class="news-box__offer offer">
									<figure>
										<?php echo $thumb;?>
									</figure>
									<div class="offer-content">
										<span class="offer__title"><?echo get_the_title( $id_news );?></span>
										<span class="offer__price"><?echo get_the_excerpt( $id_news );?></span>
										<span class="offer__more">Подробнее...</span>
									</div>
								</a>
							</article><!-- #post-<?$id_news?> -->
						<?php endif; ?>						
					</div>
			  </section>
			  <section class="main-catalog main-catalog_country flex-box">
					<?php if ($id_offer_1):
						$img_offer_1 = get_the_post_thumbnail($id_offer_1); ?>
						<article class="main-avia card-box">
							<a class="card-box__more" href="<?php echo get_permalink($id_offer_1); ?>">
								<figure class="card-box__img">
									<img src="<? echo $img_offer_1; ?>" alt="<?echo get_the_title( $id_offer_1 );?> от ПРО-ТУР">
								</figure>
							</a>
							<div class="card-box__text">
								<h4><?echo get_the_title( $id_offer_1 );?></h4>
								<p><?php echo get_field('offer_price', $id_offer_1); ?></p>
								<a href="#" class="btn cloud-link card-box__btn"><?php echo get_field('offer_btn', $id_offer_1); ?></a>
							</div>
						</article>
					<?php endif; ?>
					<?php if ($id_offer_2):
						$img_offer_2 = get_the_post_thumbnail($id_offer_2); ?>
						<article class="main-avia card-box">
							<a class="card-box__more" href="<?php echo get_permalink($id_offer_2); ?>">
								<figure class="card-box__img">
									<img src="<? echo $img_offer_2; ?>" alt="<?echo get_the_title( $id_offer_2 );?> от ПРО-ТУР">
								</figure>
							</a>
							<div class="card-box__text">
								<h4><?echo get_the_title( $id_offer_2 );?></h4>
								<p><?php echo get_field('offer_price', $id_offer_2); ?></p>
								<a href="#" class="btn cloud-link card-box__btn"><?php echo get_field('offer_btn', $id_offer_2); ?></a>
							</div>
						</article>
					<?php endif; ?>
					<?php if ($id_offer_3):
						$img_offer_3 = get_the_post_thumbnail( $id_offer_3 ); ?>
						<article class="main-avia card-box">
							<a class="card-box__more" href="<?php echo get_permalink( $id_offer_3 ); ?>">
								<figure class="card-box__img">
									<img src="<? echo $img_offer_3; ?>" alt="<?echo get_the_title( $id_offer_3 );?> от ПРО-ТУР">
								</figure>
							</a>
							<div class="card-box__text">
								<h4><?echo get_the_title( $id_offer_3 );?></h4>
								<p><?php echo get_field('offer_price', $id_offer_3); ?></p>
								<a href="#" class="btn cloud-link card-box__btn"><?php echo get_field('offer_btn', $id_offer_3); ?></a>
							</div>
						</article>
					<?php endif; ?>
			  </section>
				<div class="button-box">
        	<a href="#" class="btn cloud-link offers-box__btn avia-search">оставить заявку</a>
        	<!--<a href="<?php echo get_permalink( 719 ); ?>" class="btn offers-box__btn avia-search">начать поиск</a>-->
        </div>
				<section class="avia-search">
					<h1 class="section-title section-title_dark-theme">Подбор <span class="color-orange">Авиа</span> туров</h1>
			    <?php echo get_field('country_search'); ?>
				</section>
  		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
