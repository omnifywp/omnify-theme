<?php
/**
 * Title: Interactive Fee Savings Calculator
 * Slug: omnify/savings-calculator
 * Categories: omnify-features
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-calculator-section","style":{"spacing":{"padding":{"top":"clamp(4.5rem, 8vw, 6.5rem)","bottom":"clamp(4.5rem, 8vw, 6.5rem)"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<section class="wp-block-group om-section om-calculator-section" id="savings-calculator">

	<div class="om-calc-container">
		
		<!-- Section Header -->
		<div class="om-calc-header om-text-center">
			<span class="om-calc-badge">⚡ Profit &amp; Fee Estimator</span>
			<h2 class="om-calc-title">Stop paying platform rent. See your annual savings.</h2>
			<p class="om-calc-subhead">SaaS eCommerce platforms and bloated paid plugin stacks quietly siphon 3% to 8% of your gross revenue. Calculate how much you keep with OmnifyWP’s zero-commission architecture.</p>
		</div>

		<!-- Interactive Calculator Card -->
		<div class="om-calc-card">
			<div class="om-calc-grid">
				
				<!-- Left Column: Interactive Controls -->
				<div class="om-calc-controls">
					
					<!-- Monthly GMV Slider Control -->
					<div class="om-calc-control-group">
						<div class="om-calc-label-row">
							<label for="om-calc-revenue-slider" class="om-calc-label">Monthly Store Sales (GMV)</label>
							<span class="om-calc-val-display" id="om-calc-revenue-val">$25,000 / mo</span>
						</div>
						<input type="range" id="om-calc-revenue-slider" min="2000" max="150000" step="1000" value="25000" class="om-range-slider" aria-label="Monthly Sales Volume">
						<div class="om-calc-scale-labels">
							<span>$2k/mo</span>
							<span>$50k/mo</span>
							<span>$100k/mo</span>
							<span>$150k+/mo</span>
						</div>
					</div>

					<!-- Average Order Value (AOV) Control -->
					<div class="om-calc-control-group">
						<div class="om-calc-label-row">
							<label class="om-calc-label">Average Order Value (AOV)</label>
							<span class="om-calc-val-display" id="om-calc-aov-val">$50.00</span>
						</div>
						<div class="om-calc-aov-pills" id="om-calc-aov-group">
							<button type="button" class="om-aov-pill" data-aov="25">$25</button>
							<button type="button" class="om-aov-pill is-active" data-aov="50">$50</button>
							<button type="button" class="om-aov-pill" data-aov="100">$100</button>
							<button type="button" class="om-aov-pill" data-aov="250">$250</button>
						</div>
					</div>

					<!-- Real-Time Comparison Breakdown -->
					<div class="om-calc-breakdown">
						<div class="om-calc-row">
							<div class="om-calc-row__label">
								<strong>SaaS Platform Cut</strong>
								<span>Shopify / SaaS (2.9% + 30¢/tx + apps)</span>
							</div>
							<div class="om-calc-row__cost" id="om-cost-saas">$10,440 / yr</div>
						</div>
						<div class="om-calc-row">
							<div class="om-calc-row__label">
								<strong>WooCommerce Paid Plugin Stack</strong>
								<span>Subscriptions + Bookings + Hosting bloat</span>
							</div>
							<div class="om-calc-row__cost" id="om-cost-woo">$1,450 / yr</div>
						</div>
						<div class="om-calc-row om-calc-row--highlight">
							<div class="om-calc-row__label">
								<strong>OmnifyWP eCommerce</strong>
								<span>100% Free Core, 0% Transaction Fees</span>
							</div>
							<div class="om-calc-row__cost om-cost--zero">$0.00 / yr</div>
						</div>
					</div>

				</div>

				<!-- Right Column: Visual Profit ROI Highlight -->
				<div class="om-calc-results">
					<div class="om-results-badge">Estimated Annual Profit Recaptured</div>
					<div class="om-results-amount" id="om-calc-total-savings">$10,440</div>
					<div class="om-results-period">Extra profit back in your business every single year</div>

					<div class="om-results-bullets">
						<div class="om-results-bullet">
							<span class="om-bullet-check">✓</span>
							<span><strong>Zero Platform Take Rate:</strong> Every dollar from your customers stays yours.</span>
						</div>
						<div class="om-results-bullet">
							<span class="om-bullet-check">✓</span>
							<span><strong>Decoupled Database Speed:</strong> Convert 18% higher with instant checkout.</span>
						</div>
						<div class="om-results-bullet">
							<span class="om-bullet-check">✓</span>
							<span><strong>100% Self-Hosted Independence:</strong> No account lockouts or forced upgrades.</span>
						</div>
					</div>

					<div class="om-results-action">
						<a href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer" class="om-btn om-btn--primary om-results-cta-btn">
							<span>Claim Your Zero-Fee Store</span>
							<span class="om-btn-arrow">&rarr;</span>
						</a>
						<div class="om-results-microcopy">Instant install via wp.org plugin directory • 100% GPL Core</div>
					</div>
				</div>

			</div>
		</div>

	</div>

</section>
<!-- /wp:group -->
