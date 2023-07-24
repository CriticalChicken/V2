<!doctype html>
<html>

<!-- Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title>404: Not found - Critical Chicken</title>
<?php wp_head(); ?>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<div id="post-404" class="individual-post glitch">
<div id="not-found">404: Not found</div>
<h2>We don&rsquo;t know what you were looking for, but we know it isn&rsquo;t here.</h2>
<p>Here are some things you might want to try:</p>
<ul>
<li>Go back to the <a href="<?php echo get_site_url(); ?>">homepage</a>.</li>
<li>Make sure you&rsquo;ve typed the web address correctly.</li>
<li>Use the <span class="search-icon">Search</span> button in the main menu.</li>
<li>Have a look at some of our <a href="<?php echo get_site_url(); ?>/category/best-of">best posts</a>.</li>
</ul>
</div>
<?php get_template_part("V2-home-navigation"); ?>
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
