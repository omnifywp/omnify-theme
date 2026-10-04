<?php
/**
 * Title: Audience Solutions — Who OmnifyWP is For
 * Slug: omnify/audience-solutions
 * Categories: omnify-features
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-audience-section","style":{"spacing":{"padding":{"top":"clamp(4rem, 6vw, 5.5rem)","bottom":"clamp(4rem, 6vw, 5.5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-audience-section">

	<!-- Header Area -->
	<!-- wp:group {"className":"om-text-center","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
	<div class="wp-block-group om-text-center" style="margin-bottom:3.5rem">
		<!-- wp:paragraph {"className":"om-eyebrow"} -->
		<p class="om-eyebrow">Tailored Solutions</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 3.8vw, 2.75rem)","fontWeight":"800","letterSpacing":"-0.035em","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading" style="font-size:clamp(2rem, 3.8vw, 2.75rem);font-weight:800;letter-spacing:-0.035em;line-height:1.2">Built for creators, merchants, and developers</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"om-text-muted","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.7"}}} -->
		<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7">Whether you sell downloadable assets, ship physical products, or build high-volume custom storefronts for clients.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- 3 Columns -->
	<!-- wp:columns {"className":"om-solutions-grid"} -->
	<div class="wp-block-columns om-solutions-grid">

		<!-- Column 1: Digital Creators -->
		<!-- wp:column {"className":"om-solution-card"} -->
		<div class="wp-block-column om-solution-card">
			<div class="om-solution-icon">💾</div>
			<!-- wp:paragraph {"className":"om-solution-badge"} -->
			<p class="om-solution-badge">For Digital Creators</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-solution-title"} -->
			<h3 class="wp-block-heading om-solution-title">Sell software, courses &amp; digital files with zero piracy risk</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-solution-desc"} -->
			<p class="om-solution-desc">Stop paying hefty monthly percentages on Gumroad or Patreon. Host your files on your own cloud or server with automated HMAC download security and customer license management.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"om-check-list"} -->
			<ul class="wp-block-list om-check-list">
				<!-- wp:list-item -->
				<li>Time-limited &amp; download-capped links</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Automated customer download portal</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>License key generation &amp; validation</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"className":"om-solution-btn-wrap"} -->
			<div class="wp-block-buttons om-solution-btn-wrap">
				<!-- wp:button {"className":"om-btn--secondary"} -->
				<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer">Test Digital Store Demo &rarr;</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- Column 2: Physical Merchants -->
		<!-- wp:column {"className":"om-solution-card"} -->
		<div class="wp-block-column om-solution-card">
			<div class="om-solution-icon">📦</div>
			<!-- wp:paragraph {"className":"om-solution-badge"} -->
			<p class="om-solution-badge">For Physical Merchants</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-solution-title"} -->
			<h3 class="wp-block-heading om-solution-title">Run a fast, lightweight catalog without server crashes</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-solution-desc"} -->
			<p class="om-solution-desc">Say goodbye to heavy database tables crashing during Black Friday flash sales. Manage variable swatches, weight-based shipping rates, orders, and fulfillment effortlessly.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"om-check-list"} -->
			<ul class="wp-block-list om-check-list">
				<!-- wp:list-item -->
				<li>Multi-attribute variable stock control</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Guest order tracking without logins</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Coupon promotions &amp; cart recovery</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"className":"om-solution-btn-wrap"} -->
			<div class="wp-block-buttons om-solution-btn-wrap">
				<!-- wp:button {"className":"om-btn--secondary"} -->
				<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="/features/">Explore Catalog Features &rarr;</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- Column 3: Agencies & Developers -->
		<!-- wp:column {"className":"om-solution-card"} -->
		<div class="wp-block-column om-solution-card">
			<div class="om-solution-icon">💻</div>
			<!-- wp:paragraph {"className":"om-solution-badge"} -->
			<p class="om-solution-badge">For Agencies &amp; Developers</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"om-solution-title"} -->
			<h3 class="wp-block-heading om-solution-title">Deliver lightning-fast client eCommerce with clean code</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-solution-desc"} -->
			<p class="om-solution-desc">No bloated plugin dependencies or conflicts with client caching stacks. Extend OmnifyWP using standard WordPress hooks, clean REST API endpoints, and webhook automation.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"om-check-list"} -->
			<ul class="wp-block-list om-check-list">
				<!-- wp:list-item -->
				<li>Granular Read/Write API keys</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Complete event &amp; activity audit logs</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>100% theme &amp; page builder compatible</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"className":"om-solution-btn-wrap"} -->
			<div class="wp-block-buttons om-solution-btn-wrap">
				<!-- wp:button {"className":"om-btn--secondary"} -->
				<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://omnifywp.com/doc/" target="_blank" rel="noopener noreferrer">View API Documentation &rarr;</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
