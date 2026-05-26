<?php 

if(!defined('ABSPATH')) {
    exit; //exit the file
}


if(!class_exists('WP_Site_Snapshot')) {

    class WP_Site_Snapshot {

        // constructor function
        public function __construct() {
            add_action("wp-dashboard_setup", [$this, "register_dashboard"]);
        }

        public function register_dashboard() {
            wp_add_dashboard_widget("wp_site_snapshot_widget", esc_html__( "WP Site Snapshot", "wp-site-snapshot", [$this, "render_widget_html"] ));
        }

        public function render_widget_html() {
            require_once WP_SITE_SNAPSHOT_PATH . 'views/widget-display.php';     
        }

    }


}