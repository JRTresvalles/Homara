<?php

/**
 * {Components} : Hero Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'reviews';
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
		<div class="reviews__data-right">
			<div class="section__header">
				<div class="section__round-pill">
						<span>What Our Clients Say</span>
				</div>

				<h2 class="section__title section__title-left">
					Trusted by Many, Valued by Every Client
				</h2>
				<p class="section__subtitle section__subtitle-left">
					Real experiences from clients who found the right homes, smart investments, and seamless property journeys with us.
				</p>

				<a href="/contact" class="nav__cta">
                  <span class="nav__dot"></span>
                        Contact Us Now
                    <span class="nav__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                    </span>
            	</a>
			</div>
		</div>

		<div class="reviews__content grid">
			<div class="reviews__card">

				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“From the first viewing to closing, everything was handled with care and professionalism. We couldn’t be happier with our new home.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-5.png"
						alt="Client Photo"
						class="reviews__image">

						<div class="reviews__client-info">
							<h3 class="reviews__name">Emily R.</h3>
							<span class="reviews__work">
								Homeowner
							</span>
						</div>
				</div>
			</div>
			<div class="reviews__card">

				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“The team understood exactly what we were looking for and delivered beyond expectations. The entire process felt smooth and stress-free.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-6.png"
						alt="Client Photo"
						class="reviews__image">

						<div class="reviews__client-info">
							<h3 class="reviews__name">Daniel M.</h3>
							<span class="reviews__work">
								Property Investor
							</span>
						</div>
				</div>
			</div>
			<div class="reviews__card">
				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“They made selling our property incredibly efficient. We received strong offers quickly and felt supported at every step.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-7.png"
						alt="Client Photo"
						class="reviews__image">

						<div class="reviews__client-info">
							<h3 class="reviews__name">Sophia L.</h3>
							<span class="reviews__work">
								Seller
							</span>
						</div>
				</div>
			</div>
			<div class="reviews__card">

				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“Finding a vacation home felt overwhelming at first, but they guided us through every detail and made it simple.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-8.png"
						alt="Client Photo"
						class="reviews__image">

						<div class="reviews__client-info">
							<h3 class="reviews__name">James T.</h3>
							<span class="reviews__work">
								Vacation Home Buyer
							</span>
						</div>
				</div>
			</div>
			<div class="reviews__card">

				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“Their market knowledge and attention to detail gave us complete confidence in our investment decisions.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-9.png"
						alt="Client Photo"
						class="reviews__image">

						<div class="reviews__client-info">
							<h3 class="reviews__name">Michael D.</h3>
							<span class="reviews__work">
								Real Estate Investor
							</span>
						</div>
				</div>
			</div>
			<div class="reviews__card">

				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“Professional, responsive, and genuinely invested in our goals. It was a great experience from start to finish.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-10.png"
						alt="Client Photo"
						class="reviews__image">

						<div class="reviews__client-info">
							<h3 class="reviews__name">Olivia K.</h3>
							<span class="reviews__work">
								First-time Buyer
							</span>
						</div>
				</div>
			</div>
			
		</div>
    </div>
</section>