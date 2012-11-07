<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>The Inspiration List | Design Inspiration</title>
  <meta name="description" content="Inspiring websites from leading creatives. Bookmarks for the best in print, digital, illustration and logo design websites. Beauty, compiled.">

  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Facebook/OG Meta Data -->
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="The Inspiration List"/>
	<meta property="og:title" content="The Inspiration List"/>
	<meta property="og:description" content="Inspiring websites from leading creatives. Bookmarks for the best in print, digital, illustration and logo design websites. Beauty, compiled."/>
	<meta property="og:url" content="<?=bloginfo('url');?>"/>
	<meta property="og:image" content="<?=bloginfo('template_url');?>/img/logo-fb-landscape.png"/>
	<meta property="fb:app_id" content="375117879214862"/>

	<meta name="google-site-verification" content="6cIR2aDdOGyamcwzwCZ3U4xnfjAvtulGxzP-wAFaRVk" />
	
	<!-- Add fancyBox main CSS files -->
	<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url');?>/js/libs/fancybox/jquery.fancybox.css?v=2.0.6" media="screen" />
	
	<!-- Add site styles after fancybox because we override it in base -->
  	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/css/style.css?v=1.7.4">

  <script src="<?=bloginfo('template_url');?>/js/libs/modernizr-2.5.3.min.js"></script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=375117879214862";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header class="page-header">

		<h1><a class="ir" href="<?=bloginfo('url');?>">The Inspiration List</a></h1>

		<p class="strapline">Beauty, compiled.</p>
				
		<div class="nav-section">
			<ul class="<? if (is_home()) echo 'isotope-filter'; ?>">
				<li class="<? if (is_home()) echo 'current-cat'; ?>"><a data-filter="all" href="<?=bloginfo('url');?>">all</a></li>
				<? wp_list_categories( array('title_li' => '', 'hide_empty' => 0,) ); ?>
			</ul>
		</div>
		
		<div class="nav-section">
			<ul class="isotope-sort">
<!--
				<li><a href="">latest</a></li>
				<li><a href="">a-z</a></li>
-->
				<li class="iso-shuffle"><a href="">shuffle</a></li>
			</ul>
		</div>

<!-- 		<input type="text" class="search" placeholder="search" /> -->


		<div class="nav-bottom">
			
			<div class="clearfix">

				<div class="fb-like" data-href="http://www.theinspirationlist.com" data-send="false" data-layout="box_count" data-width="70" data-show-faces="false"></div>

				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_floating_style addthis_counter_style">
				<a class="addthis_button_tweet" tw:count="vertical" tw:text="Inspiring websites from leading creatives. Follow @inspirationlist for updates."></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4fda2882517c7e4f"></script>
				<!-- AddThis Button END -->
			
			</div>

			<a class="submit" href="#suggestion">submit inspiration site</a>

		</div>
		
	</header>

	<div class="twitter">
		<a href="http://twitter.com/#!/inspirationlist" class="expandable-tab ir">Twitter</a>
		<div class="twitter-content">
			<a href="http://twitter.com/#!/inspirationlist" target="_blank">@inspirationlist</a>
		</div>
	</div>		
	
