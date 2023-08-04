<div id="container">
<?php if(get_option("mm_display")=="on"&&current_user_can("edit_posts")): ?><div id="maintenance-mode-active"><span>Maintenance Mode</span></div><?php endif; ?>
<div id="header-outer">
<div id="header-inner">
<a href="<?php echo get_site_url(); ?>" title="Home"><img src="<?php echo get_template_directory_uri(); ?>/img/branding_logo_color-on-white_for64px.png" alt="Critical Chicken" height="64"></a>
</div><!-- /header-inner -->
</div><!-- /header-outer -->
<div id="menu-outer">
<div id="menu-inner">
<?php get_template_part("V2-menu-items"); ?>
<div id="button-container">
<div id="menu-button" title="Menu"></div>
<div id="search-button" title="Search"></div>
</div>
</div><!-- /menu-inner -->
</div><!-- /menu-outer -->
<div id="mobile-menu">
    <div id="mobile-menu-inner">
    <?php get_template_part("V2-menu-items"); ?>
    <?php get_template_part("V2-socials-linear"); ?>
    </div>
</div>
<div id="mobile-search-button"></div>
<div id="mobile-close-button"></div>
<div id="popmenu-container">
<div id="popmenu-handle">
</div>
<div id="popmenu-box">
<ul id="popmenu-contents">
<li><a href="<?php echo get_site_url(); ?>/radar">Radar</a></li>
<li><a href="<?php echo get_site_url(); ?>/about">About</a></li>
<li><a href="mailto:office@criticalchicken.com">Contact</a></li>
</ul>
</div>
</div>
<div id="search-container">
<div id="search-handle">
</div>
<div id="search-box">
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>/"><div><label class="screen-reader-text" for="s">Search for:</label><input type="text" name="s" id="s" placeholder="Search&hellip;" /><input type="hidden" value="post" name="post_type" id="post_type"/></div></form>
</div>
</div>
<?php if(get_option('ticker_display') == "on") { ?><div id="ticker-outer">
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
<?php if(get_option('ticker_link') != "") { ?><div id="ticker-link">
<a href="<?php echo get_option('ticker_link'); ?>">Read more</a>
</div><!-- /ticker-link --><?php } ?>
</div><!-- /ticker-outer --><?php } ?>
