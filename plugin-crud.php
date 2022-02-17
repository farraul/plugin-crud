<?php

/**
 * Plugin Name: Plugin crud
 * Description: Plugin con crud
 * Plugin URI: https://raulfar.com/
 * Author: Raúl far
 * Author URI: https://raulfar.com/
 */

define('PC_DIR_PATH', plugin_dir_path(__FILE__));

define('PC_DIR_URL', plugin_dir_url(__FILE__));

function enqueue_styles(){
    wp_enqueue_style(
        'pc_admin_style',
        PC_DIR_URL . 'admin/assets/css/style.css'
    );
}


//var_dump(PC_DIR_PATH);
//echo '<br>';
//var_dump(PC_DIR_URL);
//require 'admin/assets/css/core.php';

add_action('plugins_loaded', function(){
    add_action('admin_enqueue_scripts', 'enqueue_styles');
});