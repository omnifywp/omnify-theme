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

<!-- wp:html -->
<section class="om-hero-saas" style="position:relative;background:linear-gradient(180deg, #F0FAF4 0%, #FFFFFF 100%);padding-top:clamp(4rem, 7vw, 6.5rem);padding-bottom:clamp(3rem, 6vw, 5rem);overflow:hidden;border-bottom:1px solid #E6F4EC;">

	<!-- Ambient background glow elements -->
	<div style="position:absolute;top:-10%;left:50%;transform:translateX(-50%);width:900px;height:450px;background:radial-gradient(50% 50% at 50% 0%, rgba(34,160,107,0.18) 0%, rgba(52,211,153,0.06) 60%, transparent 100%);pointer-events:none;z-index:0;"></div>

	<div class="om-container" style="position:relative;z-index:1;max-width:1240px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2.5rem);">

		<!-- Eyebrow Pill -->
		<div style="text-align:center;margin-bottom:1.5rem;">
			<span style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.4rem 1rem;background:rgba(34,160,107,0.1);border:1px solid rgba(34,160,107,0.25);border-radius:9999px;font-size:0.8125rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase;color:#0B5135;">
				<span style="display:inline-block;width:7px;height:7px;border-radius:50%;background:#22A06B;"></span>
				Next-Gen WordPress eCommerce Plugin
			</span>
		</div>

		<!-- Main Headline -->
		<div style="text-align:center;max-width:920px;margin-inline:auto;margin-bottom:1.5rem;">
			<h1 style="font-family:var(--om-font-heading);font-size:clamp(2.5rem, 5.5vw, 4.25rem);font-weight:800;line-height:1.1;letter-spacing:-0.035em;color:#0D1B12;margin:0;">
				Your complete eCommerce store, <br class="om-br-desktop">
				<span style="background:linear-gradient(135deg, #0B5135 0%, #18794E 50%, #22A06B 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">built natively for WordPress.</span>
			</h1>
		</div>

		<!-- Subheading -->
		<div style="text-align:center;max-width:680px;margin-inline:auto;margin-bottom:2.25rem;">
			<p style="font-family:var(--om-font-body);font-size:clamp(1.0625rem, 2vw, 1.25rem);line-height:1.6;color:#3D5147;margin:0;">
				OmnifyWP combines the speed and elegance of modern checkout engines with the ownership of self-hosted WordPress. List products, collect payments, and deliver digital files without monthly SaaS fees.
			</p>
		</div>

		<!-- CTA Buttons -->
		<div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:1rem;margin-bottom:1.75rem;">
			<a href="https://wordpress.org/plugins/omnifywp-ecommerce/" class="om-btn om-btn--primary om-btn--lg" target="_blank" rel="noopener noreferrer" style="box-shadow:0 10px 25px -5px rgba(24,121,78,0.35);font-size:1.0625rem;padding:0.9rem 2.2rem;">
				Download on WordPress.org &rarr;
			</a>
			<a href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" class="om-btn om-btn--secondary om-btn--lg" target="_blank" rel="noopener noreferrer" style="background:#ffffff;border-color:#D4E8DC;color:#0B5135;font-size:1.0625rem;padding:0.9rem 2rem;">
				🎮 Try Live Demo (No Setup)
			</a>
			<a href="/compare/" class="om-btn om-btn--secondary om-btn--lg" style="background:#EFF8F2;border-color:#A8DFBF;color:#0B5135;font-size:1.0625rem;padding:0.9rem 1.8rem;">
				Compare with WooCommerce &rarr;
			</a>
		</div>

		<!-- Trust Checklist -->
		<div style="display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:1.5rem;font-size:0.875rem;font-weight:600;color:#6B7F74;margin-bottom:3.5rem;">
			<span style="display:inline-flex;align-items:center;gap:0.4rem;">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#22A06B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
				100% GPL Licensed
			</span>
			<span style="display:inline-flex;align-items:center;gap:0.4rem;">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#22A06B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
				WordPress 6.5+ Native
			</span>
			<span style="display:inline-flex;align-items:center;gap:0.4rem;">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#22A06B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
				Zero Database Bloat
			</span>
		</div>

		<!-- Hero Interactive UI Mockup (HTML/CSS/JS Component) -->
		<div style="max-width:1120px;margin-inline:auto;">
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
						<span style="padding:3px 10px;border-radius:4px;background:#EFF8F2;color:#18794E;font-size:0.72rem;font-weight:700;">Live Demo Mode</span>
					</div>
				</div>

				<!-- App Dashboard Layout Mockup -->
				<div style="background:#F4F7F5;padding:24px;font-family:var(--om-font-body);color:#1E293B;">

					<!-- Dashboard Top Navigation Bar -->
					<div style="display:flex;justify-content:space-between;align-items:center;background:#ffffff;padding:14px 20px;border-radius:12px;border:1px solid #E2E8F0;margin-bottom:20px;box-shadow:0 1px 3px rgba(0,0,0,0.03);">
						<div style="display:flex;align-items:center;gap:12px;">
							<div style="width:32px;height:32px;border-radius:8px;background:linear-gradient(135deg, #18794E, #22A06B);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:0.9rem;">
								⚡
							</div>
							<div style="display:flex;gap:4px;">
								<button type="button" class="om-mockup-tab active" data-mockup-target="tab-overview" style="background:#EFF8F2;color:#0B5135;border:none;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:700;cursor:pointer;">Dashboard</button>
								<button type="button" class="om-mockup-tab" data-mockup-target="tab-orders" style="background:transparent;color:#64748B;border:none;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;">Orders (18)</button>
								<button type="button" class="om-mockup-tab" data-mockup-target="tab-products" style="background:transparent;color:#64748B;border:none;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;">Products</button>
								<button type="button" class="om-mockup-tab" data-mockup-target="tab-analytics" style="background:transparent;color:#64748B;border:none;padding:6px 14px;border-radius:6px;font-size:0.85rem;font-weight:600;cursor:pointer;">Analytics</button>
							</div>
						</div>
						<div style="display:flex;align-items:center;gap:10px;">
							<span style="font-size:0.8rem;color:#10B981;font-weight:700;background:#D1FAE5;padding:4px 10px;border-radius:9999px;">● API Online</span>
							<button type="button" style="background:#18794E;color:#fff;border:none;padding:6px 14px;border-radius:6px;font-size:0.825rem;font-weight:600;cursor:pointer;">+ Add Product</button>
						</div>
					</div>

					<!-- Key Metrics Row (4 Cards) -->
					<div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(210px, 1fr));gap:16px;margin-bottom:20px;">
						<!-- Metric 1 -->
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Gross Revenue</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+18.4%</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">$14,892.40</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">vs last 30 days</div>
						</div>
						<!-- Metric 2 -->
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Completed Orders</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+12%</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">284</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">99.4% success rate</div>
						</div>
						<!-- Metric 3 -->
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Digital Deliveries</span>
								<span style="font-size:0.75rem;font-weight:700;color:#3B82F6;background:#EFF6FF;padding:2px 6px;border-radius:4px;">HMAC Locked</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">1,420</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">0 leak incidents</div>
						</div>
						<!-- Metric 4 -->
						<div style="background:#ffffff;padding:16px 20px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 1px 3px rgba(0,0,0,0.02);">
							<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Average Order Value</span>
								<span style="font-size:0.75rem;font-weight:700;color:#10B981;background:#ECFDF5;padding:2px 6px;border-radius:4px;">+$4.20</span>
							</div>
							<div style="font-size:1.65rem;font-weight:800;color:#0F172A;letter-spacing:-0.03em;">$52.44</div>
							<div style="font-size:0.75rem;color:#94A3B8;margin-top:4px;">via 1-click upsells</div>
						</div>
					</div>

					<!-- Interactive Two-Column Section: Orders Table & Live Cart Simulator -->
					<div style="display:grid;grid-template-columns:2fr 1fr;gap:20px;">

						<!-- Left: Live Orders List -->
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

						<!-- Right: Instant Checkout Experience Simulator -->
						<div style="background:#ffffff;border-radius:12px;border:1px solid #E2E8F0;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,0.02);display:flex;flex-direction:column;justify-content:space-between;">
							<div>
								<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
									<h4 style="margin:0;font-size:0.95rem;font-weight:700;color:#0F172A;">Checkout Preview</h4>
									<span style="font-size:0.72rem;background:#FEF3C7;color:#92400E;padding:2px 6px;border-radius:4px;font-weight:700;">Frictionless</span>
								</div>

								<!-- Step Pills -->
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

							<button type="button" class="om-btn om-btn--primary" style="width:100%;justify-content:center;padding:0.7rem;font-size:0.875rem;border-radius:8px;">
								Test 1-Click Checkout &rarr;
							</button>
						</div>

					</div>

				</div>

			</div>
		</div>

	</div>
</section>
<!-- /wp:html -->
