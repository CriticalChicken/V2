<?php /* Template Name: V2 Tags */ ?>
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
<h2 class="tag-cloud">Everything we&rsquo;ve ever written about</h2>
<div id="tag-cloud"><?php wp_tag_cloud("smallest=15&largest=31&unit=px&number=0"); ?><br></div>
</div>
<?php get_template_part("V2-home-navigation"); ?>
<?php endwhile;endif; ?>
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
