<?php 

if(!defined('ABSPATH')) {
    EXIT;
}


if(!class_exist('WP_Site_Snapshot')) {

    class WP_Site_Snapshot {

        public function __construct() {
            add_action("wp-dashboard_setup", [$this, "register_dashboard"]);
        }

        public function register_dashboard() {
            wp_add_dashboard_widget("wp_site_snapshot_widget", esc_html__( "WP Site Snapshot", "wp-site-snapshot", [$this, "render_widget_html"] ));
        }

        public function render_widget_html() {
                
        }

    }


}