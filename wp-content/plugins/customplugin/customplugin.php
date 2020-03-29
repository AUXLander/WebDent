<?php
/*
 *  Plugin Name: Мой супер-плагин
 *  Plugin URI: 
 *  Description: 
 *  Version: 1.1.1
 *  Author: Denis Nikolaev
 *  Author URI: 
 *  License: 
 */

require_once plugin_dir_path(__FILE__) . 'includes/functions.php';

register_activation_hook( __FILE__, 'CP_install' );

function CP_install() {
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    $table_name = $wpdb->prefix . 'custom_table';

    $SQL = "CREATE TABLE $table_name (
        id  int(120) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    dbDelta($SQL);
}


function time_table_display(){
    return "<div>TIME TABLE</div>";
}

add_shortcode('timetable', 'time_table_display');