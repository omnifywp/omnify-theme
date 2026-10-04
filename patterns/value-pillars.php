<?php
/**
 * Title: Value Pillars — SaaS Bento Grid
 * Slug: omnify/value-pillars
 * Categories: omnify-features
 * Block Types: core/group
 * Description: Premium Bento Grid highlighting OmnifyWP's core architectural advantages.
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:html -->
<section class="om-section" style="background:#FBFDFB;border-top:1px solid #E6F4EC;border-bottom:1px solid #E6F4EC;padding-top:clamp(4.5rem, 7vw, 6.5rem);padding-bottom:clamp(4.5rem, 7vw, 6.5rem);">
	<div class="om-container" style="max-width:1240px;margin-inline:auto;padding-inline:clamp(1rem,4vw,2.5rem);">

		<!-- Section Header -->
		<div class="om-text-center" style="max-width:780px;margin-inline:auto;margin-bottom:3.5rem;">
			<span class="om-eyebrow">Engineered for Extreme Speed</span>
			<h2 style="font-size:clamp(2rem, 3.8vw, 2.85rem);font-weight:800;letter-spacing:-0.035em;color:var(--om-ink);margin-top:0.75rem;margin-bottom:1rem;line-height:1.2;text-wrap:balance;">
				Architected to outperform legacy WordPress eCommerce.
			</h2>
			<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7;margin:0;">
				Say goodbye to database sluggishness, monthly SaaS platform taxes, and complex addon webs. OmnifyWP is purpose-built for clean, lightning-fast store operations.
			</p>
		</div>

		<!-- Bento Grid Container -->
		<div class="om-bento-grid">

			<!-- ═════ Bento Card 1: Sub-100ms Database Engine (Wide 7 cols) ═════ -->
			<div class="om-bento-card om-bento-card--wide-7">
				<div class="om-bento-card__badge">Database Architecture</div>
				<h3 class="om-bento-card__title">Sub-100ms Queries &amp; Zero Postmeta Bloat</h3>
				<p class="om-bento-card__text">
					Traditional eCommerce plugins overload <code>wp_posts</code> and <code>wp_postmeta</code> with millions of unindexed rows. OmnifyWP operates on dedicated custom tables (<code>wp_omnify_products</code>, <code>wp_omnify_orders</code>, <code>wp_omnify_customers</code>), delivering instantaneous catalog loads under heavy traffic.
				</p>

				<!-- Benchmark Comparison Widget -->
				<div style="background:#F4F8F5;border:1px solid #D4E8DC;border-radius:12px;padding:16px 20px;margin-top:auto;">
					<div style="font-size:0.75rem;font-weight:700;color:#0B5135;text-transform:uppercase;letter-spacing:0.04em;margin-bottom:12px;display:flex;justify-content:space-between;align-items:center;">
						<span>Page Generation Latency Benchmark</span>
						<span style="background:#DCFCE7;color:#166534;padding:2px 8px;border-radius:4px;font-size:0.7rem;">Verified on PHP 8.2</span>
					</div>

					<!-- OmnifyWP Bar -->
					<div style="margin-bottom:10px;">
						<div style="display:flex;justify-content:space-between;font-size:0.8rem;font-weight:700;margin-bottom:4px;color:#0B5135;">
							<span>⚡ OmnifyWP (Custom SQL Tables)</span>
							<span>0.08s (Sub-100ms)</span>
						</div>
						<div style="height:10px;background:#E2E8F0;border-radius:5px;overflow:hidden;">
							<div style="width:12%;height:100%;background:linear-gradient(90deg, #18794E, #22A06B);border-radius:5px;"></div>
						</div>
					</div>

					<!-- WooCommerce Bar -->
					<div>
						<div style="display:flex;justify-content:space-between;font-size:0.8rem;font-weight:600;margin-bottom:4px;color:#64748B;">
							<span>Legacy WooCommerce (wp_postmeta queries)</span>
							<span>1.42s (80+ queries)</span>
						</div>
						<div style="height:10px;background:#E2E8F0;border-radius:5px;overflow:hidden;">
							<div style="width:92%;height:100%;background:#94A3B8;border-radius:5px;"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- ═════ Bento Card 2: HMAC Cryptographic Asset Vault (5 cols) ═════ -->
			<div class="om-bento-card om-bento-card--wide-5">
				<div class="om-bento-card__badge">Digital Security</div>
				<h3 class="om-bento-card__title">HMAC-Signed Digital Vault</h3>
				<p class="om-bento-card__text">
					Distribute software, eBooks, audio courses, and license keys without fear of leaked links. Every download is cryptographically verified with temporary token signatures.
				</p>

				<!-- File Security Widget -->
				<div style="background:#FFFFFF;border:1px dashed #86EFAC;border-radius:12px;padding:16px;margin-top:auto;box-shadow:0 2px 8px rgba(34,160,107,0.06);">
					<div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;">
						<div style="width:38px;height:38px;border-radius:8px;background:#EFF8F2;display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;">
							🔒
						</div>
						<div style="overflow:hidden;">
							<div style="font-size:0.85rem;font-weight:700;color:#0F172A;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">masterclass-complete-v2.zip</div>
							<div style="font-size:0.72rem;color:#18794E;font-weight:600;">HMAC SHA-256 Token Active</div>
						</div>
					</div>
					<div style="display:flex;justify-content:space-between;align-items:center;font-size:0.75rem;border-top:1px solid #F1F5F9;padding-top:10px;">
						<span style="color:#64748B;">Expires: <strong style="color:#0F172A;">47h 59m</strong></span>
						<span style="background:#ECFDF5;color:#065F46;padding:2px 8px;border-radius:4px;font-weight:700;">Max 5 Downloads</span>
					</div>
				</div>
			</div>

			<!-- ═════ Bento Card 3: Frictionless 1-Click Checkout (4 cols) ═════ -->
			<div class="om-bento-card om-bento-card--wide-4">
				<div class="om-bento-card__badge">Conversion Engine</div>
				<h3 class="om-bento-card__title">Frictionless 1-Click Checkout</h3>
				<p class="om-bento-card__text">
					Slide-out cart drawers, 1-page checkout flows, and guest checkout eliminate cart friction and boost completed orders by up to 30%.
				</p>
				<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:10px;padding:12px 14px;margin-top:auto;font-size:0.8rem;">
					<div style="display:flex;justify-content:space-between;font-weight:700;color:#0F172A;margin-bottom:6px;">
						<span>Apple Pay &bull; Google Pay &bull; Cards</span>
						<span style="color:#10B981;">✓ 1-Click</span>
					</div>
					<div style="color:#64748B;font-size:0.75rem;">Native order bumps &bull; Instant coupon tray</div>
				</div>
			</div>

			<!-- ═════ Bento Card 4: 100% Self-Hosted Sovereignty (4 cols) ═════ -->
			<div class="om-bento-card om-bento-card--wide-4">
				<div class="om-bento-card__badge">Data Ownership</div>
				<h3 class="om-bento-card__title">100% Self-Hosted &amp; 0% Take Fees</h3>
				<p class="om-bento-card__text">
					Keep 100% of your revenue. No monthly SaaS retainers, no checkout surcharges, and no customer PII leaving your server.
				</p>
				<div style="background:#EFF8F2;border:1px solid #D4E8DC;border-radius:10px;padding:12px 14px;margin-top:auto;display:flex;justify-content:space-between;align-items:center;">
					<span style="font-weight:700;font-size:0.85rem;color:#0B5135;">Platform Commission</span>
					<span style="font-size:1.15rem;font-weight:800;color:#18794E;">$0.00 (0%)</span>
				</div>
			</div>

			<!-- ═════ Bento Card 5: REST API & Webhook Automation (4 cols) ═════ -->
			<div class="om-bento-card om-bento-card--wide-4">
				<div class="om-bento-card__badge">Developer Toolkit</div>
				<h3 class="om-bento-card__title">REST API &amp; Webhook Engine</h3>
				<p class="om-bento-card__text">
					Issue granular Read/Write API keys, trigger automated webhooks for third-party CRMs, and build custom storefronts with ease.
				</p>
				<div style="background:#0F172A;border-radius:10px;padding:10px 14px;margin-top:auto;font-family:var(--om-font-mono);font-size:0.75rem;color:#E2E8F0;">
					<div style="color:#34D399;margin-bottom:2px;">GET /wp-json/omnify/v1/orders</div>
					<div style="color:#94A3B8;">&rarr; 200 OK [284 orders]</div>
				</div>
			</div>

		</div><!-- /.om-bento-grid -->

	</div><!-- /.om-container -->
</section>
<!-- /wp:html -->
