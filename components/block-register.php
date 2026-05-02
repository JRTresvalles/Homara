<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/* =========================
   HOMARA BLOCK LOADER

   This file automatically registers all theme components
   as Gutenberg blocks (when ACF Pro is active).

   STRUCTURE:
   /components/{block}/block.php
   /components/{block}/template.php

   FLOW:
   acf/init → scan components → load config → register block → render template

   REQUIREMENTS:
   - ACF Pro must be active (acf_register_block_type exists)
   - Each component must have a valid block config file

   NOTE:
   In ACF Free mode, this file runs but does NOT register blocks.
========================= */

/**
 * Block helper
 */
function homara_register_acf_block( $args, $path ) {

    if ( ! class_exists( 'HMR_ACF_Block' ) ) return;
    if ( empty($args) || ! is_array($args) ) return;

    $defaults = array(
        'category' => 'design',
        'icon'     => 'block-default',
        'supports' => array(
            'customClassName' => true,
            'anchor'          => true,
        ),
        'render_template' => $path . '/template.php',
    );

    return new HMR_ACF_Block( array_merge( $defaults, $args ), $path );
}

/**
 * Load all components automatically
 */
function homara_register_all_blocks() {

    if ( ! function_exists('acf_register_block_type') ) return;

    $base_path = HMR_THEME_DIR . '/components';

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
        $config_file = $path . '/block.php';

        if ( file_exists( $config_file ) ) {

            $args = include $config_file;

            homara_register_acf_block( $args, $path );
        }
    }
}

add_action( 'acf/init', 'homara_register_all_blocks' );