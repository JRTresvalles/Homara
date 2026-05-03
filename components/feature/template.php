<?php

/**
 * {Components} : Feature Product
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'feature';

/**
 * =========================
 * PREVIEW STATE
 * =========================
 */
if ( ! empty( $is_preview ) ) : ?>
	<div style="background:#f5f5f5;padding:40px;text-align:center">
		<h3>This block is not currently editable</h3>
	</div>
<?php
	return;
endif;
?>

<section class="<?php echo esc_attr($block_name); ?> section">
    <div class="<?php echo esc_attr($block_name . '__container'); ?> container grid">

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