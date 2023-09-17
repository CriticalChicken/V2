<?php get_template_part('maintenance-mode'); chickenDefender(); ?><!doctype html>
<html lang="en-GB">

<!--
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
-->

<head>
<?php get_template_part('meta'); ?>
<title><?php echo single_post_title(); ?> - Critical Chicken</title>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/single.css" as="style">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
<?php wp_head(); ?>
</head>
<body>
<div id="container">
<?php get_template_part('header'); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div id="progress-container"<?php post_class(); ?>><div id="reading-progress"></div></div>
<main>
<section id="post-<?php the_ID(); ?>"<?php post_class('single-post full-width') ?>>
<div class="single-post-inner responsive">
<div class="titletags"><?php ctTitletag(); ?></div>
<h1><?php the_title(); ?></h1>
<div class="echo-the-content">
<?php echo the_content(); ?>
</div>
</div>
</section>
</main>
<?php endwhile;endif; ?>
<nav class="bottom full-width">
<div class="responsive-rounded nav_inner">
<?php get_template_part('nav'); ?>
</div>
<div class="responsive-rounded-no-padding nav_background"></div>
</nav>
<?php get_template_part('footer'); ?>
</div>
<?php get_template_part('endscripts'); ?>
</body>
</html>
