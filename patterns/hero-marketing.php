<?php
/**
 * Title: Marketing Hero — OmnifyWP
 * Slug: omnify/hero-marketing
 * Categories: omnify-hero
 * Block Types: core/group
 * Description: High-converting SaaS marketing hero with interactive UI mockup inspired by SureCart & FluentCart.
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-hero-saas","style":{"spacing":{"padding":{"top":"clamp(4rem, 7vw, 6.5rem)","bottom":"clamp(3.5rem, 6vw, 5rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-hero-saas">

	<!-- Eyebrow Pill -->
	<!-- wp:group {"className":"om-hero-eyebrow-wrap","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group om-hero-eyebrow-wrap">
		<!-- wp:paragraph {"className":"om-hero-eyebrow"} -->
		<p class="om-hero-eyebrow"><span class="om-eyebrow-dot"></span> Next-Gen WordPress eCommerce Plugin</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Main Headline -->
	<!-- wp:heading {"level":1,"className":"om-hero-saas__title om-text-center"} -->
	<h1 class="wp-block-heading om-hero-saas__title om-text-center">Your complete eCommerce store, <span class="om-text-gradient">built natively for WordPress.</span></h1>
	<!-- /wp:heading -->

	<!-- Subheading -->
	<!-- wp:paragraph {"className":"om-hero-subhead om-text-center"} -->
	<p class="om-hero-subhead om-text-center">OmnifyWP combines the speed and elegance of modern checkout engines with the ownership of self-hosted WordPress. List products, collect payments, and deliver digital files without monthly SaaS fees.</p>
	<!-- /wp:paragraph -->

	<!-- CTA Buttons -->
	<!-- wp:buttons {"className":"om-hero-cta-group","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons om-hero-cta-group">
		<!-- wp:button {"className":"om-btn--primary"} -->
		<div class="wp-block-button om-btn--primary"><a class="wp-block-button__link" href="https://wordpress.org/plugins/omnifywp-ecommerce/" target="_blank" rel="noopener noreferrer">Download on wp.org &rarr;</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"om-btn--secondary"} -->
		<div class="wp-block-button om-btn--secondary"><a class="wp-block-button__link" href="https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json" target="_blank" rel="noopener noreferrer"><span class="om-btn-badge-icon">▶</span> Try Live Demo (No Setup)</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- Comparison Bridge Link -->
	<!-- wp:paragraph {"className":"om-hero-compare-pill om-text-center"} -->
	<p class="om-hero-compare-pill om-text-center"><a href="/compare/">⚡ Why switch from WooCommerce? See architectural comparison &rarr;</a></p>
	<!-- /wp:paragraph -->

	<!-- Trust Checklist -->
	<!-- wp:group {"className":"om-hero-trust-row","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group om-hero-trust-row">
		<!-- wp:paragraph -->
		<p>✓ 100% GPL Licensed &amp; Free Core</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>✓ Sub-100ms Native SQL Queries</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>✓ Zero Database Postmeta Bloat</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Hero Interactive Performance Benchmarks Under Load -->
	<!-- wp:group {"className":"om-hero-perf-wrap","layout":{"type":"constrained","contentSize":"1240px"}} -->
	<div class="wp-block-group om-hero-perf-wrap" style="width:100%;max-width:1240px;margin-top:2.5rem;margin-inline:auto;">
		<div id="om-performance-comparator" class="om-perf-comparator" style="margin-bottom:0;box-shadow:0 25px 60px -15px rgba(11,81,53,0.18), 0 0 0 1px rgba(11,81,53,0.04);">
			<div class="om-perf-header">
				<span class="om-badge om-badge--neutral" style="font-size:0.75rem;font-weight:700;text-transform:uppercase;font-family:var(--om-font-mono);color:var(--om-forest);margin-bottom:0.75rem;display:inline-block;">⚡ Interactive Benchmarks Under Load</span>
				<h2 style="font-size:clamp(1.6rem, 3vw, 2.25rem);font-weight:800;color:var(--om-ink);margin:0 0 0.75rem;letter-spacing:-0.03em;">Simulate Real-World Store Performance</h2>
				<p style="font-size:0.95rem;color:var(--om-slate-mid);line-height:1.6;margin:0;">Select a store catalog scale and traffic volume to compare latency, SQL query execution, memory footprint, and concurrent checkout capacities in real time.</p>
			</div>

			<!-- Scenario Selector -->
			<div class="om-perf-scenario-picker">
				<button type="button" class="om-perf-scenario-btn" data-scenario="starter">
					<span>📦 Starter Boutique</span>
					<span class="om-scenario-sub">100 Products &bull; 50 Orders/Day</span>
				</button>
				<button type="button" class="om-perf-scenario-btn is-active" data-scenario="growth">
					<span>🚀 Growing Brand (Default)</span>
					<span class="om-scenario-sub">2,500 Products &bull; 600 Orders/Day</span>
				</button>
				<button type="button" class="om-perf-scenario-btn" data-scenario="enterprise">
					<span>🏢 High-Volume Enterprise</span>
					<span class="om-scenario-sub">50,000 Products &bull; 8,000 Orders/Day</span>
				</button>
			</div>

			<!-- Live Metric Grid -->
			<div class="om-perf-grid">
				<!-- Metric 1: TTFB / Latency -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span>⏱️ Server Response Time (TTFB)</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-ttfb-omni" class="om-perf-bar-val" style="color:#15803D;">24 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:14%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-ttfb-woo" class="om-perf-bar-val" style="color:#DC2626;">285 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:82%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-ttfb-edd" class="om-perf-bar-val">140 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:48%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-ttfb-sure" class="om-perf-bar-val">195 ms</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-ttfb-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:60%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">OmnifyWP responds up to <strong>11.8x faster</strong> by eliminating postmeta table iteration.</p>
				</div>

				<!-- Metric 2: SQL Queries -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span>🗄️ Database Queries / Product View</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-query-omni" class="om-perf-bar-val" style="color:#15803D;">1 query</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:4%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-query-woo" class="om-perf-bar-val" style="color:#DC2626;">38 queries</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:85%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-query-edd" class="om-perf-bar-val">18 queries</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:45%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-query-sure" class="om-perf-bar-val">8 queries + API</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-query-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:26%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">Direct relational select from indexed table <code>wp_omnify_products</code> with zero JOINs.</p>
				</div>

				<!-- Metric 3: RAM Memory Footprint -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span>💾 Memory Footprint / PHP Request</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-mem-omni" class="om-perf-bar-val" style="color:#15803D;">8.2 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:18%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-mem-woo" class="om-perf-bar-val" style="color:#DC2626;">44.6 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:90%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-mem-edd" class="om-perf-bar-val">22.4 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:50%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-mem-sure" class="om-perf-bar-val">18.1 MB</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-mem-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:40%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">Allows <strong>5x more PHP worker threads</strong> to run concurrently on standard server tiers.</p>
				</div>

				<!-- Metric 4: Concurrency Checkouts -->
				<div class="om-perf-card">
					<div>
						<div class="om-perf-card-title">
							<span>🛒 Concurrent Checkouts ($20/mo VPS)</span>
						</div>
						<div class="om-perf-bars">
							<!-- OmnifyWP -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span style="color:var(--om-forest);font-weight:700;">OmnifyWP</span>
									<span id="om-val-conc-omni" class="om-perf-bar-val" style="color:#15803D;">420 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-omni" class="om-perf-bar-fill om-perf-bar-fill--omnify" style="width:100%;"></div>
								</div>
							</div>

							<!-- WooCommerce -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>WooCommerce</span>
									<span id="om-val-conc-woo" class="om-perf-bar-val" style="color:#DC2626;">42 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-woo" class="om-perf-bar-fill om-perf-bar-fill--woo" style="width:10%;"></div>
								</div>
							</div>

							<!-- EDD -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>Easy Digital Downloads</span>
									<span id="om-val-conc-edd" class="om-perf-bar-val">115 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-edd" class="om-perf-bar-fill om-perf-bar-fill--edd" style="width:28%;"></div>
								</div>
							</div>

							<!-- SureCart -->
							<div class="om-perf-bar-row">
								<div class="om-perf-bar-meta">
									<span>SureCart (Cloud)</span>
									<span id="om-val-conc-sure" class="om-perf-bar-val">90 /min</span>
								</div>
								<div class="om-perf-bar-track">
									<div id="om-bar-conc-sure" class="om-perf-bar-fill om-perf-bar-fill--surecart" style="width:22%;"></div>
								</div>
							</div>
						</div>
					</div>
					<p style="font-size:0.75rem;color:var(--om-slate-mid);margin:1.25rem 0 0;line-height:1.4;">Zero database deadlock during flash sales due to isolated order tables.</p>
				</div>
			</div>

			<!-- Live Simulator Action Bar -->
			<div class="om-perf-sim-action">
				<button type="button" id="om-run-perf-sim-btn" class="om-btn om-btn--primary" style="font-size:0.875rem;height:42px;padding:0 1.25rem;">
					Run Interactive Concurrency Test
				</button>
				<div id="om-perf-sim-status" style="font-size:0.8125rem;color:var(--om-slate-mid);">
					<span>Ready to simulate 500 simultaneous checkout requests on simulated 2-core VPS.</span>
				</div>
			</div>
		</div>
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
