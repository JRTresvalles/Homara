<?php
/**
 * Navigation template part
 * 
 * @package Homara
 * 
 * @author John Tresvalles
 * 
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}?>

<?php
wp_nav_menu(array(
    'theme_location'  => 'primary_menu',
    'menu_class'      => 'nav__list',
    'container'       => false
));
?>