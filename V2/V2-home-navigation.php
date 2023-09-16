<div id="home-navigation"<?php if(is_page() || is_single()) { echo('class="on-a-single-post"'); } ?>>
<ul>
<li class="latest"><a href="<?php echo get_site_url(); ?>/latest">Latest</a></li>
<li class="news"><a href="<?php echo get_site_url(); ?>/section/news">News</a></li>
<li class="features"><a href="<?php echo get_site_url(); ?>/section/features">Features</a></li>
<li class="reviews"><a href="<?php echo get_site_url(); ?>/section/reviews">Reviews</a></li>
<li class="ko-fi"><a href="https://ko-fi.com/criticalchicken" target="_blank" rel="external me"><img src="<?php echo get_template_directory_uri(); ?>/img/ui_ko-fi_color-on-transparent_for16px.png" width="25" height="16" alt=""><span>Support us</span></a></li>
</ul>
</div><!-- /home-navigation -->
