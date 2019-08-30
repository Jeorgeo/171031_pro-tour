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
  <span class="posted-on"><?php echo get_field('review_date'); ?></span>
	<a class="news-box__offer reviews offer">
		<figure>
      <img src="<?php echo get_field('review_img'); ?>" alt="<?the_title();?>">
		</figure>
		<div class="offer-content offer-content_reviews">
			<h3 class="offer__title"><?the_title();?></h3>
			<span class="offer__price"><?the_content();?></span>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
