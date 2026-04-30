<?php

if ( ! defined( 'ABSPATH' ) ) exit;


add_filter('wp_nav_menu_items', function ($items, $args) {

    if ($args->theme_location === 'primary_menu') {

        $button = '
        <div class="nav__cta">
            <a href="/" target="_blank" rel="noopener noreferrer"  class="button">
                Contact Us Now
                <span class="button__icon">
                    
                
                </span>
            </a>
        </div>';

        return $items . $button; 
    }

    return $items;

}, 10, 2);