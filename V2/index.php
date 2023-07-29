<?php get_template_part("V2-pre-launch"); ?>
<!doctype html>
<html>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title>Our latest posts - Critical Chicken</title>
<?php wp_head(); ?>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<div id="listing-container">
<h1>Our latest posts</h1>
<div id="the-post-listing">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php get_template_part("V2-listing-post"); ?>
<?php endwhile;else: ?>
<?php get_template_part("V2-no-posts-found"); ?>
<?php endif; ?>
</div><!-- /the-post-listing -->
<?php get_template_part("V2-pagination"); ?>
</div><!-- /listing-container -->
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
