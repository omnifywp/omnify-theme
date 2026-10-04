<?php
/**
 * Title: Interactive Merchant Dashboard Showcase
 * Slug: omnify/interactive-dashboard-showcase
 * Categories: omnify-features
 * Block Types: core/group
 * Description: Interactive merchant control panel showcase with live tabs, order filters, product previewer, and 1-click checkout simulator.
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-dashboard-showcase-section","style":{"spacing":{"padding":{"top":"clamp(4.5rem, 7vw, 6.5rem)","bottom":"clamp(4.5rem, 7vw, 6.5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-dashboard-showcase-section" id="merchant-dashboard-showcase" style="border-top:1px solid #E6F4EC;background:linear-gradient(180deg, #FFFFFF 0%, #F7FCF9 100%);">

	<!-- Header Area -->
	<div class="om-text-center" style="max-width:820px;margin:0 auto 3.5rem auto;">
		<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;padding:4px 12px;margin-bottom:0.75rem;display:inline-flex;text-transform:uppercase;letter-spacing:0.04em;">⚡ Native WordPress Control Center</span>
		<h2 style="font-size:clamp(2rem, 3.8vw, 2.85rem);font-weight:800;letter-spacing:-0.035em;line-height:1.2;color:#0D1B12;margin:0 0 1rem 0;">Run your entire store without leaving WordPress admin.</h2>
		<p style="font-size:1.0625rem;line-height:1.7;color:#475569;margin:0;">Experience the intuitive, bloat-free merchant interface. Test live tabs, filter timeframe metrics, explore product models, and simulate instantaneous order webhook processing below.</p>
	</div>

	<!-- Hero Interactive UI Mockup -->
	<!-- wp:group {"className":"om-browser-frame-wrap","layout":{"type":"constrained","contentSize":"1160px"}} -->
	<div class="wp-block-group om-browser-frame-wrap" style="width:100%;max-width:1160px;margin-inline:auto;">
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
							<button type="button" class="om-mockup-tab" data-tab-target="panel-orders" style="background:transparent;color:#64748B;border:1px solid transparent;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;transition:all 0.15s ease;">Orders (<span id="om-hero-orders-count">18</span>)</button>
							<button type="button" class="om-mockup-tab" data-tab-target="panel-products" style="background:transparent;color:#64748B;border:1px solid transparent;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;transition:all 0.15s ease;">Products</button>
							<button type="button" class="om-mockup-tab" data-tab-target="panel-analytics" style="background:transparent;color:#64748B;border:1px solid transparent;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;transition:all 0.15s ease;">Analytics</button>
						</div>
					</div>
					<div style="display:flex;align-items:center;gap:10px;">
						<!-- Interactive Timeframe Filter -->
						<div class="om-hero-tf-group" style="display:flex;background:#F1F5F9;padding:2px;border-radius:6px;gap:2px;">
							<button type="button" class="om-hero-tf-btn is-active" data-period="30d" style="background:#fff;color:#0B5135;border:none;padding:3px 8px;border-radius:4px;font-size:0.75rem;font-weight:700;cursor:pointer;box-shadow:0 1px 2px rgba(0,0,0,0.05);">30D</button>
							<button type="button" class="om-hero-tf-btn" data-period="7d" style="background:transparent;color:#64748B;border:none;padding:3px 8px;border-radius:4px;font-size:0.75rem;font-weight:600;cursor:pointer;">7D</button>
							<button type="button" class="om-hero-tf-btn" data-period="all" style="background:transparent;color:#64748B;border:none;padding:3px 8px;border-radius:4px;font-size:0.75rem;font-weight:600;cursor:pointer;">All</button>
						</div>
						<span style="font-size:0.78rem;color:#10B981;font-weight:700;background:#D1FAE5;padding:4px 10px;border-radius:9999px;">● Sub-15ms SQL</span>
					</div>
				</div>

				<!-- PANEL 1: DASHBOARD OVERVIEW -->
				<div class="om-mockup-panel is-active" id="panel-overview">
					<div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(210px, 1fr));gap:16px;margin-bottom:20px;">
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Gross Revenue</span>
								<span id="om-hero-rev-badge" style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+18.4%</span>
							</div>
							<div id="om-hero-stat-revenue" style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;transition:all 0.3s ease;">$14,892.40</div>
							<div id="om-hero-rev-sub" style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">vs last 30 days</div>
						</div>
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Completed Orders</span>
								<span id="om-hero-orders-badge" style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+12%</span>
							</div>
							<div id="om-hero-stat-orders" style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;transition:all 0.3s ease;">284</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">99.4% success rate</div>
						</div>
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Digital Deliveries</span>
								<span style="font-size:0.75rem;font-weight:700;color:#3B82F6;background:#EFF6FF;padding:2px 6px;border-radius:4px;">HMAC Locked</span>
							</div>
							<div id="om-hero-stat-downloads" style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;transition:all 0.3s ease;">1,420</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">0 leak incidents</div>
						</div>
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Average Order Value</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+$4.20</span>
							</div>
							<div id="om-hero-stat-aov" style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;transition:all 0.3s ease;">$52.44</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">via 1-click upsells</div>
						</div>
					</div>

					<div class="om-dash-overview-grid" style="display:grid;grid-template-columns:2fr 1fr;gap:20px;">
						<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
								<div>
									<h4 style="margin:0;font-size:1rem;font-weight:700;color:#0F172A;">Recent Transactions</h4>
									<span style="font-size:0.75rem;color:#64748B;">Processed through Stripe &amp; PayPal Webhooks</span>
								</div>
								<span id="om-hero-export-csv" style="font-size:0.75rem;font-weight:600;color:#18794E;cursor:pointer;">Export CSV &rarr;</span>
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
									<tbody id="om-hero-tx-body">
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

						<!-- Interactive 1-Click Checkout Simulator Preview -->
						<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);display:flex;flex-direction:column;justify-content:space-between;" id="om-hero-checkout-card">
							<div>
								<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
									<h4 style="margin:0;font-size:0.95rem;font-weight:700;color:#0F172A;">Interactive Checkout</h4>
									<span style="font-size:0.72rem;background:#FEF3C7;color:#92400E;padding:2px 6px;border-radius:4px;font-weight:700;">1-Click Sim</span>
								</div>
								<div style="display:flex;gap:4px;margin-bottom:16px;">
									<div class="om-checkout-step-bar is-active" style="flex:1;height:4px;background:#18794E;border-radius:2px;"></div>
									<div class="om-checkout-step-bar is-active" style="flex:1;height:4px;background:#18794E;border-radius:2px;"></div>
									<div class="om-checkout-step-bar" style="flex:1;height:4px;background:#E2E8F0;border-radius:2px;"></div>
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

								<!-- Live Simulation Feedback Tray -->
								<div id="om-hero-sim-feedback" style="display:none;background:#EFF8F2;border:1px solid #86EFAC;border-radius:8px;padding:10px;margin-bottom:12px;font-size:0.75rem;color:#166534;line-height:1.4;">
									<div style="font-weight:700;margin-bottom:2px;" id="om-sim-title">⚡ Simulating 1-Click Order...</div>
									<div id="om-sim-desc" style="color:#15803D;">Executing custom SQL transaction...</div>
								</div>
							</div>
							<div>
								<button type="button" id="om-hero-sim-btn" class="om-btn om-btn--primary" style="width:100%;justify-content:center;padding:0.75rem;font-size:0.875rem;border-radius:8px;cursor:pointer;border:none;font-weight:700;box-shadow:0 4px 12px rgba(11,81,53,0.15);">
									<span>⚡ Test 1-Click Checkout Flow</span>
								</button>
								<div style="text-align:center;font-size:0.72rem;color:#94A3B8;margin-top:6px;">Simulates sub-15ms webhook execution</div>
							</div>
						</div>
					</div>
				</div>

				<!-- PANEL 2: ORDERS -->
				<div class="om-mockup-panel" id="panel-orders" style="display:none;">
					<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
						<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;flex-wrap:wrap;gap:10px;">
							<div class="om-hero-order-filters" style="display:flex;gap:6px;">
								<button type="button" class="om-hero-order-pill is-active" data-filter="all" style="padding:5px 12px;background:#EFF8F2;color:#0B5135;border:1px solid #D4E8DC;border-radius:6px;font-size:0.78rem;font-weight:700;cursor:pointer;">All (<span id="om-order-count-all">18</span>)</button>
								<button type="button" class="om-hero-order-pill" data-filter="completed" style="padding:5px 12px;background:#F8FAFC;color:#64748B;border:1px solid transparent;border-radius:6px;font-size:0.78rem;font-weight:600;cursor:pointer;">Completed (15)</button>
								<button type="button" class="om-hero-order-pill" data-filter="processing" style="padding:5px 12px;background:#F8FAFC;color:#64748B;border:1px solid transparent;border-radius:6px;font-size:0.78rem;font-weight:600;cursor:pointer;">Processing (2)</button>
								<button type="button" class="om-hero-order-pill" data-filter="refunded" style="padding:5px 12px;background:#F8FAFC;color:#64748B;border:1px solid transparent;border-radius:6px;font-size:0.78rem;font-weight:600;cursor:pointer;">Refunded (1)</button>
							</div>
							<div style="font-size:0.78rem;color:#18794E;font-weight:700;">⚡ Instant In-Memory Filter</div>
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
								<tbody id="om-hero-orders-tbody">
									<tr data-status="completed" style="border-bottom:1px solid #F1F5F9;transition:all 0.2s ease;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1042</td>
										<td style="padding:12px 10px;font-weight:600;">sarah.j@designco.com</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Stripe Elements</span></td>
										<td style="padding:12px 10px;"><span style="color:#10B981;font-weight:700;font-size:0.75rem;">🔒 HMAC Token Active (48h)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$89.00</td>
										<td style="padding:12px 10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Instant Delivered</span></td>
									</tr>
									<tr data-status="processing" style="border-bottom:1px solid #F1F5F9;transition:all 0.2s ease;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1041</td>
										<td style="padding:12px 10px;font-weight:600;">d.miller@gmail.com</td>
										<td style="padding:12px 10px;"><span style="background:#EFF6FF;color:#1E40AF;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">PayPal Smart</span></td>
										<td style="padding:12px 10px;"><span style="color:#64748B;font-size:0.75rem;">Physical (USPS Tracking)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$64.50</td>
										<td style="padding:12px 10px;"><span style="background:#FEF3C7;color:#92400E;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Label Printed</span></td>
									</tr>
									<tr data-status="completed" style="border-bottom:1px solid #F1F5F9;transition:all 0.2s ease;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1040</td>
										<td style="padding:12px 10px;font-weight:600;">emma.w@audiobeats.io</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Stripe (Apple Pay)</span></td>
										<td style="padding:12px 10px;"><span style="color:#10B981;font-weight:700;font-size:0.75rem;">🔒 HMAC Token Active (48h)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$129.00</td>
										<td style="padding:12px 10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Instant Delivered</span></td>
									</tr>
									<tr data-status="completed" style="border-bottom:1px solid #F1F5F9;transition:all 0.2s ease;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#1039</td>
										<td style="padding:12px 10px;font-weight:600;">alex.r@studio.net</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Mollie (iDEAL)</span></td>
										<td style="padding:12px 10px;"><span style="color:#10B981;font-weight:700;font-size:0.75rem;">🔒 HMAC Token Active (48h)</span></td>
										<td style="padding:12px 10px;font-weight:700;">$38.00</td>
										<td style="padding:12px 10px;"><span style="background:#ECFDF5;color:#065F46;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Instant Delivered</span></td>
									</tr>
									<tr data-status="refunded" style="border-bottom:1px solid #F1F5F9;transition:all 0.2s ease;">
										<td style="padding:12px 10px;font-family:var(--om-font-mono);font-weight:700;color:#64748B;">#1038</td>
										<td style="padding:12px 10px;font-weight:600;">k.baker@cloud.io</td>
										<td style="padding:12px 10px;"><span style="background:#F1F5F9;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">Stripe</span></td>
										<td style="padding:12px 10px;"><span style="color:#94A3B8;font-size:0.75rem;">Revoked Token</span></td>
										<td style="padding:12px 10px;font-weight:700;color:#64748B;">$29.00</td>
										<td style="padding:12px 10px;"><span style="background:#FEE2E2;color:#991B1B;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Refunded</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- PANEL 3: PRODUCTS -->
				<div class="om-mockup-panel" id="panel-products" style="display:none;">
					<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
						<div class="om-dash-products-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:16px;">
								<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
									<span style="font-size:0.75rem;font-weight:700;color:#18794E;text-transform:uppercase;">Interactive Product Switcher</span>
									<span style="font-size:0.7rem;background:#DCFCE7;color:#166534;font-weight:700;padding:2px 6px;border-radius:4px;">Live Preview</span>
								</div>
								<!-- Product Type Switcher Buttons -->
								<div class="om-hero-prod-type-bar" style="display:flex;gap:6px;margin-bottom:12px;">
									<button type="button" class="om-hero-prod-type-btn is-active" data-type="digital" style="flex:1;padding:6px;background:#EFF8F2;color:#0B5135;border:1px solid #22A06B;border-radius:6px;font-size:0.75rem;font-weight:700;cursor:pointer;">⚡ Digital</button>
									<button type="button" class="om-hero-prod-type-btn" data-type="physical" style="flex:1;padding:6px;background:#fff;color:#64748B;border:1px solid #E2E8F0;border-radius:6px;font-size:0.75rem;font-weight:600;cursor:pointer;">📦 Physical</button>
									<button type="button" class="om-hero-prod-type-btn" data-type="bundle" style="flex:1;padding:6px;background:#fff;color:#64748B;border:1px solid #E2E8F0;border-radius:6px;font-size:0.75rem;font-weight:600;cursor:pointer;">🎁 Bundle</button>
								</div>

								<h4 id="om-hero-prod-title" style="margin:0 0 8px;font-size:1.05rem;color:#0F172A;">WordPress Masterclass &amp; Design Assets</h4>
								<div id="om-hero-prod-badge-wrap" style="display:flex;gap:6px;margin-bottom:12px;">
									<span id="om-hero-prod-badge-1" style="background:#EFF8F2;color:#0B5135;border:1px solid #D4E8DC;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:700;">⚡ Digital Download</span>
									<span id="om-hero-prod-badge-2" style="background:#F1F5F9;color:#475569;padding:2px 8px;border-radius:4px;font-size:0.72rem;font-weight:600;">Custom License Key</span>
								</div>
								<div id="om-hero-prod-box" style="background:#FFFFFF;border:1px dashed #86EFAC;border-radius:8px;padding:12px;margin-bottom:12px;">
									<div id="om-hero-prod-file" style="font-size:0.8rem;font-weight:700;color:#166534;">📦 masterclass-complete-v2.zip (384 MB)</div>
									<div id="om-hero-prod-desc" style="font-size:0.72rem;color:#15803D;margin-top:2px;">HMAC SHA-256 Link &bull; Max 5 downloads &bull; 48h validity</div>
								</div>
								<div style="display:flex;justify-content:space-between;align-items:center;">
									<span id="om-hero-prod-price" style="font-size:1.25rem;font-weight:800;color:#0F172A;">$89.00</span>
									<span style="font-size:0.75rem;color:#10B981;font-weight:700;">● Active on Storefront</span>
								</div>
							</div>

							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:16px;display:flex;flex-direction:column;justify-content:space-between;">
								<div>
									<div style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;margin-bottom:8px;">Zero Bloat Architecture</div>
									<ul style="list-style:none;padding:0;margin:0 0 16px;display:flex;flex-direction:column;gap:8px;font-size:0.825rem;color:#334155;">
										<li>✓ <strong>Dedicated Custom Table:</strong> Stored in <code>wp_omnify_products</code></li>
										<li>✓ <strong>Automated SKU &amp; Barcode:</strong> Auto-generated on save</li>
										<li>✓ <strong>Multi-Attribute Swatches:</strong> Sizes, formats, tiers</li>
										<li>✓ <strong>Instant Checkout URL:</strong> Direct buy-now link</li>
									</ul>
								</div>
								<a href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" class="om-btn om-btn--secondary" style="width:100%;justify-content:center;background:#fff;font-size:0.825rem;border-radius:8px;">
									Launch In-Browser Catalog Editor &rarr;
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- PANEL 4: ANALYTICS -->
				<div class="om-mockup-panel" id="panel-analytics" style="display:none;">
					<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
						<div class="om-dash-analytics-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
								<div style="font-size:0.72rem;font-weight:700;color:#64748B;text-transform:uppercase;">Net Sales (Rolling 30D)</div>
								<div style="font-size:1.6rem;font-weight:800;color:#0F172A;margin-top:4px;">$14,892.40</div>
								<span style="font-size:0.72rem;color:#10B981;font-weight:700;">↑ +22.4% vs previous period</span>
							</div>
							<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
								<div style="display:flex;justify-content:space-between;">
									<span style="font-size:0.72rem;font-weight:700;color:#64748B;text-transform:uppercase;">Database Query Latency</span>
									<span style="font-size:0.72rem;color:#10B981;font-weight:700;background:#DCFCE7;padding:1px 6px;border-radius:3px;">Sub-15ms</span>
								</div>
								<div style="font-size:1.6rem;font-weight:800;color:#166534;margin-top:4px;">14.2 ms</div>
								<span style="font-size:0.72rem;color:#64748B;">Dedicated custom table indexing</span>
							</div>
						</div>

						<div style="background:#FAFDFB;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
							<div style="display:flex;justify-content:space-between;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:12px;">
								<span>Weekly Sales &amp; Checkout Velocity (Hover a bar)</span>
								<span id="om-hero-chart-detail" style="color:#10B981;font-family:var(--om-font-mono);">● Saturday: $2,840.00 (52 orders)</span>
							</div>
							<div class="om-hero-chart-bars" style="display:flex;align-items:flex-end;justify-content:space-between;height:70px;gap:8px;">
								<div class="om-hero-chart-col" data-day="Monday" data-sales="$1,420.00" data-orders="28 orders" style="flex:1;background:#E2E8F0;height:45%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
								<div class="om-hero-chart-col" data-day="Tuesday" data-sales="$1,890.00" data-orders="36 orders" style="flex:1;background:#A8DFBF;height:65%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
								<div class="om-hero-chart-col" data-day="Wednesday" data-sales="$1,640.00" data-orders="31 orders" style="flex:1;background:#A8DFBF;height:55%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
								<div class="om-hero-chart-col" data-day="Thursday" data-sales="$2,420.00" data-orders="44 orders" style="flex:1;background:#34D399;height:85%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
								<div class="om-hero-chart-col" data-day="Friday" data-sales="$2,150.00" data-orders="39 orders" style="flex:1;background:#22A06B;height:75%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
								<div class="om-hero-chart-col is-active" data-day="Saturday" data-sales="$2,840.00" data-orders="52 orders" style="flex:1;background:#18794E;height:100%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
								<div class="om-hero-chart-col" data-day="Sunday" data-sales="$2,532.40" data-orders="48 orders" style="flex:1;background:#0B5135;height:90%;border-radius:4px 4px 0 0;cursor:pointer;transition:all 0.2s ease;"></div>
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
