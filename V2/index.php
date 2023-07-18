<!doctype html>
<html>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-title" content="Critical Chicken">
<meta name="application-name" content="Critical Chicken">
<meta name="msapplication-TileColor" content="#d20202">
<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/manifest/browserconfig.xml">
<meta name="theme-color" content="#d20202">
<meta name="robots" content="noindex"><!-- REMOVE THIS LINE BEFORE LAUNCHING -->
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" type="text/css">
<?php if(current_user_can('edit_posts')): ?><link href="<?php echo get_template_directory_uri(); ?>/css/admin.css" rel="stylesheet" type="text/css" /><?php endif; ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/manifest/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/manifest/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/manifest/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/manifest/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/manifest/safari-pinned-tab.svg" color="#d20202">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/manifest/favicon.ico">
<title>Critical Chicken - Video game news, features, and reviews #ForTheGaymers</title>
<?php wp_head(); ?>
</head>

<body>
	<a name="top"></a>
	<div id="container">
		<div id="header-outer">
			<div id="header-inner">
				<a href="<?php echo get_site_url(); ?>" title="Home"><img src="<?php echo get_template_directory_uri(); ?>/img/branding_logo_color-on-white_for64px.png" alt="Critical Chicken" height="64"></a>
			</div><!-- /header-inner -->
		</div><!-- /header-outer -->
		<div id="menu-outer">
			<div id="menu-inner">
				<ul id="bold-menu-items">
					<li><a href="<?php echo get_site_url(); ?>/latest">Latest</a></li>
					<li><a href="<?php echo get_site_url(); ?>/category/news">News</a></li>
					<li><a href="<?php echo get_site_url(); ?>/category/features">Features</a></li>
					<li><a href="<?php echo get_site_url(); ?>/category/reviews">Reviews</a></li>
					<li><a href="#">Summer Game Fest</a></li>
					<li><a href="<?php echo get_site_url(); ?>/explore">Explore</a></li>
				</ul><!-- /bold-menu-items -->
				<ul id="regular-menu-items">
					<li><a href="<?php echo get_site_url(); ?>/radar">Radar</a></li>
					<li><a href="<?php echo get_site_url(); ?>/about">About</a></li>
					<li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
				</ul><!-- /regular-menu-items -->
				<a href="#" title="Search"><img src="<?php echo get_template_directory_uri(); ?>/img/ui_search_white-on-black_for20px.png" alt="Search" height="16"></a>
			</div><!-- /menu-inner -->
		</div><!-- /menu-outer -->
		<?php $ticker_checker = get_option('ticker_display'); if($ticker_checker == "on") { ?>
			<div id="ticker-outer">
				<div id="ticker-titletag">
					<span class="titletag titletag-<?php echo get_option('ticker_titletag_special'); ?>"><?php echo get_option('ticker_titletag_text'); ?></span>
				</div><!-- /ticker-titletag -->
				<div id="ticker-inner">
					<ul id="ticker-contents">
						<?php
							$item1 = get_option('ticker_item1');
							$item2 = get_option('ticker_item2');
							$item3 = get_option('ticker_item3');
							$item4 = get_option('ticker_item4');
							$item5 = get_option('ticker_item5');
							$item6 = get_option('ticker_item6');
							$item7 = get_option('ticker_item7');
							$item8 = get_option('ticker_item8');
							$item9 = get_option('ticker_item9');
							$item10 = get_option('ticker_item10');

							if(!$item1 == "") { echo "<li>" . $item1 . "</li>"; }
							if(!$item2 == "") { echo "<li>" . $item2 . "</li>"; }
							if(!$item3 == "") { echo "<li>" . $item3 . "</li>"; }
							if(!$item4 == "") { echo "<li>" . $item4 . "</li>"; }
							if(!$item5 == "") { echo "<li>" . $item5 . "</li>"; }
							if(!$item6 == "") { echo "<li>" . $item6 . "</li>"; }
							if(!$item7 == "") { echo "<li>" . $item7 . "</li>"; }
							if(!$item8 == "") { echo "<li>" . $item8 . "</li>"; }
							if(!$item9 == "") { echo "<li>" . $item9 . "</li>"; }
							if(!$item10 == "") { echo "<li>" . $item10 . "</li>"; }
						?>
					</ul><!-- /ticker-contents -->
				</div><!-- /ticker-inner -->
				<?php $ticker_link_checker = get_option('ticker_link'); if(!$ticker_link_checker == "") { ?><div id="ticker-link">
					<a href="<?php echo get_option('ticker_link'); ?>" title="Read more">Read more</a>
				</div><!-- /ticker-link --><?php } ?>
			</div><!-- /ticker-outer -->
		<?php } ?>
		<div id="jumbotron-outer" class="<?php echo get_option('jumbotron_color_field'); ?>">
			<div class="bg"></div>
			<div class="bg bg2"></div>
			<div class="bg bg3"></div>
			<div id="jumbotron-link">
				<?php $jumbotron_link_checker = get_option('jumbotron_link'); if(!$jumbotron_link_checker == "") { ?><a href="<?php echo get_option('jumbotron_link'); ?>" title="Read more">Read more</a><?php } ?>
			</div><!-- /jumbotron-link -->
			<div id="jumbotron-inner">
				<div id="jumbotron-text">
					<span class="titletag titletag-<?php echo get_option('jumbotron_titletag1_special'); ?>"><?php echo get_option('jumbotron_titletag1_text'); ?></span><?php $titletag_checker = get_option('jumbotron_titletag2_display'); if($titletag_checker == "on") { ?><span class="titletag titletag-<?php $titletag_type = get_option('jumbotron_titletag2_type'); if(!$titletag_type == "hollow") { echo get_option('jumbotron_titletag2_special'); } else { echo 'hollow'; } ?>"><?php echo get_option('jumbotron_titletag2_text'); ?></span><?php } ?>
					<span><?php echo get_option('jumbotron_text'); ?></span>
				</div><!-- /jumbotron-text -->
				<img src="<?php echo get_option('jumbotron_image'); ?>" alt="<?php echo get_option('jumbotron_alt'); ?>" width="540" height="304">
			</div><!-- /jumbotron-inner -->
		</div><!-- /jumbotron-outer -->
		<div id="socials">
			<ul>
				<li class="socials-discord"><a href="https://discord.gg/XtGUe4vaVm" title="Discord" target="_blank" rel="external me">Discord</a></li>
				<li class="socials-instagram"><a href="https://www.instagram.com/criticalchicken" title="Instagram" target="_blank" rel="external me">Instagram</a></li>
				<li class="socials-mastodon"><a href="https://ohai.social/@CriticalChicken" title="Mastodon" target="_blank" rel="external me">Mastodon</a></li>
				<li class="socials-ko-fi"><a href="https://ko-fi.com/criticalchicken" title="Ko-fi" target="_blank" rel="external me">Ko-fi</a></li>
				<li class="socials-threads"><a href="<?php echo get_site_url(); ?>/threads" title="Threads" rel="help">Threads</a></li>
			</ul>
		</div><!-- /socials -->
		<div id="home-content-upper">
			<h1>Posts we think you&rsquo;ll like</h1>
			<div id="posts-container-upper">
				<?php query_posts('posts_per_page=6&offset=0'); if(have_posts()):while(have_posts()):the_post(); ?>
					<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
						<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352"></a>
						<?php categoryLinkGenerator(); ?>
						<span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
					</div>
				<?php endwhile;endif; ?>
			</div><!-- /posts-container-upper -->
		</div><!-- /home-content-upper -->
		<div id="not-sidebar-outer">
			<div id="not-sidebar-inner">
				<div id="not-sidebar-box-left">
					<h1>We&rsquo;re feeling &lsquo;hype&rsquo; about this thing here</h1>
					<img src="<?php echo get_template_directory_uri(); ?>/pkmn.jpg" alt="" width="352">
					<p>Triangles, ghosties, and hot stepbrothers, oh my! We can&rsquo;t wait for the continuation of <b>Oxenfree</b>.</p>
					<a href="<?php echo get_site_url(); ?>/radar" class="raquo">What&rsquo;s on our Radar &raquo;</a>
				</div><!-- /not-sidebar-box-left -->
				<div id="not-sidebar-box-right">
					<h1>This is&hellip;<br>objectionable</h1>
					<img src="<?php echo get_template_directory_uri(); ?>/pkmn.jpg" alt="" width="352">
					<p>We&rsquo;ve spent the last <span class="timetip" title="8th September 2016 - release date of Ace Attorney 6"><?php echo do_shortcode('[DateCounter startDate="2016-09-08" endDate="now" format="%y years, %m months, and %d days"]'); ?></span> waiting for <b>Ace&nbsp;Attorney&nbsp;7</b>. Hmph.</p>
					<a href="<?php echo get_site_url(); ?>/category/ace-attorney" class="raquo">More Ace Attorney &raquo;</a>
				</div><!-- /not-sidebar-box-right -->
				<div id="not-sidebar-box-mastodon">
					<iframe allowfullscreen sandbox="allow-top-navigation allow-scripts allow-popups allow-popups-to-escape-sandbox" width="352" height="424" src="https://www.mastofeed.com/apiv2/feed?userurl=https%3A%2F%2Fohai.social%2Fusers%2FCriticalChicken&theme=light&size=100&header=true&replies=false&boosts=false" frameborder="0"></iframe>
				</div><!-- /not-sidebar-box-mastodon -->
			</div><!-- /not-sidebar-inner -->
		</div><!-- /not-sidebar-outer -->
		<div id="home-content-lower">
			<div id="posts-container-lower">
				<?php query_posts('posts_per_page=6&offset=6'); if(have_posts()):while(have_posts()):the_post(); ?>
					<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
						<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352"></a>
						<?php categoryLinkGenerator(); ?>
						<span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
					</div>
				<?php endwhile;endif; ?>
			</div><!-- /posts-container-lower -->
		</div><!-- /home-content-lower -->
		<div id="home-navigation">
			<ul>
				<li class="latest"><a href="<?php echo get_site_url(); ?>/latest">Latest</a></li>
				<li class="news"><a href="<?php echo get_site_url(); ?>/category/news">News</a></li>
				<li class="features"><a href="<?php echo get_site_url(); ?>/category/features">Features</a></li>
				<li class="reviews"><a href="<?php echo get_site_url(); ?>/category/reviews">Reviews</a></li>
				<li class="ko-fi"><a href="https://ko-fi.com/criticalchicken" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/ui_ko-fi_color-on-transparent_for16px.png" width="25" height="16" alt="">Support us on Ko-fi</a></li>
			</ul>
		</div><!-- /home-navigation -->
		<div id="footer-outer">
			<div id="footer-inner">
				<span class="copyright">Copyright &copy; 2016&ndash;<?php echo date("Y"); ?> Critical Chicken. All rights reserved.</span>
				<span class="trademark">Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.<br>All other trademarks referred to are trademarks of their respective owners.</span>
				<div id="footer-links">
					<ul>
						<li><a href="<?php echo get_site_url(); ?>/privacy">Privacy policy &raquo;</a></li>
						<li><a href="<?php echo get_site_url(); ?>/roadmap">Roadmap &raquo;</a></li>
						<li><a href="<?php echo get_site_url(); ?>/promises">Our six promises &raquo;</a></li>
					</ul>
				</div><!-- /footer-links -->
				<div id="version">
					<img src="<?php echo get_template_directory_uri(); ?>/img/branding_v2_color-on-white_for32px.png" width="43" height="32" alt="Critical Chicken V2" title="V2 MVP - Brazen Blackbird"><p id="load_time">Still loading&hellip;</p>
				</div><!-- /version -->
			</div><!-- /footer-inner -->
		</div><!-- /footer-outer -->
	</div><!-- /container -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.webticker.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script type="module" src="https://unpkg.com/friendly-challenge@0.9.5/widget.module.min.js" async defer></script>
<script nomodule src="https://unpkg.com/friendly-challenge@0.9.5/widget.min.js" async defer></script>
<!--<script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script> UN-COMMENT THIS LINE BEFORE LAUNCH -->
<?php wp_footer();?>
</body>
</html>
