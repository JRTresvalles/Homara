<?php
/**
 * Template Name: Contact Page
 * @package YourTheme
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main class="ContactPage">
    <?php get_template_part('components/contact/template'); ?>
    <?php get_template_part('components/reviews/template'); ?>
</main>

<?php get_footer(); ?>