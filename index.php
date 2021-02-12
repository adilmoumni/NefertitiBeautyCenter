<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<!--<![endif]-->

<head>

	<?php
	$con = mysqli_connect('localhost', 'root', '', 'nefertiti');

	if ($con->connect_error) {
		die("Connexion Failed" . $con->connect_error);
	}

	$sql = "SELECT * FROM `meta` ";

	$result =    $con->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo '<meta name="' . $row['name'] . '" content="' . $row['content'] . '"/>';
		}
	} ?>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />


	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="https://spalabdev.wpengine.com/xmlrpc.php" />
	<script>
		document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
	</script>
	<style>
		.wishlist_table .add_to_cart,
		a.add_to_wishlist.button.alt {
			border-radius: 16px;
			-moz-border-radius: 16px;
			-webkit-border-radius: 16px;
		}
	</style>

	<script type='text/javascript'>
		var mytheme_urls = {
			theme_base_url: 'https://spalabdev.wpengine.com/wp-content/themes/spalab/',
			framework_base_url: 'https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/',
			ajaxurl: 'https://spalabdev.wpengine.com/wp-admin/admin-ajax.php',
			url: 'https://spalabdev.wpengine.com',
			scroll: 'disable',
			stickynav: 'enable',
			loadingbar: 'enable',
			is_admin: '',
			skin: 'purple',
			layout: 'wide',
			layout_pattern: ''
		};
	</script>
	<!-- <link href='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/favicon.ico' rel='shortcut icon'
		type='image/x-icon' />
	<link href='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/apple-touch-icon.png'
		rel='apple-touch-icon-precomposed' />
	<link href='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/apple-touch-icon-114x114.png'
		sizes='114x114' rel='apple-touch-icon-precomposed' />
	<link href='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/apple-touch-icon-72x72.png' sizes='72x72'
		rel='apple-touch-icon-precomposed' />
	<link href='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/apple-touch-icon-144x144.png'
		sizes='144x144' rel='apple-touch-icon-precomposed' /> -->

	<!-- All in One SEO 4.0.12 -->
	<title>Nefertiti Beauty Center</title>
	<meta name="description" content="Spa labs-the facials &amp; makeup theme is a expressive theme for beauty parlors offering facials, makeup, eye mascara and lip gloss besides massage therapies." />
	<link rel="canonical" href="https://spalabdev.wpengine.com/" />
	<meta property="og:site_name" content="spa lab | Just another WordPress site" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Spa Lab-the all makeup &amp; facials theme" />
	<meta property="og:description" content="Spa labs-the facials &amp; makeup theme is a expressive theme for beauty parlors offering facials, makeup, eye mascara and lip gloss besides massage therapies." />
	<meta property="og:url" content="https://spalabdev.wpengine.com/" />
	<meta property="article:published_time" content="2014-07-28T13:15:34Z" />
	<meta property="article:modified_time" content="2020-01-31T07:44:41Z" />
	<meta property="twitter:card" content="summary" />
	<meta property="twitter:domain" content="spalabdev.wpengine.com" />
	<meta property="twitter:title" content="Spa Lab-the all makeup &amp; facials theme" />
	<meta property="twitter:description" content="Spa labs-the facials &amp; makeup theme is a expressive theme for beauty parlors offering facials, makeup, eye mascara and lip gloss besides massage therapies." />
	<meta name="google" content="nositelinkssearchbox" />
	<script type="application/ld+json" class="aioseo-schema">
		{
			"@context": "https:\/\/schema.org",
			"@graph": [{
				"@type": "WebSite",
				"@id": "https:\/\/spalabdev.wpengine.com\/#website",
				"url": "https:\/\/spalabdev.wpengine.com\/",
				"name": "spa lab",
				"description": "",
				"publisher": {
					"@id": "https:\/\/spalabdev.wpengine.com\/#organization"
				}
			}, {
				"@type": "Organization",
				"@id": "https:\/\/spalabdev.wpengine.com\/#organization",
				"name": "spa lab",
				"url": "https:\/\/spalabdev.wpengine.com\/"
			}, {
				"@type": "BreadcrumbList",
				"@id": "https:\/\/spalabdev.wpengine.com\/#breadcrumblist",
				"itemListElement": [{
					"@type": "ListItem",
					"@id": "https:\/\/spalabdev.wpengine.com\/#listItem",
					"position": 1,
					"item": {
						"@type": "WebPage",
						"@id": "https:\/\/spalabdev.wpengine.com\/#item",
						"name": "Home",
						"description": "Spa labs-the facials & makeup theme is a expressive theme for beauty parlors offering facials, makeup, eye mascara and lip gloss besides massage therapies.",
						"url": "https:\/\/spalabdev.wpengine.com\/"
					}
				}]
			}, {
				"@type": "WebPage",
				"@id": "https:\/\/spalabdev.wpengine.com\/#webpage",
				"url": "https:\/\/spalabdev.wpengine.com\/",
				"name": "Spa Lab-the all makeup & facials theme",
				"description": "Spa labs-the facials & makeup theme is a expressive theme for beauty parlors offering facials, makeup, eye mascara and lip gloss besides massage therapies.",
				"inLanguage": "en-US",
				"isPartOf": {
					"@id": "https:\/\/spalabdev.wpengine.com\/#website"
				},
				"breadcrumb": {
					"@id": "https:\/\/spalabdev.wpengine.com\/#breadcrumblist"
				},
				"datePublished": "2014-07-28T13:15:34+00:00",
				"dateModified": "2020-01-31T07:44:41+00:00"
			}]
		}
	</script>
	<!-- All in One SEO -->

	<link rel='dns-prefetch' href='//code.jquery.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="spa lab &raquo; Feed" href="https://spalabdev.wpengine.com/feed/" />
	<link rel="alternate" type="application/rss+xml" title="spa lab &raquo; Comments Feed" href="https://spalabdev.wpengine.com/comments/feed/" />
	<link rel="alternate" type="application/rss+xml" title="spa lab &raquo; Home Comments Feed" href="https://spalabdev.wpengine.com/home-page/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/spalabdev.wpengine.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6"
			}
		};
		! function(e, a, t) {
			var r, n, o, i, p = a.createElement("canvas"),
				s = p.getContext && p.getContext("2d");

			function c(e, t) {
				var a = String.fromCharCode;
				s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
				var r = p.toDataURL();
				return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
			}

			function l(e) {
				if (!s || !s.fillText) return !1;
				switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
					case "flag":
						return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
					case "emoji":
						return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
				}
				return !1
			}

			function d(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (i = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
				t.DOMReady = !0
			}, t.supports.everything || (n = function() {
				t.readyCallback()
			}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
				"complete" === a.readyState && t.readyCallback()
			})), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel='stylesheet' id='dt-animation-css-css' href='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/css/animations.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-sc-css-css' href='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-animations-css' href='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/page-builder/css/animations.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='dt-woocommerce-css-css' href='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/woocommerce/style.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='layerslider-css' href='https://spalabdev.wpengine.com/wp-content/plugins/LayerSlider/static/layerslider/css/layerslider.css?ver=6.6.8' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='https://spalabdev.wpengine.com/wp-includes/css/dist/block-library/style.min.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='jquery-selectBox-css' href='https://spalabdev.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' type='text/css' media='all' />
	<link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='https://spalabdev.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
	<link rel='stylesheet' id='yith-wcwl-main-css' href='https://spalabdev.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=2.2.7' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='https://spalabdev.wpengine.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='resmap-css' href='https://spalabdev.wpengine.com/wp-content/plugins/responsive-maps-plugin/includes/css/resmap.min.css?ver=4.7' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css' href='https://spalabdev.wpengine.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.3.1' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		.tp-caption a {
			color: #ff7302;
			text-shadow: none;
			-webkit-transition: all 0.2s ease-out;
			-moz-transition: all 0.2s ease-out;
			-o-transition: all 0.2s ease-out;
			-ms-transition: all 0.2s ease-out
		}

		.tp-caption a:hover {
			color: #ffa902
		}
	</style>
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='jquery-ui-datepicker-css' href='//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='pace-theme-center-radar-css' href='https://spalabdev.wpengine.com/wp-content/themes/spalab/css/pace-theme-center-radar.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='default-css' href='https://spalabdev.wpengine.com/wp-content/themes/spalab/style.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='skin-css' href='https://spalabdev.wpengine.com/wp-content/themes/spalab/skins/purple/style.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='custom-font-awesome-css' href='https://spalabdev.wpengine.com/wp-content/themes/spalab/css/font-awesome.min.css?ver=3.0.2' type='text/css' media='all' />
	<!--[if lt IE 7]>
<link rel='stylesheet' id='custom-font-awesome-ie7-css'  href='https://spalabdev.wpengine.com/wp-content/themes/spalab/css/font-awesome-ie7.min.css?ver=5.6' type='text/css' media='all' />
<![endif]-->
	<link rel='stylesheet' id='responsive-css' href='https://spalabdev.wpengine.com/wp-content/themes/spalab/responsive.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='mytheme-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7CRaleway:400,500,300,600%7CTangerine:400,700%7CRoboto' type='text/css' media='all' />
	<!--[if IE]>
    <style type="text/css" media="screen">
			.team .social-icons li {
				behavior: url(https://spalabdev.wpengine.com/wp-content/themes/spalab/PIE.php);
               }
     </style>
	 <![endif]-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/enable-jquery-migrate-helper/js/jquery/jquery-1.12.4-wp.js?ver=1.12.4-wp' id='jquery-core-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/enable-jquery-migrate-helper/js/jquery-migrate/jquery-migrate-1.4.1-wp.js?ver=1.4.1-wp' id='jquery-migrate-js'></script>
	<script type='text/javascript' id='layerslider-greensock-js-extra'>
		/* <![CDATA[ */
		var LS_Meta = {
			"v": "6.6.8"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' data-cfasync="false" src='https://spalabdev.wpengine.com/wp-content/plugins/LayerSlider/static/layerslider/js/greensock.js?ver=1.19.0' id='layerslider-greensock-js'></script>
	<script type='text/javascript' data-cfasync="false" src='https://spalabdev.wpengine.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.6.8' id='layerslider-js'></script>
	<script type='text/javascript' data-cfasync="false" src='https://spalabdev.wpengine.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions.js?ver=6.6.8' id='layerslider-transitions-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.3.1' id='tp-tools-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.3.1' id='revmin-js'></script>
	<script type='text/javascript' id='likesScript-js-extra'>
		/* <![CDATA[ */
		var like_this_ajax_object = {
			"ajax_url": "https:\/\/spalabdev.wpengine.com\/wp-admin\/admin-ajax.php"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/roses-like-this/likesScript.js?ver=5.6' id='likesScript-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/modernizr-2.6.2.min.js?ver=5.6' id='modernizr-script-js'></script>
	<script type='text/javascript' id='pacemin-js-extra'>
		/* <![CDATA[ */
		var paceOptions = {
			"restartOnRequestAfter": "",
			"restartOnPushState": ""
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/pace.min.js?ver=5.6' id='pacemin-js'></script>
	<meta name="generator" content="Powered by LayerSlider 6.6.8 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
	<!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->

	<style type="text/css">
		#bbar-wrapper ul.top-menu li a:hover,
		#bbar-wrapper .column.dt-sc-one-half.alignright a:hover,
		#bbar-wrapper .column.dt-sc-one-half.alignright a:hover,
		#bbar-wrapper a:hover,
		#bbar-wrapper.type1 a:hover,
		#bbar-wrapper.type4 a:hover,
		#bbar-wrapper.type5 a:hover {
			color: #2d2d29;
		}
	</style>
	<link rel="https://api.w.org/" href="https://spalabdev.wpengine.com/wp-json/" />
	<link rel="alternate" type="application/json" href="https://spalabdev.wpengine.com/wp-json/wp/v2/pages/7" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://spalabdev.wpengine.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://spalabdev.wpengine.com/wp-includes/wlwmanifest.xml" />
	<link rel='shortlink' href='https://spalabdev.wpengine.com/' />
	<link rel="alternate" type="application/json+oembed" href="https://spalabdev.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fspalabdev.wpengine.com%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://spalabdev.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fspalabdev.wpengine.com%2F&#038;format=xml" />
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<meta name="generator" content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
	<script type="text/javascript">
		function setREVStartSize(e) {
			try {
				var i = jQuery(window).width(),
					t = 9999,
					r = 0,
					n = 0,
					l = 0,
					f = 0,
					s = 0,
					h = 0;
				if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
						f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
					}), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
					var u = (e.c.width(), jQuery(window).height());
					if (void 0 != e.fullScreenOffsetContainer) {
						var c = e.fullScreenOffsetContainer.split(",");
						if (c) jQuery.each(c, function(e, i) {
							u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
						}), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
					}
					f = u
				} else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
				e.c.closest(".rev_slider_wrapper").css({
					height: f
				})
			} catch (d) {
				console.log("Failure at Presize of Slider:" + d)
			}
		};
	</script>
</head>

<body class="home page-template page-template-tpl-fullwidth page-template-tpl-fullwidth-php page page-id-7 woocommerce-no-js">
	<!-- Page Loader Starts-->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">

				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>

			</div>
		</div>
	</div>
	<!-- Page Loader Starts-->


	<!-- **Delicate Style Picker Wrapper** -->
	<div class="delicate-style-picker-wrapper"> <a href="" title="" class="style-picker-ico"> <img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/picker-icon.png" alt="" title="" class="rotating" /> </a>
		<div id="delicate-style-picker">
			<h2>Select Your Style</h2>
			<h3>Choose your layout</h3>
			<ul class="layout-picker">
				<li> <a id="fullwidth" href="" title="" class="selected"> <img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/fullwidth.jpg" alt="" title="" /> </a> </li>
				<li> <a id="boxed" href="" title=""> <img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/boxed.jpg" alt="" title="" /> </a> </li>
			</ul>
			<div class="hr"> </div>
			<div id="pattern-holder" style="display:none;">
				<h3>Patterns for Boxed Layout</h3>
				<ul class="pattern-picker">
					<li><a data-image='pattern14.png' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern14.png' alt='pattern14' title='pattern14' width='30' height='30' /></a></li>
					<li><a data-image='pattern6.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern6.jpg' alt='pattern6' title='pattern6' width='30' height='30' /></a></li>
					<li><a data-image='pattern2.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern2.jpg' alt='pattern2' title='pattern2' width='30' height='30' /></a></li>
					<li><a data-image='pattern1.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern1.jpg' alt='pattern1' title='pattern1' width='30' height='30' /></a></li>
					<li><a data-image='pattern5.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern5.jpg' alt='pattern5' title='pattern5' width='30' height='30' /></a></li>
					<li><a data-image='pattern11.png' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern11.png' alt='pattern11' title='pattern11' width='30' height='30' /></a></li>
					<li><a data-image='pattern8.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern8.jpg' alt='pattern8' title='pattern8' width='30' height='30' /></a></li>
					<li><a data-image='pattern4.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern4.jpg' alt='pattern4' title='pattern4' width='30' height='30' /></a></li>
					<li><a data-image='pattern15.png' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern15.png' alt='pattern15' title='pattern15' width='30' height='30' /></a></li>
					<li><a data-image='pattern12.png' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern12.png' alt='pattern12' title='pattern12' width='30' height='30' /></a></li>
					<li><a data-image='pattern10.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern10.jpg' alt='pattern10' title='pattern10' width='30' height='30' /></a></li>
					<li><a data-image='pattern3.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern3.jpg' alt='pattern3' title='pattern3' width='30' height='30' /></a></li>
					<li><a data-image='pattern13.png' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern13.png' alt='pattern13' title='pattern13' width='30' height='30' /></a></li>
					<li><a data-image='pattern9.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern9.jpg' alt='pattern9' title='pattern9' width='30' height='30' /></a></li>
					<li><a data-image='pattern7.jpg' href='' title=''><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/patterns/pattern7.jpg' alt='pattern7' title='pattern7' width='30' height='30' /></a></li>
				</ul>
				<div class="hr"> </div>
			</div>
			<h3>Color scheme</h3>
			<ul class="color-picker">
				<li><a id="blue" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/blue.jpg" alt="color-blue" title="color-blue" /></a></li>
				<li><a id="chocolate" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/chocolate.jpg" alt="color-chocolate" title="color-chocolate" /></a></li>
				<li><a id="coral" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/coral.jpg" alt="color-coral" title="color-coral" /></a></li>
				<li><a id="cyan" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/cyan.jpg" alt="color-cyan" title="color-cyan" /></a></li>
				<li><a id="eggplant" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/eggplant.jpg" alt="color-eggplant" title="color-eggplant" /></a></li>
				<li><a id="electricblue" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/electricblue.jpg" alt="color-electricblue" title="color-electricblue" /></a></li>
				<li><a id="ferngreen" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/ferngreen.jpg" alt="color-ferngreen" title="color-ferngreen" /></a></li>
				<li><a id="gold" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/gold.jpg" alt="color-gold" title="color-gold" /></a></li>
				<li><a id="green" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/green.jpg" alt="color-green" title="color-green" /></a></li>
				<li><a id="grey" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/grey.jpg" alt="color-grey" title="color-grey" /></a></li>
				<li><a id="khaki" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/khaki.jpg" alt="color-khaki" title="color-khaki" /></a></li>
				<li><a id="ocean" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/ocean.jpg" alt="color-ocean" title="color-ocean" /></a></li>
				<li><a id="orange" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/orange.jpg" alt="color-orange" title="color-orange" /></a></li>
				<li><a id="palebrown" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/palebrown.jpg" alt="color-palebrown" title="color-palebrown" /></a></li>
				<li><a id="pink" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/pink.jpg" alt="color-pink" title="color-pink" /></a></li>
				<li><a id="purple" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/purple.jpg" alt="color-purple" title="color-purple" /></a></li>
				<li><a id="raspberry" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/raspberry.jpg" alt="color-raspberry" title="color-raspberry" /></a></li>
				<li><a id="red" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/red.jpg" alt="color-red" title="color-red" /></a></li>
				<li><a id="skyblue" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/skyblue.jpg" alt="color-skyblue" title="color-skyblue" /></a></li>
				<li><a id="slateblue" href="" title=""><img src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/style-picker/slateblue.jpg" alt="color-slateblue" title="color-slateblue" /></a></li>
			</ul>
		</div>
	</div><!-- **Delicate Style Picker Wrapper - End** -->
	<!-- **Wrapper** -->
	<div class="wrapper">
		<!-- **Inner Wrapper** -->
		<div class="inner-wrapper">

			<div id="bbar-wrapper" class="type1">
				<div id="bbar-body">
					<div class="container">
						<div class="column dt-sc-one-half first">
							<p class="bbar-text"></p>
						</div>
						<div class="column dt-sc-one-half alignright"><span class="fa fa-phone-square"> </span>05227-84142<a title="" href=""> centernefertiti@gmail.com </a></div>
					</div>
				</div>
				<span class="bbar-divider"></span>
			</div>
			<!-- Header Wrapper -->
			<div id="header-wrapper">

				<!-- **Header** -->
				<header id="header" class="header1" style="background-color: white;">

					<!-- **Header Container** -->
					<div class="" style="padding-left: 10%; padding-right: 10%;">
						<!-- **Logo - start** -->
						<div id="logo" class="">

							<a href="" title="spa lab">
								<img class="normal_logo" src="assets/img/logo.PNG" alt="spa lab" title="spa lab" style="width: 100px; margin-top: 8px;" />
							</a>
						</div><!-- **Logo - End** -->

						<!-- **Navigation** -->
						<div id="primary-menu ">
							<nav id="main-menu">

								<div class="row">
									<div class="col-2">
										<img class="retina_logo" src="assets/img/logo.PNG" alt="spa lab" title="spa lab" style="width: 50px;" />
									</div>
									<div class="col-10" style="padding-top: 6px;">
										<div class="dt-menu-toggle" id="dt-menu-toggle" style="margin: 0%;">
											Menu <span class="dt-menu-toggle-icon"></span>
										</div>
									</div>
								</div>


								<ul id="menu-main-menu" class="menu rounded">
									<li id="menu-item-3967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-has-children menu-item-depth-0 menu-item-simple-parent ">
										<a href="index.php" style="color: black; font-weight: bold;"><i class='menu-icon fa fa-home'></i>Accueil<span class="menu-item-description">Welcome</span></a>


									</li>




									<li id="menu-item-6086" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0 menu-item-megamenu-parent  megamenu-4-columns-group">
										<a href="Gallery.php" style="color: black; font-weight: bold"><i class='menu-icon fa fa-th'></i>Galerie<span class="menu-item-description">Best Visuals</span></a>

									</li>

									<li id="menu-item-4690" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-depth-0 menu-item-megamenu-parent  megamenu-3-columns-group">
										<a href="NotreBlog.php" style="color: black;font-weight: bold"><i class='menu-icon fa fa-book'></i>Notre Blog<span class="menu-item-description">What’s up</span></a>

									</li>

									<li id="menu-item-4690" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-depth-0 menu-item-megamenu-parent  megamenu-3-columns-group">
										<a href="PrenezRDV.php" style="color: black;font-weight: bold"><i class='menu-icon fa fa-book'></i>Prenez RDV<span class="menu-item-description">What’s up</span></a>

									</li>

									<li id="menu-item-4692" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-depth-0 menu-item-megamenu-parent  megamenu-3-columns-group">
										<a href="contact.php" style="color: black;font-weight: bold"><i class='menu-icon fa fa-rocket'></i>Contact<span class="menu-item-description">We Provide</span></a>

									</li>

								</ul>
							</nav><!-- **Navigation - End** -->
						</div>

					</div><!-- **Header Container End** -->

				</header><!-- **Header - End** -->

			</div>
			<!-- Header Wrapper -->

			<!-- **Main** -->
			<div id="main">
				<!-- **Slider Section** -->
				<section id="slider">
					<script data-cfasync="false" type="text/javascript">
						var lsjQuery = jQuery;
					</script>
					<script data-cfasync="false" type="text/javascript">
						lsjQuery(document).ready(function() {
							if (typeof lsjQuery.fn.layerSlider == "undefined") {
								if (window._layerSlider && window._layerSlider.showNotice) {
									window._layerSlider.showNotice('layerslider_1', 'jquery');
								}
							} else {
								lsjQuery("#layerslider_1").layerSlider({
									sliderVersion: '6.6.8',
									type: 'fullwidth',
									responsiveUnder: 1170,
									slideBGSize: 'auto',
									skin: 'v5',
									skinsPath: 'https://spalabdev.wpengine.com/wp-content/plugins/LayerSlider/static/layerslider/skins/'
								});
							}
						});
					</script>
					<div id="layerslider_1" class="ls-wp-container fitvidsignore" style="width:1000px;height:600px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
						<div class="ls-slide" data-ls="duration:10000;transition2d:4;kenburnsscale:1.2;">
							<img width="1920" height="600" src="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/bg3.jpg" class="ls-bg" alt="" loading="lazy" srcset="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/bg3.jpg 1920w, https://spalabdev.wpengine.com/wp-content/uploads/2018/02/bg3-300x94.jpg 300w, https://spalabdev.wpengine.com/wp-content/uploads/2018/02/bg3-768x240.jpg 768w, https://spalabdev.wpengine.com/wp-content/uploads/2018/02/bg3-1024x320.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px" />
							<img width="180" height="225" src="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/feather1.png" class="ls-l" alt="" loading="lazy" style="top:185px;left:427px;" data-ls="offsetxin:50;offsetyin:100;durationin:2000;delayin:1500;easingin:easeOutBack;offsetxout:50;easingout:easeInBack;parallax:true;parallaxlevel:1;">
							<img width="298" height="180" src="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/feather2.png" class="ls-l" alt="" loading="lazy" style="top:23px;left:356px;" data-ls="offsetxin:100;offsetyin:-150;durationin:6000;delayin:1500;easingin:easeOutBack;offsetxout:100;startatout:transitioninend + 7000;easingout:easeInBack;parallax:true;parallaxlevel:3;">
							<p style="font-weight: 500;font-family:'Raleway', 'Open Sans', sans-serif;font-size:40px;color:#ffffff;top:200px;left:0px;" class="ls-l" data-ls="durationin:2500;delayin:2000;rotateyin:90;transformoriginin:left 50% 0;durationout:400;rotateyout:-90;transformoriginout:left 50% 0;parallaxlevel:0;">
								Nadia Allam</p>

							<p style="font-family:'Raleway', Lato;font-size:16px;line-height:28px;color:#fff;top:273px;left:00px;" class="ls-l" data-ls="durationin:2000;delayin:3500;offsetxout:-80;durationout:400;parallaxlevel:0;">
								Après plus de 15 années d’expériences dans mon métier,<br /> à travers la passion et l’amour de rendre
								les femmes toujours plus belles,<br /> je décide de créer mon lieu en privé pour une pause,<br /> une parenthèse de bien-être
								et de luxe…</p><img width="768" height="685" src="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/woman2.png" class="ls-l" alt="" loading="lazy" srcset="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/woman2.png 768w, https://spalabdev.wpengine.com/wp-content/uploads/2018/02/woman2-300x268.png 300w" sizes="(max-width: 768px) 100vw, 768px" style="top:-84px;left:401px;" data-ls="offsetxin:80;offsetxout:-80;durationout:400;parallaxlevel:0;"><img width="167" height="197" src="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/feather3.png" class="ls-l" alt="" loading="lazy" style="top:13px;left:977px;" data-ls="offsetxin:50;offsetyin:100;durationin:2000;delayin:2500;easingin:easeOutBack;offsetxout:50;easingout:easeInBack;parallax:true;parallaxlevel:1;"><img width="133" height="117" src="https://spalabdev.wpengine.com/wp-content/uploads/2018/02/feather4.png" class="ls-l" alt="" loading="lazy" style="top:230px;left:973px;" data-ls="offsetxin:100;offsetyin:-150;durationin:6000;delayin:1500;easingin:easeOutBack;offsetxout:100;startatout:transitioninend + 7000;easingout:easeInBack;parallax:true;parallaxlevel:3;">
						</div>


					</div>

				</section><!-- **Slider Section - End** -->


				<!-- ** Primary Section ** -->
				<section id="primary" class="content-full-width">
					<!-- #post-7 -->
					<div id="post-7" class="post-7 page type-page status-publish hentry">
						<div class='fullwidth-section  ' style="background-repeat:no-repeat;background-position:left top;padding-top:60px;padding-bottom:30px;">
							<div class="fullwidth-bg">
								<center>
									<div class="container">
										<div class='border-title '>
											<h2>Bienvenue dans votre centre de beauté</h2>
											<div class='ico-border'> <i class='ico-bg flower'></i> </div>
											<span class="tag-line">Experience the Art of Caring</span>
										</div>

										<div class="row ">
											<div class="col-md-4 col-12 p-3">
												<div class=' dt-sc-one-fourth   '>
													<div class='dt-sc-ico-content  type6'>
														<div class='icon'> <span class='ico-pic'> <a href='https://www.google.co.in/' target=''> <img src='https://spalabdev.wpengine.com/wp-content/uploads/2018/02/ico-pic1.jpg' alt='' title=''> </a> </span> </div>
														<h3><a href='https://www.google.co.in/' target=''> Spa &amp; Massage </a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-12 p-3">
												<div class=' dt-sc-one-fourth  '>
													<div class='dt-sc-ico-content  type6'>
														<div class='icon'> <span class='ico-pic'> <a href='https://www.google.co.in/' target=''> <img src='https://spalabdev.wpengine.com/wp-content/uploads/2018/02/ico-pic2.jpg' alt='' title=''> </a> </span> </div>
														<h3><a href='https://www.google.co.in/' target=''> Cheveux &amp; Beauté </a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-12 p-3">

												<div class=' dt-sc-one-fourth  '>
													<div class='dt-sc-ico-content  type6'>
														<div class='icon'> <span class='ico-pic'> <a href='https://www.google.co.in/' target=''> <img src='assets/img/makup.PNG' alt='' title=''> </a> </span> </div>
														<h3><a href='https://www.google.co.in/' target=''> Make up </a>
														</h3>
													</div>
												</div>
											</div>
										</div>




									</div>
								</center>
							</div>
						</div>
						<div class='dt-sc-hr-invisible  '></div>
						<div class="dt-sc-clear"></div>
						<div class='fullwidth-section skin-bg dark-bg gradient-bg ' style="background-repeat:no-repeat;background-position:left top;padding-top:90px;padding-bottom:110px;">
							<div class="fullwidth-bg">
								<div class="container">
									<div class='border-title '>

										<div class="row">
											<div class="col-md-4 col-12 p-3">
												<h2>Nous sommes spécialiste cheveux</h2>
												<div class='ico-border'> <i class='ico-bg flower'></i> </div>
												<span class="tag-line">Vos cheveux méritent le meilleur soin. </span>
												<span class="tag-line">Trouvez enfin votre soin parfait grâce à un savoir-faire sur mesure. </span>
												<span class="tag-line">garanti sans jamais les abîmer. </span>

											</div>

											<div class="col-md-4 col-12 p-3">

												<h2>Le diagnostic </h2>
												<div class='ico-border' style="margin-top: 30px;"> <i class='ico-bg flower'></i> </div>
												<span class="tag-line">Parce que nous serons toujours transparents et bienveillants envers vous, nos coiffeurs examinent la nature
													et les besoins de vos cheveux pour créer le soin et la couleur qui vous ira parfaitement. Nous nous engageons
													à respecter vos désirs tout en vous conseillant le mieux possible.C’est ça la confiance d’aller chez
													son coiffeur les yeux fermés. </span>

											</div>

											<div class="col-md-4 col-12 p-3">


												<h2>Le soin sur mesure </h2>
												<div class='ico-border' style="margin-top: 30px;"> <i class='ico-bg flower'></i> </div>
												<span class="tag-line">Parce que chaque type de cheveux est unique, la préparation de votre soinne s’invente pas. C’est un mélange,
													fait-minute et pesé au gramme près, pour obtenir Le soin parfait qui convient à vous seule.
													Nos formules sont toujours douces et naturelles pour ne jamais fragiliser vos cheveux inutilement.
													Votre garantie : Un cheveu protégé et des soins qui durent longtemps </span>


											</div>
										</div>



									</div>


								</div>
							</div>
						</div>
						<div class='dt-sc-hr-invisible-small  '></div>
						<div class="dt-sc-clear"></div>


						<div class='dt-sc-hr-invisible  '></div>
						<div class="dt-sc-clear"></div>
						<div class='fullwidth-section  ' style="background-color:#ffff;background-repeat:no-repeat;background-position:left top;padding-top:30px;padding-bottom:30px;">
							<div class="fullwidth-bg">
								<div class="container">
									<div class='border-title '>
										<h2>Nos clientes satisfaites</h2>
										<div class='ico-border'> <i class='ico-bg flower'></i> </div>
										<span class="tag-line">Votre satisfaction est notre priorité</span>
									</div>
									<div class='column dt-sc-one-third  first'>
										<div class='dt-sc-team '>
											<div class='image'><img src='https://spalabdev.wpengine.com/wp-content/uploads/2014/08/team1.jpg' alt='Please specify image url' title='Please specify image url' />
											</div>
											<div class="team-details">
												<h4>Amrani karima</h4><span>J'ai essayé beaucoup de salons de coiffure dont de grandes enseignes très connues très chères et vraiment je n'ai jamais été aussi satisfaite qu'avec le salon NEFERTITI beautycenter</span><span class="ico-border"> <i class="ico-bg flower"></i></span>

											</div>
										</div>
									</div>
									<div class='column dt-sc-one-third  '>
										<div class='dt-sc-team '>
											<div class='image'><img src='https://spalabdev.wpengine.com/wp-content/uploads/2014/08/team2.jpg' alt='Please specify image url' title='Please specify image url' />
											</div>
											<div class="team-details">
												<h4>Salwa amar</h4><span>Équipe accueillante, à l’écoute, aux petits soins pour la clientèle et très professionnelle. Expérience très réussie et à renouveler les yeux fermés.</span><span class="ico-border"> <i class="ico-bg flower"></i></span>

											</div>
										</div>
									</div>
									<div class='column dt-sc-one-third  '>
										<div class='dt-sc-team '>
											<div class='image'><img src='https://spalabdev.wpengine.com/wp-content/uploads/2014/08/team3.jpg' alt='Please specify image url' title='Please specify image url' />
											</div>
											<div class="team-details">
												<h4>Sana najmi</h4><span>De vrais professionnels ! Venues à trois pour un mariage, ils ont su écouter nos demandes, proposer leurs points de vue professionnels et respecter l'horaire</span><span class="ico-border"> <i class="ico-bg flower"></i></span>


											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class='dt-sc-hr-invisible  '></div>
						<div class="dt-sc-clear"></div>

						<div class='fullwidth-section skin-bg dark-bg parallax-section dt-sc-parallax-section' style="background-image:url(https://spalabdev.wpengine.com/wp-content/uploads/2014/05/floral-bg-parallax.jpg);background-repeat:no-repeat;background-position:left top;background-attachment:fixed; ">
							<div class="fullwidth-bg">
								<div class="container">
									<div class='dt-sc-hr-invisible-medium  '></div>
									<div class="dt-sc-clear"></div>
									<div class='column dt-sc-one-fourth  first'>
										<div class="dt-sc-counter" data-counter="1700">
											<div class="dt-sc-counter-number"> 1700 </div>
											<h5> Clients <span> </span></h5>
										</div>
									</div>
									<div class='column dt-sc-one-fourth  '>
										<div class="dt-sc-counter" data-counter="700">
											<div class="dt-sc-counter-number"> 700 </div>
											<h5> diagnostics <span> </span></h5>
										</div>
									</div>
									<div class='column dt-sc-one-fourth  '>
										<div class="dt-sc-counter" data-counter="987">
											<div class="dt-sc-counter-number"> 987 </div>
											<h5> Soins <span> </span></h5>
										</div>
									</div>
									<div class='column dt-sc-one-fourth  '>
										<div class="dt-sc-counter" data-counter="120">
											<div class="dt-sc-counter-number"> 120 </div>
											<h5> Traitements <span> </span></h5>
										</div>
									</div>
									<div class='dt-sc-hr-invisible-medium  '></div>
									<div class="dt-sc-clear"></div>
								</div>
							</div>
						</div>


						<div class='dt-sc-hr-invisible  '></div>
						<div class="dt-sc-clear"></div>
						<div class='fullwidth-section  ' style="background-repeat:no-repeat;background-position:left top;padding-top:30px;padding-bottom:120px;">
							<div class="fullwidth-bg">
								<div class="container">
									<div class='border-title '>
										<h2>Nos promotions</h2>
										<div class='ico-border'> <i class='ico-bg flower'></i> </div>
										<span class="tag-line">Sélectionnez la meilleure offre & package ici</span>
									</div>
									<div class='dt-sc-pricing-table space type2'>
										<div class='column dt-sc-one-fourth  first'>
											<div class='dt-sc-pr-tb-col '>
												<div class="dt-sc-tb-header">
													<div class="dt-sc-tb-thumb"><img src="assets/img/packSoin.PNG" alt="thumb" />
														<div class="dt-sc-tb-title">
															<h5>PACK SOIN </h5>
														</div>
													</div>
												</div>
												<div class="dt-sc-tb-body">
													<div class="dt-sc-price-wrapper">
														<div class='dt-sc-price'> <span class='ico-border'> <i class='ico-bg flower'></i></span> 999 <span>
																Dh</span> </div>
													</div>
													<ul class="dt-sc-tb-content">
														<li>TANINO BRAZILIAN OILS </li>
														<li>COUPE </li>
														<li>MANICURE</li>

													</ul>
													<div class="dt-sc-buy-now"><a href='reservation.php' target="" class='dt-sc-button     small  '>Prenez RDV</a></div>
												</div>
											</div>
										</div>
										<div class='column dt-sc-one-fourth  '>
											<div class='dt-sc-pr-tb-col selected'>
												<div class="dt-sc-tb-header">
													<div class="dt-sc-tb-thumb"><img src="https://spalabdev.wpengine.com/wp-content/uploads/2014/07/pricing2.jpg" alt="thumb" />
														<div class="dt-sc-tb-title">
															<h5>PACK COLORATION </h5>
														</div>
													</div>
												</div>
												<div class="dt-sc-tb-body">
													<div class="dt-sc-price-wrapper">
														<div class='dt-sc-price'> <span class='ico-border'> <i class='ico-bg flower'></i></span> 390 <span>
																Dh</span> </div>
													</div>
													<ul class="dt-sc-tb-content">
														<li>COLORATION</li>
														<li>SOIN</li>
														<li>MANICURE </li>
														<li>PEDICURE</li>
													</ul>
													<div class="dt-sc-buy-now"><a href='reservation.php' target="" class='dt-sc-button     small  '>Prenez RDV</a></div>
												</div>
											</div>
										</div>
										<div class='column dt-sc-one-fourth  '>
											<div class='dt-sc-pr-tb-col '>
												<div class="dt-sc-tb-header">
													<div class="dt-sc-tb-thumb"><img src="https://spalabdev.wpengine.com/wp-content/uploads/2014/07/pricing1.jpg" alt="thumb" />
														<div class="dt-sc-tb-title">
															<h5>PACK HAMMAM </h5>
														</div>
													</div>
												</div>
												<div class="dt-sc-tb-body">
													<div class="dt-sc-price-wrapper">
														<div class='dt-sc-price'> <span class='ico-border'> <i class='ico-bg flower'></i></span>315 <span>
																Dh</span> </div>
													</div>
													<ul class="dt-sc-tb-content">
														<li>GOMMAGE</li>
														<li>SAVONAGE</li>
														<li>CIRE COMPLÈTE</li>

													</ul>
													<div class="dt-sc-buy-now"><a href='reservation.php' target="" class='dt-sc-button     small  '>Prenez RDV</a></div>
												</div>
											</div>
										</div>
										<div class='column dt-sc-one-fourth  '>
											<div class='dt-sc-pr-tb-col '>
												<div class="dt-sc-tb-header">
													<div class="dt-sc-tb-thumb"><img src="assets/img/packMakeUp.PNG" alt="thumb" />
														<div class="dt-sc-tb-title">
															<h5>PACK MAKE UP
															</h5>
														</div>
													</div>
												</div>
												<div class="dt-sc-tb-body">
													<div class="dt-sc-price-wrapper">
														<div class='dt-sc-price'> <span class='ico-border'> <i class='ico-bg flower'></i></span> 1400 <span>
																Dh</span> </div>
													</div>
													<ul class="dt-sc-tb-content">
														<li>MICROBLADING
														</li>
														<li>SOIN VISAGE
														</li>
														<li>CIRE DUVET</li>

													</ul>
													<div class="dt-sc-buy-now"><a href='reservation.php' target="" class='dt-sc-button     small  '>Prenez RDV</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class='fullwidth-section skin-bg dark-bg gradient-bg ' style="background-repeat:no-repeat;background-position:left top;padding-top:80px;padding-bottom:50px;">
							<div class="fullwidth-bg">
								<div class="container">
									<div class='border-title '>
										<h2>Blog</h2>
										<div class='ico-border'> <i class='ico-bg flower'></i> </div>
										<span class="tag-line">On partage nos stories et expériences</span>
									</div>
									<div class='column dt-sc-one-half first'>
										<article class='postid- 26 author- admin format- blog-entry'>
											<div class="blog-entry-inner">
												<div class="entry-meta"> <a href='https://spalabdev.wpengine.com/invest-in-a-healthy-tomorrow/' class='entry_format'></a>
													<div class="date">
														<p>May 21 <span> 2014</span></p>
													</div> <a href='https://spalabdev.wpengine.com/invest-in-a-healthy-tomorrow/#comments' class='comments'><span class='fa fa-comment'> </span> 2</a>
												</div>
												<div class="entry-thumb"><a href='https://spalabdev.wpengine.com/invest-in-a-healthy-tomorrow/'><img width="1170" height="660" src="https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog18.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog18.jpg 1170w, https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog18-300x169.jpg 300w, https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog18-1024x577.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px" /></a>
													<div class="entry-thumb-desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
															Etiam id augue vitae odio accumsan condimentum id in urna.
															Integer sit amet felis sit amet magna&hellip;</p>
													</div>
												</div>
												<div class="entry-details">
													<div class="entry-title">
														<h4><a href="https://spalabdev.wpengine.com/invest-in-a-healthy-tomorrow/">Invest
																in a Healthy Tomorrow</a></h4>
													</div>
													<div class="entry-metadata">
														<p class='author'><span class='fa fa-user'> </span><a href='https://spalabdev.wpengine.com/author/admin/'>admin</a>
														</p>
														<p class="tags"><span class="fa fa-tags"> </span><a href="https://spalabdev.wpengine.com/tag/relax/" rel="tag">relax</a></p>
														<p class="categories"><span class="fa fa-folder-open"> </span><a href="https://spalabdev.wpengine.com/invest-in-a-healthy-tomorrow/">wellness-center</a>
														</p>
													</div><!-- .entry-metadata -->
												</div>
											</div>
										</article>
									</div>
									<div class='column dt-sc-one-half'>
										<article class='postid- 3848 author- admin format-link blog-entry'>
											<div class="blog-entry-inner">
												<div class="entry-meta"> <a href='https://spalabdev.wpengine.com/the-latest-spa-craze/' class='entry_format'></a>
													<div class="date">
														<p>May 21 <span> 2014</span></p>
													</div> <a href='https://spalabdev.wpengine.com/the-latest-spa-craze/#respond' class='comments'><span class='fa fa-comment'> </span> 0</a>
												</div>
												<div class="entry-thumb"><a href='https://spalabdev.wpengine.com/the-latest-spa-craze/'><img width="1170" height="660" src="https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog.jpg 1170w, https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog-300x169.jpg 300w, https://spalabdev.wpengine.com/wp-content/uploads/2014/07/blog-1024x577.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px" /></a>
													<div class="entry-thumb-desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
															Etiam id augue vitae odio accumsan condimentum id in urna.
															Integer sit amet felis sit amet magna&hellip;</p>
													</div>
												</div>
												<div class="entry-details">
													<div class="entry-title">
														<h4><a href="https://spalabdev.wpengine.com/the-latest-spa-craze/">The
																Latest Spa Craze</a></h4>
													</div>
													<div class="entry-metadata">
														<p class='author'><span class='fa fa-user'> </span><a href='https://spalabdev.wpengine.com/author/admin/'>admin</a>
														</p>
														<p class="tags"><span class="fa fa-tags"> </span><a href="https://spalabdev.wpengine.com/tag/body-care/" rel="tag">Body-care</a></p>
														<p class="categories"><span class="fa fa-folder-open"> </span><a href="https://spalabdev.wpengine.com/the-latest-spa-craze/">Cuisine</a>
														</p>
													</div><!-- .entry-metadata -->
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>

					</div><!-- #post-3848 -->

				</section><!-- ** Primary Section End ** -->
			</div><!-- **Main - End** -->




			<!-- **Footer** -->
			<footer id="footer">
				<div class="footer-logo"> <img class="normal_logo" src="assets/img/logo.PNG" alt="Footer Logo" title="Footer Logo">
					<img class="retina_logo" src="https://spalabdev.wpengine.com/wp-content/themes/spalab/images/footer-top-logo@2x.png" alt="spa lab" title="spa lab" style="width:66px; height:33px;" />
				</div>
				<div class="container">
					<div class='dt-sc-hr-invisible  '></div>
					<div class="dt-sc-clear"></div>
					<div class="ico-border"> <i class="ico-bg flower"></i> </div>
					<div class='dt-sc-hr-invisible  '></div>
					<div class="dt-sc-clear"></div>
					<div class='column dt-sc-one-fourth first'>
						<aside id="text-2" class="widget widget_text">
							<h3 class="widgettitle">Nefertiti beauty center<i class="ico-bg flower"></i></h3>
							<div class="textwidget">
								<p class="dt-sc-contact-info address"><i class="fa fa-location-arrow"></i><span>Nefertiti beauty center<br>05227-84142<br>105, Lotissement communale - Sidi Maarouf (0,53 km)<br>20500 Casablanca, Maroc</span></p>

								<p class="dt-sc-contact-info"> <i class="fa fa-envelope"></i> <a href="#" title="">centernefertiti@gmail.com</a></p>

								<div class="dt-sc-clear"></div>

								<a class="dt-sc-button large" href="PrenezRDV.php" title=""> Prenez un rendez vous</a>
							</div>
						</aside>
					</div>
					<div class='column dt-sc-one-fourth '>
						<aside id="my_portfolio_widget-13" class="widget widget_popular_entries">
							<h3 class="widgettitle">Notre Galerie<i class="ico-bg flower"></i></h3>
							<div class='recent-portfolio-widget'>
								<ul>
									<li><a href='https://spalabdev.wpengine.com/dt_portfolios/etiam-sit-amet-sa/' class='thumb'><img src='https://spalabdev.wpengine.com/wp-content/uploads/2015/11/dt-gallery2.jpg' alt='Etiam sit amet sa' /></a>
										<h6><a href='https://spalabdev.wpengine.com/dt_portfolios/etiam-sit-amet-sa/'>Etiam
												sit amet sa</a></h6>
										<p>Lorem Ipsum is simply dummy text of the printing andtypesetting...</p>
									</li>
									<li><a href='https://spalabdev.wpengine.com/dt_portfolios/donec-vitae-mi-sed-nunc/' class='thumb'><img src='https://spalabdev.wpengine.com/wp-content/uploads/2015/11/dt-gallery11.jpg' alt='Donec vitae mi ...' /></a>
										<h6><a href='https://spalabdev.wpengine.com/dt_portfolios/donec-vitae-mi-sed-nunc/'>Donec
												vitae mi ...</a></h6>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting...</p>
									</li>
								</ul>
							</div>
						</aside>
					</div>
					<div class='column dt-sc-one-fourth '>
						<aside id="text-4" class="widget widget_text">
							<h3 class="widgettitle">Trouvez nous<i class="ico-bg flower"></i></h3>
							<div class="textwidget">
								<ul class='dt-sc-social-icons '>
									<li class='flickr'><a href='https://www.instagram.com/nefertiti_beautycenter/' target='_blank' rel="noopener"><img src='assets/img/insta.png' alt='flickr.png' /><img src='assets/img/insta.png' alt='flickr.png' /> </a></li>


									<li class='facebook@2x'><a href='https://web.facebook.com/NefertitiStars/?_rdc=1&_rdr' target='_blank' rel="noopener"><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/sociable/hover/facebook@2x.png' alt='facebook@2x.png' /><img src='https://spalabdev.wpengine.com/wp-content/themes/spalab/images/sociable/facebook@2x.png' alt='facebook@2x.png' /> </a></li>
								</ul>

							</div>
						</aside>
					</div>
					<div class='column dt-sc-one-fourth '>
						<aside id="text-5" class="widget widget_text">
							<h3 class="widgettitle">Nouvelles et promotions<i class="ico-bg flower"></i></h3>
							<div class="textwidget">


								<div class="hr-invisible-very-small"></div>
								<div class="dt-sc-clear"></div>

								<div class="promo-details">
									<p>Special offers - 15% offer on Spa</p>
									<a href="#">Read More....</a>
								</div>
							</div>
						</aside>
					</div>
				</div>


			</footer>
			<!-- **Footer - End** -->
		</div><!-- **Inner Wrapper - End** -->


	</div><!-- **Wrapper - End** -->

	<link rel='stylesheet' id='layerslider-font-awesome-css' href='https://spalabdev.wpengine.com/wp-content/plugins/LayerSlider/static/font-awesome/css/font-awesome.min.css?ver=6.6.8' type='text/css' media='all' />
	<div id="aioseo-admin"></div>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/inview.js?ver=5.6' id='dt-sc-inview-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js?ver=5.6' id='dt-sc-tabs-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.viewport.js?ver=5.6' id='dt-sc-viewport-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.carouFredSel-6.2.1-packed.js?ver=5.6' id='dt-sc-carouFredSel-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js?ver=5.6' id='dt-sc-tipTip-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js?ver=5.6' id='dt-sc-donutchart-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/countTo.js?ver=5.6' id='dt-sc-countTo-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.parallax-1.1.3.js?ver=5.6' id='dt-sc-parallax-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.touchSwipe.min.js?ver=5.6' id='dt-sc-touchswipemin-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/shortcodes/js/shortcodes.js?ver=5.6' id='dt-sc-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/page-builder/js/jquery.inview.js?ver=5.6' id='dt-inviewjs-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-core-features/page-builder/js/custom-public.js?ver=5.6' id='dt-custompublicjs-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0' id='jquery-selectBox-js'></script>
	<script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
		/* <![CDATA[ */
		var yith_wcwl_l10n = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"redirect_to_cart": "no",
			"multi_wishlist": "",
			"hide_add_button": "1",
			"is_user_logged_in": "",
			"ajax_loader_url": "https:\/\/spalabdev.wpengine.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
			"remove_from_wishlist_after_add_to_cart": "yes",
			"labels": {
				"cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
				"added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
			},
			"actions": {
				"add_to_wishlist_action": "add_to_wishlist",
				"remove_from_wishlist_action": "remove_from_wishlist",
				"move_to_another_wishlist_action": "move_to_another_wishlsit",
				"reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
			}
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.2.7' id='jquery-yith-wcwl-js'></script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = {
			"apiSettings": {
				"root": "https:\/\/spalabdev.wpengine.com\/wp-json\/contact-form-7\/v1",
				"namespace": "contact-form-7\/v1"
			},
			"cached": "1"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.7' id='contact-form-7-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/designthemes-fb-pixel/script.js?ver=5.6' id='dt-fbpixel-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
	<script type='text/javascript' id='wc-add-to-cart-js-extra'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
			"i18n_view_cart": "View cart",
			"cart_url": "https:\/\/spalabdev.wpengine.com\/cart\/",
			"is_cart": "",
			"cart_redirect_after_add": "no"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.5.3' id='wc-add-to-cart-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
	<script type='text/javascript' id='woocommerce-js-extra'>
		/* <![CDATA[ */
		var woocommerce_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.3' id='woocommerce-js'></script>
	<script type='text/javascript' id='wc-cart-fragments-js-extra'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
			"cart_hash_key": "wc_cart_hash_14a7f7a689b003344299452cafe1a1cd",
			"fragment_name": "wc_fragments_14a7f7a689b003344299452cafe1a1cd"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.5.3' id='wc-cart-fragments-js'></script>
	<script type='text/javascript' src='//spalabdev.wpengine.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/retina.js?ver=5.6' id='retina-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.ui.totop.min.js?ver=5.6' id='ui-totop-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/easing.js?ver=5.6' id='easing-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.smartresize.js?ver=5.6' id='smartresize-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.nicescroll.min.js?ver=5.6' id='nicescroll-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery-smoothscroll.js?ver=5.6' id='jq.smooth-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.sticky.js?ver=5.6' id='sticky-nav-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.isotope.min.js?ver=5.6' id='isotope-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.fitvids.js?ver=5.6' id='fitvids-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.bxslider.js?ver=5.6' id='bx-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/enable-jquery-migrate-helper/js/jquery-ui/core.min.js?ver=1.11.4-wp' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/plugins/enable-jquery-migrate-helper/js/jquery-ui/datepicker.min.js?ver=1.11.4-wp' id='jquery-ui-datepicker-js'></script>
	<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
		jQuery(document).ready(function(jQuery) {
			jQuery.datepicker.setDefaults({
				"closeText": "Close",
				"currentText": "Today",
				"monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
				"monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				"nextText": "Next",
				"prevText": "Previous",
				"dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
				"dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
				"dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
				"dateFormat": "MM d, yy",
				"firstDay": 1,
				"isRTL": false
			});
		});
	</script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/reservation.js?ver=2014-03-18' id='mgs-reservation-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/jquery.cookie.js?ver=5.6' id='theme-cookies-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/picker.js?ver=5.6' id='theme-picker-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/custom.js?ver=5.6' id='custom-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/stickyMojo.js?ver=5.6' id='stickymojo-script-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-content/themes/spalab/framework/js/public/stickyfloat.js?ver=5.6' id='stickyfloat-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-includes/js/wp-embed.min.js?ver=5.6' id='wp-embed-js'></script>
	<script type='text/javascript' src='https://spalabdev.wpengine.com/wp-includes/js/comment-reply.min.js?ver=5.6' id='comment-reply-js'></script>

	<script type="text/javascript">
		(function() {
			var fbq = (function() {
				function fbq() {
					if (arguments.length > 0) {
						var action, pixel_id, type_track, content_obj;

						if (typeof arguments[0] == "string") action = arguments[0];
						if (typeof arguments[1] == "string") pixel_id = arguments[1];
						if (typeof arguments[2] == "string") type_track = arguments[2];
						if (typeof arguments[3] == "object") content_obj = arguments[3];

						var params = [];
						if (typeof action == "string" && action.replace(/\s+/gi, "") != "" &&
							typeof pixel_id == "string" && pixel_id.replace(/\s+/gi, "") != "" &&
							typeof type_track == "string" && type_track.replace(/\s+/gi, "")) {

							params.push("id=" + encodeURIComponent(pixel_id));
							switch (type_track) {
								case "PageView":
								case "ViewContent":
								case "Search":
								case "AddToCart":
								case "InitiateCheckout":
								case "AddPaymentInfo":
								case "Lead":
								case "CompleteRegistration":
								case "Purchase":
								case "AddToWishlist":
									params.push("ev=" + encodeURIComponent(type_track));
									break;
								default:
									return;
							}

							params.push("dl=" + encodeURIComponent(document.location.href));
							params.push("rl=" + encodeURIComponent(document.referrer));
							params.push("if=false");
							params.push("ts=" + new Date().getTime());

							if (typeof content_obj == "object") {
								for (var u in content_obj) {
									if (typeof content_obj[u] == "object" && content_obj[u] instanceof Array) {
										if (content_obj[u].length > 0) {
											for (var y = 0; y < content_obj[u].length; y++) {
												content_obj[u][y] = (content_obj[u][y] + "").replace(/^\s+|\s+$/gi, "").replace(/\s+/gi, " ").replace(/,/gi, "§");
											}
											params.push("cd[" + u + "]=" + encodeURIComponent(content_obj[u].join(",").replace(/^/gi, "[\"").replace(/$/gi, "\"]").replace(/,/gi, "\",\"").replace(/§/gi, "\,")));
										}
									} else if (typeof content_obj[u] == "string")
										params.push("cd[" + u + "]=" + encodeURIComponent(content_obj[u]));
								}
							}

							params.push("v=" + encodeURIComponent("2.5.0"));

							if (typeof window.jQuery == "function") {
								var iframe_id = new Date().getTime();
								jQuery("body").append("<img height='1' width='1' style='display:none;width:1px;height:1px;' id='fb_" + iframe_id + "' src='https://www.facebook.com/tr/?" + params.join("&") + "' />");
								setTimeout(function() {
									jQuery("#fb_" + iframe_id).remove();
								}, 1000);
							}
						}
					}
				}

				return fbq;
			});

			window.fbq = new fbq();
		})();
	</script>
	<script>
		fbq('track', '361651201648926', 'PageView');
		fbq('track', '933175913837538', 'PageView');
		fbq('track', '968705806982822', 'PageView');
		//fbq('track', '<FIRST_PIXEL_ID>', 'Purchase', {value: 79.9, currency: 'BRL'});
		//fbq('track', '<SECOND_PIXEL_ID>', 'Purchase', {value: 89.9, currency: 'BRL'});
	</script>

</body>

</html>