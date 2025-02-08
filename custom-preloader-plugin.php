<?php
/*
Plugin Name: WooCommerce Custom Preloader Plugin by Siyum
Description: A lightweight preloader plugin for WooCommerce websites with a default animated GIF.
Version: 1.2
Author: Jubair Siyum
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin directory URL for assets
define('CPP_PLUGIN_URL', plugin_dir_url(__FILE__));

// Enqueue styles and scripts
function cpp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_style('cpp-styles', CPP_PLUGIN_URL . 'css/preloader-styles.css', array(), '1.2');
        wp_enqueue_script('cpp-scripts', CPP_PLUGIN_URL . 'js/preloader-scripts.js', array('jquery'), '1.2', true);
    }
}
add_action('wp_enqueue_scripts', 'cpp_enqueue_scripts');

// Add preloader HTML template
function cpp_add_preloader() {
    include plugin_dir_path(__FILE__) . 'templates/preloader-template.php';
}
add_action('wp_body_open', 'cpp_add_preloader');
