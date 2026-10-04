<?php
/**
 * Title: Feature Split — Analytics
 * Slug: omnify/feature-split-analytics
 * Categories: omnify-features
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:html -->
<section class="om-section" style="background:#EFF8F2;padding-top:clamp(4rem, 7vw, 6rem);padding-bottom:clamp(4rem, 7vw, 6rem);border-top:1px solid #D4E8DC;">
	<div class="om-container">

		<div class="om-feature-split om-feature-split--reverse">

			<!-- Left on desktop: Analytics Simulator Mockup -->
			<div class="om-feature-split__visual">
				<div class="om-browser-frame" style="border:1px solid #D4E8DC;border-radius:16px;box-shadow:0 20px 45px -10px rgba(11,81,53,0.12);background:#fff;overflow:hidden;">
					
					<!-- Chrome Bar -->
					<div class="om-browser-chrome" style="background:#F7FCF9;padding:10px 16px;display:flex;align-items:center;gap:10px;border-bottom:1px solid #E6F4EC;">
						<div class="om-browser-dots" style="display:flex;gap:6px;">
							<span class="om-browser-dot om-browser-dot--red"></span>
							<span class="om-browser-dot om-browser-dot--yellow"></span>
							<span class="om-browser-dot om-browser-dot--green"></span>
						</div>
						<div class="om-browser-bar" style="flex:1;background:#fff;border:1px solid #D4E8DC;border-radius:5px;padding:3px 10px;font-size:0.75rem;color:#6B7F74;">
							mystore.local/wp-admin/admin.php?page=omnify-analytics
						</div>
					</div>

					<!-- Analytics Dashboard Simulator -->
					<div style="background:#FAFDFB;padding:22px;font-family:var(--om-font-body);">
						
						<!-- Filter Controls Header -->
						<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;">
							<div style="display:flex;gap:8px;">
								<span style="font-size:0.75rem;font-weight:700;color:#0B5135;background:#EFF8F2;padding:4px 10px;border-radius:6px;border:1px solid #D4E8DC;">Date: Last 30 Days</span>
								<span style="font-size:0.75rem;font-weight:600;color:#64748B;background:#FFFFFF;padding:4px 10px;border-radius:6px;border:1px solid #E2E8F0;">Channel: All</span>
							</div>
							<span style="font-size:0.75rem;color:#18794E;font-weight:700;cursor:pointer;">↓ Export CSV</span>
						</div>

						<!-- Two Metric Cards -->
						<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:16px;">
							<div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
								<span style="font-size:0.72rem;font-weight:700;color:#64748B;text-transform:uppercase;">Net After Refunds</span>
								<div style="font-size:1.45rem;font-weight:800;color:#0F172A;margin-top:4px;">$12,480.00</div>
								<span style="font-size:0.7rem;color:#10B981;font-weight:700;">↑ 22.4% conversion</span>
							</div>
							<div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:10px;padding:14px;">
								<span style="font-size:0.72rem;font-weight:700;color:#64748B;text-transform:uppercase;">Refund Rate</span>
								<div style="font-size:1.45rem;font-weight:800;color:#0F172A;margin-top:4px;">0.4%</div>
								<span style="font-size:0.7rem;color:#10B981;font-weight:700;">Ultra-low friction</span>
							</div>
						</div>

						<!-- Simulated Revenue Bar Chart -->
						<div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:10px;padding:16px;margin-bottom:14px;">
							<div style="display:flex;justify-content:space-between;font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:12px;">
								<span>Weekly Sales Trajectory</span>
								<span style="color:#10B981;">● Completed Orders</span>
							</div>
							<!-- Bar Chart Visual -->
							<div style="display:flex;align-items:flex-end;justify-content:space-between;height:80px;gap:8px;padding-top:10px;">
								<div style="flex:1;background:#E2E8F0;height:45%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#A8DFBF;height:65%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#A8DFBF;height:55%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#34D399;height:85%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#22A06B;height:75%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#18794E;height:100%;border-radius:4px 4px 0 0;"></div>
								<div style="flex:1;background:#0B5135;height:90%;border-radius:4px 4px 0 0;"></div>
							</div>
							<div style="display:flex;justify-content:space-between;font-size:0.65rem;color:#94A3B8;margin-top:6px;">
								<span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
							</div>
						</div>

						<!-- Download Activity Row -->
						<div style="background:#F0FDF4;border:1px solid #DCFCE7;border-radius:8px;padding:10px 14px;display:flex;justify-content:space-between;align-items:center;font-size:0.75rem;">
							<span style="color:#166534;font-weight:600;">⚡ 142 Active Download Sessions</span>
							<span style="color:#15803D;font-weight:700;">Average latency: 0.08s</span>
						</div>

					</div>

				</div>
			</div><!-- /.om-feature-split__visual -->

			<!-- Right on desktop: Text content -->
			<div class="om-feature-split__content">
				<span class="om-feature-split__kicker">Store Intelligence</span>

				<h2 class="om-feature-split__headline" style="font-size:clamp(1.85rem, 3.5vw, 2.5rem);font-weight:800;letter-spacing:-0.035em;color:var(--om-ink);margin-top:0.5rem;margin-bottom:1.25rem;line-height:1.2;">
					Understand every metric driving your store forward.
				</h2>

				<p class="om-feature-split__body" style="font-size:1.0625rem;line-height:1.7;color:var(--om-slate);margin-bottom:1.75rem;">
					Make data-backed merchandising decisions with real-time analytics. Monitor gross versus net sales, customer retention, refund percentages, and digital asset consumption without external tracking scripts.
				</p>

				<ul class="om-check-list" style="margin-bottom:2rem;">
					<li><strong>Comprehensive Metrics:</strong> Gross sales, net revenue, refunds, items sold, and AOV</li>
					<li><strong>Multi-Dimensional Filters:</strong> Filter by date range, product kind, payment method, or status</li>
					<li><strong>Download Tracking:</strong> Monitor digital file delivery frequency and remaining allowances</li>
					<li><strong>Instant CSV Exports:</strong> One-click export for bookkeeping, accounting, and spreadsheet analysis</li>
				</ul>

				<a class="om-btn om-btn--primary" href="/features/">
					View Analytics Details &rarr;
				</a>
			</div><!-- /.om-feature-split__content -->

		</div><!-- /.om-feature-split -->

	</div><!-- /.om-container -->
</section>
<!-- /wp:html -->
