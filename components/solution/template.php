<?php

/**
 * {Components} : Hero Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'solution';
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


<section class="<?php echo esc_attr($block_name); ?> section" id="solution">
    <div class="<?php echo esc_attr($block_name . '__container'); ?> container grid">
		
	<div class="solution__data-right">
		<div class="section__header">
			<div class="section__round-pill">
					<span>Who We Are</span>
			</div>

			<h2 class="section__title section__title-left">
				Elevating Standards in Real Estate
			</h2>
			<p class="section__subtitle section__subtitle-left">
				We focus on luxury residences, sustainable living, and premium vacation homes, guided by a commitment to quality, innovation, and exceptional client experiences.
			</p>

			<a href="/contact" class="nav__cta">
                  <span class="nav__dot"></span>
                        Contact Us Now
                    <span class="nav__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                    </span>
            </a>
		</div>

		<div class="solution__data-numbers grid">
			<div class="solution__data-number">
				<h4>200+</h4>
				<p>Projects Complete</p>
			</div>
			<div class="solution__data-number">
				<h4>70+</h4>
				<p>Satisfied Clients</p>
			</div>
			<div class="solution__data-number">
				<h4>10M+</h4>
				<p>Project Value</p>
			</div>
			<div class="solution__data-number">
				<h4>90%</h4>
				<p>Client Retention Rate</p>
			</div>

		</div>
	</div>

	<div class="solution__data-left">
		<div class="solution__img-container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/solution_image.png" alt="Solution Image" class="solution__img">
		</div>

		<div class="explore__content grid">
					<div class="explore__card">

						<div class="explore__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-1.svg"
							alt="Property Sales"
							class="explore__image">
						</div>

						<div class="explore__card-data">
							<h3 class="explore__title">Property Sales</h3>
							<p class="explore__description">
								Strategic marketing and expert negotiation to connect your property with the right buyers.
							</p>
						</div>

					</div>

					<div class="explore__card">

						<div class="explore__card-image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-2.svg"
								alt="Property Sales"
								class="explore__image">
							</div>

							<div class="explore__card-data">
							<h3 class="explore__title">Home Buying</h3>
							<p class="explore__description">
								Guided support to help you find and secure a home that fits your goals and lifestyle.
							</p>
						
						</div>

					</div>
				</div>
	</div>

    </div>
</section>