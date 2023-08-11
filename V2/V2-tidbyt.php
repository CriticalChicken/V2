<?php /* Template Name: V2 Tidbyt */ ?>
<?php get_template_part("V2-maintenance-mode.min"); ?>

<!doctype html>
<html lang="en-GB">

<!-- Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. -->

<head>
<?php get_template_part("V2-meta"); ?>
<title><?php echo single_post_title(); ?> - Critical Chicken</title>
<?php wp_head(); ?>
<style type="text/css">
    div.tidbyt-previews {
        display: block;
        width: 1120px;
        height: 408px;
        padding-top: 35px;
        padding-bottom: 40px;
    }
    div.ctable {
        display: block;
        width: 544px;
        height: 408px;
        float: left;
        margin-right: 32px;
        background-image: url(<?php echo get_template_directory_uri(); ?>/img/tidbyt/ctable.jpg);
        border-radius: 8px;
        background-size: 544px 408px;
        font-size: 0 !important;
        line-height: 0 !important;
        perspective: 366px;
    }
    div.ktable {
        display: block;
        width: 544px;
        height: 408px;
        float: left;
        background-image: url(<?php echo get_template_directory_uri(); ?>/img/tidbyt/ktable.jpg);
        border-radius: 8px;
        background-size: 544px 408px;
        font-size: 0 !important;
        line-height: 0 !important;
        perspective: 366px;
    }
    .cmask {
        border-radius: 1px !important;
        margin: 0 !important;
        transform: rotateX(-1deg) rotateY(7deg) skewY(-4.4deg) skewX(2deg) rotateZ(2deg);
        position: absolute;
        left: 130px;
        top: 168px;
        z-index: 200;
        opacity: 0.32;
    }
    .kmask {
        border-radius: 1px !important;
        margin: 0 !important;
        transform: rotateX(-5deg) rotateY(7deg) skewY(-10deg) skewX(2deg) rotateZ(1deg);
        position: absolute;
        left: 212px;
        top: 152.5px;
        z-index: 200;
        opacity: 0.32;
    }
    .cpreview {
        border-radius: 1px !important;
        margin: 0 !important;
        transform: rotateX(-1deg) rotateY(7deg) skewY(-4.4deg) skewX(2deg) rotateZ(2deg);
        position: absolute;
        left: 130px;
        top: 168px;
        z-index: 100;
    }
    .kpreview {
        border-radius: 1px !important;
        margin: 0 !important;
        transform: rotateX(-5deg) rotateY(7deg) skewY(-10deg) skewX(2deg) rotateZ(1deg);
        position: absolute;
        left: 212px;
        top: 152.5px; 
        z-index: 100;
    }
    div.disclaimer {
        font-size: 15px;
        color: black;
        padding-top: 11px;
        display: block;
        clear: both;
        height: auto;
        font-weight: 500;
        background-image: url(<?php echo get_template_directory_uri(); ?>/img/ui_info_black-on-grey_for15px.png);
        background-size: 15px 15px;
        background-position: left 11px;
        padding-left: 23px;
        background-repeat: no-repeat;
    }
    div.store-buttons {
        display: block;
        height: 80px;
    }
    div.store-buttons a {
        border-radius: 8px;
        margin-right: 32px;
    }
    div.store-buttons img {
        border: 2px #a6a6a6 solid;
        margin-top: 23px;
    }
    h1.tidbyt-logo {
        background-image: url(<?php echo get_template_directory_uri(); ?>/img/tidbyt/logo.png);
        background-size: 302px 45px;
        background-position: 247px 51px;
        background-repeat: no-repeat;
        font-weight: 500;
    }
    h1.tidbyt-logo span.tidbyt {
        font-size: 0;
        line-height: 0;
        color: rgba(0, 0, 0, 0);
        display: inline-block;
        width: 342px;
    }
    h1.tidbyt-logo span.app {
        color: #7c8af7;
    }
    h1.tidbyt-logo span.our {
        color: #ffa845;
    }
    h1.tidbyt-logo span.get {
        color: #be74ff;
    }
    span.ccname {
        color: #d20202;
        font-weight: 700;
    }
    @media (min-width: 992px) and (max-width: 1183.98px)  {
        div.tidbyt-previews {
            display: block;
            width: 544px;
            height: 848px;
            padding-left: 192px;
        }
        div.ctable {
            margin-right: 0;
            margin-bottom: 32px;
        }
        div.ktable {
            float: none;
            clear: both;
        }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
        div.tidbyt-previews {
            display: block;
            width: 544px;
            height: 848px;
            padding-left: 96px;
        }
        div.ctable {
            margin-right: 0;
            margin-bottom: 32px;
        }
        div.ktable {
            float: none;
            clear: both;
        }
        h1.tidbyt-logo {
            background-size: 208px 31px;
            background-position: 164px 49px;
            background-repeat: no-repeat;
            padding-top: 36px;
        }
        h1.tidbyt-logo span.tidbyt {
            width: 235px;
        }
    }
    @media (min-width: 576px) and (max-width: 767.98px) {
        div.tidbyt-previews {
            display: block;
            width: 544px;
            height: 848px;
        }
        div.ctable {
            margin-right: 0;
            margin-bottom: 32px;
        }
        div.ktable {
            float: none;
            clear: both;
        }
        h1.tidbyt-logo {
            background-size: 208px 31px;
            background-position: 164px 49px;
            background-repeat: no-repeat;
            padding-top: 36px;
        }
        h1.tidbyt-logo span.tidbyt {
            width: 235px;
        }
    }
    @media (max-width: 575.98px) {
        div.tidbyt-previews {
            display: block;
            width: 100%;
            height: auto;
            padding-bottom: 10px;
        }
        div.ctable {
            max-width: 100%;
            height: auto;
            background: red;
            margin-right: 0;
            margin-bottom: 16px;
            aspect-ratio: 64 / 32;
            perspective: unset;
            border-radius: 8px;
        }
        div.ktable {
            max-width: 100%;
            height: auto;
            background: red;
            float: none;
            clear: both;
            aspect-ratio: 64 / 32;
            perspective: unset;
            border-radius: 8px !important;
        }
        div.ctable img,
        div.ktable img {
            width: calc(100% - 16px);
            height: auto;
            aspect-ratio: 64 / 32;
            left: 0;
            top: 0;
            transform: unset;
            position: relative;
            border-radius: 8px !important;
            border: 8px black solid;
            filter: unset;
        }
        div.ctable img.cmask,
        div.ktable img.kmask {
            display: none;
        }
        h1.tidbyt-logo {
            background-image: none;
            padding-top: 36px;
        }
        h1.tidbyt-logo span {
            color: black !important;
        }
        h1.tidbyt-logo span.tidbyt {
            width: unset;
            font-size: inherit;
            line-height: inherit;
        }
        div.disclaimer {
            line-height: 24px;
            padding-top: 14px;
            background-position: left 19px;
        }
        div.disclaimer span {
            display: none;
        }
        div.store-buttons {
            height: 144px;
        }
        div.store-buttons a {
            display: block;
        }
    }
</style>
</head>

<body>
<?php get_template_part("V2-header"); ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div id="post-<?php the_ID(); ?>"<?php post_class('individual-post') ?>>
<h1 class="tidbyt-logo"><span class="get">Get </span><span class="our">our </span><span class="tidbyt">Tidbyt</span><span class="app"> app</span></h1>
<div class="tidbyt-previews">
<div class="ctable">
<img src="<?php echo get_template_directory_uri(); ?>/img/tidbyt/cmask.png" width="138" height="69" alt="" class="cmask">
<img src="<?php echo get_template_directory_uri(); ?>/img/tidbyt/preview2.gif" width="138" height="69" alt="" class="cpreview">
</div>
<div class="ktable">
<img src="<?php echo get_template_directory_uri(); ?>/img/tidbyt/kmask.png" width="200" height="100" alt="" class="kmask">
<img src="<?php echo get_template_directory_uri(); ?>/img/tidbyt/preview1.gif" width="200" height="100" alt="" class="kpreview">
</div>
<div class="disclaimer"><span>Screen images simulated.&nbsp;</span>We&rsquo;re not sponsored by or affiliated with Tidbyt.</div>
</div>
<p><b>We love our sleek, sexy, unobtrusive, and <em>deliciously</em> retro <a href="https://tidbyt.com" target="_blank" rel="external nofollow">Tidbyt</a>. We love it very much.</b></p>
<p>We love that it&rsquo;s one of the only devices in our office that isn&rsquo;t spying on us. And we love how it keeps us up to date, without us needing to spend (even) more time on our smart devices.</p>
<p>We love our Tidbyt so much, in fact, that we designed an app of our very own.</p>
<p>To get our latest blog posts on your Tidbyt, just <span class="search-icon">search</span> for <span class="ccname">Critical&nbsp;Chicken</span> in your Tidbyt app.</p>
<div class="store-buttons">
<a href="https://play.google.com/store/apps/details?id=com.tidbyt.android" rel="external nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tidbyt/play-store.png" width="139" height="40" alt="Get it on Google Play"></a><a href="https://apps.apple.com/us/app/tidbyt/id1524348619" rel="external nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tidbyt/app-store.png" width="123" height="40" alt="Download on the App store"></a>
</div>
</div>
<?php get_template_part("V2-home-navigation"); ?>
<?php endwhile;endif; ?>
<?php get_template_part("V2-footer"); ?>
<?php wp_footer();?>
</body>
</html>
