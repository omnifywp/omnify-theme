<?php
/**
 * Title: Marketing Hero — OmnifyWP
 * Slug: omnify/hero-marketing
 * Categories: omnify-hero
 * Block Types: core/group
 * Description: High-converting SaaS marketing hero with interactive UI mockup inspired by SureCart & FluentCart.
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-hero-saas","style":{"spacing":{"padding":{"top":"clamp(4rem, 7vw, 6.5rem)","bottom":"clamp(3.5rem, 6vw, 5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-hero-saas">

	<!-- Perspective Switcher Bar (Store Owner vs Developer) -->
	<div class="om-persona-bar">
		<div class="om-persona-bar__inner">
			<span class="om-persona-bar__label">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
				Choose your perspective:
			</span>
			<div class="om-persona-switch" role="tablist" aria-label="Perspective selector">
				<button type="button" class="om-persona-btn is-active" data-persona="user" role="tab" aria-selected="true">
					<span class="om-persona-btn__icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
					</span>
					<span class="om-persona-btn__content">
						<span class="om-persona-btn__title">Store Owner &amp; Creator</span>
						<span class="om-persona-btn__desc">Visual builder • Zero coding • 0% fees</span>
					</span>
				</button>
				<button type="button" class="om-persona-btn" data-persona="developer" role="tab" aria-selected="false">
					<span class="om-persona-btn__icon">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
					</span>
					<span class="om-persona-btn__content">
						<span class="om-persona-btn__title">Developer &amp; Agency</span>
						<span class="om-persona-btn__desc">Custom SQL • 12ms latency • REST API</span>
					</span>
				</button>
			</div>
		</div>
	</div>

	<!-- ============================================================
	     1. STORE OWNER & GENERAL USER HERO (Active by default)
	     ============================================================ -->
	<div class="om-for-user">
		<!-- Eyebrow Pill -->
		<div class="wp-block-group om-hero-eyebrow-wrap">
			<p class="om-hero-eyebrow"><span class="om-eyebrow-dot"></span> 100% Free Core • Zero Coding Required • No Monthly Platform Fees</p>
		</div>

		<!-- Main Headline -->
		<h1 class="wp-block-heading om-hero-saas__title om-text-center">Launch your online store in minutes. <span class="om-text-gradient">Keep 100% of every sale.</span></h1>

		<!-- Subheading -->
		<p class="om-hero-subhead om-text-center">OmnifyWP is the simple, beginner-friendly store builder for WordPress. Sell digital downloads, physical goods, software, or services without paying $39/mo SaaS fees or 2% transaction cuts.</p>

		<!-- CTA Buttons -->
		<div class="wp-block-buttons om-hero-cta-group">
			<div class="wp-block-button om-btn--primary"><a class="wp-block-button__link" href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer">Download Free on wp.org &rarr;</a></div>
			<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg> Try 1-Click Live Store (No Setup)</a></div>
		</div>

		<!-- Comparison Bridge Link -->
		<p class="om-hero-compare-pill om-text-center"><a href="/compare/">Why pay 2% transaction fees to Shopify? See how much you save &rarr;</a></p>

		<!-- Trust Checklist -->
		<div class="wp-block-group om-hero-trust-row">
			<p>✓ No Coding Required — 100% Visual Builder</p>
			<p>✓ 0% Platform Commission — You Keep All Profits</p>
			<p>✓ Works with Any WordPress Theme</p>
		</div>

		<!-- Store Owner Interactive Customer Checkout Simulator -->
		<div class="om-user-store-simulator" id="om-user-store-sim">
			<div class="om-sim-header">
				<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;font-family:var(--om-font-mono);color:var(--om-forest);margin-bottom:0.75rem;display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg> Live Customer Checkout Simulator</span>
				<h2 style="font-size:clamp(1.5rem, 3vw, 2.1rem);font-weight:800;color:var(--om-ink);margin:0 0 0.5rem;letter-spacing:-0.03em;">Experience what your shoppers will feel</h2>
				<p style="font-size:0.95rem;color:var(--om-slate-mid);line-height:1.6;margin:0;">Test 1-click Express Pay, apply promotional discount codes, and see instant automated file delivery without waiting on server lag.</p>
			</div>

			<div class="om-sim-grid">
				<!-- Panel 1: Customer Storefront & Checkout -->
				<div class="om-sim-panel" id="om-sim-checkout-panel">
					<div class="om-sim-panel__title">
						<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg> 1. Customer Cart &amp; Express Checkout</span>
					</div>

					<div class="om-sim-prod-card">
						<div class="om-sim-prod-icon" style="color:#0B5135;">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
						</div>
						<div style="flex:1;">
							<div class="om-sim-prod-name">Creator Pro Digital Asset Bundle</div>
							<div style="font-size:0.78rem;color:#64748B;">Includes 420+ templates, presets &amp; commercial rights</div>
							<div class="om-sim-prod-price" id="om-sim-price-display">$49.00</div>
						</div>
					</div>

					<!-- Express Pay Buttons -->
					<div style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;color:#64748B;margin-bottom:6px;">Instant 1-Click Pay:</div>
					<div class="om-sim-pay-buttons">
						<button type="button" class="om-sim-pay-btn om-sim-pay-btn--apple" id="om-sim-btn-apple">
							<span>Pay</span>
						</button>
						<button type="button" class="om-sim-pay-btn" id="om-sim-btn-gpay">
							<span>Google Pay</span>
						</button>
					</div>

					<!-- Coupon Box -->
					<div class="om-sim-coupon-box">
						<input type="text" id="om-sim-coupon-field" class="om-sim-coupon-input" placeholder="Promo code (try SAVE20)" value="SAVE20">
						<button type="button" id="om-sim-coupon-apply" class="om-sim-coupon-btn">Apply</button>
					</div>
					<div id="om-sim-discount-notice" style="font-size:0.78rem;color:#15803D;font-weight:600;margin-bottom:12px;display:flex;align-items:center;gap:5px;">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
						Coupon SAVE20 applied: -$9.80 off!
					</div>

					<button type="button" id="om-sim-place-order" class="om-sim-submit-btn">
						<span>Complete Purchase ($39.20)</span> &rarr;
					</button>
					<div style="font-size:0.75rem;color:#64748B;text-align:center;margin-top:8px;display:flex;align-items:center;justify-content:center;gap:5px;">
						<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
						256-bit Encrypted • 0% Omnify Transaction Fees
					</div>
				</div>

				<!-- Panel 2: Automated Customer Delivery & Merchant Confirmation -->
				<div class="om-sim-panel" id="om-sim-success-panel" style="background:#FFFFFF;display:flex;flex-direction:column;justify-content:space-between;">
					
					<!-- Awaiting / Standby State -->
					<div id="om-sim-idle-state" style="display:flex;flex-direction:column;height:100%;justify-content:space-between;">
						<div>
							<div class="om-sim-panel__title" style="color:#0B5135;">
								<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> 2. Automated Delivery Engine</span>
							</div>

							<div style="background:#F8FAFC;border:1.5px dashed #CBD5E1;border-radius:12px;padding:20px 16px;margin-bottom:16px;text-align:center;">
								<div style="width:44px;height:44px;background:#EFF8F2;border:1px solid #D4E8DC;color:#18794E;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;margin-bottom:10px;">
									<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
								</div>
								<div style="font-weight:800;font-size:1rem;color:#0F172A;margin-bottom:4px;">Ready for Live Checkout</div>
								<div style="font-size:0.8rem;color:#64748B;line-height:1.45;max-width:320px;margin:0 auto;">
									Click <strong style="color:#0B5135;">Complete Purchase</strong> on the left to watch instant delivery and key generation execute live.
								</div>
							</div>

							<!-- Fulfillment Pipeline Indicators -->
							<div style="display:flex;flex-direction:column;gap:8px;margin-bottom:16px;">
								<div id="om-sim-pipe-1" style="display:flex;align-items:center;justify-content:space-between;background:#FFFFFF;border:1px solid #E2E8F0;border-radius:8px;padding:10px 12px;font-size:0.8rem;color:#475569;transition:all 0.25s ease;">
									<span style="display:inline-flex;align-items:center;gap:8px;">
										<span class="om-pipe-dot" style="width:8px;height:8px;border-radius:50%;background:#CBD5E1;display:inline-block;transition:background 0.25s ease;"></span>
										Direct Stripe / Apple Pay Auth
									</span>
									<span style="font-family:var(--om-font-mono);font-size:0.75rem;font-weight:700;color:#64748B;">0.12s</span>
								</div>
								<div id="om-sim-pipe-2" style="display:flex;align-items:center;justify-content:space-between;background:#FFFFFF;border:1px solid #E2E8F0;border-radius:8px;padding:10px 12px;font-size:0.8rem;color:#475569;transition:all 0.25s ease;">
									<span style="display:inline-flex;align-items:center;gap:8px;">
										<span class="om-pipe-dot" style="width:8px;height:8px;border-radius:50%;background:#CBD5E1;display:inline-block;transition:background 0.25s ease;"></span>
										0% Fee Settlement to Merchant
									</span>
									<span style="font-family:var(--om-font-mono);font-size:0.75rem;font-weight:700;color:#64748B;">0.22s</span>
								</div>
								<div id="om-sim-pipe-3" style="display:flex;align-items:center;justify-content:space-between;background:#FFFFFF;border:1px solid #E2E8F0;border-radius:8px;padding:10px 12px;font-size:0.8rem;color:#475569;transition:all 0.25s ease;">
									<span style="display:inline-flex;align-items:center;gap:8px;">
										<span class="om-pipe-dot" style="width:8px;height:8px;border-radius:50%;background:#CBD5E1;display:inline-block;transition:background 0.25s ease;"></span>
										Secure Vault Decrypt &amp; License Issue
									</span>
									<span style="font-family:var(--om-font-mono);font-size:0.75rem;font-weight:700;color:#64748B;">0.38s</span>
								</div>
							</div>
						</div>

						<div style="display:flex;align-items:center;justify-content:center;gap:6px;font-size:0.75rem;color:#64748B;padding-top:10px;border-top:1px solid #F1F5F9;">
							<span style="width:7px;height:7px;border-radius:50%;background:#10B981;display:inline-block;"></span>
							Sub-second fulfillment pipeline online
						</div>
					</div>

					<!-- Completed / Fulfilled State (Hidden until trigger) -->
					<div id="om-sim-completed-state" style="display:none;flex-direction:column;height:100%;justify-content:space-between;">
						<div>
							<div class="om-sim-panel__title" style="color:#0B5135;">
								<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> 2. Automated Thank-You &amp; Instant Delivery</span>
							</div>

							<div style="background:#EFF8F2;border:1px solid #D4E8DC;border-radius:12px;padding:16px;margin-bottom:14px;text-align:center;">
								<div style="width:40px;height:40px;background:#22A06B;color:#FFFFFF;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;margin-bottom:6px;">
									<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
								</div>
								<div style="font-weight:800;font-size:1.05rem;color:#063D26;">Payment Confirmed in 0.38s!</div>
								<div style="font-size:0.8rem;color:#18794E;">Order #OM-8921 • Funds direct to your Stripe</div>
							</div>

							<!-- Digital Download Vault -->
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:12px;margin-bottom:12px;">
								<div style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;margin-bottom:8px;">Instant Download Access:</div>
								<div style="display:flex;align-items:center;justify-content:space-between;gap:8px;">
									<div>
										<div style="font-weight:700;font-size:0.85rem;color:#0F172A;display:flex;align-items:center;gap:5px;">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
											Creator_Bundle_v2.4.zip
										</div>
										<div style="font-size:0.72rem;color:#64748B;">148 MB • 3 downloads remaining</div>
									</div>
									<a href="#download" onclick="alert('Demo simulator: File download starts instantly on your real store!');return false;" style="background:#0B5135;color:#FFFFFF;padding:6px 14px;border-radius:6px;font-size:0.78rem;font-weight:700;text-decoration:none;">Download</a>
								</div>
							</div>

							<!-- Automatic License Key -->
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:12px;margin-bottom:16px;">
								<div style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;margin-bottom:4px;">Software License Key:</div>
								<div style="font-family:var(--om-font-mono);font-size:0.85rem;font-weight:700;color:#0B5135;background:#EFF8F2;padding:6px 10px;border-radius:4px;display:flex;justify-content:space-between;align-items:center;">
									<span>OM-VIP-8921-KEY</span>
									<span style="font-size:0.72rem;color:#18794E;">Active</span>
								</div>
							</div>
						</div>

						<div style="display:flex;justify-content:space-between;align-items:center;margin-top:auto;padding-top:10px;border-top:1px solid #E2E8F0;">
							<span style="font-size:0.75rem;color:#15803D;font-weight:700;display:inline-flex;align-items:center;gap:4px;">
								<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
								Automated Email Receipt Sent
							</span>
							<button type="button" id="om-sim-reset-btn" style="background:#F1F5F9;border:1px solid #CBD5E1;padding:5px 12px;border-radius:6px;font-size:0.75rem;font-weight:600;cursor:pointer;">Reset Demo</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- ============================================================
	     2. DEVELOPER & AGENCY HERO (Shown when Developer selected)
	     ============================================================ -->
	<div class="om-for-developer">
		<!-- Eyebrow Pill -->
		<div class="wp-block-group om-hero-eyebrow-wrap">
			<p class="om-hero-eyebrow"><span class="om-eyebrow-dot"></span> Next-Gen WordPress eCommerce Plugin</p>
		</div>

		<!-- Main Headline -->
		<h1 class="wp-block-heading om-hero-saas__title om-text-center">Your complete eCommerce store, <span class="om-text-gradient">built natively for WordPress.</span></h1>

		<!-- Subheading -->
		<p class="om-hero-subhead om-text-center">OmnifyWP combines the speed and elegance of modern checkout engines with the ownership of self-hosted WordPress. List products, collect payments, and deliver digital files without monthly SaaS fees.</p>

		<!-- CTA Buttons -->
		<div class="wp-block-buttons om-hero-cta-group">
			<div class="wp-block-button om-btn--primary"><a class="wp-block-button__link" href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer">Download on wp.org &rarr;</a></div>
			<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"/></svg> Try Live Demo (No Setup)</a></div>
		</div>

		<!-- Comparison Bridge Link -->
		<p class="om-hero-compare-pill om-text-center"><a href="/compare/" style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Why switch from WooCommerce? See architectural comparison &rarr;</a></p>

		<!-- Trust Checklist -->
		<div class="wp-block-group om-hero-trust-row">
			<p>✓ 100% GPL Licensed &amp; Free Core</p>
			<p>✓ Sub-100ms Native SQL Queries</p>
			<p>✓ Zero Database Postmeta Bloat</p>
		</div>
	</div>

	<!-- Developer Interactive Performance Benchmarks Under Load -->
	<!-- wp:group {"className":"om-hero-perf-wrap om-for-developer","layout":{"type":"constrained","contentSize":"1240px"}} -->
	<div class="wp-block-group om-hero-perf-wrap om-for-developer" style="width:100%;max-width:1240px;margin-top:2.5rem;margin-inline:auto;">
		<div id="om-performance-comparator" class="om-perf-comparator" style="margin-bottom:0;box-shadow:0 25px 60px -15px rgba(11,81,53,0.18), 0 0 0 1px rgba(11,81,53,0.04);">
			<div class="om-perf-header">
				<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;font-family:var(--om-font-mono);color:var(--om-forest);margin-bottom:0.75rem;display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Interactive Benchmarks Under Load</span>
				<h2 style="font-size:clamp(1.6rem, 3vw, 2.25rem);font-weight:800;color:var(--om-ink);margin:0 0 0.75rem;letter-spacing:-0.03em;">Simulate Real-World Store Performance</h2>
				<p style="font-size:0.95rem;color:var(--om-slate-mid);line-height:1.6;margin:0;">Select a store catalog scale and traffic volume to compare latency, SQL query execution, memory footprint, and concurrent checkout capacities in real time.</p>
			</div>

			<!-- Scenario Selector -->
			<div class="om-perf-scenario-picker">
				<button type="button" class="om-perf-scenario-btn" data-scenario="starter">
					<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg> Starter Boutique</span>
					<span class="om-scenario-sub">100 Products &bull; 50 Orders/Day</span>
				</button>
				<button type="button" class="om-perf-scenario-btn is-active" data-scenario="growth">
					<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg> Growing Brand (Default)</span>
					<span class="om-scenario-sub">2,500 Products &bull; 600 Orders/Day</span>
				</button>
				<button type="button" class="om-perf-scenario-btn" data-scenario="enterprise">
					<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/></svg> High-Volume Enterprise</span>
					<span class="om-scenario-sub">50,000 Products &bull; 8,000 Orders/Day</span>
				</button>
			</div>

			<!-- Live Metric Grid -->
			<div class="om-perf-grid">
				<!-- Metric 1: TTFB / Latency -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Server Response Time (TTFB)</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-ttfb-omni" class="om-perf-bar-val" style="color:#15803D;">24 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:14%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-ttfb-woo" class="om-perf-bar-val" style="color:#DC2626;">285 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:82%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-ttfb-edd" class="om-perf-bar-val">140 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:48%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-ttfb-sure" class="om-perf-bar-val">195 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:60%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">OmnifyWP responds up to <strong>11.8x faster</strong> by eliminating postmeta table iteration.</p>
				</div>

				<!-- Metric 2: SQL Queries -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg> Database Queries / Product View</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-query-omni" class="om-perf-bar-val" style="color:#15803D;">1 query</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:4%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-query-woo" class="om-perf-bar-val" style="color:#DC2626;">38 queries</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:85%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-query-edd" class="om-perf-bar-val">18 queries</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:45%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-query-sure" class="om-perf-bar-val">8 queries + API</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:26%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">Direct relational select from indexed table <code>wp_omnify_products</code> with zero JOINs.</p>
				</div>

				<!-- Metric 3: RAM Memory Footprint -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg> Memory Footprint / PHP Request</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-mem-omni" class="om-perf-bar-val" style="color:#15803D;">8.2 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:18%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-mem-woo" class="om-perf-bar-val" style="color:#DC2626;">44.6 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:90%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-mem-edd" class="om-perf-bar-val">22.4 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:50%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-mem-sure" class="om-perf-bar-val">18.1 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:40%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">Allows <strong>5x more PHP worker threads</strong> to run concurrently on standard server tiers.</p>
				</div>

				<!-- Metric 4: Concurrency Checkouts -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg> Concurrent Checkouts ($20/mo VPS)</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-conc-omni" class="om-perf-bar-val" style="color:#15803D;">420 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:100%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-conc-woo" class="om-perf-bar-val" style="color:#DC2626;">42 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:10%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-conc-edd" class="om-perf-bar-val">115 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:28%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-conc-sure" class="om-perf-bar-val">90 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:22%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">Zero database deadlock during flash sales due to isolated order tables.</p>
				</div>
			</div>

			<!-- Live Simulator Action Bar -->
			<div class="om-perf-sim-action">
				<button type="button" id="om-run-perf-sim-btn" class="om-btn om-btn--primary" style="font-size:0.875rem;height:42px;padding:0 1.25rem;">
					Run Interactive Concurrency Test
				</button>
				<div id="om-perf-sim-status" style="font-size:0.8125rem;color:var(--om-slate-mid);">
					<span>Ready to simulate 500 simultaneous checkout requests on simulated 2-core VPS.</span>
				</div>
			</div>
		</div>
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
