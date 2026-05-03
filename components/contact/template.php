<?php

/**
 * {Components} : Contact Template
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'contact';
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
			
        <div class="contact__data">
            <h2 class="contact__title">Ready to find your dream home?</h2>
            <p class="contact__description">Contact us today to schedule a viewing or learn more about our available properties.</p>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="1263790" title="Contact form 1"]'); ?>

    </div>
</section>