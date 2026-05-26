<?php

/**
 * Plugin Name: WP Site Snapshot
 * Description: See your data instantly. Adds a dashboard widget with post counts, comment totals, and your latest 5 article titles
 * Version: 1.0.0
 * Author: Moshtafizur
 * License: GPL-2.0-or-later
 * Text Domain: wp-site-snapshot
 */

if(!defined('ABSPATH')) {
    exit; // exit of accessed directly
}

///define the constant
define("WP_SITE_SNAPSHOT_PATH", plugin_dir_path( __FILE__ ));


//include the main class
require_once WP_SITE_SNAPSHOT_PATH . 'includes/class-wp-site-snapshot.php';

function wp_site_snapshot_plugin(){
    new WP_Site_Snapshot();
}

//load teh plugin
add_action('plugins_loaded', 'wp_site_snapshot_plugin'); 