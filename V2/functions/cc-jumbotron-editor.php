<?php

/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */

add_action( 'admin_menu', 'cc_jumbotron_editor' );

function cc_jumbotron_editor() {
	add_menu_page('Jumbotron Editor', 'Jumbotron', 'manage_options', 'cc-jumbotron-editor', 'cc_jumbotron_editor_contents', 'dashicons-megaphone', 3  );
}

function cc_jumbotron_editor_contents() {
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,700;1,700&subset=latin-ext&display=swap" rel="stylesheet">
<style type="text/css">
#cc_jumbotron_text {
	width: 544px;
	height: 326px;
	font-family: 'Noto Sans Display', sans-serif;
	font-size: 62px;
	line-height: 80px;
	font-weight: 700;
	resize: none;
	overflow: hidden;
	padding: 0 !important;
	margin: 0 !important;
}
</style>

<div class="wrap">
	<h1 style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/admin_v2_color-on-transparent_for31px.png'); background-size: 41.5px 31px; background-position: left 12px; background-repeat: no-repeat; padding: 8px 0 12px 53.5px !important; height: 31px !important; line-height: 31px !important;">Jumbotron Editor</h1>
	<form method="POST" action="options.php">
		<?php
		settings_fields('cc-jumbotron-editor');
		do_settings_sections('cc-jumbotron-editor');
		submit_button();
		?>
    </form>
</div>

<?php
}

add_action( 'admin_init', 'cc_jumbotron_settings_init' );

function cc_jumbotron_settings_init() {

	add_settings_section(
		'cc-jumbotron-editor_setting_section',
		__( '', 'my-textdomain' ),
		'cc_jumbotron_editor_intro',
		'cc-jumbotron-editor'
	);

	add_settings_field(
		'cc_jumbotron_color_field',
		__( 'Colour scheme', 'my-textdomain' ),
		'cc_jumbotron_editor_color_field',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_titletag1_special',
		__( 'TitleTag 1', 'my-textdomain' ),
		'cc_jumbotron_editor_titletag1_special',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_titletag1_text',
		__( '', 'my-textdomain' ),
		'cc_jumbotron_editor_titletag1_text',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_titletag2_display',
		__( 'TitleTag2', 'my-textdomain' ),
		'cc_jumbotron_editor_titletag2_display',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_titletag2_type',
		__( '', 'my-textdomain' ),
		'cc_jumbotron_editor_titletag2_type',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_titletag2_special',
		__( '', 'my-textdomain' ),
		'cc_jumbotron_editor_titletag2_special',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_titletag2_text',
		__( '', 'my-textdomain' ),
		'cc_jumbotron_editor_titletag2_text',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_text',
		__( 'Main text', 'my-textdomain' ),
		'cc_jumbotron_editor_text',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_image',
		__( 'Image', 'my-textdomain' ),
		'cc_jumbotron_editor_image',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_alt',
		__( '', 'my-textdomain' ),
		'cc_jumbotron_editor_alt',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);
	
	add_settings_field(
		'cc_jumbotron_link',
		__( 'Link URL', 'my-textdomain' ),
		'cc_jumbotron_editor_link',
		'cc-jumbotron-editor',
		'cc-jumbotron-editor_setting_section'
	);

	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_color_field' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_titletag1_special' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_titletag1_text' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_titletag2_display' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_titletag2_type' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_titletag2_special' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_titletag2_text' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_text' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_image' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_alt' );
	register_setting( 'cc-jumbotron-editor', 'cc_jumbotron_link' );
}

function cc_jumbotron_editor_intro() {
	// Not currently used
}

function cc_jumbotron_editor_color_field() {
	$current_color_scheme = get_option('cc_jumbotron_color_field');
?>
		<select name="cc_jumbotron_color_field" id="cc_jumbotron_color_field" style="width: 400px">
			<option value="black"<?php if($current_color_scheme == "black") { echo(' selected="selected"'); } ?>>Generic (black)</option>
			<option value="red"<?php if($current_color_scheme == "red") { echo(' selected="selected"'); } ?>>News (red)</option>
			<option value="blue"<?php if($current_color_scheme == "blue") { echo(' selected="selected"'); } ?>>Features (blue)</option>
			<option value="orange"<?php if($current_color_scheme == "orange") { echo(' selected="selected"'); } ?>>Reviews (orange)</option>
		</select>

<?php
}

function cc_jumbotron_editor_titletag1_special() {
	$current_titletag1_special = get_option('cc_jumbotron_titletag1_special');
?>
		<p>Icon:</p>
		<select name="cc_jumbotron_titletag1_special" id="cc_jumbotron_titletag1_special" style="width: 400px">
			<option value="none"<?php if($current_titletag1_special == "none") { echo(' selected="selected"'); } ?>>None</option>
			<option value="ace-attorney"<?php if($current_titletag1_special == "ace-attorney") { echo(' selected="selected"'); } ?>>Ace Attorney</option>
			<option value="e3"<?php if($current_titletag1_special == "e3") { echo(' selected="selected"'); } ?>>E3</option>
			<option value="live"<?php if($current_titletag1_special == "live") { echo(' selected="selected"'); } ?>>Live</option>
			<option value="nintendo-direct"<?php if($current_titletag1_special == "nintendo-direct") { echo(' selected="selected"'); } ?>>Nintendo Direct</option>
			<option value="pokemon-presents"<?php if($current_titletag1_special == "pokemon-presents") { echo(' selected="selected"'); } ?>>Pok&eacute;mon Presents</option>
			<option value="state-of-play"<?php if($current_titletag1_special == "state-of-play") { echo(' selected="selected"'); } ?>>State of Play</option>
			<option value="summer-game-fest"<?php if($current_titletag1_special == "summer-game-fest") { echo(' selected="selected"'); } ?>>Summer Game Fest</option>
		</select>

<?php
}

function cc_jumbotron_editor_titletag1_text() {
?>
		<p>Text:</p>
		<input type="text" name="cc_jumbotron_titletag1_text" id="cc_jumbotron_titletag1_text" style="width: 400px" value="<?php echo get_option('cc_jumbotron_titletag1_text'); ?>">

<?php
}

function cc_jumbotron_editor_titletag2_display() {
	$current_titletag2_display = get_option('cc_jumbotron_titletag2_display');
?>
		<p>Visible?</p>
		<input type="checkbox" name="cc_jumbotron_titletag2_display" id="cc_jumbotron_titletag2_display"<?php if($current_titletag2_display == "on") { echo(' checked'); } ?>>

<?php
}

function cc_jumbotron_editor_titletag2_type() {
	$current_titletag2_type = get_option('cc_jumbotron_titletag2_type');
?>
		<p>Type:</p>
		<select name="cc_jumbotron_titletag2_type" id="cc_jumbotron_titletag2_type" style="width: 400px">
			<option value="main"<?php if($current_titletag2_type == "main") { echo(' selected="selected"'); } ?>>Main TitleTag (filled in)</option>
			<option value="sub"<?php if($current_titletag2_type == "sub") { echo(' selected="selected"'); } ?>>Sub TitleTag (outlined)</option>
		</select>

<?php
}

function cc_jumbotron_editor_titletag2_special() {
	$current_titletag2_special = get_option('cc_jumbotron_titletag2_special');
?>
		<p>Icon:</p>
		<select name="cc_jumbotron_titletag2_special" id="cc_jumbotron_titletag2_special" style="width: 400px">
			<option value="none"<?php if($current_titletag2_special == "none") { echo(' selected="selected"'); } ?>>None</option>
			<option value="ace-attorney"<?php if($current_titletag2_special == "ace-attorney") { echo(' selected="selected"'); } ?>>Ace Attorney</option>
			<option value="e3"<?php if($current_titletag2_special == "e3") { echo(' selected="selected"'); } ?>>E3</option>
			<option value="live"<?php if($current_titletag2_special == "live") { echo(' selected="selected"'); } ?>>Live</option>
			<option value="nintendo-direct"<?php if($current_titletag2_special == "nintendo-direct") { echo(' selected="selected"'); } ?>>Nintendo Direct</option>
			<option value="pokemon-presents"<?php if($current_titletag2_special == "pokemon-presents") { echo(' selected="selected"'); } ?>>Pok&eacute;mon Presents</option>
			<option value="state-of-play"<?php if($current_titletag2_special == "state-of-play") { echo(' selected="selected"'); } ?>>State of Play</option>
			<option value="summer-game-fest"<?php if($current_titletag2_special == "summer-game-fest") { echo(' selected="selected"'); } ?>>Summer Game Fest</option>
		</select>
		<p style="font-size: small;">The icon will only be shown if &ldquo;Type&rdquo; (above) is set to &ldquo;Main&rdquo;.</p>

<?php
}

function cc_jumbotron_editor_titletag2_text() {
?>
		<p>Text:</p>
		<input type="text" name="cc_jumbotron_titletag2_text" style="width: 400px" id="cc_jumbotron_titletag2_text" value="<?php echo get_option('cc_jumbotron_titletag2_text'); ?>">

<?php
}

function cc_jumbotron_editor_text() {
?>
		<textarea name="cc_jumbotron_text" id="cc_jumbotron_text" rows="4"><?php echo get_option('cc_jumbotron_text'); ?></textarea>
		<p style="font-size: small;">If your text fits in the box, it&rsquo;ll fit on the website.</p>

<?php
}

function cc_jumbotron_editor_image() {
?>
		<p>URL:</p>
		<input type="text" name="cc_jumbotron_image" id="cc_jumbotron_image" value="<?php echo get_option('cc_jumbotron_image'); ?>" style="width: 400px">
		<p style="font-size: small;">Your image <strong>must</strong> be 16:9 (widescreen) and <strong>at least</strong> 1,080 &times; 608 pixel resolution.</p>
		<p><a href="<?php echo get_site_url(); ?>/wp-admin/upload.php" target="_blank"><b>Media Library &raquo;</b></a></p>

<?php
}

function cc_jumbotron_editor_alt() {
?>
		<p>Alt text:</p>
		<input type="text" name="cc_jumbotron_alt" id="cc_jumbotron_alt" value="<?php echo get_option('cc_jumbotron_alt'); ?>" style="width: 400px">
		<p style="font-size: small;"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree/" target="_blank" rel="external nofollow help"><b>Describe the purpose of your image &raquo;</b></a></p>

<?php
}

function cc_jumbotron_editor_link() {
?>
		<input type="text" name="cc_jumbotron_link" id="cc_jumbotron_link" value="<?php echo get_option('cc_jumbotron_link'); ?>" style="width: 400px">
		<p style="font-size: small;">In rare cases where a link isn&rsquo;t needed, just leave this field blank.</p>

<?php
}