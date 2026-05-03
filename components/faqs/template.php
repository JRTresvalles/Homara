<?php

/**
 * {Components} : Hero Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'faqs';
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
		<div class="faqs__data-right">
			<div class="section__header">
				<div class="section__round-pill">
						<span>Help Center</span>
				</div>

				<h2 class="section__title section__title-left">
					Frequently asked questions
				</h2>
			</div>
		</div>

		<div class="reviews__content">
			<div class="faqs__container">
				<div class="questions__container grid">
					<div class="questions__group">
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What services do you offer?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									We provide property sales, home buying assistance, investment advisory, property management, leasing services, and market valuation.
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									How do I start buying a property?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									Simply contact our team and we’ll guide you through listings, viewings, financing options, and closing.
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									Can you help me sell my property?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									Yes, we handle marketing, pricing strategy, negotiations, and the full sales process to secure the best value.
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									Do you work with real estate investors?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									Absolutely. We help identify high-potential properties and provide insights to maximize returns.
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What areas do you cover?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									We operate across key residential and investment markets, including luxury and emerging locations.
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									How do I schedule a consultation?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									You can reach out through our contact form or directly via email or phone to book an appointment.
								</p>
							</div>
						</div>
						
						
					</div>
				</div>
        	</div>
		</div>
    </div>
</section>