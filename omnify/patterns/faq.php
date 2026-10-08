<?php
/**
 * Title: FAQ Accordion
 * Slug: omnify/faq
 * Categories: omnify-faq
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-faq-section","style":{"spacing":{"padding":{"top":"clamp(4rem, 7vw, 6rem)","bottom":"clamp(4rem, 7vw, 6rem)"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<section class="wp-block-group om-section om-faq-section">

	<!-- Header Area -->
	<!-- wp:group {"className":"om-text-center","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group om-text-center" style="margin-bottom:3.5rem">
		<!-- wp:paragraph {"className":"om-eyebrow"} -->
		<p class="om-eyebrow">Clear Answers</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 3.8vw, 2.75rem)","fontWeight":"800","letterSpacing":"-0.035em","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading" style="font-size:clamp(2rem, 3.8vw, 2.75rem);font-weight:800;letter-spacing:-0.035em;line-height:1.2">Frequently asked questions</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"om-text-muted","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.7"}}} -->
		<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7">Everything you need to know about setting up, migrating, accepting payments, and scaling your eCommerce store with OmnifyWP.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- FAQ Accordion Items (Core Details Blocks) -->
	<!-- wp:group {"className":"om-faq-list","layout":{"type":"default"}} -->
	<div class="wp-block-group om-faq-list">

		<!-- FAQ 1 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>Does OmnifyWP require WooCommerce or replace it?</summary>
			<!-- wp:paragraph -->
			<p><strong>OmnifyWP is completely standalone and does not require WooCommerce.</strong> Unlike traditional eCommerce plugins that clutter your WordPress <code>wp_posts</code> and <code>wp_postmeta</code> tables with hundreds of thousands of slow rows, OmnifyWP uses purpose-built custom SQL tables (<code>wp_omnify_products</code>, <code>wp_omnify_orders</code>, <code>wp_omnify_customers</code>, etc.). This ensures lightning-fast queries, zero database bloat, and instant checkout speeds even with large product catalogs.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 2 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>What types of products and business models are supported?</summary>
			<!-- wp:paragraph -->
			<p>OmnifyWP handles all four primary modern product types out of the box:</p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul>
				<!-- wp:list-item -->
				<li><strong>Digital Downloads &amp; Software:</strong> eBooks, presets, software binaries, audio, and design files with HMAC-protected access.</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Physical Goods:</strong> Tangible inventory requiring shipping addresses, carrier calculation, fulfillment statuses, and weight/dimension tracking.</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Variable Products:</strong> Multi-variant goods with configurable attributes (size, color, material, format) and independent prices or stock levels.</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Product Bundles:</strong> Grouped packages that combine multiple items at an attractive bundle price.</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 3 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>How does OmnifyWP protect digital downloads from link sharing and piracy?</summary>
			<!-- wp:paragraph -->
			<p>Your media files are stored securely outside the publicly indexable web root or behind protected streaming handlers. When a verified order is placed, OmnifyWP generates a <strong>cryptographically signed HMAC temporary download token</strong>. You can configure exact expiration windows (e.g. 24 or 48 hours), cap maximum download attempts (e.g. 3 tries), and restrict downloads to registered accounts or verified customer emails.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 4 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>Which payment gateways are supported and are there extra transaction fees?</summary>
			<!-- wp:paragraph -->
			<p><strong>There are zero platform transaction fees.</strong> You keep 100% of your earnings; you only pay standard merchant processing rates directly to your payment gateway (e.g. Stripe or PayPal). Supported gateways include Stripe (Credit Cards, Apple Pay, Google Pay), PayPal Smart Checkout, Razorpay, Mollie, Paystack, and offline methods like Direct Bank Transfer.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 5 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>Can customers track their orders or access downloads without creating an account?</summary>
			<!-- wp:paragraph -->
			<p>Yes! Frictionless guest checkouts increase conversions by up to 30%. OmnifyWP provides a dedicated <strong>Guest Order Lookup Portal</strong> where buyers simply enter their Order ID and billing email to view their order status, shipping tracking numbers, tax invoices, and securely access their digital downloads without ever having to set a password.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 6 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>Does OmnifyWP offer a REST API and developer webhooks?</summary>
			<!-- wp:paragraph -->
			<p>Yes. OmnifyWP includes a comprehensive developer toolkit built into the WordPress admin under <em>Omnify &gt; Tools &gt; API Keys</em>. You can issue granular Read/Write API keys, execute automated webhooks for order fulfillment events, query custom REST endpoints, and inspect complete activity audit logs.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 7 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>Will OmnifyWP work with my existing WordPress theme and page builder?</summary>
			<!-- wp:paragraph -->
			<p>Yes. OmnifyWP is engineered to be 100% theme-agnostic. Whether you use WordPress Full Site Editing (FSE) block themes, Elementor, Divi, Bricks, Beaver Builder, or classic themes like Astra and GeneratePress, you can embed product cards, buy buttons, checkout pages, and customer portals cleanly using native Gutenberg blocks or shortcodes.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 8 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>How do I migrate my existing products and orders from WooCommerce or CSV?</summary>
			<!-- wp:paragraph -->
			<p>OmnifyWP comes equipped with native Import &amp; Export tools under <em>Tools &gt; Import / Export</em>. You can upload standard CSV spreadsheets containing products, pricing, stock levels, and SKUs, or export complete customer and order datasets anytime with one click.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- FAQ 9 -->
		<!-- wp:details {"className":"om-faq-item"} -->
		<details class="wp-block-details om-faq-item"><summary>Can I test OmnifyWP before installing it on my live site?</summary>
			<!-- wp:paragraph -->
			<p>Absolutely. You can launch an instant, fully pre-configured interactive WordPress Playground demo directly in your browser. No server, credit card, or local installation required—experience the admin dashboard and storefront live in seconds.</p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

	</div>
	<!-- /wp:group -->

	<!-- Support Callout Box -->
	<!-- wp:group {"className":"om-faq-support-box","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"},"margin":{"top":"3.5rem"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group om-faq-support-box om-text-center" style="margin-top:3.5rem;padding:2rem">
		<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"}}} -->
		<h4 class="wp-block-heading" style="font-size:1.125rem;font-weight:700">Still have questions about your store setup?</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9375rem"}}} -->
		<p style="font-size:0.9375rem">Explore our comprehensive technical guides or review the developer documentation.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"om-btn--secondary"} -->
			<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://omnifywp.com/doc/" target="_blank" rel="noopener noreferrer">Browse Documentation &rarr;</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"om-btn--primary"} -->
			<div class="wp-block-button om-btn--primary"><a class="wp-block-button__link" href="https://wordpress.org/support/plugin/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer">Get Community Support &rarr;</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
