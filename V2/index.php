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
<div id="post-<?php the_ID(); ?>"<?php post_class('listing-post') ?>>
<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352"></a>
<?php categoryLinkGenerator(); ?>
<span class="listing-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
</div>
<?php endwhile;endif; ?>
</div><!-- /the-post-listing -->
</div><!-- /listing-container -->
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
