<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pro-tour_by
 */

?>

<article id="poster-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post(); ?>
	<?php the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
