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
					<?php dynamic_sidebar( 'phone-v1' ); ?>
					<?php dynamic_sidebar( 'phone-v2' ); ?>
				</div>
				<div class="contats_title mts">
					<?php dynamic_sidebar( 'phone-m1' ); ?>
					<?php dynamic_sidebar( 'phone-m2' ); ?>
				</div>
				<div class="contats_title">
					<?php dynamic_sidebar( 'mail' ); ?>
					<?php dynamic_sidebar( 'skype' ); ?>
				</div>
			</div>
		</div>
	</header>
