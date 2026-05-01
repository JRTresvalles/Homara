<?php

/**
 * {Components} : Our Teams Section
 *
 * @param array  $block
 * @param string $content
 * @param bool   $is_preview
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$block_name = 'our__teams';

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
    <div class="<?php echo esc_attr($block_name . '__container'); ?> grid">
			<div class="section__header">

				<div class="section__round-pill">
						<span>What We Offer</span>
				</div>

				<h2 class="section__title ">
					Explore our range of expert real estate services
				</h2>
			</div>

			<div class="our__teams-content">
				<div class="our__teams-marquee">

					<div class="our__teams-track">
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-1.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Isabella Wright</h3>
								<p class="our__teams-role">Short-Term Rental Expert</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-2.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Noah Clarke</h3>
								<p class="our__teams-role">Eco-Friendly Property Specialist</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-3.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Charlotte Morgan</h3>
								<p class="our__teams-role">High-End Property Consultant</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-4.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Michael Anderson</h3>
								<p class="our__teams-role">Commercial Real Estate Agent</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-5.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Benjamin Foster</h3>
								<p class="our__teams-role">Urban Development Advisor</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-1.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Isabella Wright</h3>
								<p class="our__teams-role">Short-Term Rental Expert</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-2.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Noah Clarke</h3>
								<p class="our__teams-role">Eco-Friendly Property Specialist</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-3.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Charlotte Morgan</h3>
								<p class="our__teams-role">High-End Property Consultant</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-4.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Michael Anderson</h3>
								<p class="our__teams-role">Commercial Real Estate Agent</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-5.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Benjamin Foster</h3>
								<p class="our__teams-role">Urban Development Advisor</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-1.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Isabella Wright</h3>
								<p class="our__teams-role">Short-Term Rental Expert</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-2.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Noah Clarke</h3>
								<p class="our__teams-role">Eco-Friendly Property Specialist</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-3.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Charlotte Morgan</h3>
								<p class="our__teams-role">High-End Property Consultant</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-4.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Michael Anderson</h3>
								<p class="our__teams-role">Commercial Real Estate Agent</p>
							</div>
						</div>
						<div class="our__teams-card">
							<div class="our__teams-card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-5.png"
									alt="Team Member"
									class="our__teams-image">
							</div>

							<div class="our__teams-card-data">
								<h3 class="our__teams-name">Benjamin Foster</h3>
								<p class="our__teams-role">Urban Development Advisor</p>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
</section>