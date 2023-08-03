<div id="footer-outer">
<div id="footer-inner">
<?php get_template_part("V2-socials-linear"); ?>
<span class="copyright">Copyright &copy; 2016&ndash;<?php echo date("Y"); ?> Critical Chicken.&nbsp;<br>All rights reserved.</span>
<span class="trademark">Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.&nbsp;<br>All other trademarks referred to are trademarks of their respective owners.</span>
<div id="footer-links">
<ul>
<li><a href="<?php echo get_site_url(); ?>/privacy">Privacy policy &raquo;</a></li>
</ul>
</div><!-- /footer-links -->
<div id="back-to-top" title="Back to top"></div>
<div id="version">
<img src="<?php echo get_template_directory_uri(); ?>/img/branding_v2_color-on-white_for32px.png" width="43" height="32" alt="Critical Chicken V2" title="V2.0 Brazen Blackbird"><p id="load_time">Still loading&hellip;</p>
</div><!-- /version -->
</div><!-- /footer-inner -->
</div><!-- /footer-outer -->
</div><!-- /container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"><\/script>')</script>
<?php if(get_option('ticker_display') == "on") { ?><script src="<?php echo get_template_directory_uri(); ?>/js/jquery.webticker.min.js"></script><?php } ?>
<?php if(is_single()) { ?><script src="<?php echo get_template_directory_uri(); ?>/js/momentum.min.js"></script><?php } ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<?php if(!current_user_can('edit_posts')) { ?><script data-host="https://microanalytics.io" data-dnt="false" src="https://microanalytics.io/js/script.js" id="ZwSg9rf6GA" async defer></script><?php } ?>
