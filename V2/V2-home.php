<?php /* Template Name: V2 Home */ ?>
<?php get_template_part("V2-pre-launch"); ?>

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
<?php if(get_option('jumbotron_link') != "") { ?><a href="<?php echo get_option('jumbotron_link'); ?>" title="Read more">Read more</a><?php } ?>
</div><!-- /jumbotron-link -->
<div id="jumbotron-inner">
<div id="jumbotron-text">
<span class="titletag titletag-<?php echo get_option('jumbotron_titletag1_special'); ?>"><?php echo get_option('jumbotron_titletag1_text'); ?></span><?php if(get_option('jumbotron_titletag2_display') == "on") { ?><span class="titletag titletag-<?php if(get_option('jumbotron_titletag2_type') == "main") { echo get_option('jumbotron_titletag2_special'); } else { echo 'hollow'; } ?>"><?php echo get_option('jumbotron_titletag2_text'); ?></span><?php } ?>
<span><?php echo get_option('jumbotron_text'); ?></span>
</div><!-- /jumbotron-text -->
<img src="<?php echo get_option('jumbotron_image'); ?>" alt="<?php echo get_option('jumbotron_alt'); ?>" width="540" height="304">
</div><!-- /jumbotron-inner -->
</div><!-- /jumbotron-outer -->
<div id="post-jumbotron">
<ul>
<li class="socials-bluesky"><a href="https://bsky.app/profile/criticalchicken.bsky.social" title="Bluesky" target="_blank" rel="external me">Bluesky</a></li>
<li class="socials-discord"><a href="https://discord.gg/XtGUe4vaVm" title="Discord" target="_blank" rel="external me">Discord</a></li>
<li class="socials-instagram"><a href="https://www.instagram.com/criticalchicken" title="Instagram" target="_blank" rel="external me">Instagram</a></li>
<li class="socials-mastodon"><a href="https://mastodon.world/@CriticalChicken" title="Mastodon" target="_blank" rel="external me">Mastodon</a></li>
<li class="socials-ko-fi"><a href="https://ko-fi.com/criticalchicken" title="Ko-fi" target="_blank" rel="external me">Ko-fi</a></li>
<li class="socials-tumblr"><a href="https://criticalchicken.tumblr.com" title="Tumblr" target="_blank" rel="external me">Tumblr</a></li>
<li class="socials-threads"><a href="<?php echo get_site_url(); ?>/threads" title="Threads" rel="help">Threads</a></li>
</ul>
</div><!-- /post-jumbotron -->
<div id="home-content-upper">
<h1>Posts we think you&rsquo;ll like</h1>
<div id="posts-container-upper">
<?php query_posts('cat=35&posts_per_page=6&offset=0'); if(have_posts()):while(have_posts()):the_post(); ?>
<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352" height="198"></a>
<?php categoryLinkGenerator(); ?>
<span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
</div>
<?php endwhile;endif; ?>
</div><!-- /posts-container-upper -->
</div><!-- /home-content-upper -->
<div id="not-sidebar-outer">
<div id="not-sidebar-inner">
<div id="not-sidebar-box-left">
<h1>*points gun at temple expectantly*</h1>
<img src="<?php echo get_template_directory_uri(); ?>/img/not-sidebar/persona-3-reload.jpg" alt="A screenshot from Persona 3: Reload. Yukari and the protagonist are talking in a classroom." width="352" height="198">
<p>We recently played <b>P3P</b> and thought it had <em>major</em> pacing issues. So why are we so hyped for <b>Persona 3: Reload</b>?</p>
<a href="<?php echo get_site_url(); ?>/radar" class="raquo">What&rsquo;s on our Radar &raquo;</a>
</div><!-- /not-sidebar-box-left -->
<div id="not-sidebar-box-right">
<h1>This is&hellip;<br>objectionable</h1>
<img src="<?php echo get_template_directory_uri(); ?>/img/not-sidebar/edgeworth.jpg" alt="Miles Edgeworth looking anguished" width="352" height="198">
<p>We&rsquo;ve spent the last <span class="timetip" title="8th September 2016 - release date of Ace Attorney 6"><?php echo do_shortcode('[DateCounter startDate="2016-09-08" endDate="now" format="%y years, %m months, and %d days"]'); ?></span> waiting for <b>Ace&nbsp;Attorney&nbsp;7</b>. Hmph.</p>
<a href="<?php echo get_site_url(); ?>/category/ace-attorney" class="raquo">More Ace Attorney &raquo;</a>
</div><!-- /not-sidebar-box-right -->
<div id="not-sidebar-box-mastodon">
<iframe width="352" src="https://www.mastofeed.com/apiv2/feed?userurl=https%3A%2F%2Fmastodon.world%2Fusers%2FCriticalChicken&theme=light&size=100&header=true&replies=false&boosts=false" frameborder="0"></iframe>
</div><!-- /not-sidebar-box-mastodon -->
</div><!-- /not-sidebar-inner -->
</div><!-- /not-sidebar-outer -->
<div id="tease-wrapper"><div id="mastodon-tease"><a href="https://mastodon.world/@CriticalChicken" target="_blank" rel="external me">Follow us on Mastodon: <span>@CriticalChicken@mastodon.world</span></a></div></div>
<div id="home-content-lower">
<div id="posts-container-lower">
<?php query_posts('cat=35&posts_per_page=6&offset=6'); if(have_posts()):while(have_posts()):the_post(); ?>
<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352" height="198"></a>
<?php categoryLinkGenerator(); ?>
<span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
</div>
<?php endwhile;endif; ?>
</div><!-- /posts-container-lower -->
</div><!-- /home-content-lower -->
<?php get_template_part("V2-home-navigation"); ?>
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
