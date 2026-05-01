<?php
/**
 * Theme Functions
 * 
 * @package Homara
 * 
 * @author John Tresvalles
 * 
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* =========================
   Theme Constants
========================= */
define('HMR_THEME_DIR', get_template_directory());
define('HMR_THEME_URI', get_template_directory_uri());

/* =========================
   Theme Setup
========================= */
function homara_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
}
add_action('after_setup_theme', 'homara_theme_setup');

/* =========================
   Assets (CSS + JS)
========================= */

function homara_enqueue_assets() {

    // Main CSS
    $css_file = HMR_THEME_DIR . '/assets/css/main.min.css';
    wp_enqueue_style(
        'jt-main-style',
        HMR_THEME_URI . '/assets/css/main.min.css',
        [],
        file_exists($css_file) ? filemtime($css_file) : null
    );

    // Main JS
    $js_file = HMR_THEME_DIR . '/assets/js/main.min.js';
    wp_enqueue_script(
        'jt-main-script',
        HMR_THEME_URI . '/assets/js/main.min.js',
        [],
        file_exists($js_file) ? filemtime($js_file) : null,
        true
    );
}
add_action('wp_enqueue_scripts', 'homara_enqueue_assets');


/* =========================
   Menus
========================= */
function homara_register_menus() {

    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'homara'),
        'footer_menu'  => __('Footer Menu', 'homara'),
    ]);
}
add_action('after_setup_theme', 'homara_register_menus');   


require_once get_template_directory() . '/inc/button.php';