// JavaScript Document

/* Copyright © Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */


// Animate the breaking news ticker
$("#ticker-contents").webTicker({
	height: "32px",
	duplicate: true,
	rssfrequency: 0,
	startEmpty: true,
	hoverpause: false,
	speed: 96
});


// Display the page load time
var beforeload = (new Date()).getTime();

function getPageLoadTime(){

	var r_text = new Array ();
	r_text[0] = "built and paid for by Mexico";
	r_text[1] = "coughed up by your nan’s cat";
	r_text[2] = "performed by the London Symphony Orchestra";
	r_text[3] = "coded in real time by one really stressed dude";
	r_text[4] = "shot through a series of tubes";
	r_text[5] = "dreamed up by a coma patient";
	r_text[6] = "re-released in stunning high definition";
	r_text[7] = "delivered by your DPD driver Chris";
	r_text[8] = "passed down through the generations";
	r_text[9] = "dredged from the Internet swamp";
	r_text[10] = "scraped from the bottom of the barrel";
	r_text[11] = "speedrun by a Japanese guy";
	r_text[12] = "universally panned by critics";
	r_text[13] = "written by renowned author Dan Brown";
	r_text[14] = "hastily thrown together by GAME FREAK inc.";
	r_text[15] = "copied and pasted off of Wikipedia";
	r_text[16] = "whittled by a sexy lumberjack";
	r_text[17] = "commissioned and cancelled by Netflix";
	r_text[18] = "gifted, then immediately regifted";
	r_text[19] = "fashioned from twigs and bits of string";
	r_text[20] = "straightwashed by a historian";
	r_text[21] = "hot glue-gunned to death by a suburban mom";
	r_text[22] = "booed off stage at an open-mic night";
	r_text[23] = "foretold by a biblically-accurate seraphim";
	r_text[24] = "adapted into a major motion picture";
	r_text[25] = "bought out and ruined by Elon Musk";

	var i = Math.floor(r_text.length * Math.random());
	var afterload = (new Date()).getTime();
    seconds = (afterload-beforeload) / 1000;
	if(seconds == 1) {
		var plurality = ".";
	} else {
		var plurality = "s.";
	}
    $("#load_time").text('This page was ' + r_text[i] + ' in ' + seconds + ' second' + plurality);
}


// Make the search button work
$("#search-button").click(function() {
	$("#popmenu-container").removeClass("active");
    $("#search-container").addClass("active");
	$("#s").focus();
});
$("#search-handle").click(function() {
    $("#search-container").removeClass("active");
});


// Make the pop-up menus work
$("#menu-button").click(function() {
	$("#search-container").removeClass("active");
    $("#popmenu-container").addClass("active");
});
$("#popmenu-handle").click(function() {
    $("#popmenu-container").removeClass("active");
});


// Fix pluralisation for timetips
$("span.timetip").each(function() {
	if($(this).text().charAt(0) == "1" && $(this).text().charAt(1) == " ") {
		$(this).text($(this).text().replace("years","year"));
	}
	$(this).text($(this).text().replace(" 1 months"," 1 month"));
	$(this).text($(this).text().replace(" 1 days"," 1 day"));
});


// Keep spacing on .individual-post on-grid
$(".wp-element-caption").each(function() {
	$(this).parent("figure").addClass("has-caption");
});


// Add "and" before the last tag in the list
$("span.post-meta-tags a:last-of-type").each(function() {
	$(this).before("and ");
});


// Make the "back to top" button smooooooth
$("#back-to-top").click(function() {
    $("html, body").animate({scrollTop: 0}, 1200);
});


// Handle functions that trigger when the page is fully loaded
$(window).on("load", function() {
	vitalStatistics();
	getPageLoadTime();
});
