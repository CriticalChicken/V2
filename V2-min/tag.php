<?php get_template_part("V2-maintenance-mode.min"); ?>
<!doctype html>
<html>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title>Posts mentioning <?php single_tag_title(); ?> - Critical Chicken</title>
<?php wp_head(); ?>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<div id="listing-container">
<h1 class="cat-title-tag"><img src="<?php echo get_template_directory_uri(); ?>/img/category_tag_black-on-grey_for30px.png" width="30" height="30" alt="">Posts mentioning  <?php single_tag_title(); ?></h1>
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
