<?php
/**
 * Archive Template for Projects
 * @package Homara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<main class="archive-project">
    
   <section class="feature section">
    <div class="feature__container container grid">

        <div class="section__header">
            <div class="section__round-pill">
                <span>Featured Properties</span>
            </div>

            <h2 class="section__title section__title-left">
                Discover homes tailored to your <br> lifestyle and needs
            </h2>
        </div>

        <div class="feature__content grid">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('components/property-card/template'); ?>

                <?php endwhile; ?>
            <?php else : ?>
                <p>No properties found.</p>
            <?php endif; ?>

        </div>

    </div>
</section>

    <?php get_template_part('components/our-teams/template'); ?>
    <?php get_template_part('components/reviews/template'); ?>
    <?php get_template_part('components/faqs/template'); ?>

</main>

<?php get_footer(); ?>