<?php
/**
 * Title: Features Grid — 6 cards
 * Slug: omnify/features-grid
 * Categories: omnify-features
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-features-section","style":{"spacing":{"padding":{"top":"clamp(4rem, 7vw, 6rem)","bottom":"clamp(4rem, 7vw, 6rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-features-section">

	<!-- Header Area -->
	<!-- wp:group {"className":"om-text-center","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group om-text-center" style="margin-bottom:3.5rem">
		<!-- wp:paragraph {"className":"om-eyebrow"} -->
		<p class="om-eyebrow">Everything you need</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 3.8vw, 2.75rem)","fontWeight":"800","letterSpacing":"-0.035em","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading" style="font-size:clamp(2rem, 3.8vw, 2.75rem);font-weight:800;letter-spacing:-0.035em;line-height:1.2">One plugin. Every feature your store needs.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"om-text-muted","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.7"}}} -->
		<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7">OmnifyWP handles your entire selling workflow &mdash; from listing products to delivering digital files and tracking every order with zero SaaS subscription fees.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- 6 Cards Grid -->
	<!-- wp:group {"className":"om-card-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group om-card-grid">

		<!-- Card 1 -->
		<!-- wp:group {"className":"om-card","layout":{"type":"default"}} -->
		<div class="wp-block-group om-card">
			<!-- wp:paragraph {"className":"om-card__icon"} -->
			<p class="om-card__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:#22A06B;"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-card__title"} -->
			<h3 class="wp-block-heading om-card__title">Product Catalog</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-card__body"} -->
			<p class="om-card__body">List physical goods, instant digital downloads, variable attribute items, and bundles from a single unified WordPress catalog interface.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Card 2 -->
		<!-- wp:group {"className":"om-card","layout":{"type":"default"}} -->
		<div class="wp-block-group om-card">
			<!-- wp:paragraph {"className":"om-card__icon"} -->
			<p class="om-card__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="color:#22A06B;"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-card__title"} -->
			<h3 class="wp-block-heading om-card__title">Secure Digital Delivery</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-card__body"} -->
			<p class="om-card__body">HMAC-signed download links protect your digital assets with configurable expiry windows and maximum download attempt meters.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Card 3 -->
		<!-- wp:group {"className":"om-card","layout":{"type":"default"}} -->
		<div class="wp-block-group om-card">
			<!-- wp:paragraph {"className":"om-card__icon"} -->
			<p class="om-card__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:#22A06B;"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-card__title"} -->
			<h3 class="wp-block-heading om-card__title">Analytics &amp; Reports</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-card__body"} -->
			<p class="om-card__body">Monitor gross sales, net revenue, refunds, average order value, and coupon conversion metrics across customizable date ranges.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Card 4 -->
		<!-- wp:group {"className":"om-card","layout":{"type":"default"}} -->
		<div class="wp-block-group om-card">
			<!-- wp:paragraph {"className":"om-card__icon"} -->
			<p class="om-card__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:#22A06B;"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-card__title"} -->
			<h3 class="wp-block-heading om-card__title">Orders &amp; Refunds</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-card__body"} -->
			<p class="om-card__body">View, filter, and export transaction data. Update fulfillment status inline, generate receipts, and manage refunds easily.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Card 5 -->
		<!-- wp:group {"className":"om-card","layout":{"type":"default"}} -->
		<div class="wp-block-group om-card">
			<!-- wp:paragraph {"className":"om-card__icon"} -->
			<p class="om-card__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:#22A06B;"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-card__title"} -->
			<h3 class="wp-block-heading om-card__title">Coupons &amp; Abandoned Carts</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-card__body"} -->
			<p class="om-card__body">Create custom discount codes and automatically track checkout sessions that were initiated but never finalized.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Card 6 -->
		<!-- wp:group {"className":"om-card","layout":{"type":"default"}} -->
		<div class="wp-block-group om-card">
			<!-- wp:paragraph {"className":"om-card__icon"} -->
			<p class="om-card__icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" style="color:#22A06B;"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-card__title"} -->
			<h3 class="wp-block-heading om-card__title">REST API &amp; Developer Tools</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-card__body"} -->
			<p class="om-card__body">Generate API keys with granular Read or Write permissions. Access clean endpoints, monitor activity logs, and export to CSV.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
