<?php
/*
Plugin Name: WSUWP Social Media Tools
Version: 0.0.1
Description: A plugin to add Social Media Tools.
Author: washingtonstateuniversity, Danial Bleile
Author URI: https://github.com/washingtonstateuniversity/
Plugin URI: https://github.com/washingtonstateuniversity/wsuwp-plugin-social-media
Text Domain: wsuwp-plugin-social-media
Requires at least: 4.7
Tested up to: 5.2.0
Requires PHP: 5.3
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/includes/classes/class-wsuwp-social-media.php';

$wsuwp_social_media = WSUWP\Social\WSUWP_Social_Media::get_instance();

add_action( 'after_setup_theme', array( $wsuwp_social_media, 'setup_plugin' ) );
