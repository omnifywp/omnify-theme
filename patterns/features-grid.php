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
			<p class="om-card__icon">📦</p>
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
			<p class="om-card__icon">🔒</p>
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
			<p class="om-card__icon">📊</p>
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
			<p class="om-card__icon">🛒</p>
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
			<p class="om-card__icon">🏷️</p>
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
			<p class="om-card__icon">⚡</p>
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
