<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pro-tour_by
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?151"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="float-header">
			<div class="contacts clearfix">
				<div class="contats_title velcom">
					<div class="wiget-phone"><a href="tel:+375291321800">+375 29 132-18-00</a></div>
					<div class="wiget-phone"><a href="tel:+375444770448">+375 44 477-04-48</a></div>
				</div>
				<div class="contats_title mts">
					<div class="wiget-phone"><a href="tel:+375298991800">+375 29 899-18-00</a></div>
					<div class="wiget-phone"><a href="tel:+375295804594">+375 29 580-45-94</a></div>
				</div>
				<div class="contats_title">
					<div class="wiget-mail"><a href="mailto:info@pro-tour.by">info@pro-tour.by</a></div>
					<div class="wiget-skype"><a href="#">protour</a></div>
				</div>
			</div>
		</div>
	</header>
