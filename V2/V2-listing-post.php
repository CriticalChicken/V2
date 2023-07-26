<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post listing-post') ?>>
<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352" height="198"></a>
<div class="listing-post-gubbins">
<?php categoryLinkGenerator(); ?><span class="timestamp"><?php echo get_the_date("l, jS F Y"); ?> by <?php echo the_author_posts_link();?></span>
<span class="homepage-post-title listing-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
<?php echo the_excerpt(); ?>
<div class="listing-links">
<a href="<?php echo the_permalink(); ?>" class="read-more">Read more &raquo;</a>
</div>
</div>
</div>
