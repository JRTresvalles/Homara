<?php

/**
 * {Components} : Explore Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'explore';
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
						<span>Why Choose Us</span>
				</div>

				<h2 class="section__title ">
					Discover Our Tailored Real Estate Services
				</h2>
			</div>

				<div class="explore__content grid">
					<!-- CARD 1 -->
					<div class="explore__card">

						<div class="explore__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-1.svg"
							alt="Property Sales"
							class="explore__image">
						</div>

						<div class="explore__card-data">
							<h3 class="explore__title">Property Sales</h3>
							<p class="explore__description">
								Strategic marketing and expert negotiation to secure the best value for your property.
							</p>
						</div>

					</div>

					<!-- CARD 2 -->
					<div class="explore__card">

						<div class="explore__card-image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-2.svg"
								alt="Property Sales"
								class="explore__image">
							</div>

							<div class="explore__card-data">
							<h3 class="explore__title">Home Buying Assistance</h3>
							<p class="explore__description">
								Personalized guidance to help you find and secure the right home at the right price.
							</p>
						
						</div>

					</div>

					<!-- CARD 3 -->
					<div class="explore__card">
						<div class="explore__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-3.svg"
							alt="Property Sales"
							class="explore__image">
						</div>

						<div class="explore__card-data">
						<h3 class="explore__title">Investment Advisory</h3>
						<p class="explore__description">
							Data-driven insights to identify high-potential properties and maximize your returns.
						</p>
						
						</div>
					</div>

					<!-- CARD 4 -->
					<div class="explore__card">
						<div class="explore__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-4.svg"
							alt="Property Sales"
							class="explore__image">
						</div>

						<div class="explore__card-data">
						<h3 class="explore__title">Property Management</h3>
						<p class="explore__description">
							End-to-end management services that protect your asset and keep it performing.
						</p>
						
						</div>
					</div>

					<!-- CARD 5 -->
					<div class="explore__card">
						<div class="explore__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-5.svg"
							alt="Property Sales"
							class="explore__image">
						</div>

						<div class="explore__card-data">
						<h3 class="explore__title">Leasing Services</h3>
						<p class="explore__description">
							Connecting landlords with qualified tenants through targeted marketing and screening.
						</p>
					
						</div>
					</div>

					<!-- CARD 6 -->
					<div class="explore__card">
						<div class="explore__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/card-icon-6.svg"
							alt="Property Sales"
							class="explore__image">
						</div>

						<div class="explore__card-data">
						<h3 class="explore__title">Market Valuation</h3>
						<p class="explore__description">
							Accurate property assessments backed by local market expertise and real-time data.
						</p>
					
						</div>
					</div>

				</div>

    </div>
</section>