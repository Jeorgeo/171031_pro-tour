<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pro-tour_by
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		<a href="#" class="btn-box-single cloud-link">Поехали<span class="cloud-mark"><?php echo get_field('d_price'); ?></span></a>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
