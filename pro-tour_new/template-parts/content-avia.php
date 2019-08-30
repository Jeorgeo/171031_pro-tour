<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="avia_slide">
    <figure class="avia_slide-bg">
      <img src="<?php echo get_field( 'c_img' ); ?>" alt="  <?php echo get_field( 'c_title' ); ?>">
      <div class="country">
        <a href="<?php echo get_field( 'c_link' ); ?>" class="country__title-box" target="_blank">
          <span class="flag">
            <img src="<?php echo get_field( 'c_flag' ); ?>" alt="<?php echo get_field( 'c_title' ); ?>">
          </span>
          <p>
            <?php echo get_field( 'c_title' ); ?>
          </p>
        </a>
        <ul class="country__info-box">
          <li>
            <span>Язык:</span>
            <?php echo get_field( 'c_lang' ); ?>
          </li>
          <li>
            <span>Валюта:</span>
            <?php echo get_field( 'c_money' ); ?>
          </li>
          <li>
            <span>Виза:</span><?php echo get_field( 'c_visa' ); ?>
          </li>
          <li>
            <?php echo get_field( 'c_weather' ); ?>
          </li>
        </ul>
      </div>

    </figure>
  </section>
  <section class="arrow-section">
		<div class="box-arrow">
			<a href="#search">search</a>
		</div>
		<span id="search"></span>
	</section>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<section class="search-section">
		<?php echo get_field( 'search-box' ); ?>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
