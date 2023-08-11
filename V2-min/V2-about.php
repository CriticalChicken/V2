<?php /* Template Name: V2 About */ ?>
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
<p>Welcome to <b>Critical Chicken</b>, your one-stop shop for video game news, features, and reviews &ndash; with a healthy dollop of Queer culture on the side.</p>
<h2>Vital statistics</h2>
<ul>
<li>We&rsquo;ve been online for <span class="timetip vital-timetip" title="11th June 2016 - launch of Critical Chicken"><?php echo do_shortcode('[DateCounter startDate="2016-06-11" endDate="now" format="%y years, %m months, and %d days"]'); ?></span>.</li>
<li>We&rsquo;ve written <b><?php echo do_shortcode('[sbs_posts]'); ?> posts</b> totalling <b><?php echo do_shortcode('[sbs_word_count_all]'); ?> words</b>. Here&rsquo;s <a href="https://www.criticalchicken.com/welcome-to-critical-chicken/" title="Welcome to Critical Chicken"><b>our first post</b></a>. Here&rsquo;s <?php $args=array('numberposts'=>'1','order'=>'DESC','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){echo('<a href="');echo get_permalink($recent["ID"]);echo('" title="');echo $recent["post_title"];echo('"><b>our latest one</b></a>');} ?>.</li>
<li>We&rsquo;ve written about about <b><?php echo do_shortcode('[sbs_tags]'); ?> different <a href="https://www.criticalchicken.com/tags" title="Tag cloud">things</a></b>. The thing we&rsquo;ve written about the most is <b><?php wp_tag_cloud("smallest=20&largest=20&unit=px&number=1"); ?></b>.</li>
</ul>
<?php echo the_content(); ?>
</div>
<?php get_template_part("V2-home-navigation"); ?>
<?php endwhile;endif; ?>
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
