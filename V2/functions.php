<?php

/* Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
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
			echo('/category/e3-2023"><span class="titletag titletag-e3">E3 2023 and beyond</span></a>');
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
			echo('/category/forthegaymers"><span class="titletag titletag-forthegaymers">#ForTheGaymers</span></a>');
		}
	}
	
	// News categories, in order of priority
	if (in_category('news')) {
		if (!in_category('breaking-news') && !in_category('news-alert')) {
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

// Add extra pages to the admin dashboard
require_once(TEMPLATEPATH . '/functions/jumbotron-editor.php');
require_once(TEMPLATEPATH . '/functions/ticker-editor.php');