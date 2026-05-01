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
									I specialize in web design, branding, UI/UX, and Framer & Wordpress development, creating modern, user-friendly experiences tailored to your needs
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What services do you offer?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									I specialize in web design, branding, UI/UX, and Framer & Wordpress development, creating modern, user-friendly experiences tailored to your needs
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What services do you offer?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									I specialize in web design, branding, UI/UX, and Framer & Wordpress development, creating modern, user-friendly experiences tailored to your needs
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What services do you offer?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									I specialize in web design, branding, UI/UX, and Framer & Wordpress development, creating modern, user-friendly experiences tailored to your needs
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What services do you offer?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									I specialize in web design, branding, UI/UX, and Framer & Wordpress development, creating modern, user-friendly experiences tailored to your needs
								</p>
							</div>
						</div>
						<div class="questions__item">
							<div class="questions__header">
								<h3 class="questions__item-title">
									What services do you offer?
								</h3>

								<svg class="questions__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="currentColor"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
							</div>

							<div class="questions__content">
								<p class="questions__description">
									I specialize in web design, branding, UI/UX, and Framer & Wordpress development, creating modern, user-friendly experiences tailored to your needs
								</p>
							</div>
						</div>
						
						
					</div>
				</div>
        	</div>
		</div>
    </div>
</section>