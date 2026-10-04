<?php
/**
 * Title: Value Pillars — Google-Style Proof Grid
 * Slug: omnify/value-pillars
 * Categories: omnify-features
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- wp:html -->
<section class="om-section" style="background:#FBFDFB;border-top:1px solid #E6F4EC;border-bottom:1px solid #E6F4EC;padding-top:clamp(4rem, 6vw, 5.5rem);padding-bottom:clamp(4rem, 6vw, 5.5rem);">
	<div class="om-container" style="max-width:1200px;margin-inline:auto;">

		<!-- Google-Style Header -->
		<div class="om-text-center" style="max-width:760px;margin-inline:auto;margin-bottom:3.5rem;">
			<span class="om-eyebrow">Engineered for Performance</span>
			<h2 style="font-size:clamp(2rem, 3.8vw, 2.75rem);font-weight:800;letter-spacing:-0.035em;color:var(--om-ink);margin-top:0.75rem;margin-bottom:1rem;line-height:1.2;">
				Why modern businesses choose OmnifyWP
			</h2>
			<p class="om-text-muted" style="font-size:1.0625rem;line-height:1.7;">
				Architected from the ground up to eliminate the bloat, complexity, and ongoing fees of legacy WordPress plugins.
			</p>
		</div>

		<!-- 4 Core Pillars Grid -->
		<div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));gap:1.75rem;">

			<!-- Pillar 1: High-Speed DB -->
			<div style="background:#ffffff;border:1px solid #E2E8F0;border-radius:14px;padding:2rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 14px rgba(0,0,0,0.03);transition:transform 0.2s ease, border-color 0.2s ease;">
				<div>
					<div style="width:48px;height:48px;border-radius:12px;background:#ECFDF5;display:flex;align-items:center;justify-content:center;color:#0B5135;margin-bottom:1.25rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
					</div>
					<h3 style="font-family:var(--om-font-heading);font-size:1.25rem;font-weight:700;color:var(--om-ink);margin-bottom:0.75rem;">
						Custom SQL Tables
					</h3>
					<p style="font-size:0.9375rem;color:var(--om-slate);line-height:1.65;margin-bottom:1.5rem;">
						No slow postmeta queries. Dedicated tables for products, orders, and customers ensure snappy page loads and sub-100ms checkout times under load.
					</p>
				</div>
				<div style="border-top:1px solid #F1F5F9;padding-top:1rem;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:0.8125rem;font-weight:700;color:#0B5135;">0 postmeta overhead</span>
					<span style="font-family:var(--om-font-mono);font-size:0.75rem;background:#F0FAF4;color:#18794E;padding:2px 8px;border-radius:4px;font-weight:600;">0.08s latency</span>
				</div>
			</div>

			<!-- Pillar 2: 100% Data Sovereignty -->
			<div style="background:#ffffff;border:1px solid #E2E8F0;border-radius:14px;padding:2rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 14px rgba(0,0,0,0.03);transition:transform 0.2s ease, border-color 0.2s ease;">
				<div>
					<div style="width:48px;height:48px;border-radius:12px;background:#ECFDF5;display:flex;align-items:center;justify-content:center;color:#0B5135;margin-bottom:1.25rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M7 7h10"/><path d="M7 12h10"/><path d="M7 17h10"/></svg>
					</div>
					<h3 style="font-family:var(--om-font-heading);font-size:1.25rem;font-weight:700;color:var(--om-ink);margin-bottom:0.75rem;">
						Complete Data Ownership
					</h3>
					<p style="font-size:0.9375rem;color:var(--om-slate);line-height:1.65;margin-bottom:1.5rem;">
						Your customer lists, transaction history, and digital assets remain on your own server. No 3rd-party vendor lock-in or surprise privacy policy shifts.
					</p>
				</div>
				<div style="border-top:1px solid #F1F5F9;padding-top:1rem;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:0.8125rem;font-weight:700;color:#0B5135;">Self-hosted database</span>
					<span style="font-family:var(--om-font-mono);font-size:0.75rem;background:#F0FAF4;color:#18794E;padding:2px 8px;border-radius:4px;font-weight:600;">100% Private</span>
				</div>
			</div>

			<!-- Pillar 3: Cryptographic Delivery -->
			<div style="background:#ffffff;border:1px solid #E2E8F0;border-radius:14px;padding:2rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 14px rgba(0,0,0,0.03);transition:transform 0.2s ease, border-color 0.2s ease;">
				<div>
					<div style="width:48px;height:48px;border-radius:12px;background:#ECFDF5;display:flex;align-items:center;justify-content:center;color:#0B5135;margin-bottom:1.25rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					</div>
					<h3 style="font-family:var(--om-font-heading);font-size:1.25rem;font-weight:700;color:var(--om-ink);margin-bottom:0.75rem;">
						HMAC-Secured Digital Delivery
					</h3>
					<p style="font-size:0.9375rem;color:var(--om-slate);line-height:1.65;margin-bottom:1.5rem;">
						Distribute eBooks, code libraries, audio files, and software with tamper-proof cryptographic tokens, configurable timeouts, and attempt meters.
					</p>
				</div>
				<div style="border-top:1px solid #F1F5F9;padding-top:1rem;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:0.8125rem;font-weight:700;color:#0B5135;">Anti-piracy tokens</span>
					<span style="font-family:var(--om-font-mono);font-size:0.75rem;background:#F0FAF4;color:#18794E;padding:2px 8px;border-radius:4px;font-weight:600;">SHA-256 HMAC</span>
				</div>
			</div>

			<!-- Pillar 4: Zero SaaS Take Rate -->
			<div style="background:#ffffff;border:1px solid #E2E8F0;border-radius:14px;padding:2rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 14px rgba(0,0,0,0.03);transition:transform 0.2s ease, border-color 0.2s ease;">
				<div>
					<div style="width:48px;height:48px;border-radius:12px;background:#ECFDF5;display:flex;align-items:center;justify-content:center;color:#0B5135;margin-bottom:1.25rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					</div>
					<h3 style="font-family:var(--om-font-heading);font-size:1.25rem;font-weight:700;color:var(--om-ink);margin-bottom:0.75rem;">
						0% Platform Take Fees
					</h3>
					<p style="font-size:0.9375rem;color:var(--om-slate);line-height:1.65;margin-bottom:1.5rem;">
						Keep 100% of your earnings. No monthly subscription retainers, no checkout surcharges, and no tiered volume penalties.
					</p>
				</div>
				<div style="border-top:1px solid #F1F5F9;padding-top:1rem;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:0.8125rem;font-weight:700;color:#0B5135;">Direct gateway billing</span>
					<span style="font-family:var(--om-font-mono);font-size:0.75rem;background:#F0FAF4;color:#18794E;padding:2px 8px;border-radius:4px;font-weight:600;">0% Commission</span>
				</div>
			</div>

		</div>

	</div>
</section>
<!-- /wp:html -->
