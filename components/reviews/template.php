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
					Trusted by Many, Loved by All
				</h2>
				<p class="section__subtitle section__subtitle-left">
					Our clients’ success stories reflect our commitment to excellence. See how we’ve helped them find their dream homes, sustainable investments, and perfect getaways.
				</p>
			</div>
		</div>

		<div class="reviews__content grid">
			<div class="reviews__card">

				<div class="reviews__card-data">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/black__star.png">
					<p class="reviews__review">
						“Homara made our home buying experience seamless and enjoyable. Their team was knowledgeable, responsive, and truly cared about finding us the perfect home.”
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
						“Homara made our home buying experience seamless and enjoyable. Their team was knowledgeable, responsive, and truly cared about finding us the perfect home.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-6.png"
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
						“Homara made our home buying experience seamless and enjoyable. Their team was knowledgeable, responsive, and truly cared about finding us the perfect home.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-7.png"
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
						“Homara made our home buying experience seamless and enjoyable. Their team was knowledgeable, responsive, and truly cared about finding us the perfect home.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-8.png"
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
						“Homara made our home buying experience seamless and enjoyable. Their team was knowledgeable, responsive, and truly cared about finding us the perfect home.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-9.png"
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
						“Homara made our home buying experience seamless and enjoyable. Their team was knowledgeable, responsive, and truly cared about finding us the perfect home.”
					</p>
				</div>
				<div class="reviews__card-image">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews__icon-10.png"
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
			
		</div>
    </div>
</section>