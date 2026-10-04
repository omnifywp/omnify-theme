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

	<!-- Eyebrow Pill -->
	<!-- wp:paragraph {"className":"om-hero-eyebrow om-text-center"} -->
	<p class="om-hero-eyebrow om-text-center"><span class="om-eyebrow-dot"></span> Next-Gen WordPress eCommerce Plugin</p>
	<!-- /wp:paragraph -->

	<!-- Main Headline -->
	<!-- wp:heading {"level":1,"className":"om-hero-saas__title om-text-center"} -->
	<h1 class="wp-block-heading om-hero-saas__title om-text-center">Your complete eCommerce store, <span class="om-text-gradient">built natively for WordPress.</span></h1>
	<!-- /wp:heading -->

	<!-- Subheading -->
	<!-- wp:paragraph {"className":"om-hero-subhead om-text-center"} -->
	<p class="om-hero-subhead om-text-center">OmnifyWP combines the speed and elegance of modern checkout engines with the ownership of self-hosted WordPress. List products, collect payments, and deliver digital files without monthly SaaS fees.</p>
	<!-- /wp:paragraph -->

	<!-- CTA Buttons -->
	<!-- wp:buttons {"className":"om-hero-cta-group","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons om-hero-cta-group">
		<!-- wp:button {"className":"om-btn--primary"} -->
		<div class="wp-block-button om-btn--primary"><a class="wp-block-button__link" href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer">Download on WordPress.org &rarr;</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"om-btn--secondary"} -->
		<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer">🎮 Try Live Demo (No Setup)</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- Comparison Bridge Link -->
	<!-- wp:paragraph {"className":"om-hero-compare-pill om-text-center"} -->
	<p class="om-hero-compare-pill om-text-center"><a href="/compare/">⚡ Why switch from WooCommerce? See architectural comparison &rarr;</a></p>
	<!-- /wp:paragraph -->

	<!-- Trust Checklist -->
	<!-- wp:group {"className":"om-hero-trust-row","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group om-hero-trust-row">
		<!-- wp:paragraph -->
		<p>✓ 100% GPL Licensed &amp; Free Core</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>✓ Sub-100ms Native SQL Queries</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>✓ Zero Database Postmeta Bloat</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Hero Interactive UI Mockup -->
	<!-- wp:group {"className":"om-browser-frame-wrap","layout":{"type":"constrained","contentSize":"1120px"}} -->
	<div class="wp-block-group om-browser-frame-wrap">
		<div class="om-browser-frame" style="border-radius:18px;border:1px solid #D4E8DC;box-shadow:0 25px 60px -15px rgba(11,81,53,0.18), 0 0 0 1px rgba(11,81,53,0.04);background:#FFFFFF;overflow:hidden;">

			<!-- Browser Chrome Bar -->
			<div class="om-browser-chrome" style="background:#F7FCF9;padding:12px 18px;display:flex;align-items:center;gap:14px;border-bottom:1px solid #E6F4EC;">
				<div class="om-browser-dots" style="display:flex;gap:7px;">
					<span style="width:11px;height:11px;border-radius:50%;background:#EF4444;display:inline-block;"></span>
					<span style="width:11px;height:11px;border-radius:50%;background:#F59E0B;display:inline-block;"></span>
					<span style="width:11px;height:11px;border-radius:50%;background:#10B981;display:inline-block;"></span>
				</div>
				<div class="om-browser-bar" style="flex:1;background:#FFFFFF;border:1px solid #D4E8DC;border-radius:6px;padding:5px 12px;font-family:var(--om-font-mono);font-size:0.78rem;color:#6B7F74;display:flex;align-items:center;gap:6px;">
					<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#22A06B" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					mystore.local/wp-admin/admin.php?page=omnify-dashboard
				</div>
				<div style="display:flex;gap:6px;">
					<span style="padding:3px 10px;border-radius:4px;background:#EFF8F2;color:#18794E;font-size:0.72rem;font-weight:700;">Live Interactive Mockup</span>
				</div>
			</div>

			<!-- App Dashboard Layout Mockup -->
			<div style="background:#F4F7F5;padding:24px;font-family:var(--om-font-body);color:#1E293B;">

				<!-- Dashboard Top Navigation Bar with Interactive Tabs -->
				<div style="display:flex;justify-content:space-between;align-items:center;background:#ffffff;padding:12px 18px;border-radius:12px;border:1px solid #E2E8F0;margin-bottom:20px;box-shadow:0 1px 3px rgba(0,0,0,0.03);flex-wrap:wrap;gap:12px;">
					<div style="display:flex;align-items:center;gap:12px;flex-wrap:wrap;">
						<div style="width:34px;height:34px;border-radius:8px;background:linear-gradient(135deg, #18794E, #22A06B);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:0.9rem;">
							⚡
						</div>
						<div class="om-mockup-tabs-bar" style="display:flex;gap:6px;">
							<button type="button" class="om-mockup-tab is-active" data-tab-target="panel-overview" style="background:#EFF8F2;color:#0B5135;border:1px solid #D4E8DC;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:700;cursor:pointer;transition:all 0.15s ease;">Dashboard</button>
							<button type="button" class="om-mockup-tab" data-tab-target="panel-orders" style="background:transparent;color:#64748B;border:1px solid transparent;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;transition:all 0.15s ease;">Orders (18)</button>
							<button type="button" class="om-mockup-tab" data-tab-target="panel-products" style="background:transparent;color:#64748B;border:1px solid transparent;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;transition:all 0.15s ease;">Products</button>
							<button type="button" class="om-mockup-tab" data-tab-target="panel-analytics" style="background:transparent;color:#64748B;border:1px solid transparent;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;transition:all 0.15s ease;">Analytics</button>
						</div>
					</div>
					<div style="display:flex;align-items:center;gap:10px;">
						<span style="font-size:0.8rem;color:#10B981;font-weight:700;background:#D1FAE5;padding:4px 10px;border-radius:9999px;">● Custom SQL Connected</span>
						<a href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" style="background:#18794E;color:#fff;text-decoration:none;padding:6px 14px;border-radius:6px;font-size:0.825rem;font-weight:600;">+ Add Product</a>
					</div>
				</div>

				<!-- PANEL 1: DASHBOARD OVERVIEW -->
				<div class="om-mockup-panel is-active" id="panel-overview">
					<div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(210px, 1fr));gap:16px;margin-bottom:20px;">
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Gross Revenue</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+18.4%</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">$14,892.40</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">vs last 30 days</div>
						</div>
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Completed Orders</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+12%</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">284</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">99.4% success rate</div>
						</div>
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Digital Deliveries</span>
								<span style="font-size:0.75rem;font-weight:700;color:#3B82F6;background:#EFF6FF;padding:2px 6px;border-radius:4px;">HMAC Locked</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">1,420</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">0 leak incidents</div>
						</div>
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Average Order Value</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+$4.20</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">$52.44</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">via 1-click upsells</div>
						</div>
					</div>

					<div style="display:grid;grid-template-columns:2fr 1fr;gap:20px;">
						<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
								<div>
									<h4 style="margin:0;font-size:1rem;font-weight:700;color:#0F172A;">Recent Transactions</h4>
									<span style="font-size:0.75rem;color:#64748B;">Processed through Stripe &amp; PayPal Webhooks</span>
								</div>
								<span style="font-size:0.75rem;font-weight:600;color:#18794E;cursor:pointer;">Export CSV &rarr;</span>
							</div>
							<div style="overflow-x:auto;">
								<table style="width:100%;border-collapse:collapse;font-size:0.825rem;text-align:left;">
									<thead>
										<tr style="border-bottom:1px solid #E2E8F0;color:#64748B;">
											<th style="padding:8px 10px;font-weight:600;">Order</th>
											<th style="padding:8px 10px;font-weight:600;">Customer</th>
											<th style="padding:8px 10px;font-weight:600;">Product</th>
											<th style="padding:8px 10px;font-weight:600;">Total</th>
											<th style="padding:8px 10px;font-weight:600;">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr style="border-bottom:1px solid #F1F5F9;">
											<td style="padding:10px;font-family:var(--om-font-mono);font-weight:600;color:#18794E;">#1042</td>
											<td style="padding:10px;font-weight:600;">Sarah Jenkins</td>
											<td style="padding:10px;color:#475569;">UI Mastery Course (License)</td>
											<td style="padding:10px;font-weight:700;">$89.00</td>
											<td style="padding:10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Completed</span></td>
										</tr>
										<tr style="border-bottom:1px solid #F1F5F9;">
											<td style="padding:10px;font-family:var(--om-font-mono);font-weight:600;color:#18794E;">#1041</td>
											<td style="padding:10px;font-weight:600;">David Miller</td>
											<td style="padding:10px;color:#475569;">Leather Tech Sleeve (Physical)</td>
											<td style="padding:10px;font-weight:700;">$64.50</td>
											<td style="padding:10px;"><span style="background:#EFF6FF;color:#1E40AF;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Processing</span></td>
										</tr>
										<tr style="border-bottom:1px solid #F1F5F9;">
											<td style="padding:10px;font-family:var(--om-font-mono);font-weight:600;color:#18794E;">#1040</td>
											<td style="padding:10px;font-weight:600;">Emma Watson</td>
											<td style="padding:10px;color:#475569;">Sound Library Bundle</td>
											<td style="padding:10px;font-weight:700;">$129.00</td>
											<td style="padding:10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Completed</span></td>
										</tr>
										<tr>
											<td style="padding:10px;font-family:var(--om-font-mono);font-weight:600;color:#18794E;">#1039</td>
											<td style="padding:10px;font-weight:600;">Alex Rover</td>
											<td style="padding:10px;color:#475569;">Minimalist Watch Strap</td>
											<td style="padding:10px;font-weight:700;">$38.00</td>
											<td style="padding:10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Completed</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);display:flex;flex-direction:column;justify-content:space-between;">
							<div>
								<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
									<h4 style="margin:0;font-size:0.95rem;font-weight:700;color:#0F172A;">Checkout Preview</h4>
									<span style="font-size:0.72rem;background:#FEF3C7;color:#92400E;padding:2px 6px;border-radius:4px;font-weight:700;">1-Click</span>
								</div>
								<div style="display:flex;gap:4px;margin-bottom:16px;">
									<div style="flex:1;height:4px;background:#18794E;border-radius:2px;"></div>
									<div style="flex:1;height:4px;background:#18794E;border-radius:2px;"></div>
									<div style="flex:1;height:4px;background:#E2E8F0;border-radius:2px;"></div>
								</div>
								<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:8px;padding:12px;margin-bottom:12px;">
									<div style="display:flex;justify-content:space-between;font-size:0.8rem;margin-bottom:4px;">
										<span style="font-weight:600;color:#1E293B;">Full-Grain Leather Wallet</span>
										<span style="font-weight:700;color:#0F172A;">$49.00</span>
									</div>
									<span style="font-size:0.72rem;color:#10B981;font-weight:600;">✓ In Stock &bull; Ships Worldwide</span>
								</div>
								<div style="font-size:0.78rem;color:#64748B;display:flex;justify-content:space-between;margin-bottom:6px;">
									<span>Subtotal:</span>
									<span style="font-weight:600;color:#1E293B;">$49.00</span>
								</div>
								<div style="font-size:0.78rem;color:#64748B;display:flex;justify-content:space-between;margin-bottom:6px;">
									<span>Encrypted Delivery:</span>
									<span style="font-weight:600;color:#10B981;">Free</span>
								</div>
								<div style="border-top:1px dashed #CBD5E1;padding-top:8px;display:flex;justify-content:space-between;font-size:0.9rem;font-weight:800;color:#0F172A;margin-bottom:14px;">
									<span>Total:</span>
									<span>$49.00</span>
								</div>
							</div>
							<a href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" class="om-btn om-btn--primary" style="width:100%;justify-content:center;padding:0.7rem;font-size:0.875rem;border-radius:8px;text-decoration:none;">
								Test Live Checkout Flow &rarr;
							</a>
						</div>
					</div>
				</div>

				<!-- PANEL 2: ORDERS -->
				<div class="om-mockup-panel" id="panel-orders" style="display:none;">
					<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
						<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;flex-wrap:wrap;gap:10px;">
							<div style="display:flex;gap:6px;">
								<span style="padding:4px 10px;background:#EFF8F2;color:#0B5135;border-radius:6px;font-size:0.78rem;font-weight:700;">All (18)</span>
								<span style="padding:4px 10px;background:#F8FAFC;color:#64748B;border-radius:6px;font-size:0.78rem;font-weight:600;">Completed (15)</span>
								<span style="padding:4px 10px;background:#F8FAFC;color:#64748B;border-radius:6px;font-size:0.78rem;font-weight:600;">Processing (2)</span>
								<span style="padding:4px 10px;background:#F8FAFC;color:#64748B;border-radius:6px;font-size:0.78rem;font-weight:600;">Refunded (1)</span>
							</div>
							<div style="font-size:0.78rem;color:#18794E;font-weight:700;">+ Filter by Gateway</div>
						</div>
						<div style="overflow-x:auto;">
							<table style="width:100%;border-collapse:collapse;font-size:0.825rem;text-align:left;">
								<thead>
									<tr style="border-bottom:1px solid #E2E8F0;color:#64748B;">
										<th style="padding:10px;font-weight:600;">Order ID</th>
										<th style="padding:10px;font-weight:600;">Customer</th>
										<th style="padding:10px;font-weight:600;">Gateway</th>
										<th style="padding:10px;font-weight:600;">Delivery Security</th>
										<th style="padding:10px;font-weight:600;">Total</th>
										<th style="padding:10px;font-weight:600;">Fulfillment</th>
									</tr>
								</thead>
								<tbody>
									<tr style="border-bottom:1px solid #F1F5F9;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1042</td>
										<td style="padding:12px 10px;font-weight:600;">sarah.j@designco.com</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Stripe Elements</span></td>
										<td style="padding:12px 10px;"><span style="color:#10B981;font-weight:700;font-size:0.75rem;">🔒 HMAC Token Active (48h)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$89.00</td>
										<td style="padding:12px 10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Instant Delivered</span></td>
									</tr>
									<tr style="border-bottom:1px solid #F1F5F9;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1041</td>
										<td style="padding:12px 10px;font-weight:600;">d.miller@gmail.com</td>
										<td style="padding:12px 10px;"><span style="background:#EFF6FF;color:#1E40AF;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">PayPal Smart</span></td>
										<td style="padding:12px 10px;"><span style="color:#64748B;font-size:0.75rem;">Physical (USPS Tracking)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$64.50</td>
										<td style="padding:12px 10px;"><span style="background:#FEF3C7;color:#92400E;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Label Printed</span></td>
									</tr>
									<tr style="border-bottom:1px solid #F1F5F9;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1040</td>
										<td style="padding:12px 10px;font-weight:600;">emma.w@audiobeats.io</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Stripe (Apple Pay)</span></td>
										<td style="padding:12px 10px;"><span style="color:#10B981;font-weight:700;font-size:0.75rem;">🔒 HMAC Token Active (48h)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$129.00</td>
										<td style="padding:12px 10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Instant Delivered</span></td>
									</tr>
									<tr>
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1039</td>
										<td style="padding:12px 10px;font-weight:600;">alex.r@studio.net</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Mollie (iDEAL)</span></td>
										<td style="padding:12px 10px;"><span style="color:#10B981;font-weight:700;font-size:0.75rem;">🔒 HMAC Token Active (48h)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$38.00</td>
										<td style="padding:12px 10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Instant Delivered</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- PANEL 3: PRODUCTS -->
				<div class="om-mockup-panel" id="panel-products" style="display:none;">
					<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
						<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:16px;">
								<div style="font-size:0.75rem;font-weight:700;color:#18794E;text-transform:uppercase;margin-bottom:6px;">Product Builder Wizard</div>
								<h4 style="margin:0 0 10px;font-size:1.05rem;color:#0F172A;">WordPress Masterclass &amp; Design Assets</h4>
								<div style="display:flex;gap:6px;margin-bottom:14px;">
									<span style="background:#EFF8F2;color:#0B5135;border:1px solid #D4E8DC;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">⚡ Digital Download</span>
									<span style="background:#F1F5F9;color:#475569;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:600;">Custom License Key</span>
								</div>
								<div style="background:#FFFFFF;border:1px dashed #86EFAC;border-radius:8px;padding:12px;margin-bottom:12px;">
									<div style="font-size:0.8rem;font-weight:700;color:#166534;">📦 masterclass-complete-v2.zip (384 MB)</div>
									<div style="font-size:0.72rem;color:#15803D;margin-top:2px;">HMAC SHA-256 Link &bull; Max 5 downloads &bull; 48h validity</div>
								</div>
								<div style="display:flex;justify-content:space-between;align-items:center;">
									<span style="font-size:1.15rem;font-weight:800;color:#0F172A;">$89.00</span>
									<span style="font-size:0.75rem;color:#10B981;font-weight:700;">● Active on Storefront</span>
								</div>
							</div>

							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:16px;">
								<div style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;margin-bottom:6px;">Catalog Capabilities</div>
								<ul style="list-style:none;padding:0;margin:0 0 16px;display:flex;flex-direction:column;gap:8px;font-size:0.825rem;color:#334155;">
									<li>✓ <strong>Multi-Attribute Swatches:</strong> Sizes, colors, formats</li>
									<li>✓ <strong>Zero Postmeta Overhead:</strong> Stored in <code>wp_omnify_products</code></li>
									<li>✓ <strong>Automated SKU Generation:</strong> Instant product barcodes</li>
									<li>✓ <strong>Pre-Orders &amp; Stock Limits:</strong> Automated inventory caps</li>
								</ul>
								<a href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" class="om-btn om-btn--secondary" style="width:100%;justify-content:center;background:#fff;font-size:0.8rem;">
									Launch Playground Catalog Editor &rarr;
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- PANEL 4: ANALYTICS -->
				<div class="om-mockup-panel" id="panel-analytics" style="display:none;">
					<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
						<div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
								<div style="font-size:0.72rem;font-weight:700;color:#64748B;text-transform:uppercase;">Net Sales (Last 30 Days)</div>
								<div style="font-size:1.6rem;font-weight:800;color:#0F172A;margin-top:4px;">$12,480.00</div>
								<span style="font-size:0.72rem;color:#10B981;font-weight:700;">↑ +22.4% vs previous period</span>
							</div>
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
								<div style="display:flex;justify-content:space-between;">
									<span style="font-size:0.72rem;font-weight:700;color:#64748B;text-transform:uppercase;">Database Query Latency</span>
									<span style="font-size:0.72rem;color:#10B981;font-weight:700;background:#DCFCE7;padding:1px 6px;border-radius:3px;">Sub-100ms</span>
								</div>
								<div style="font-size:1.6rem;font-weight:800;color:#166534;margin-top:4px;">0.08 seconds</div>
								<span style="font-size:0.72rem;color:#64748B;">Dedicated custom table indexing</span>
							</div>
						</div>

						<div style="background:#FAFDFB;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
							<div style="display:flex;justify-content:space-between;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:12px;">
								<span>Weekly Sales &amp; Checkout Velocity</span>
								<span style="color:#10B981;">● 284 Completed Transactions</span>
							</div>
							<div style="display:flex;align-items:flex-end;justify-content:space-between;height:70px;gap:8px;">
								<div style="flex:1;background:#E2E8F0;height:45%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#A8DFBF;height:65%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#A8DFBF;height:55%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#34D399;height:85%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#22A06B;height:75%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#18794E;height:100%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#0B5135;height:90%;border-radius:4px 4px 0 0;"></div>
							</div>
							<div style="display:flex;justify-content:space-between;font-size:0.65rem;color:#94A3B8;margin-top:6px;">
								<span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
