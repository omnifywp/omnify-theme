<?php
/**
 * Title: Value Pillars — SaaS Bento Grid
 * Slug: omnify/value-pillars
 * Categories: omnify-features
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-pillars-section","style":{"spacing":{"padding":{"top":"clamp(4.5rem, 7vw, 6.5rem)","bottom":"clamp(4.5rem, 7vw, 6.5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-pillars-section">

	<!-- Header Area -->
	<!-- wp:group {"className":"om-text-center","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
	<div class="wp-block-group om-text-center" style="margin-bottom:3.5rem">
		<!-- wp:paragraph {"className":"om-eyebrow"} -->
		<p class="om-eyebrow">Engineered for Extreme Speed</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 3.8vw, 2.85rem)","fontWeight":"800","letterSpacing":"-0.035em","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading" style="font-size:clamp(2rem, 3.8vw, 2.85rem);font-weight:800;letter-spacing:-0.035em;line-height:1.2">Architected to outperform legacy WordPress eCommerce.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"om-text-muted","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.7"}}} -->
		<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7">Say goodbye to database sluggishness, monthly SaaS platform taxes, and complex addon webs. OmnifyWP is purpose-built for clean, lightning-fast store operations.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Bento Grid Container -->
	<!-- wp:group {"className":"om-bento-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group om-bento-grid">

		<!-- Bento Card 1: Sub-100ms Database Engine (Wide 7 cols) -->
		<!-- wp:group {"className":"om-bento-card om-bento-card--wide-7","layout":{"type":"default"}} -->
		<div class="wp-block-group om-bento-card om-bento-card--wide-7">
			<!-- wp:paragraph {"className":"om-bento-card__badge"} -->
			<p class="om-bento-card__badge">Database Architecture</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-bento-card__title"} -->
			<h3 class="wp-block-heading om-bento-card__title">Sub-100ms Queries &amp; Zero Postmeta Bloat</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-bento-card__text"} -->
			<p class="om-bento-card__text">Traditional eCommerce plugins overload <code>wp_posts</code> and <code>wp_postmeta</code> with millions of unindexed rows. OmnifyWP operates on dedicated custom tables (<code>wp_omnify_products</code>, <code>wp_omnify_orders</code>, <code>wp_omnify_customers</code>), delivering instantaneous catalog loads under heavy traffic.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"om-benchmark-box","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group om-benchmark-box" id="om-bento-benchmark-box">
				<div style="font-size:0.75rem;font-weight:700;color:#0B5135;text-transform:uppercase;letter-spacing:0.04em;margin-bottom:12px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px;">
					<span>Page Generation Latency Benchmark</span>
					<button type="button" id="om-bento-race-btn" class="om-btn-sm" style="background:#0B5135;color:#fff;border:none;padding:4px 12px;border-radius:6px;font-size:0.75rem;font-weight:700;cursor:pointer;display:inline-flex;align-items:center;gap:4px;box-shadow:0 2px 6px rgba(11,81,53,0.2);">
						<span>⚡ Race Live Queries</span>
					</button>
				</div>

				<div style="margin-bottom:10px;">
					<div style="display:flex;justify-content:space-between;font-size:0.8rem;font-weight:700;margin-bottom:4px;color:#0B5135;">
						<span>⚡ OmnifyWP (Custom SQL Tables)</span>
						<span id="om-bento-omni-ms">0.08s (Sub-100ms)</span>
					</div>
					<div style="height:10px;background:#E2E8F0;border-radius:5px;overflow:hidden;">
						<div id="om-bento-omni-bar" style="width:12%;height:100%;background:linear-gradient(90deg, #18794E, #22A06B);border-radius:5px;transition:width 0.6s cubic-bezier(0.4, 0, 0.2, 1);"></div>
					</div>
				</div>

				<div>
					<div style="display:flex;justify-content:space-between;font-size:0.8rem;font-weight:600;margin-bottom:4px;color:#64748B;">
						<span>Legacy WooCommerce (wp_postmeta queries)</span>
						<span id="om-bento-woo-ms">1.42s (84+ queries)</span>
					</div>
					<div style="height:10px;background:#E2E8F0;border-radius:5px;overflow:hidden;">
						<div id="om-bento-woo-bar" style="width:92%;height:100%;background:#94A3B8;border-radius:5px;transition:width 0.6s cubic-bezier(0.4, 0, 0.2, 1);"></div>
					</div>
				</div>
				<div id="om-bento-race-result" style="margin-top:10px;font-size:0.72rem;color:#18794E;font-weight:600;display:none;">
					✓ OmnifyWP completed 1 indexed query in 8ms while WooCommerce executed 84 queries.
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- Bento Card 2: HMAC Cryptographic Asset Vault (5 cols) -->
		<!-- wp:group {"className":"om-bento-card om-bento-card--wide-5","layout":{"type":"default"}} -->
		<div class="wp-block-group om-bento-card om-bento-card--wide-5">
			<!-- wp:paragraph {"className":"om-bento-card__badge"} -->
			<p class="om-bento-card__badge">Digital Security</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-bento-card__title"} -->
			<h3 class="wp-block-heading om-bento-card__title">HMAC-Signed Digital Vault</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-bento-card__text"} -->
			<p class="om-bento-card__text">Distribute software, eBooks, audio courses, and license keys without fear of leaked links. Every download is cryptographically verified with temporary token signatures.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"om-file-security-box","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group om-file-security-box">
				<div style="display:flex;align-items:center;gap:12px;margin-bottom:10px;">
					<div style="width:38px;height:38px;border-radius:8px;background:#EFF8F2;display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;">
						🔒
					</div>
					<div style="overflow:hidden;flex:1;">
						<div style="font-size:0.85rem;font-weight:700;color:#0F172A;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">masterclass-complete-v2.zip</div>
						<div id="om-bento-token-string" style="font-size:0.72rem;color:#18794E;font-weight:600;font-family:var(--om-font-mono);">token=sha256_9b81a74e2d</div>
					</div>
				</div>
				<div style="display:flex;justify-content:space-between;align-items:center;font-size:0.75rem;border-top:1px solid #F1F5F9;padding-top:10px;margin-bottom:10px;">
					<span style="color:#64748B;">Expires: <strong id="om-bento-token-expires" style="color:#0F172A;">47h 59m 59s</strong></span>
					<span id="om-bento-token-badge" style="background:#ECFDF5;color:#065F46;padding:2px 8px;border-radius:4px;font-weight:700;">Max 5 Downloads</span>
				</div>
				<button type="button" id="om-bento-token-gen-btn" style="width:100%;background:#EFF8F2;color:#0B5135;border:1px solid #D4E8DC;padding:6px;border-radius:6px;font-size:0.75rem;font-weight:700;cursor:pointer;transition:all 0.15s ease;">
					🔑 Generate &amp; Verify New HMAC Token
				</button>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- Bento Card 3: Frictionless 1-Click Checkout (4 cols) -->
		<!-- wp:group {"className":"om-bento-card om-bento-card--wide-4","layout":{"type":"default"}} -->
		<div class="wp-block-group om-bento-card om-bento-card--wide-4">
			<!-- wp:paragraph {"className":"om-bento-card__badge"} -->
			<p class="om-bento-card__badge">Conversion Engine</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-bento-card__title"} -->
			<h3 class="wp-block-heading om-bento-card__title">Frictionless 1-Click Checkout</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-bento-card__text"} -->
			<p class="om-bento-card__text">Slide-out cart drawers, 1-page checkout flows, and guest checkout eliminate cart friction and boost completed orders by up to 30%.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"om-mini-checkout-box","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"14px","right":"14px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group om-mini-checkout-box">
				<div class="om-bento-pay-pills" style="display:flex;gap:4px;margin-bottom:8px;">
					<button type="button" class="om-bento-pay-pill is-active" data-pay="apple" style="padding:4px 8px;border-radius:4px;border:1px solid #D4E8DC;background:#EFF8F2;color:#0B5135;font-size:0.72rem;font-weight:700;cursor:pointer;">Apple Pay</button>
					<button type="button" class="om-bento-pay-pill" data-pay="gpay" style="padding:4px 8px;border-radius:4px;border:1px solid transparent;background:#F8FAFC;color:#64748B;font-size:0.72rem;font-weight:600;cursor:pointer;">Google Pay</button>
					<button type="button" class="om-bento-pay-pill" data-pay="card" style="padding:4px 8px;border-radius:4px;border:1px solid transparent;background:#F8FAFC;color:#64748B;font-size:0.72rem;font-weight:600;cursor:pointer;">Cards</button>
				</div>
				<div id="om-bento-pay-desc" style="color:#10B981;font-size:0.75rem;font-weight:600;">✓ Biometric Touch ID/Face ID 1-Click</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- Bento Card 4: 100% Self-Hosted Sovereignty (4 cols) -->
		<!-- wp:group {"className":"om-bento-card om-bento-card--wide-4","layout":{"type":"default"}} -->
		<div class="wp-block-group om-bento-card om-bento-card--wide-4">
			<!-- wp:paragraph {"className":"om-bento-card__badge"} -->
			<p class="om-bento-card__badge">Data Ownership</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-bento-card__title"} -->
			<h3 class="wp-block-heading om-bento-card__title">100% Self-Hosted &amp; 0% Take Fees</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-bento-card__text"} -->
			<p class="om-bento-card__text">Keep 100% of your revenue. No monthly SaaS retainers, no checkout surcharges, and no customer PII leaving your server.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"om-fee-box","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"14px","right":"14px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group om-fee-box">
				<span style="font-weight:700;font-size:0.85rem;color:#0B5135;">Platform Commission</span>
				<span style="font-size:1.15rem;font-weight:800;color:#18794E;">$0.00 (0%)</span>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- Bento Card 5: REST API & Webhook Automation (4 cols) -->
		<!-- wp:group {"className":"om-bento-card om-bento-card--wide-4","layout":{"type":"default"}} -->
		<div class="wp-block-group om-bento-card om-bento-card--wide-4">
			<!-- wp:paragraph {"className":"om-bento-card__badge"} -->
			<p class="om-bento-card__badge">Developer Toolkit</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-bento-card__title"} -->
			<h3 class="wp-block-heading om-bento-card__title">REST API &amp; Webhook Engine</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-bento-card__text"} -->
			<p class="om-bento-card__text">Issue granular Read/Write API keys, trigger automated webhooks for third-party CRMs, and build custom storefronts with ease.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"om-api-code-box","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"14px","right":"14px"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group om-api-code-box">
				<div style="color:#34D399;margin-bottom:2px;">GET /wp-json/omnify/v1/orders</div>
				<div style="color:#94A3B8;">&rarr; 200 OK [284 orders]</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
