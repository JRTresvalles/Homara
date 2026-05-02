<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/* =========================
   HOMARA BLOCK LOADER

   Automatically registers theme components as Gutenberg blocks
   using Advanced Custom Fields (ACF) when block API is available.

   -------------------------
   STRUCTURE
   -------------------------
   /components/{block}/{block}.php   → block configuration
   /components/{block}/template.php   → block render template

   -------------------------
   FLOW
   -------------------------
   acf/init → load components → read config → register ACF block → render template

   -------------------------
   REQUIREMENTS
   -------------------------
   - ACF Pro
   - Each component must return a valid block configuration array
     including at minimum: name, title, and render_template support

   -------------------------
   BEHAVIOR NOTES
   -------------------------
   - If ACF block API is not available (ACF Free),
     this loader safely exits without registering blocks.
   - No errors are thrown in production unless WP_DEBUG is enabled.
   - In debug mode, missing or invalid configs are logged.

========================= */

/* =========================
   HOMARA BLOCK LOADER
========================= */

if ( ! defined( 'ABSPATH' ) ) exit;


function homara_register_acf_block( $args, $path ) {

    if ( empty( $args ) || ! is_array( $args ) ) {
        return;
    }

    $defaults = array(
        'category'        => 'design',
        'icon'            => 'block-default',
        'render_template' => $path . '/template.php',
        'supports'        => array(
            'customClassName' => true,
            'anchor'          => true,
        ),
    );

    $config = array_merge( $defaults, $args );
  
    if ( function_exists( 'acf_register_block_type' ) ) {
        acf_register_block_type( $config );
    }
}

function homara_register_all_blocks() {

    if ( ! function_exists( 'acf_register_block_type' ) ) {
        if ( defined('WP_DEBUG') && WP_DEBUG ) {
            error_log('ACF block system not available (acf_register_block_type missing)');
        }
        return;
    }

    $base_path = HMR_THEME_DIR . '/components';

    if ( ! is_dir( $base_path ) ) {
        return;
    }

    $components = array(
        'hero',
        'explore',
        'offer',
        'feature',
        'our-teams',
        'solutions',
        'reviews',
    );

    foreach ( $components as $component ) {

        $path = $base_path . '/' . $component;
        $config_file = $path . '/' . $component . '.php';

        if ( ! file_exists( $config_file ) ) {
            if ( defined('WP_DEBUG') && WP_DEBUG ) {
                error_log("Missing block config: {$config_file}");
            }
            continue;
        }

        $args = include $config_file;

        if ( ! is_array( $args ) ) {
            if ( defined('WP_DEBUG') && WP_DEBUG ) {
                error_log("Invalid block config: {$config_file}");
            }
            continue;
        }

        if ( defined('WP_DEBUG') && WP_DEBUG ) {
            error_log("Registering block: {$component}");
        }

        homara_register_acf_block( $args, $path );
    }
}

add_action( 'acf/init', 'homara_register_all_blocks' );
