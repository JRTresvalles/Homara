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
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
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
         'footer-about'   => __('Footer About Menu', 'homara'),
        'footer-company' => __('Footer Company Menu', 'homara'),
        'footer-contact' => __('Footer Contact Menu', 'homara'),
    ]);
}
add_action('after_setup_theme', 'homara_register_menus');   


/* =========================
   Footer logo customization
========================= */
function homara_customize_register($wp_customize) {

   $wp_customize->add_section('footer_settings', [
      'title'    => 'Footer Settings',
      'priority' => 160,
   ]);

   $wp_customize->add_setting('footer_logo', [
      'sanitize_callback' => 'esc_url_raw',
   ]);

   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', [
      'label'    => 'Footer Logo',
      'section'  => 'footer_settings',
      'settings' => 'footer_logo',
   ]));

}
add_action('customize_register', 'homara_customize_register');


require_once HMR_THEME_DIR . '/inc/button.php';


/* =========================
   HOMARA COMPONENT SYSTEM
   (Future Self Documentation)

   This line loads the component-based architecture for the theme.

   FLOW:
   functions.php → block-register.php → components → templates

   IMPORTANT:

   - This system ONLY registers Gutenberg blocks if ACF Pro is active.
   - ACF Free will NOT show blocks in the editor (only page fields work).
   - Each component inside /components/ is auto-registered as a block.

   DEBUG CHECKLIST:
   - Ensure this file is included in functions.php
   - Ensure block-register.php is loaded
   - Ensure /components/* folders exist
   - Ensure ACF Pro is active for Gutenberg block support

   WARNING:
   Removing this file disables all component-based blocks.
========================= */
require_once HMR_THEME_DIR . '/components/block-register.php';