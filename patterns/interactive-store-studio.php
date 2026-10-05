<?php
/**
 * Title: Interactive Storefront & Checkout Studio
 * Slug: omnify/interactive-store-studio
 * Categories: omnify-features
 * Block Types: core/group
 * Description: Fully interactive live storefront configurator and checkout simulator for the homepage.
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-studio-section om-for-developer","style":{"spacing":{"padding":{"top":"clamp(4.5rem, 8vw, 6.5rem)","bottom":"clamp(4.5rem, 8vw, 6.5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-studio-section om-for-developer" id="live-store-studio" style="border-top:1px solid #E6F4EC;border-bottom:1px solid #E6F4EC;background:linear-gradient(180deg, #FFFFFF 0%, #F7FCF9 100%);">

	<!-- Header Area -->
	<div class="om-text-center" style="max-width:800px;margin:0 auto 3.5rem auto;">
		<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;padding:4px 12px;margin-bottom:0.75rem;display:inline-flex;align-items:center;gap:6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> Interactive Live Studio</span>
		<h2 style="font-size:clamp(2rem, 3.8vw, 2.85rem);font-weight:800;letter-spacing:-0.035em;line-height:1.2;color:#0D1B12;margin:0 0 1rem 0;">Test the storefront and checkout engine in real time.</h2>
		<p style="font-size:1.0625rem;line-height:1.7;color:#475569;margin:0;">Pick your product variant, toggle add-ons, test promo codes, and run a live checkout flow to watch our sub-15ms SQL queries and HMAC token security execute.</p>
	</div>

	<!-- Interactive Studio Playground Grid -->
	<div class="om-studio-grid" style="display:grid;grid-template-columns:1.1fr 1fr;gap:2rem;align-items:start;">

		<!-- Left: Interactive Storefront Configurator Card -->
		<div class="om-studio-card" style="background:#FFFFFF;border:1px solid #D4E8DC;border-radius:18px;padding:28px;box-shadow:0 20px 50px -10px rgba(11,81,53,0.08);">
			
			<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;padding-bottom:14px;border-bottom:1px solid #F1F5F9;flex-wrap:wrap;gap:10px;">
				<div style="display:flex;align-items:center;gap:8px;">
					<span style="width:10px;height:10px;border-radius:50%;background:#10B981;display:inline-block;"></span>
					<span style="font-size:0.8rem;font-weight:700;color:#0B5135;">Step 1: Configure Catalog Item</span>
				</div>
				<!-- Currency Switcher -->
				<div class="om-studio-curr-group" style="display:flex;background:#F1F5F9;padding:3px;border-radius:6px;gap:2px;">
					<button type="button" class="om-studio-curr-btn is-active" data-curr="USD" data-sym="$" data-rate="1" style="background:#fff;border:none;padding:3px 8px;border-radius:4px;font-size:0.75rem;font-weight:700;color:#0B5135;cursor:pointer;box-shadow:0 1px 2px rgba(0,0,0,0.05);">USD ($)</button>
					<button type="button" class="om-studio-curr-btn" data-curr="EUR" data-sym="€" data-rate="0.92" style="background:transparent;border:none;padding:3px 8px;border-radius:4px;font-size:0.75rem;font-weight:600;color:#64748B;cursor:pointer;">EUR (€)</button>
					<button type="button" class="om-studio-curr-btn" data-curr="GBP" data-sym="£" data-rate="0.78" style="background:transparent;border:none;padding:3px 8px;border-radius:4px;font-size:0.75rem;font-weight:600;color:#64748B;cursor:pointer;">GBP (£)</button>
				</div>
			</div>

			<!-- Product Variant Tabs -->
			<div style="margin-bottom:16px;">
				<label style="display:block;font-size:0.75rem;font-weight:700;color:#64748B;text-transform:uppercase;margin-bottom:8px;">Choose Variant</label>
				<div class="om-studio-variant-group" style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px;">
					<button type="button" class="om-studio-var-btn is-active" data-base-price="49" data-name="Digital Creator License" data-type="digital" style="background:#EFF8F2;border:2px solid #22A06B;border-radius:8px;padding:10px 8px;text-align:center;cursor:pointer;transition:all 0.15s ease;">
						<div style="font-size:0.85rem;font-weight:800;color:#0B5135;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="vertical-align:-1px;margin-right:4px;"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>Digital</div>
						<div class="om-var-price" style="font-size:0.8rem;color:#18794E;font-weight:700;margin-top:2px;">$49</div>
					</button>
					<button type="button" class="om-studio-var-btn" data-base-price="129" data-name="Physical Box + Hardware" data-type="physical" style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:8px;padding:10px 8px;text-align:center;cursor:pointer;transition:all 0.15s ease;">
						<div style="font-size:0.85rem;font-weight:700;color:#475569;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align:-2px;margin-right:4px;"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>Physical</div>
						<div class="om-var-price" style="font-size:0.8rem;color:#64748B;font-weight:600;margin-top:2px;">$129</div>
					</button>
					<button type="button" class="om-studio-var-btn" data-base-price="249" data-name="Agency Studio Bundle" data-type="bundle" style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:8px;padding:10px 8px;text-align:center;cursor:pointer;transition:all 0.15s ease;">
						<div style="font-size:0.85rem;font-weight:700;color:#475569;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align:-2px;margin-right:4px;"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22.08" x2="12" y2="12"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>Bundle</div>
						<div class="om-var-price" style="font-size:0.8rem;color:#64748B;font-weight:600;margin-top:2px;">$249</div>
					</button>
				</div>
			</div>

			<!-- Product Details Card Preview -->
			<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:12px;padding:16px;margin-bottom:16px;">
				<div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:8px;">
					<div>
						<h4 id="om-studio-prod-title" style="margin:0 0 4px;font-size:1rem;color:#0F172A;font-weight:700;">Digital Creator License</h4>
						<span id="om-studio-prod-sub" style="font-size:0.75rem;color:#18794E;font-weight:600;display:inline-flex;align-items:center;gap:4px;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>Automated HMAC Signed Token Delivery</span>
					</div>
					<div id="om-studio-prod-price" style="font-size:1.35rem;font-weight:800;color:#0F172A;">$49.00</div>
				</div>
				<div style="font-size:0.78rem;color:#64748B;">Instant delivery to buyer portal • Zero third-party fees • Direct payment settlement</div>
			</div>

			<!-- Interactive Order Bump (1-Click Upsell) -->
			<div style="background:#FAFDFB;border:1.5px dashed #86EFAC;border-radius:10px;padding:12px 14px;margin-bottom:16px;">
				<label style="display:flex;align-items:flex-start;gap:10px;cursor:pointer;">
					<input type="checkbox" id="om-studio-upsell-check" style="width:16px;height:16px;margin-top:2px;accent-color:#18794E;cursor:pointer;">
					<div>
						<span style="font-size:0.825rem;font-weight:700;color:#0B5135;display:inline-flex;align-items:center;gap:4px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> 1-Click Order Bump: Add Priority Cloud Backup (+<span id="om-studio-upsell-price">$19</span>)</span>
						<p style="margin:2px 0 0;font-size:0.72rem;color:#15803D;">Automated encrypted offsite backups for customer download locker assets.</p>
					</div>
				</label>
			</div>

			<!-- Interactive Promo / Coupon Input -->
			<div style="margin-bottom:20px;">
				<div style="display:flex;gap:8px;">
					<input type="text" id="om-studio-coupon-input" placeholder="Coupon (Try 'SPEED20' or 'FREE')" style="flex:1;padding:8px 12px;border:1px solid #CBD5E1;border-radius:6px;font-size:0.8rem;text-transform:uppercase;outline:none;">
					<button type="button" id="om-studio-apply-coupon" style="background:#EFF8F2;color:#0B5135;border:1px solid #D4E8DC;padding:8px 14px;border-radius:6px;font-size:0.8rem;font-weight:700;cursor:pointer;">Apply</button>
				</div>
				<div id="om-studio-coupon-status" style="margin-top:4px;font-size:0.72rem;display:none;"></div>
			</div>

			<!-- Order Summary Math -->
			<div style="border-top:1px solid #F1F5F9;padding-top:12px;margin-bottom:20px;font-size:0.85rem;">
				<div style="display:flex;justify-content:space-between;color:#64748B;margin-bottom:6px;">
					<span>Base Subtotal:</span>
					<span id="om-studio-math-subtotal" style="font-weight:600;color:#1E293B;">$49.00</span>
				</div>
				<div id="om-studio-math-discount-row" style="display:none;justify-content:space-between;color:#18794E;margin-bottom:6px;">
					<span>Coupon Discount:</span>
					<span id="om-studio-math-discount" style="font-weight:700;">-$0.00</span>
				</div>
				<div id="om-studio-math-upsell-row" style="display:none;justify-content:space-between;color:#0B5135;margin-bottom:6px;">
					<span>Order Bump:</span>
					<span id="om-studio-math-upsell" style="font-weight:700;">+$19.00</span>
				</div>
				<div style="border-top:1px dashed #E2E8F0;padding-top:8px;display:flex;justify-content:space-between;font-size:1.1rem;font-weight:800;color:#0F172A;">
					<span>Grand Total:</span>
					<span id="om-studio-math-total">$49.00</span>
				</div>
			</div>

			<!-- Trigger Checkout Button -->
			<button type="button" id="om-studio-trigger-checkout" class="om-btn om-btn--primary" style="width:100%;justify-content:center;padding:0.85rem;font-size:0.95rem;border-radius:10px;cursor:pointer;border:none;box-shadow:0 4px 14px rgba(11,81,53,0.2);">
				<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg> Trigger Live 1-Click Checkout Flow &rarr;</span>
			</button>

		</div>

		<!-- Right: Live Checkout Drawer & Webhook Terminal Simulation -->
		<div class="om-studio-terminal-wrap" style="background:#0D1B12;border:1px solid #1E3D2B;border-radius:18px;overflow:hidden;box-shadow:0 25px 60px -15px rgba(0,0,0,0.3);display:flex;flex-direction:column;min-height:500px;">
			
			<!-- Terminal Chrome -->
			<div style="background:#07120B;padding:12px 18px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid #1A3626;">
				<div style="display:flex;align-items:center;gap:8px;">
					<div style="display:flex;gap:6px;">
						<span style="width:10px;height:10px;border-radius:50%;background:#EF4444;display:inline-block;"></span>
						<span style="width:10px;height:10px;border-radius:50%;background:#F59E0B;display:inline-block;"></span>
						<span style="width:10px;height:10px;border-radius:50%;background:#10B981;display:inline-block;"></span>
					</div>
					<span style="font-family:var(--om-font-mono);font-size:0.75rem;color:#7ECBA1;font-weight:700;margin-left:6px;">omnify-engine.log</span>
				</div>
				<span id="om-studio-status-pill" style="font-size:0.7rem;font-family:var(--om-font-mono);padding:2px 8px;border-radius:4px;background:#153B26;color:#34D399;font-weight:700;">● READY FOR CHECKOUT</span>
			</div>

			<!-- Terminal Live Log Output Stream -->
			<div id="om-studio-log-stream" style="padding:20px;font-family:var(--om-font-mono);font-size:0.78rem;line-height:1.6;color:#D1FAE5;flex:1;overflow-y:auto;background:radial-gradient(ellipse at top, #11281B 0%, #0D1B12 100%);">
				<div style="color:#6EE7B7;margin-bottom:8px;">// OmnifyWP High-Speed Engine initialized</div>
				<div style="color:#94A3B8;margin-bottom:8px;">// Dedicated Custom SQL Tables: 27/27 loaded</div>
				<div style="color:#94A3B8;margin-bottom:8px;">// Ready to process direct merchant settlement...</div>
				<div id="om-studio-active-stream" style="margin-top:14px;">
					<span style="color:#A7F3D0;">[Awaiting order trigger from left panel]</span>
				</div>
			</div>

			<!-- Terminal Footer Credentials / Reset -->
			<div style="background:#07120B;padding:14px 18px;border-top:1px solid #1A3626;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;">
				<div style="font-size:0.72rem;color:#94A3B8;font-family:var(--om-font-mono);">
					Latency Target: <strong style="color:#34D399;">&lt; 15.0ms</strong> &bull; Zero wp_postmeta queries
				</div>
				<button type="button" id="om-studio-reset-btn" style="background:#153B26;color:#34D399;border:1px solid #22A06B;padding:4px 10px;border-radius:4px;font-size:0.72rem;font-family:var(--om-font-mono);cursor:pointer;">
					Reset Terminal
				</button>
			</div>

		</div>

	</div>

</section>
<!-- /wp:group -->
