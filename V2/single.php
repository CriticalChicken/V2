<!doctype html>
<html>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title><?php echo single_post_title(); ?> - Critical Chicken</title>
<?php wp_head(); ?>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div id="progress-container"<?php post_class(); ?>><div id="reading-progress"></div></div>
<div id="post-<?php the_ID(); ?>"<?php post_class('individual-post') ?>>
<?php categoryLinkGenerator(); ?><span class="timestamp"><?php echo the_date("l, jS F Y"); ?> by <?php echo the_author_posts_link();?></span>
<h1><?php the_title(); ?></h1>
<?php echo the_content(); ?>
</div>
<div id="post-meta">
<span class="post-meta-title">More like this</span>
<?php categoryLinkGenerator(); ?>
<?php if(has_tag()) { ?><span class="post-meta-tags"><img src="<?php echo get_template_directory_uri(); ?>/img/ui_tag_black-on-grey_for15px.png" width="15" height="15" alt=""><?php echo the_tags("In this post we mentioned: ", ", ", "."); ?></span><?php } else { ?><div class="no-tags"></div><?php } ?>
</div><!-- /post-meta -->
<div id="crp-container">
<?php if ( function_exists( 'echo_crp' ) ) { echo_crp(); } ?>
</div>
<?php get_template_part("V2-home-navigation"); ?>
<?php endwhile;endif; ?>
<?php get_template_part("V2-footer"); ?>

<?php if(current_user_can('edit_posts')) { ?><script type="text/javascript">$('.individual-post').momentum({barSelector: '#reading-progress',offset: 32});</script><?php } else { ?><script type="text/javascript">$('.individual-post').momentum({barSelector: '#reading-progress',offset: 'top'});</script><?php } ?>

<?php wp_footer();?>
</body>
</html>
