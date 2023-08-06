<?php /* Template Name: V2 Explore */ ?>
<?php get_template_part("V2-maintenance-mode.min"); ?>

<!doctype html>
<html lang="en-GB">

<!-- Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title><?php echo single_post_title(); ?> - Critical Chicken</title>
<?php wp_head(); ?>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div id="post-<?php the_ID(); ?>"<?php post_class('individual-post') ?>>
<h1><?php the_title(); ?></h1>
<p>Greetings, intrepid <span class="timetip galline-timetip" title="of, or pertaining to, the chicken">galline</span> explorer! Whatever you&rsquo;re looking for, our convenient, colour-coded categories will get you where you want to go.</p>
<p>More categories will appear as we add more stuff.</p>
<div class="explore-group latest">
<a class="titletag-link" href="<?php echo get_site_url(); ?>/latest"><span class="titletag">Latest <b>&ndash; show me everything</b></span></a>
</div>
<div class="explore-group news">
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/news"><span class="titletag titletag-news">News</span></a>
<?php $args=array('category'=>16,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/links"><span class="titletag titletag-news titletag-hollow">Links</span>');} ?>
<?php $args=array('category'=>18,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/live-updates"><span class="titletag titletag-news titletag-hollow">Live updates</span>');} ?>
<?php $args=array('category'=>25,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/rumours"><span class="titletag titletag-news titletag-hollow">Rumours</span>');} ?>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/site-updates"><span class="titletag titletag-news titletag-hollow">Site updates</span></a>
<?php $args=array('category'=>29,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/updates"><span class="titletag titletag-news titletag-hollow">Updates</span>');} ?>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/videos"><span class="titletag titletag-news titletag-hollow">Videos</span></a>
</div>
<div class="explore-group features">
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/features"><span class="titletag titletag-features">Features</span></a>
<?php $args=array('category'=>11,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/guest-blogs"><span class="titletag titletag-features titletag-hollow">Guest blogs</span>');} ?>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/guides"><span class="titletag titletag-features titletag-hollow">Guides</span></a>
<?php $args=array('category'=>15,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/interviews"><span class="titletag titletag-features titletag-hollow">Interviews</span>');} ?>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/opinions"><span class="titletag titletag-features titletag-hollow">Opinions</span></a>
</div>
<div class="explore-group reviews">
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/reviews"><span class="titletag titletag-reviews">Reviews</span></a>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/first-impressions"><span class="titletag titletag-reviews titletag-hollow">First impressions</span></a>
<?php $args=array('category'=>14,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/hands-on"><span class="titletag titletag-reviews titletag-hollow">Hands on</span>');} ?>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/previews"><span class="titletag titletag-reviews titletag-hollow">Previews</span></a>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/second-looks"><span class="titletag titletag-reviews titletag-hollow">Second looks</span></a>
</div>
<div class="explore-group special">
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/ace-attorney"><span class="titletag titletag-ace-attorney">Ace Attorney</span></a>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/best-of"><span class="titletag titletag-best-of">Best of</span></a>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/e3-2016"><span class="titletag titletag-e3">E3 2016</span></a>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/e3-2021"><span class="titletag titletag-e3">E3 2021</span></a>
<a class="titletag-link" href="<?php echo get_site_url(); ?>/category/e3-2023"><span class="titletag titletag-e3">E3&rsquo;s future</span></a>
<?php $args=array('category'=>9,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/exclusives"><span class="titletag titletag-yellow">Exclusives</span>');} ?>
<?php $args=array('category'=>34,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/forthegaymers"><span class="titletag titletag-forthegaymers">#ForTheGaymers</span>');} ?>
<?php $args=array('category'=>20,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/nintendo-direct"><span class="titletag titletag-nintendo-direct">Nintendo Direct</span>');} ?>
<?php $args=array('category'=>22,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/pokemon-presents"><span class="titletag titletag-pokemon-presents">Pok&eacute;mon Presents</span>');} ?>
<?php $args=array('category'=>28,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/state-of-play"><span class="titletag titletag-state-of-play">State of Play</span>');} ?>
<?php $args=array('category'=>33,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a class="titletag-link" href="'.get_site_url().'/category/summer-game-fest-2024"><span class="titletag titletag-summer-game-fest">Summer Game Fest 2024</span>');} ?>
</div>
<hr>
<h2 class="our-dms">Ways to connect with us</h2>
<div class="our-dms-group">
<div class="bluesky"><a href="https://bsky.app/profile/criticalchicken.bsky.social" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_bluesky_color_for64px.png" width="64" height="64" alt="Bluesky icon"></a><span><a href="https://bsky.app/profile/criticalchicken.bsky.social" target="_blank" rel="external me">Bluesky: <b>@criticalchicken.bsky.social</b></a></span></div>
<div class="discord"><a href="https://discord.gg/XtGUe4vaVm" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_discord_white-on-purple_for64px.png" width="64" height="64" alt="Discord icon"></a><span><a href="https://discord.gg/XtGUe4vaVm" target="_blank" rel="external me">Discord: <b>Critical Chicken</b></a></span></div>
<div class="email"><a href="mailto:office@criticalchicken.com"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_email_white-on-black_for64px.png" width="64" height="64" alt="Email icon"></a><span><a href="mailto:office@criticalchicken.com">Email: <b>office@criticalchicken.com</b></a></span></div>
<div class="instagram"><a href="https://www.instagram.com/criticalchicken" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_instagram_white-on-color_for64px.png" width="64" height="64" alt="Instagram icon"></a><span><a href="https://www.instagram.com/criticalchicken" target="_blank" rel="external me">Instagram: <b>@criticalchicken</b></a></span></div>
<div class="mastodon"><a href="https://mastodon.world/@CriticalChicken" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_mastodon_white-on-purple_for64px.png" width="64" height="64" alt="Mastodon icon"></a><span><a href="https://mastodon.world/@CriticalChicken" target="_blank" rel="external me">Mastodon: <b>@CriticalChicken@mastodon.world</b></a></span></div>
<div class="threads"><a href="<?php echo get_site_url(); ?>/threads" rel="help"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_threads_white-on-color_for64px.png" width="64" height="64" alt="Threads icon"></a><span><a href="<?php echo get_site_url(); ?>/threads" rel="help">Threads: <b>You&rsquo;ll soon be able to follow our Mastodon</b></a></span></div>
<div class="ko-fi"><a href="https://ko-fi.com/criticalchicken" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_ko-fi_color-on-blue_for64px.png" width="64" height="64" alt="Ko-fi icon"></a><span><a href="https://ko-fi.com/criticalchicken" target="_blank" rel="external me">Ko-fi: <b>ko-fi.com/criticalchicken</b></a></span></div>
<div class="tumblr"><a href="https://criticalchicken.tumblr.com" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/socials_tumblr_white-on-blue_for64px.png" width="64" height="64" alt="Tumblr icon"></a><span><a href="https://criticalchicken.tumblr.com" target="_blank" rel="external me">Tumblr: <b>criticalchicken.tumblr.com</b></a></span></div>
</div>
<hr>
<h2 class="our-dms">Other stuff</h2>
<div class="other-stuff-group">
<a href="<?php echo get_site_url(); ?>/privacy" rel="help">Privacy policy&nbsp;&raquo;</a>
<a href="https://github.com/CriticalChicken/V2" target="_blank" rel="external me">V2 theme on GitHub&nbsp;&raquo;</a>
</div>
<hr>
<h2 class="tag-cloud">What we&rsquo;ve written about the most</h2>
<div id="tag-cloud" class="minimised"><?php wp_tag_cloud("orderby=count&order=DESC&smallest=15&largest=31&unit=px&number=30"); ?><br></div>
<a href="<?php echo get_site_url(); ?>/tags" class="more-tag-cloud">See all <?php echo do_shortcode('[sbs_tags]'); ?> tags &raquo;</a>
</div>
<?php get_template_part("V2-home-navigation"); ?>
<?php endwhile;endif; ?>
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
