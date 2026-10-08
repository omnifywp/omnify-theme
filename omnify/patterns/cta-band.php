<?php
/**
 * Title: Final CTA Band
 * Slug: omnify/cta-band
 * Categories: omnify-cta
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-cta-section","style":{"spacing":{"padding":{"top":"clamp(4rem, 8vw, 6.5rem)","bottom":"clamp(4rem, 8vw, 6.5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-cta-section">
	<!-- wp:group {"className":"om-cta-band","layout":{"type":"constrained","contentSize":"1040px"}} -->
	<div class="wp-block-group om-cta-band">

		<!-- Eyebrow Pill -->
		<div class="om-cta-eyebrow-row">
			<span class="om-cta-eyebrow"><span class="om-cta-eyebrow-pulse"></span> Free &amp; Open Source eCommerce</span>
		</div>

		<!-- Main Headline -->
		<!-- wp:heading {"level":2,"className":"om-cta-band__headline"} -->
		<h2 class="wp-block-heading om-cta-band__headline">Ready to build a faster eCommerce store on WordPress?</h2>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"className":"om-cta-band__sub"} -->
		<p class="om-cta-band__sub">Join store owners and developers switching to lightning-fast, bloat-free eCommerce. Download the free plugin or test drive our interactive sandbox right now.</p>
		<!-- /wp:paragraph -->

		<!-- Action Buttons: Minimal & Creative Duo -->
		<!-- wp:buttons {"className":"om-cta-band__actions","layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons om-cta-band__actions">
			<!-- wp:button {"className":"om-btn--vivid"} -->
			<div class="wp-block-button om-btn--vivid"><a class="wp-block-button__link" href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer"><svg class="om-btn-icon" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg><span>Download Free</span><span class="om-btn-arrow">&rarr;</span></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"om-btn--ghost"} -->
			<div class="wp-block-button om-btn--ghost"><a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer"><span class="om-btn-pulse-dot"></span><span>Try Interactive Demo</span></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- Technical Bridge Link -->
		<div class="om-cta-docs-bridge">
			<span>Building custom extensions?</span>
			<a href="https://omnifywp.com/doc/" target="_blank" rel="noopener noreferrer">Read the Developer Documentation &rarr;</a>
		</div>

		<!-- Trust Strip -->
		<div class="om-cta-trust-strip">
			<div class="om-trust-item"><span class="om-trust-check">✓</span> 100% GPL-2.0-or-later Core</div>
			<div class="om-trust-item"><span class="om-trust-check">✓</span> Zero Transaction Fees</div>
			<div class="om-trust-item"><span class="om-trust-check">✓</span> No Credit Card Required</div>
		</div>

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
