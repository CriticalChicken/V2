<?php /* Template Name: V2 Home */ ?>

<!doctype html>
<html>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title>Critical Chicken - Video game news, features, and reviews #ForTheGaymers</title>
<?php wp_head(); ?>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<div id="jumbotron-outer" class="<?php echo get_option('jumbotron_color_field'); ?>">
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div id="jumbotron-link">
<?php $jumbotron_link_checker = get_option('jumbotron_link'); if(!$jumbotron_link_checker == "") { ?><a href="<?php echo get_option('jumbotron_link'); ?>" title="Read more">Read more</a><?php } ?>
</div><!-- /jumbotron-link -->
<div id="jumbotron-inner">
<div id="jumbotron-text">
<span class="titletag titletag-<?php echo get_option('jumbotron_titletag1_special'); ?>"><?php echo get_option('jumbotron_titletag1_text'); ?></span><?php $titletag_checker = get_option('jumbotron_titletag2_display'); if($titletag_checker == "on") { ?><span class="titletag titletag-<?php $titletag_type = get_option('jumbotron_titletag2_type'); if($titletag_type == "main") { echo get_option('jumbotron_titletag2_special'); } else { echo 'hollow'; } ?>"><?php echo get_option('jumbotron_titletag2_text'); ?></span><?php } ?>
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
<?php query_posts('cat=36&posts_per_page=6&offset=0'); if(have_posts()):while(have_posts()):the_post(); ?>
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
<iframe allowfullscreen sandbox="allow-top-navigation allow-scripts allow-popups allow-popups-to-escape-sandbox" width="352" src="https://www.mastofeed.com/apiv2/feed?userurl=https%3A%2F%2Fohai.social%2Fusers%2FCriticalChicken&theme=light&size=100&header=true&replies=false&boosts=false" frameborder="0"></iframe>
</div><!-- /not-sidebar-box-mastodon -->
</div><!-- /not-sidebar-inner -->
</div><!-- /not-sidebar-outer -->
<div id="home-content-lower">
<div id="posts-container-lower">
<?php query_posts('cat=36&posts_per_page=6&offset=6'); if(have_posts()):while(have_posts()):the_post(); ?><!-- CHANGE CATEGORY NUMBER BEFORE LAUNCHING -->
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
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
