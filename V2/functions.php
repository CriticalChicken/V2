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
			echo('/category/best-of"><span class="titletag titletag-best-of">Best of</span></a>');
		}
		if (in_category('exclusives')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/exclusives"><span class="titletag titletag-yellow">Exclusive</span></a>');
		}
		if (in_category('live')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/live-updates"><span class="titletag titletag-live">Live</span></a>');
		}
		if (in_category('breaking-news')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/news"><span class="titletag titletag-yellow">Breaking news</span></a>');
		}
		if (in_category('news-alerts')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/news"><span class="titletag titletag-yellow">News alert</span></a>');
		}
		if (in_category('e3-2016')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/e3-2016"><span class="titletag titletag-e3">E3 2016</span></a>');
		}
		if (in_category('e3-2021')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/e3-2021"><span class="titletag titletag-e3">E3 2021</span></a>');
		}
		if (in_category('e3-2023')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/e3-2023"><span class="titletag titletag-e3">E3&rsquo;s future</span></a>');
		}
		if (in_category('summer-game-fest-2024')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/summer-game-fest-2024"><span class="titletag titletag-summer-game-fest">Summer Game Fest 2024</span></a>');
		}
		if (in_category('nintendo-direct')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/nintendo-direct"><span class="titletag titletag-nintendo-direct">Nintendo Direct</span></a>');
		}
		if (in_category('pokemon-presents')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/pokemon-presents"><span class="titletag titletag-pokemon-presents">Pok&eacute;mon Presents</span></a>');
		}
		if (in_category('state-of-play')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/state-of-play"><span class="titletag titletag-state-of-play">State of Play</span></a>');
		}
		if (in_category('ace-attorney')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/ace-attorney"><span class="titletag titletag-ace-attorney">Ace Attorney</span></a>');
		}
		if (in_category('forthegaymers')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/forthegaymers"><span class="titletag titletag-forthegaymers"><span class="htftg">#</span>ForTheGaymers</span></a>');
		}
	}
	
	// News categories, in order of priority
	if (in_category('news')) {
		if (!in_category('breaking-news') && !in_category('news-alerts')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/news"><span class="titletag titletag-news">News</span></a>');
		}
		if (in_category('updated')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/news"><span class="titletag titletag-hollow titletag-news">Updated</span></a>');
		}
		if (in_category('links')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/links"><span class="titletag titletag-hollow titletag-news">Link</span></a>');
		}
		if (in_category('live-updates')) {
			if (!in_category('live')) {
				echo('<a class="titletag-link" href="');
				echo get_site_url();
				echo('/category/live-updates"><span class="titletag titletag-hollow titletag-news">Live updates</span></a>');
			}
		}
		if (in_category('rumours')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/rumours"><span class="titletag titletag-hollow titletag-news">Rumour</span></a>');
		}
		if (in_category('site-updates')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/site-updates"><span class="titletag titletag-hollow titletag-news">Site update</span></a>');
		}
		if (in_category('updates')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/updates"><span class="titletag titletag-hollow titletag-news">Update</span></a>');
		}
		if (in_category('videos')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/videos"><span class="titletag titletag-hollow titletag-news">Video</span></a>');
		}
	}
	
	// Feature categories, in order of priority
	if (in_category('features')) {
		echo('<a class="titletag-link" href="');
		echo get_site_url();
		echo('/category/features"><span class="titletag titletag-features">Feature</span></a>');
		if (in_category('guest-blogs')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/guest-blogs"><span class="titletag titletag-hollow titletag-features">Guest blog</span></a>');
		}
		if (in_category('guides')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/guides"><span class="titletag titletag-hollow titletag-features">Guide</span></a>');
		}
		if (in_category('interviews')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/interviews"><span class="titletag titletag-hollow titletag-features">Interview</span></a>');
		}
		if (in_category('opinions')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/opinions"><span class="titletag titletag-hollow titletag-features">Opinion</span></a>');
		}
	}
	
	// Review categories, in order of priority
	if (in_category('reviews')) {
		echo('<a class="titletag-link" href="');
		echo get_site_url();
		echo('/category/reviews"><span class="titletag titletag-reviews">Review</span></a>');
		if (in_category('first-impressions')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/first-impressions"><span class="titletag titletag-hollow titletag-reviews">First impressions</span></a>');
		}
		if (in_category('hands-on')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/hands-on"><span class="titletag titletag-hollow titletag-reviews">Hands on</span></a>');
		}
		if (in_category('previews')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/previews"><span class="titletag titletag-hollow titletag-reviews">Previews</span></a>');
		}
		if (in_category('second-looks')) {
			echo('<a class="titletag-link" href="');
			echo get_site_url();
			echo('/category/second-looks"><span class="titletag titletag-hollow titletag-reviews">Second look</span></a>');
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
