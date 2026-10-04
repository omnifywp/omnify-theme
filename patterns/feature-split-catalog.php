<?php
/**
 * Title: Feature Split — Product Catalog
 * Slug: omnify/feature-split-catalog
 * Categories: omnify-features
 * Block Types: core/group
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:group {"tagName":"section","className":"om-section om-catalog-section","style":{"spacing":{"padding":{"top":"clamp(4rem, 7vw, 6rem)","bottom":"clamp(4rem, 7vw, 6rem)"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section class="wp-block-group om-section om-catalog-section">

	<!-- Split Columns -->
	<!-- wp:columns {"className":"om-feature-split","style":{"spacing":{"blockGap":"clamp(2rem, 5vw, 4rem)"}}} -->
	<div class="wp-block-columns om-feature-split">

		<!-- Left: Text Content Column -->
		<!-- wp:column {"className":"om-feature-split__content","width":"48%"} -->
		<div class="wp-block-column om-feature-split__content">
			<!-- wp:paragraph {"className":"om-feature-split__kicker"} -->
			<p class="om-feature-split__kicker">Product Management</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"om-feature-split__headline"} -->
			<h2 class="wp-block-heading om-feature-split__headline">Build and manage your catalog with effortless speed.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"om-feature-split__body"} -->
			<p class="om-feature-split__body">Create physical merchandise, courses, licenses, variable products with attributes, and high-converting product bundles &mdash; all through a unified, 4-step wizard with zero database bloat.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"om-check-list"} -->
			<ul class="wp-block-list om-check-list">
				<!-- wp:list-item -->
				<li><strong>Multi-Format Inventory:</strong> Instant downloads, license keys, physical items, and bundles</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Step-by-Step Creation:</strong> Dedicated UI for pricing tiers, inventory caps, and digital assets</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Attribute Swatches:</strong> Custom visual variants (sizes, formats, color pills)</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Instant Save &amp; Publish:</strong> Auto-generates clean slugs and storefront catalog cards</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"om-btn--primary"} -->
				<div class="wp-block-button om-btn--primary"><a class="wp-block-button__link" href="/features/">Explore Product Tools &rarr;</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- Right: Visual Mockup Column -->
		<!-- wp:column {"className":"om-feature-split__visual","width":"52%"} -->
		<div class="wp-block-column om-feature-split__visual">
			<!-- wp:group {"className":"om-browser-frame","style":{"border":{"radius":"16px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group om-browser-frame">
				
				<!-- Chrome Bar -->
				<div class="om-browser-chrome" style="background:#F7FCF9;padding:10px 16px;display:flex;align-items:center;gap:10px;border-bottom:1px solid #E6F4EC;">
					<div class="om-browser-dots" style="display:flex;gap:6px;">
						<span class="om-browser-dot om-browser-dot--red"></span>
						<span class="om-browser-dot om-browser-dot--yellow"></span>
						<span class="om-browser-dot om-browser-dot--green"></span>
					</div>
					<div class="om-browser-bar" style="flex:1;background:#fff;border:1px solid #D4E8DC;border-radius:5px;padding:3px 10px;font-size:0.75rem;color:#6B7F74;">
						mystore.local/wp-admin/admin.php?page=omnify-products&amp;action=new
					</div>
				</div>

				<!-- Wizard UI Simulator -->
				<!-- Wizard UI Simulator -->
				<div style="background:#FAFDFB;padding:22px;font-family:var(--om-font-body);" id="om-catalog-wizard">
					<!-- Wizard Steps Header -->
					<div style="display:flex;align-items:center;justify-content:space-between;background:#FFFFFF;border:1px solid #E2E8F0;padding:10px 16px;border-radius:10px;margin-bottom:18px;">
						<button type="button" class="om-wizard-step-btn is-active" data-step="1" style="display:flex;align-items:center;gap:6px;color:#18794E;font-weight:700;font-size:0.8rem;background:none;border:none;cursor:pointer;">
							<span style="width:22px;height:22px;border-radius:50%;background:#18794E;color:#fff;display:inline-flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;">1</span>
							Basics
						</button>
						<span style="color:#CBD5E1;">&rarr;</span>
						<button type="button" class="om-wizard-step-btn" data-step="2" style="display:flex;align-items:center;gap:6px;color:#64748B;font-weight:600;font-size:0.8rem;background:none;border:none;cursor:pointer;">
							<span style="width:22px;height:22px;border-radius:50%;background:#E2E8F0;color:#64748B;display:inline-flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;">2</span>
							Pricing
						</button>
						<span style="color:#CBD5E1;">&rarr;</span>
						<button type="button" class="om-wizard-step-btn" data-step="3" style="display:flex;align-items:center;gap:6px;color:#64748B;font-weight:600;font-size:0.8rem;background:none;border:none;cursor:pointer;">
							<span style="width:22px;height:22px;border-radius:50%;background:#E2E8F0;color:#64748B;display:inline-flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:700;">3</span>
							Files &amp; Keys
						</button>
					</div>

					<!-- Wizard Form Step 1: Basics -->
					<div class="om-wizard-panel is-active" id="om-wizard-panel-1" style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:12px;padding:18px;margin-bottom:16px;">
						<div style="margin-bottom:12px;">
							<label style="display:block;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:5px;text-transform:uppercase;">Product Title *</label>
							<div style="background:#F8FAFC;border:1.5px solid #CBD5E1;border-radius:6px;padding:8px 12px;font-size:0.875rem;font-weight:600;color:#0F172A;">
								WordPress Masterclass &amp; Design Assets
							</div>
						</div>

						<div style="margin-bottom:14px;">
							<label style="display:block;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:6px;text-transform:uppercase;">Product Type</label>
							<div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px;">
								<div style="background:#EFF8F2;border:2px solid #22A06B;border-radius:8px;padding:10px;text-align:center;">
									<div style="font-size:0.9rem;font-weight:700;color:#0B5135;">⚡ Digital</div>
									<span style="font-size:0.68rem;color:#18794E;">Files, licenses</span>
								</div>
								<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:8px;padding:10px;text-align:center;opacity:0.7;">
									<div style="font-size:0.9rem;font-weight:600;color:#475569;">📦 Physical</div>
									<span style="font-size:0.68rem;color:#64748B;">Inventory, parcel</span>
								</div>
								<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:8px;padding:10px;text-align:center;opacity:0.7;">
									<div style="font-size:0.9rem;font-weight:600;color:#475569;">🎁 Bundle</div>
									<span style="font-size:0.68rem;color:#64748B;">Multi-item kit</span>
								</div>
							</div>
						</div>

						<div style="background:#F0FDF4;border:1px dashed #86EFAC;border-radius:8px;padding:10px 14px;display:flex;align-items:center;justify-content:space-between;">
							<div style="display:flex;align-items:center;gap:8px;">
								<span style="font-size:1.1rem;">🔒</span>
								<div>
									<div style="font-size:0.8rem;font-weight:700;color:#166534;">masterclass-complete-v2.zip</div>
									<div style="font-size:0.68rem;color:#15803D;">HMAC Token Expire: 48h &bull; Max Downloads: 5</div>
								</div>
							</div>
							<span style="font-size:0.72rem;background:#DCFCE7;color:#166534;font-weight:700;padding:2px 8px;border-radius:4px;">Protected</span>
						</div>
					</div>

					<!-- Wizard Form Step 2: Pricing -->
					<div class="om-wizard-panel" id="om-wizard-panel-2" style="display:none;background:#FFFFFF;border:1px solid #E2E8F0;border-radius:12px;padding:18px;margin-bottom:16px;">
						<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px;">
							<div>
								<label style="display:block;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:5px;text-transform:uppercase;">Regular Price ($)</label>
								<div style="background:#F8FAFC;border:1.5px solid #CBD5E1;border-radius:6px;padding:8px 12px;font-size:0.875rem;font-weight:700;color:#0F172A;">$89.00</div>
							</div>
							<div>
								<label style="display:block;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:5px;text-transform:uppercase;">Sale Price (Optional)</label>
								<div style="background:#F8FAFC;border:1.5px solid #CBD5E1;border-radius:6px;padding:8px 12px;font-size:0.875rem;font-weight:700;color:#18794E;">$69.00 (Save $20)</div>
							</div>
						</div>
						<div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:8px;padding:12px;margin-bottom:10px;">
							<div style="display:flex;justify-content:space-between;align-items:center;font-size:0.8rem;font-weight:700;color:#0F172A;">
								<span>Tiered License Pricing</span>
								<span style="color:#10B981;">✓ Multi-Seat Enabled</span>
							</div>
							<div style="font-size:0.72rem;color:#64748B;margin-top:4px;">Single ($89) • Team 5-Seat ($199) • Unlimited ($499)</div>
						</div>
					</div>

					<!-- Wizard Form Step 3: Files & Security -->
					<div class="om-wizard-panel" id="om-wizard-panel-3" style="display:none;background:#FFFFFF;border:1px solid #E2E8F0;border-radius:12px;padding:18px;margin-bottom:16px;">
						<div style="background:#F0FDF4;border:1px solid #BBF7D0;border-radius:8px;padding:14px;margin-bottom:12px;">
							<div style="font-size:0.8rem;font-weight:700;color:#166534;margin-bottom:6px;">HMAC Digital Vault Parameters</div>
							<div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;font-size:0.75rem;color:#15803D;">
								<div>⏱ <strong>Token Expiry:</strong> 48 Hours</div>
								<div>🔢 <strong>Download Cap:</strong> 5 Attempts</div>
								<div>🛡 <strong>IP Lockout:</strong> Enabled</div>
								<div>☁️ <strong>Storage:</strong> S3 / Local Protected</div>
							</div>
						</div>
						<div style="font-size:0.75rem;color:#64748B;">Automated customer portal delivery link generated on webhook verification.</div>
					</div>

					<!-- Navigation Buttons -->
					<div style="display:flex;justify-content:space-between;align-items:center;">
						<span id="om-wizard-step-label" style="font-size:0.75rem;color:#64748B;">Step 1 of 3 &bull; Autosaved</span>
						<div style="display:flex;gap:8px;">
							<button type="button" id="om-wizard-prev-btn" style="display:none;background:#E2E8F0;border:none;padding:6px 14px;border-radius:6px;font-size:0.8rem;font-weight:600;color:#475569;cursor:pointer;">&larr; Back</button>
							<button type="button" id="om-wizard-next-btn" style="background:#18794E;border:none;padding:6px 16px;border-radius:6px;font-size:0.8rem;font-weight:700;color:#FFFFFF;cursor:pointer;">Next: Pricing &rarr;</button>
						</div>
					</div>
				</div>

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
