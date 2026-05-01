<?php
/**
 * The main template file
 * @package Homara
 * 
 * @author John Tresvalles
 * 
 * 
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}?>


<?php get_header(); ?>
    <main>
         <?php get_template_part('components/hero/template'); ?>
         <?php get_template_part('components/offer/template'); ?>
         <?php get_template_part('components/explore/template'); ?>
         <?php get_template_part('components/feature-product/template'); ?>
         <?php get_template_part('components/solution/template'); ?>
         <?php get_template_part('components/our-teams/template'); ?>
         <?php get_template_part('components/reviews/template'); ?>
         <?php get_template_part('components/faqs/template'); ?>
    </main>

<?php get_footer(); ?>  
