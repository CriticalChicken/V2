<a name="top"></a>
<div id="container">
<div id="header-outer">
<div id="header-inner">
<a href="<?php echo get_site_url(); ?>" title="Home"><img src="<?php echo get_template_directory_uri(); ?>/img/branding_logo_color-on-white_for64px.png" alt="Critical Chicken" height="64"></a>
</div><!-- /header-inner -->
</div><!-- /header-outer -->
<div id="menu-outer">
<div id="menu-inner">
<ul id="bold-menu-items">
<li><a href="<?php echo get_site_url(); ?>/latest">Latest</a></li>
<li><a href="<?php echo get_site_url(); ?>/category/news">News</a></li>
<li><a href="<?php echo get_site_url(); ?>/category/features">Features</a></li>
<li><a href="<?php echo get_site_url(); ?>/category/reviews">Reviews</a></li>
<li><a href="#">Summer Game Fest</a></li>
<li><a href="<?php echo get_site_url(); ?>/explore">Explore</a></li>
</ul><!-- /bold-menu-items -->
<ul id="regular-menu-items">
<li><a href="<?php echo get_site_url(); ?>/radar">Radar</a></li>
<li><a href="<?php echo get_site_url(); ?>/about">About</a></li>
<li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
</ul><!-- /regular-menu-items -->
<a href="#" title="Search"><img src="<?php echo get_template_directory_uri(); ?>/img/ui_search_white-on-black_for20px.png" alt="Search" height="16"></a>
</div><!-- /menu-inner -->
</div><!-- /menu-outer -->
<?php $ticker_checker = get_option('ticker_display'); if($ticker_checker == "on") { ?><div id="ticker-outer">
<div id="ticker-titletag">
<span class="titletag titletag-<?php echo get_option('ticker_titletag_special'); ?>"><?php echo get_option('ticker_titletag_text'); ?></span>
</div><!-- /ticker-titletag -->
<div id="ticker-inner">
<ul id="ticker-contents">
<?php
$item1 = get_option('ticker_item1');
$item2 = get_option('ticker_item2');
$item3 = get_option('ticker_item3');
$item4 = get_option('ticker_item4');
$item5 = get_option('ticker_item5');
$item6 = get_option('ticker_item6');
$item7 = get_option('ticker_item7');
$item8 = get_option('ticker_item8');
$item9 = get_option('ticker_item9');
$item10 = get_option('ticker_item10');

if(!$item1 == "") { echo "<li>" . $item1 . "</li>"; }
if(!$item2 == "") { echo "<li>" . $item2 . "</li>"; }
if(!$item3 == "") { echo "<li>" . $item3 . "</li>"; }
if(!$item4 == "") { echo "<li>" . $item4 . "</li>"; }
if(!$item5 == "") { echo "<li>" . $item5 . "</li>"; }
if(!$item6 == "") { echo "<li>" . $item6 . "</li>"; }
if(!$item7 == "") { echo "<li>" . $item7 . "</li>"; }
if(!$item8 == "") { echo "<li>" . $item8 . "</li>"; }
if(!$item9 == "") { echo "<li>" . $item9 . "</li>"; }
if(!$item10 == "") { echo "<li>" . $item10 . "</li>"; }
?>
</ul><!-- /ticker-contents -->
</div><!-- /ticker-inner -->
<?php $ticker_link_checker = get_option('ticker_link'); if(!$ticker_link_checker == "") { ?><div id="ticker-link">
<a href="<?php echo get_option('ticker_link'); ?>" title="Read more">Read more</a>
</div><!-- /ticker-link --><?php } ?>
</div><!-- /ticker-outer --><?php } ?>