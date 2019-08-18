<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

 $thumb = get_the_post_thumbnail();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php pro_tour_by_posted_on(); ?>
	<a href="<?php the_permalink(); ?>" class="news-box__offer offer">
		<figure>
			<?php echo $thumb;?>
		</figure>
		<div class="offer-content">
			<span class="offer__title"><?the_title();?></span>
			<span class="offer__price"><?the_excerpt();?></span>
			<span class="offer__more">Подробнее...</span>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
