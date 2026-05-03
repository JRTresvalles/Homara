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
         <?php
            $featured = new WP_Query([
                'post_type'      => 'property',
                'posts_per_page' => 6,
            ]);

            if ( $featured->have_posts() ) : ?>

                <section class="feature section" id="feature">
                    <div class="feature__container container grid">

                        <div class="section__header">
                            <div class="section__round-pill">
                                <span>Featured Properties</span>
                            </div>

                            <h2 class="section__title section__title-left">
                               Homes designed for your<br>lifestyle and needs
                            </h2>
                        </div>

                        <div class="feature__content grid">

                            <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

                                <?php get_template_part('components/property-card/template'); ?>

                            <?php endwhile; ?>

                        </div>

                    </div>
                </section>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
         <?php get_template_part('components/solution/template'); ?>
         <?php get_template_part('components/our-teams/template'); ?>
         <?php get_template_part('components/reviews/template'); ?>
         <?php get_template_part('components/faqs/template'); ?>
    </main>

<?php get_footer(); ?>  
