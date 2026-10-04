<?php
/**
 * Title: FAQ Accordion
 * Slug: omnify/faq
 * Categories: omnify-faq
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:html -->
<section class="om-section" style="background:#ffffff;padding-top:clamp(4rem, 7vw, 6rem);padding-bottom:clamp(4rem, 7vw, 6rem);">
	<div class="om-container" style="max-width:860px;margin-inline:auto;">

		<!-- Centered Heading Area -->
		<div class="om-text-center" style="margin-bottom:3.5rem;">
			<span class="om-eyebrow">Clear Answers</span>
			<h2 style="font-size:clamp(2rem, 3.8vw, 2.75rem);font-weight:800;letter-spacing:-0.035em;color:var(--om-ink);margin-top:0.75rem;margin-bottom:1rem;line-height:1.2;">
				Frequently asked questions
			</h2>
			<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7;max-width:620px;margin-inline:auto;">
				Everything you need to know about setting up, migrating, accepting payments, and scaling your eCommerce store with OmnifyWP.
			</p>
		</div>

		<!-- Accessible FAQ Accordion List -->
		<div class="om-faq" role="list">

			<!-- FAQ Item 1 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-1" type="button">
					<span>Does OmnifyWP require WooCommerce or replace it?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-1" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p><strong>OmnifyWP is completely standalone and does not require WooCommerce.</strong> Unlike traditional eCommerce plugins that clutter your WordPress <code>wp_posts</code> and <code>wp_postmeta</code> tables with hundreds of thousands of slow rows, OmnifyWP uses purpose-built custom SQL tables (<code>wp_omnify_products</code>, <code>wp_omnify_orders</code>, <code>wp_omnify_customers</code>, etc.). This ensures lightning-fast queries, zero database bloat, and instant checkout speeds even with large product catalogs.</p>
					</div>
				</div>
			</div>

			<!-- FAQ Item 2 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-2" type="button">
					<span>What types of products and business models are supported?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-2" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>OmnifyWP handles all four primary modern product types out of the box:</p>
						<ul style="margin:0.75rem 0 0.75rem 1.25rem;line-height:1.7;">
							<li><strong>Digital Downloads &amp; Software:</strong> eBooks, presets, software binaries, audio, and design files with HMAC-protected access.</li>
							<li><strong>Physical Goods:</strong> Tangible inventory requiring shipping addresses, carrier calculation, fulfillment statuses, and weight/dimension tracking.</li>
							<li><strong>Variable Products:</strong> Multi-variant goods with configurable attributes (size, color, material, format) and independent prices or stock levels.</li>
							<li><strong>Product Bundles:</strong> Grouped packages that combine multiple items at an attractive bundle price.</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- FAQ Item 3 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-3" type="button">
					<span>How does OmnifyWP protect digital downloads from link sharing and piracy?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-3" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>Your media files are stored securely outside the publicly indexable web root or behind protected streaming handlers. When a verified order is placed, OmnifyWP generates a <strong>cryptographically signed HMAC temporary download token</strong>. You can configure exact expiration windows (e.g. 24 or 48 hours), cap maximum download attempts (e.g. 3 tries), and restrict downloads to registered accounts or verified customer emails.</p>
					</div>
				</div>
			</div>

			<!-- FAQ Item 4 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-4" type="button">
					<span>Which payment gateways are supported and are there extra transaction fees?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-4" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p><strong>There are zero platform transaction fees.</strong> You keep 100% of your earnings; you only pay standard merchant processing rates directly to your payment gateway (e.g. Stripe or PayPal). Supported gateways include:</p>
						<ul style="margin:0.75rem 0 0.75rem 1.25rem;line-height:1.7;">
							<li><strong>Stripe:</strong> Accepts Credit &amp; Debit Cards, Apple Pay, Google Pay, and localized bank rails.</li>
							<li><strong>PayPal:</strong> One-click PayPal Smart Checkout and Pay Later financing.</li>
							<li><strong>Offline Methods:</strong> Direct Bank Transfer (BACS), Cash on Delivery (COD), and Cheque payments for wholesale or local businesses.</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- FAQ Item 5 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-5" type="button">
					<span>Can customers track their orders or access downloads without creating an account?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-5" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>Yes! Frictionless guest checkouts increase conversions by up to 30%. OmnifyWP provides a dedicated <strong>Guest Order Lookup Portal</strong> where buyers simply enter their Order ID and billing email to view their order status, shipping tracking numbers, tax invoices, and securely access their digital downloads without ever having to set a password.</p>
					</div>
				</div>
			</div>

			<!-- FAQ Item 6 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-6" type="button">
					<span>Does OmnifyWP offer a REST API and developer webhooks?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-6" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>Yes. OmnifyWP includes a comprehensive developer toolkit built into the WordPress admin under <em>Omnify &gt; Tools &gt; API Keys</em>. You can issue granular Read/Write API keys, execute automated webhooks for order fulfillment events, query custom REST endpoints, and inspect complete activity audit logs.</p>
					</div>
				</div>
			</div>

			<!-- FAQ Item 7 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-7" type="button">
					<span>Will OmnifyWP work with my existing WordPress theme and page builder?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-7" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>Yes. OmnifyWP is engineered to be 100% theme-agnostic. Whether you use WordPress Full Site Editing (FSE) block themes, Elementor, Divi, Bricks, Beaver Builder, or classic themes like Astra and GeneratePress, you can embed product cards, buy buttons, checkout pages, and customer portals cleanly using native Gutenberg blocks or shortcodes.</p>
					</div>
				</div>
			</div>

			<!-- FAQ Item 8 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-8" type="button">
					<span>How do I migrate my existing products and orders from WooCommerce or CSV?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-8" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>OmnifyWP comes equipped with native Import &amp; Export tools under <em>Tools &gt; Import / Export</em>. You can upload standard CSV spreadsheets containing products, pricing, stock levels, and SKUs, or export complete customer and order datasets anytime with one click.</p>
					</div>
				</div>
			</div>

			<!-- FAQ Item 9 -->
			<div class="om-faq__item" role="listitem">
				<button class="om-faq__question" role="button" aria-expanded="false" aria-controls="faq-9" type="button">
					<span>Can I test OmnifyWP before installing it on my live site?</span>
					<span class="om-faq__chevron" aria-hidden="true">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
					</span>
				</button>
				<div id="faq-9" class="om-faq__answer" hidden>
					<div class="om-faq__answer-inner">
						<p>Absolutely. You can launch an instant, fully pre-configured <a href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer" style="color:var(--om-forest-light);font-weight:600;text-decoration:underline;">interactive WordPress Playground demo</a> directly in your browser. No server, credit card, or local installation required—experience the admin dashboard and storefront live in seconds.</p>
					</div>
				</div>
			</div>

		</div>

		<!-- Still have questions footer box -->
		<div style="margin-top:3.5rem;padding:2rem;background:#F0FAF4;border:1px solid #D4E8DC;border-radius:12px;text-align:center;">
			<h4 style="font-family:var(--om-font-heading);font-size:1.125rem;font-weight:700;color:#0B5135;margin-bottom:0.5rem;">Still have questions about your store setup?</h4>
			<p style="font-size:0.9375rem;color:#3D5147;margin-bottom:1.25rem;">Explore our comprehensive technical guides or review the developer documentation.</p>
			<div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
				<a href="https://omnifywp.com/doc/" class="om-btn om-btn--secondary" target="_blank" rel="noopener noreferrer" style="background:#ffffff;font-size:0.875rem;">Browse Documentation &rarr;</a>
				<a href="/contact/" class="om-btn om-btn--primary" style="font-size:0.875rem;">Contact Support &rarr;</a>
			</div>
		</div>

	</div>
</section>
<!-- /wp:html -->
