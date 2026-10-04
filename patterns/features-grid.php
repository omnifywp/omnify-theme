<?php
/**
 * Title: Features Grid — 6 cards
 * Slug: omnify/features-grid
 * Categories: omnify-features
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:html -->
<section class="om-section" style="background:#ffffff;padding-top:clamp(4rem, 7vw, 6rem);padding-bottom:clamp(4rem, 7vw, 6rem);">
	<div class="om-container">

		<!-- Centered heading area -->
		<div class="om-text-center" style="margin-bottom:3.5rem;">
			<span class="om-eyebrow">Everything you need</span>

			<h2 style="font-size:clamp(2rem, 3.8vw, 2.75rem);font-weight:800;letter-spacing:-0.035em;color:var(--om-ink);margin-top:1rem;margin-bottom:1rem;line-height:1.2;">
				One plugin. Every feature your store needs.
			</h2>

			<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7;max-width:640px;margin-inline:auto;">
				OmnifyWP handles your entire selling workflow &mdash; from listing products to
				delivering digital files and tracking every order with zero SaaS subscription fees.
			</p>
		</div>

		<!-- 3-column card grid -->
		<div class="om-card-grid">

			<!-- Card 1: Product Catalog -->
			<div class="om-card">
				<div class="om-card__icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
				</div>
				<h3 class="om-card__title">Product Catalog</h3>
				<p class="om-card__body">
					List physical goods, instant digital downloads, variable attribute items, and bundles from a single unified WordPress catalog interface.
				</p>
			</div>

			<!-- Card 2: Secure Digital Delivery -->
			<div class="om-card">
				<div class="om-card__icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
				</div>
				<h3 class="om-card__title">Secure Digital Delivery</h3>
				<p class="om-card__body">
					HMAC-signed download links protect your digital assets with configurable expiry windows and maximum download attempt meters.
				</p>
			</div>

			<!-- Card 3: Analytics & Reports -->
			<div class="om-card">
				<div class="om-card__icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" x2="18" y1="20" y2="10"/><line x1="12" x2="12" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="14"/></svg>
				</div>
				<h3 class="om-card__title">Analytics &amp; Reports</h3>
				<p class="om-card__body">
					Monitor gross sales, net revenue, refunds, average order value, and coupon conversion metrics across customizable date ranges.
				</p>
			</div>

			<!-- Card 4: Orders & Refunds -->
			<div class="om-card">
				<div class="om-card__icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
				</div>
				<h3 class="om-card__title">Orders &amp; Refunds</h3>
				<p class="om-card__body">
					View, filter, and export transaction data. Update fulfillment status inline, generate receipts, and manage refunds easily.
				</p>
			</div>

			<!-- Card 5: Coupons & Abandoned Carts -->
			<div class="om-card">
				<div class="om-card__icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/></svg>
				</div>
				<h3 class="om-card__title">Coupons &amp; Abandoned Carts</h3>
				<p class="om-card__body">
					Create custom discount codes and automatically track checkout sessions that were initiated but never finalized.
				</p>
			</div>

			<!-- Card 6: REST API & Developer Tools -->
			<div class="om-card">
				<div class="om-card__icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
				</div>
				<h3 class="om-card__title">REST API &amp; Developer Tools</h3>
				<p class="om-card__body">
					Generate API keys with granular Read or Write permissions. Access clean endpoints, monitor activity logs, and export to CSV.
				</p>
			</div>

		</div><!-- /.om-card-grid -->

	</div><!-- /.om-container -->
</section>
<!-- /wp:html -->
