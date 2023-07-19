<?php /* Template Name: Listings */ ?>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

		<div id="listing-container">
			<h1>Our latest posts</h1>
			<div id="posts-container-upper">
				<?php query_posts('cat=36&posts_per_page=6&offset=0'); if(have_posts()):while(have_posts()):the_post(); ?>
					<div id="post-<?php the_ID(); ?>"<?php post_class('homepage-post') ?>>
						<a href="<?php echo the_permalink(); ?>" title="Read more" class="thumb-link"><img src="<?php if(get_field('thumbnail')):echo the_field('thumbnail');else:echo get_template_directory_uri();fallbackThumbnailPicker();endif; ?>" alt="<?php if(get_field('alt')):echo the_field('alt');endif; ?>" width="352"></a>
						<?php categoryLinkGenerator(); ?>
						<span class="homepage-post-title"><a href="<?php echo the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></span>
					</div>
				<?php endwhile;endif; ?>
			</div><!-- /posts-container-upper -->
		</div><!-- /listing-container -->
