<?php

/**
 * {Components} : Hero Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'offer';
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
					<span>What We Offer</span>
			</div>

			<h2 class="section__title section__title-left">
				Comprehensive Real Estate Solutions
			</h2>
			<p class="section__subtitle section__subtitle-left">
				Our comprehensive services encompass luxury property sales, sustainable green building investments, and premium vacation rentals.
			</p>
		</div>


		<div class="offer__content-cards grid">
			<div class="offer__left">
					<div class="offer__card-data" id="offerText">
						<h3 class="offer__title">Luxury Residences</h3>
						<p class="offer__description">
							Exclusive listings of high-end homes with personalized buying and selling services.
						</p>
					</div>
			</div>


			<div class="offer__card-container grid">
				<div class="offer__card-wrapper" data-title="Luxury Residences" data-desc="Experience unparalleled elegance in our luxury residences, featuring exquisite design, premium amenities, and prime locations for the most discerning tastes.">
					<div class="offer__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-1.png"
							alt="Offer 1"
							class="offer__image">

						<div class="offer__corner">

							<!-- top decorative shape -->
							<div class="offer__corner-shape offer__corner-shape--top">
								<svg width="49" height="50" viewBox="0 0 49 50" fill="white" xmlns="http://www.w3.org/2000/svg">
									<path d="M48.5 50H0V49.9883C26.8765 49.4557 48.5 27.504 48.5 0.5C48.5 0.333138 48.4987 0.166473 48.4971 0H48.5V50Z" />
								</svg>
							</div>


							<div class="offer__corner-container">
								<div class="offer__corner-shape offer__corner-shape--bottom">
									<svg width="45" height="37" viewBox="0 0 45 37" fill="white" xmlns="http://www.w3.org/2000/svg">
										<path d="M45 36.4287H0C22.1228 36.4287 40.5954 20.8111 45 0V36.4287Z" />
									</svg>
								</div>
									<div class="offer__card">

										<h3 class="offer__number">01</h3>
										<h5 class="offer__title">Luxury Residences</h5>

									</div>
							</div>

						</div>
					</div>
				</div>
				<div class="offer__card-wrapper" data-title="Eco Green Buildings" data-desc="Discover sustainable living in our eco-friendly properties, designed to minimize environmental impact while offering modern comforts and energy efficiency.">
					<div class="offer__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-2.png"
							alt="Offer 1"
							class="offer__image">

						<div class="offer__corner">

							<!-- top decorative shape -->
							<div class="offer__corner-shape offer__corner-shape--top">
								<svg width="49" height="50" viewBox="0 0 49 50" fill="white" xmlns="http://www.w3.org/2000/svg">
									<path d="M48.5 50H0V49.9883C26.8765 49.4557 48.5 27.504 48.5 0.5C48.5 0.333138 48.4987 0.166473 48.4971 0H48.5V50Z" />
								</svg>
							</div>


							<div class="offer__corner-container">
								<div class="offer__corner-shape offer__corner-shape--bottom">
									<svg width="45" height="37" viewBox="0 0 45 37" fill="white" xmlns="http://www.w3.org/2000/svg">
										<path d="M45 36.4287H0C22.1228 36.4287 40.5954 20.8111 45 0V36.4287Z" />
									</svg>
								</div>
									<div class="offer__card">

										<h3 class="offer__number">01</h3>
										<h5 class="offer__title">Luxury Residences</h5>

									</div>
							</div>

						</div>
					</div>
				</div>
				<div class="offer__card-wrapper" data-title="Unique Vacation Homes" data-desc="Explore our curated collection of unique vacation homes, offering distinctive architecture and exceptional locations for unforgettable stays.">
					<div class="offer__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-3.png"
							alt="Offer 1"
							class="offer__image">

						<div class="offer__corner">

							<!-- top decorative shape -->
							<div class="offer__corner-shape offer__corner-shape--top">
								<svg width="49" height="50" viewBox="0 0 49 50" fill="white" xmlns="http://www.w3.org/2000/svg">
									<path d="M48.5 50H0V49.9883C26.8765 49.4557 48.5 27.504 48.5 0.5C48.5 0.333138 48.4987 0.166473 48.4971 0H48.5V50Z" />
								</svg>
							</div>


							<div class="offer__corner-container">
								<div class="offer__corner-shape offer__corner-shape--bottom">
									<svg width="45" height="37" viewBox="0 0 45 37" fill="white" xmlns="http://www.w3.org/2000/svg">
										<path d="M45 36.4287H0C22.1228 36.4287 40.5954 20.8111 45 0V36.4287Z" />
									</svg>
								</div>
									<div class="offer__card">

										<h3 class="offer__number">01</h3>
										<h5 class="offer__title">Luxury Residences</h5>

									</div>
							</div>

						</div>
					</div>
				</div>
				<div class="offer__card-wrapper" data-title="Luxury Residences" data-desc="Experience unparalleled elegance in our luxury residences, featuring exquisite design, premium amenities, and prime locations for the most discerning tastes.">
					<div class="offer__card-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-1.png"
							alt="Offer 1"
							class="offer__image">

						<div class="offer__corner">

							<!-- top decorative shape -->
							<div class="offer__corner-shape offer__corner-shape--top">
								<svg width="49" height="50" viewBox="0 0 49 50" fill="white" xmlns="http://www.w3.org/2000/svg">
									<path d="M48.5 50H0V49.9883C26.8765 49.4557 48.5 27.504 48.5 0.5C48.5 0.333138 48.4987 0.166473 48.4971 0H48.5V50Z" />
								</svg>
							</div>


							<div class="offer__corner-container">
								<div class="offer__corner-shape offer__corner-shape--bottom">
									<svg width="45" height="37" viewBox="0 0 45 37" fill="white" xmlns="http://www.w3.org/2000/svg">
										<path d="M45 36.4287H0C22.1228 36.4287 40.5954 20.8111 45 0V36.4287Z" />
									</svg>
								</div>
									<div class="offer__card">

										<h3 class="offer__number">01</h3>
										<h5 class="offer__title">Luxury Residences</h5>

									</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


    </div>
</section>