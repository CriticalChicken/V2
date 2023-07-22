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
<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post listing-post') ?>>
<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352" height="198"></a>
<?php categoryLinkGenerator(); ?><span class="timestamp"><?php echo the_date("l, jS F Y"); ?> by <?php echo the_author_posts_link();?></span>
<span class="homepage-post-title listing-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
<?php echo the_excerpt(); ?>
<div class="listing-links">
<a href="<?php echo the_permalink(); ?>" class="read-more">Read more &raquo;</a>
</div>
</div>
<?php endwhile;endif; ?>
</div><!-- /the-post-listing -->
<div id="pagination">
<span class="newer-posts" title="Newer posts"><?php previous_posts_link('Newer posts'); ?></span><span class="older-posts" title="Older posts"><?php next_posts_link('Older posts'); ?></span><p>You’re on page <?php $paged_maxnum=$GLOBALS['wp_query']->max_num_pages;if($paged_maxnum>1){$paged_current_page=get_query_var('paged')?intval(get_query_var('paged')):1;$title_page_nrs='<span>'.$paged_current_page.'</span> of <span>'.$paged_maxnum.'</span>.';echo $title_page_nrs;} ?></p>
</div>
</div><!-- /listing-container -->
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
