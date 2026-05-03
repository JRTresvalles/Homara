<?php

/**
 * {Components} : Hero Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'hero';
$title = get_field('title') ? get_field('title') : 'FIND YOUR PERFECT<br>HOME TODAY';
$description = get_field('description') ? get_field('description') : 'We provide tailored real estate solutions, guiding you through every step with personalized experiences.';
$button = get_field('button');
$image = get_field('image');

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


<section class="<?php echo esc_attr($block_name); ?>" >
  <div class="<?php echo esc_attr($block_name . '__container'); ?>">

    <div class="hero__image" data-cursor-text="Get Started">
        <?php 
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_image.png" alt="Hero Image">
        <?php endif; ?>

        <div class="hero__content">

          <div class="hero__data">
            <h1 class="hero__title">
              <?php echo $title; ?>
            </h1>

            <p class="hero__description">
              <?php echo esc_html($description); ?>
            </p>
          </div>

          <?php 
          if( $button ): 
              $button_url = $button['url'];
              $button_title = $button['title'];
              $button_target = $button['target'] ? $button['target'] : '_self';
              ?>
              <a href="<?php echo $button_url; ?>" target="<?php echo $button_target; ?>" class="button button__white">
                <?php echo $button_title; ?>
                <span class="button__arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                </span>
              </a>

          <?php else: ?>
                <a href="/" class="button button__white">
                  Explore Properties
                  <span class="button__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                  </span>
                </a>
          <?php endif; ?>

        </div>
        <div class="hero__corner-wrapper">
          <div class="hero__corner-shape hero__corner-shape--bottom">
            <svg width="49" height="50" viewBox="0 0 49 50" fill="white" xmlns="http://www.w3.org/2000/svg">
              <path d="M48.5 50H0V49.9883C26.8765 49.4557 48.5 27.504 48.5 0.5C48.5 0.333138 48.4987 0.166473 48.4971 0H48.5V50Z" fill="white"/>
            </svg>
          </div>

          <div class="hero__corner">

            <div class="hero__corner-shape hero__corner-shape--top">
              <svg width="45" height="37" viewBox="0 0 45 37" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M45 36.4287H0C22.1228 36.4287 40.5954 20.8111 45 0V36.4287Z" fill="white"/>
              </svg>
            </div>

            <div class="hero__card">

              <div class="hero__avatars">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-icon-1.png" alt="Agent Avatar" class="hero__avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-icon-2.png" alt="Agent Avatar" class="hero__avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-icon-3.png" alt="Agent Avatar" class="hero__avatar">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-icon-4.png" alt="Agent Avatar" class="hero__avatar">
              </div>

              <div class="hero__rating">
                <p><strong>10+ Featured Agents</strong></p>
                <div class="hero__stars">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stars-icon.png" alt="Star Icon" class="hero__star">
                  <span>5.0</span>
                </div>
              </div>

            </div>

          </div>

        </div>
    </div>

  </div>
</section>