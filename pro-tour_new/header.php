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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113820744-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113820744-1');
</script>
<meta name="yandex-verification" content="f9a2e042c11549ee" />
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46482651 = new Ya.Metrika({
                    id:46482651,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->
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
				<div class="slogan">
					<p>
						вместе с нами отдыхай!
					</p>
				</div>
				<div class="contats_title velcom">
					<?php dynamic_sidebar( 'phone-v1' ); ?>
					<?php dynamic_sidebar( 'phone-v2' ); ?>
				</div>
				<div class="contats_title mts">
					<?php dynamic_sidebar( 'phone-m1' ); ?>
					<?php dynamic_sidebar( 'phone-m2' ); ?>
				</div>
				<div class="contats_title">
					<?php dynamic_sidebar( 'skype' ); ?>
				</div>
        <div class="contats_btn">
					<button class="btn btn-primary btn-sm btn-naira btn-naira-up cloud-link" type="button" name="button">заказать звонок <span class="cloud-mark">верхняя форма</span></button>
				</div>
			</div>
		</div>
	</header>
