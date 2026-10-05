<?php
/**
 * Title: Developer Quick Install Terminal
 * Slug: omnify/quick-install
 * Categories: omnify-features
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-terminal-section","style":{"spacing":{"padding":{"top":"clamp(3.5rem, 6vw, 5rem)","bottom":"clamp(3.5rem, 6vw, 5rem)"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<section class="wp-block-group om-section om-terminal-section">

	<!-- ============================================================
	     1. STORE OWNER & GENERAL USER ONBOARDING (.om-for-user)
	     ============================================================ -->
	<div class="om-for-user">
		<div class="om-user-onboarding-wrap">
			<div class="om-terminal-intro om-text-center">
				<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;padding:3px 10px;margin-bottom:0.75rem;display:inline-flex;">🚀 3-Minute Store Setup</span>
				<h2 style="font-family:var(--om-font-heading);font-size:clamp(1.75rem, 3.5vw, 2.4rem);font-weight:800;letter-spacing:-0.035em;color:#0D1B12;margin:0 0 0.75rem 0;">Launch your store in 3 easy steps.</h2>
				<p style="font-size:1.05rem;color:#475569;max-width:620px;margin:0 auto 2rem auto;line-height:1.6;">No coding, no complicated settings, and no server configuration. If you can click a button in WordPress, you can launch your store today.</p>
			</div>

			<!-- 3 Visual Step Cards -->
			<div class="om-user-steps-grid">
				<!-- Step 1 -->
				<div class="om-user-step-card">
					<div class="om-user-step-num">1</div>
					<h3 class="om-user-step-title">Install Free Plugin</h3>
					<p class="om-user-step-desc">From your WordPress Admin dashboard, click <strong>Plugins &rarr; Add New</strong>, search for <em>OmnifyWP</em>, and click Install &amp; Activate.</p>
					<div class="om-user-step-badge">
						<span>✓ 100% Free Core on wp.org</span>
					</div>
				</div>

				<!-- Step 2 -->
				<div class="om-user-step-card">
					<div class="om-user-step-num">2</div>
					<h3 class="om-user-step-title">Add Your Products</h3>
					<p class="om-user-step-desc">Set your product title, regular and sale prices, and attach your digital downloadable files or setup physical product options.</p>
					<div class="om-user-step-badge">
						<span>✓ Automated Instant Delivery</span>
					</div>
				</div>

				<!-- Step 3 -->
				<div class="om-user-step-card">
					<div class="om-user-step-num">3</div>
					<h3 class="om-user-step-title">Connect &amp; Start Selling</h3>
					<p class="om-user-step-desc">Connect Stripe or PayPal with 1 click. Accept Credit Cards, Apple Pay, and Google Pay with zero middleman commissions taken.</p>
					<div class="om-user-step-badge">
						<span>✓ 100% Profits Direct to You</span>
					</div>
				</div>
			</div>

			<!-- CTA Buttons -->
			<div class="wp-block-buttons om-hero-cta-group" style="justify-content:center;margin-top:2rem;">
				<div class="wp-block-button om-btn--primary">
					<a class="wp-block-button__link" href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer">Download Free on wp.org &rarr;</a>
				</div>
				<div class="wp-block-button om-btn--secondary">
					<a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer"><span class="om-btn-badge-icon">▶</span> Try Interactive Live Demo</a>
				</div>
			</div>
		</div>
	</div>

	<!-- ============================================================
	     2. DEVELOPER & AGENCY ONBOARDING (.om-for-developer)
	     ============================================================ -->
	<div class="om-for-developer">
		<div class="om-terminal-wrap">
			<div class="om-terminal-intro om-text-center">
				<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;padding:3px 10px;margin-bottom:0.75rem;display:inline-flex;">⚡ 60-Second Developer Onboarding</span>
				<h2 style="font-family:var(--om-font-heading);font-size:clamp(1.75rem, 3.5vw, 2.4rem);font-weight:800;letter-spacing:-0.035em;color:#0D1B12;margin:0 0 0.75rem 0;">Ready in your terminal right now.</h2>
				<p style="font-size:1.05rem;color:#475569;max-width:620px;margin:0 auto 2rem auto;line-height:1.6;">Deploy OmnifyWP locally or on staging with your standard toolchain. No complex provisioning or API licenses required.</p>
			</div>

			<!-- Interactive Terminal Container -->
			<div class="om-terminal-box">
				
				<!-- Terminal Tabs Header -->
				<div class="om-terminal-header">
					<div class="om-terminal-dots">
						<span style="background:#EF4444;"></span>
						<span style="background:#F59E0B;"></span>
						<span style="background:#10B981;"></span>
					</div>
					<div class="om-terminal-tabs" id="om-term-tabs">
						<button type="button" class="om-term-tab is-active" data-term-type="wp-cli">WP-CLI</button>
						<button type="button" class="om-term-tab" data-term-type="composer">Composer</button>
						<button type="button" class="om-term-tab" data-term-type="git">GitHub</button>
					</div>
					<div class="om-terminal-os">bash</div>
				</div>

				<!-- Terminal Body -->
				<div class="om-terminal-body">
					<div class="om-term-code-line">
						<span class="om-term-prompt">$</span>
						<code id="om-terminal-code-text">wp plugin install omnifywp-ecommerce --activate</code>
					</div>
					<button type="button" class="om-term-copy-btn" id="om-terminal-copy" title="Copy to clipboard">
						<svg class="om-copy-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
						<span class="om-copy-label">Copy</span>
					</button>
				</div>

				<!-- Terminal Footer Info -->
				<div class="om-terminal-footer">
					<div class="om-term-meta">
						<span>Requirements: PHP 8.1+ • WordPress 6.4+ • MySQL 8.0 / MariaDB 10.5+</span>
					</div>
					<div class="om-term-docs-link">
						<a href="https://omnifywp.com/doc/" target="_blank" rel="noopener noreferrer">Read API &amp; Hook Docs &rarr;</a>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>
<!-- /wp:group -->
