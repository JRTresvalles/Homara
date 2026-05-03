<?php

/**
 * {Components} : Property Card
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'property-card'; 
$post_id = get_the_ID();

$image    = get_the_post_thumbnail_url($post_id, 'large');
$location = function_exists('get_field') ? get_field('location', $post_id) : '';
$price    = function_exists('get_field') ? get_field('price', $post_id) : '';
$bed     = function_exists('get_field') ? get_field('bed', $post_id) : '';
$bath    = function_exists('get_field') ? get_field('bath', $post_id) : '';
$sqft     = function_exists('get_field') ? get_field('sqft', $post_id) : '';
$type     = function_exists('get_field') ? get_field('type', $post_id) : '';
$image = $image ?: get_template_directory_uri() . '/assets/images/card-1.jpg';
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

	<a href="<?php the_permalink(); ?>" class="feature__card">

		<!-- IMAGE -->
		<div class="feature__card-image">
			<img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" class="feature__image">
			
			<span class="feature__location-text">
				<?php echo $type; ?>
			</span>
		
		</div>

		<!-- CONTENT -->
		<div class="feature__card-data">

			<!-- LOCATION -->
			<div class="feature__card-wrapper">
				<div class="feature__location">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/location-icon.svg"
						alt="Location Icon"
						class="feature__location-icon">
				</div>

				<h3 class="feature__title">
					<?php echo esc_html($location); ?>
				</h3>
			</div>

			<!-- TITLE -->
			<h3 class="feature__property-title">
				<?php the_title(); ?>
			</h3>

			<!-- ICONS -->
			<div class="feature__card-icons">

				<div class="feature__card-icon">
										<svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.25 0.25V11.25M0.25 8.89286H14.25M14.25 11.25V6.69286C14.25 5.81278 14.25 5.3727 14.0804 5.03657C13.9313 4.74091 13.6933 4.50048 13.4007 4.34986C13.0679 4.17857 12.6323 4.17857 11.7611 4.17857H6.47222V8.67859M3.36111 5.75H3.36889M4.13889 5.75C4.13889 6.18395 3.79066 6.53571 3.36111 6.53571C2.93156 6.53571 2.58333 6.18395 2.58333 5.75C2.58333 5.31605 2.93156 4.96429 3.36111 4.96429C3.79066 4.96429 4.13889 5.31605 4.13889 5.75Z"
												stroke="#2C2C2C"
												stroke-width="0.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
										</svg>
					<span><?php echo esc_html($bed); ?> Beds</span>
				</div>

				<div class="feature__card-icon">
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none">
										<path d="M11.625 6.75C10.7308 6.75 1.3714 6.75 1.125 6.75V5.4375H1.875C2.08212 5.4375 2.25 5.26959 2.25 5.0625V4.125C2.25 3.91791 2.08212 3.75 1.875 3.75C1.66788 3.75 1.5 3.91791 1.5 4.125V4.6875H1.125V1.43566C1.125 0.828562 1.86473 0.520102 2.29549 0.950836L2.69252 1.34787C2.3779 1.89633 2.4543 2.60962 2.92233 3.07767L3.10983 3.26517C3.25624 3.41161 3.49371 3.41163 3.64015 3.26517L5.14015 1.76517C5.28661 1.61873 5.28661 1.38129 5.14015 1.23485L4.95265 1.04735C4.4757 0.570375 3.76116 0.506883 3.22256 0.817266L2.82581 0.420516C2.55464 0.149344 2.19412 0 1.81066 0C1.01904 0 0.375 0.644039 0.375 1.43566V6.75C0.167883 6.75 0 6.91791 0 7.125C0 7.33209 0.167883 7.5 0.375 7.5V8.25C0.375 9.27865 0.837703 10.2011 1.56577 10.8206L1.04222 11.3651C0.812461 11.604 0.984914 12 1.31245 12C1.41087 12 1.50919 11.9615 1.58278 11.8849L2.19727 11.2459C2.66236 11.488 3.19045 11.625 3.75 11.625H8.25C8.80955 11.625 9.33764 11.488 9.80273 11.2459L10.4172 11.8849C10.5603 12.0337 10.7977 12.0393 10.9474 11.8953C11.0967 11.7517 11.1013 11.5143 10.9578 11.3651L10.4342 10.8206C11.1623 10.2011 11.625 9.27865 11.625 8.25V7.5C11.8321 7.5 12 7.33209 12 7.125C12 6.91791 11.8321 6.75 11.625 6.75Z"
												fill="#2C2C2C"/>
										</svg>
					<span><?php echo esc_html($bath); ?> Baths</span>
				</div>

				<div class="feature__card-icon">
										<svg width="13" height="13" viewBox="0 0 13 13" fill="none">
										<path d="M12.5 12.5V0.5M0.5 12.5V0.5M2.83333 6.5H10.1667M10.1667 8.5V4.5M2.83333 8.5V4.5"
												stroke="#2C2C2C"
												stroke-linecap="round"
												stroke-linejoin="round"/>
										</svg>
					<span><?php echo esc_html($sqft); ?> sq.ft</span>
				</div>

			</div>

			<span class="feature__price">
				<?php echo esc_html($price); ?>
			</span>

		</div>

	</a>