<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

// Fallback thumbnail picker
function fallbackThumbnailPicker() {
	if (in_category('exclusives') || in_category('live') || in_category('breaking-news') || in_category('news-alerts')) {
		echo('/img/thumbnail_black-on-yellow_for198px.png');
	} else if (in_category('news')) {
		echo('/img/thumbnail_white-on-red_for198px.png');
	} else if (in_category('features')) {
		echo('/img/thumbnail_white-on-blue_for198px.png');
	} else if (in_category('reviews')) {
		echo('/img/thumbnail_white-on-orange_for198px.png');
	} else {
		echo('/img/thumbnail_white-on-black_for198px.png');
	}
}

// Category link generator
function categoryLinkGenerator() {

	// Special categories, in order of priority
	if (in_category('special')) {
		if (in_category('best-of')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/best-of"><span class="titletag titletag-best-of">Best of</span></a>');
		}
		if (in_category('exclusives')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/exclusives"><span class="titletag titletag-yellow">Exclusive</span></a>');
		}
		if (in_category('live')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/live-updates"><span class="titletag titletag-live">Live</span></a>');
		}
		if (in_category('breaking-news')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/news"><span class="titletag titletag-yellow">Breaking news</span></a>');
		}
		if (in_category('news-alerts')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/news"><span class="titletag titletag-yellow">News alert</span></a>');
		}
		if (in_category('e3-2016')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/e3-2016"><span class="titletag titletag-e3">E3 2016</span></a>');
		}
		if (in_category('e3-2021')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/e3-2021"><span class="titletag titletag-e3">E3 2021</span></a>');
		}
		if (in_category('e3-2023')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/e3-2023"><span class="titletag titletag-e3">E3&rsquo;s future</span></a>');
		}
		if (in_category('summer-game-fest-2024')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/summer-game-fest-2024"><span class="titletag titletag-summer-game-fest">Summer Game Fest 2024</span></a>');
		}
		if (in_category('nintendo-direct')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/nintendo-direct"><span class="titletag titletag-nintendo-direct">Nintendo Direct</span></a>');
		}
		if (in_category('pokemon-presents')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/pokemon-presents"><span class="titletag titletag-pokemon-presents">Pok&eacute;mon Presents</span></a>');
		}
		if (in_category('state-of-play')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/state-of-play"><span class="titletag titletag-state-of-play">State of Play</span></a>');
		}
		if (in_category('ace-attorney')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/ace-attorney"><span class="titletag titletag-ace-attorney">Ace Attorney</span></a>');
		}
		if (in_category('forthegaymers')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/forthegaymers"><span class="titletag titletag-forthegaymers"><span class="htftg">#</span>ForTheGaymers</span></a>');
		}
	}
	
	// News categories, in order of priority
	if (in_category('news')) {
		if (!in_category('breaking-news') && !in_category('news-alerts')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/news"><span class="titletag titletag-news">News</span></a>');
		}
		if (in_category('updated')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/news"><span class="titletag titletag-hollow titletag-news">Updated</span></a>');
		}
		if (in_category('links')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/links"><span class="titletag titletag-hollow titletag-news">Link</span></a>');
		}
		if (in_category('live-updates')) {
			if (!in_category('live')) {
				echo('<a class="titletag-link" href="');
				echo get_site_url();
				echo('/section/live-updates"><span class="titletag titletag-hollow titletag-news">Live updates</span></a>');
			}
		}
		if (in_category('rumours')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/rumours"><span class="titletag titletag-hollow titletag-news">Rumour</span></a>');
		}
		if (in_category('site-updates')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/site-updates"><span class="titletag titletag-hollow titletag-news">Site update</span></a>');
		}
		if (in_category('updates')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/updates"><span class="titletag titletag-hollow titletag-news">Update</span></a>');
		}
		if (in_category('videos')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/videos"><span class="titletag titletag-hollow titletag-news">Video</span></a>');
		}
	}
	
	// Feature categories, in order of priority
	if (in_category('features')) {
		echo('<a class="titletag-link" href="');
		echo get_site_url();
		echo('/section/features"><span class="titletag titletag-features">Feature</span></a>');
		if (in_category('guest-blogs')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/guest-blogs"><span class="titletag titletag-hollow titletag-features">Guest blog</span></a>');
		}
		if (in_category('guides')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/guides"><span class="titletag titletag-hollow titletag-features">Guide</span></a>');
		}
		if (in_category('interviews')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/interviews"><span class="titletag titletag-hollow titletag-features">Interview</span></a>');
		}
		if (in_category('opinions')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/opinions"><span class="titletag titletag-hollow titletag-features">Opinion</span></a>');
		}
	}
	
	// Review categories, in order of priority
	if (in_category('reviews')) {
		echo('<a class="titletag-link" href="');
		echo get_site_url();
		echo('/section/reviews"><span class="titletag titletag-reviews">Review</span></a>');
		if (in_category('first-impressions')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/first-impressions"><span class="titletag titletag-hollow titletag-reviews">First impressions</span></a>');
		}
		if (in_category('hands-on')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/hands-on"><span class="titletag titletag-hollow titletag-reviews">Hands on</span></a>');
		}
		if (in_category('previews')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/previews"><span class="titletag titletag-hollow titletag-reviews">Previews</span></a>');
		}
		if (in_category('second-looks')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/section/second-looks"><span class="titletag titletag-hollow titletag-reviews">Second look</span></a>');
		}
	}

}


// Add featured images (groundwork for V2.1)
add_theme_support( 'post-thumbnails' );

// Add extra pages to the admin dashboard
require_once(TEMPLATEPATH . '/functions/jumbotron-editor.php');
require_once(TEMPLATEPATH . '/functions/ticker-editor.php');
require_once(TEMPLATEPATH . '/functions/maintenance-mode-editor.php');
require_once(TEMPLATEPATH . '/functions/cc-jumbotron-editor.php');
require_once(TEMPLATEPATH . '/functions/cc-ticker-editor.php');
require_once(TEMPLATEPATH . '/functions/cc-maintenance-mode-editor.php');
require_once(TEMPLATEPATH . '/functions/cc-menu-editor.php');
require_once(TEMPLATEPATH . '/functions/cc-chickenfeed-editor.php');
require_once(TEMPLATEPATH . '/functions/cc-adminnouncement-editor.php');


// filter for tags with comma
//  replace '--' with ', ' in the output - allow tags with comma this way
//  e.g. save tag as "Fox--Peter" but display thx 2 filters like "Fox, Peter"

if(!is_admin()){ // make sure the filters are only called in the frontend
    function comma_tag_filter($tag_arr){
        $tag_arr_new = $tag_arr;
        if($tag_arr->taxonomy == 'post_tag' && strpos($tag_arr->name, '--')){
            $tag_arr_new->name = str_replace('--',', ',$tag_arr->name);
        }
        return $tag_arr_new;    
    }
    add_filter('get_post_tag', 'comma_tag_filter');

    function comma_tags_filter($tags_arr){
        $tags_arr_new = array();
        foreach($tags_arr as $tag_arr){
            $tags_arr_new[] = comma_tag_filter($tag_arr);
        }
        return $tags_arr_new;
    }
    add_filter('get_terms', 'comma_tags_filter');
    add_filter('get_the_terms', 'comma_tags_filter');
}

// De-code the encoded HTML entities for our Tidbyt apps
function fix_decode_rest_api($response, $post, $request) {

    if (isset($post)) {
        
        $decodedTitle = html_entity_decode($post->post_title);
        $response->data['title']['rendered'] = $decodedTitle;
 
        
        $decodedPostTitle = html_entity_decode($response->data['title']['rendered']);
        $response->data['title']['rendered'] = $decodedPostTitle;

		$decodedExcerpt = html_entity_decode($post->post_excerpt);
        $response->data['excerpt']['rendered'] = $decodedExcerpt;
 
        
        $decodedPostExcerpt = html_entity_decode($response->data['excerpt']['rendered']);
        $response->data['excerpt']['rendered'] = $decodedPostExcerpt;
    }
    return $response;
}
add_filter('rest_prepare_post', 'fix_decode_rest_api', 10, 3);


// Stop users editing their profiles
if( defined('IS_PROFILE_PAGE') && IS_PROFILE_PAGE === true ){
	$site = get_site_url();
	$path = get_template_directory_uri();
    wp_die( '<p><img src="' . $path . '/img/admin_v2_color-on-transparent_for31px.png" style="width: 41.5px; height: 31px;" alt="V2"></p><p><b>There are potentially website-breaking things on this page, so we&rsquo;ve disabled it.</b></p><p>You can still change your own profile picture on <a href="https://en.gravatar.com" target="_blank" rel="external">Gravatar</a> (sign in with your &ldquo;firstname@criticalchicken.com&rdquo; email address). If you&rsquo;d like any other changes made to your profile, email <a href="mailto:office@criticalchicken.com">office@criticalchicken.com</a>.</p><p><a href="'. $site . '/wp-admin/index.php">Go back to the Dashboard &raquo;</a></p>' );
}


// Change "Thank you for creating with WordPress" text
function remove_footer_admin () {
	echo '<span id="footer-thankyou">Thank you for creating with <a href="https://github.com/CriticalChicken/V2" target="_blank" rel="external me">V2</a> and <a href="https://wordpress.org" target="_blank" rel="external">WordPress</a>.</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


// Admin announcements box
function is_site_admin(){
	return in_array('administrator', wp_get_current_user()->roles);
}
function v2_admin_ticker() {
	// Dummied out until V2.1
	$message = '';
    return $message;
}
add_shortcode('v2_admin_ticker', 'v2_admin_ticker');
function v2_admin_mmode() {
	// Dummied out until V2.1
	$message = '';
	return $message;
}
add_shortcode('v2_admin_mmode', 'v2_admin_mmode');
function v2_admin_emailedit() {
	$message = '<a href="mailto:office@criticalchicken.com" rel="me" class="iconic email" title="Email the admins"><img src="https://www.criticalchicken.com/wp-content/themes/V2-1/img/admin/iconic-email.png" width="30" height="30" alt="Email"></a>';
	if(is_site_admin()) {
		$message = '<a href="https://www.criticalchicken.com/wp-admin/admin.php?page=cc-adminnouncement-editor" class="iconic edit" title="Edit these announcements"><img src="https://www.criticalchicken.com/wp-content/themes/V2-1/img/admin/iconic-edit.png" width="30" height="30" alt="Edit"></a>';
	}
	return $message;
}
add_shortcode('v2_admin_emailedit', 'v2_admin_emailedit');
function v2_adminnouncement() {
	$message = '';
	if(get_option('cc_adminnouncement_display') == 'on') {
		$item1 = '';
		$item2 = '';
		$item3 = '';
		$item4 = '';
		$item5 = '';
		$item6 = '';
		$item7 = '';
		$item8 = '';
		$item9 = '';
		$item10 = '';
		if(get_option('cc_adminnouncement_item1') != '') {
			$item1 = '<p>' . get_option('cc_adminnouncement_item1') . '</p>';
		}
		if(get_option('cc_adminnouncement_item2') != '') {
			$item2 = '<p>' . get_option('cc_adminnouncement_item2') . '</p>';
		}
		if(get_option('cc_adminnouncement_item3') != '') {
			$item3 = '<p>' . get_option('cc_adminnouncement_item3') . '</p>';
		}
		if(get_option('cc_adminnouncement_item4') != '') {
			$item4 = '<p>' . get_option('cc_adminnouncement_item4') . '</p>';
		}
		if(get_option('cc_adminnouncement_item5') != '') {
			$item5 = '<p>' . get_option('cc_adminnouncement_item5') . '</p>';
		}
		if(get_option('cc_adminnouncement_item6') != '') {
			$item6 = '<p>' . get_option('cc_adminnouncement_item6') . '</p>';
		}
		if(get_option('cc_adminnouncement_item7') != '') {
			$item7 = '<p>' . get_option('cc_adminnouncement_item7') . '</p>';
		}
		if(get_option('cc_adminnouncement_item8') != '') {
			$item8 = '<p>' . get_option('cc_adminnouncement_item8') . '</p>';
		}
		if(get_option('cc_adminnouncement_item9') != '') {
			$item9 = '<p>' . get_option('cc_adminnouncement_item9') . '</p>';
		}
		if(get_option('cc_adminnouncement_item10') != '') {
			$item10 = '<p>' . get_option('cc_adminnouncement_item10') . '</p>';
		}
		$message = '<div class="notice adminnouncement inline">' . $item1 . $item2 . $item3 . $item4 . $item5 . $item6 . $item7 . $item8 . $item9 . $item10 . '</div>';
	}
    return $message;
}
add_shortcode('v2_adminnouncement', 'v2_adminnouncement');
