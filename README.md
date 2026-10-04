# OmnifyWP Marketing Theme

A modern, conversion-focused WordPress Full Site Editing (FSE) block theme designed specifically to market the **OmnifyWP eCommerce** plugin.

Built according to WordPress 6.5+ FSE specifications (`theme.json` v3), this theme provides a clean, high-performance showcase of OmnifyWP’s architecture, custom SQL performance, checkout capabilities, and feature set to prospective store owners and WordPress developers.

---

## 🎨 Design System & Brand Identity

- **Palette:** Fresh green SaaS aesthetic inspired by leading modern platforms (Shopify, FluentCart, SureCart, Google Cloud/Workspace):
  - **Forest:** `#0B5135`, `#126343`, `#18794E`
  - **Emerald:** `#22A06B`, `#34D399`
  - **Mint & Surfaces:** `#A8DFBF`, `#EFF8F2`, `#F7FCF9`
  - **Typography:** `Plus Jakarta Sans` / `Inter` system stack paired with `JetBrains Mono` for developer badges and code tokens.
- **Micro-interactions:** Sticky navigation with blur backdrop, realistic HTML/CSS browser and checkout simulator mockups, accessible FAQ accordions, and focus rings.

---

## 📁 Directory & File Architecture

```text
omnify/
├── style.css                 # Theme header, CSS variables, resets, layout & UI tokens
├── theme.json                # Version 3 design token definitions (colors, fluid type, shadows)
├── functions.php             # Google Fonts, theme supports, pattern categories, asset enqueues
├── assets/
│   ├── js/
│   │   └── theme.js          # Lightweight accessible JS (mobile nav, FAQ accordion, smooth scroll)
│   └── images/
│       ├── mockup-dashboard.png
│       ├── mockup-checkout.png
│       ├── mockup-storefront.png
│       └── mockup-portal.png
├── parts/
│   ├── header.html           # Sticky header with logo, primary navigation & CTAs
│   └── footer.html           # 4-column footer with live links, GPL badge & copyright
├── patterns/
│   ├── hero-marketing.php    # High-converting SaaS hero with live checkout and dashboard simulator
│   ├── value-pillars.php     # Google-style 4-pillar technical architecture grid
│   ├── features-grid.php     # 6-card feature matrix covering catalog, downloads, analytics, orders, API
│   ├── feature-split-catalog.php   # Split layout highlighting the Product Creation Wizard
│   ├── feature-split-analytics.php # Reversed split layout highlighting the Analytics Dashboard
│   ├── workflow-steps.php    # 4-step workflow: Install -> Add Products -> Storefront -> Manage
│   ├── audience-solutions.php# Solutions for Creators, Merchants, and Developers
│   ├── faq.php               # Accessible 9-item FAQ accordion
│   └── cta-band.php          # High-impact full-width conversion banner
└── templates/
    ├── front-page.html       # Marketing homepage assembling patterns
    ├── index.html            # Blog / release notes archive layout
    ├── single.html           # Single blog post template
    ├── page.html             # Generic content template
    ├── page-features.html    # In-depth features directory
    ├── page-compare.html     # Comprehensive comparison vs WooCommerce & competitors
    ├── page-integrations.html# Ecosystem, payment gateways & server compatibility
    ├── page-docs.html        # Documentation & getting started hub
    ├── page-contact.html     # Support channels & issue tracker guidelines
    └── 404.html              # Custom 404 error template
```

---

## 📱 100% Mobile Responsive Design

- **Adaptive Mobile Drawer:** Clean slide-in side navigation menu with backdrop blur, animated hamburger-to-close toggle icon, and keyboard accessibility (`Esc` close + ARIA state attributes).
- **Responsive Fluid Typography & Spacing:** Clamped CSS typography scales down cleanly from 4K down to small 360px mobile viewports without horizontal overflow or awkward wrapping.
- **Stacked Grids & Touch-Optimized Tables:** Interactive benchmark calculators, variant builders, feature grids, and comparison matrices collapse gracefully or offer smooth touch-scrolling (`-webkit-overflow-scrolling: touch`).

---

## 🚀 1-Click Demo Content Setup & Updates

Omnify includes a built-in Demo Content Importer & Updater that allows you to configure your site to match the official live demo with zero manual configuration.

1. **Theme Activation Notice:**
   - Immediately upon activating Omnify, an admin notice will prompt you to import the official demo content with one click.
2. **Dedicated Theme Settings:**
   - Navigate to **Appearance > Demo Content** in your WordPress dashboard.
   - Click **"Import Demo Content (1-Click)"** (or **"Update / Re-import Demo Content"**).
   - What is automatically configured:
     - **12 Core Pages:** Home, Features, Compare Matrix, Integrations, Documentation, Blog, Cart, Checkout, Customer Portal, Order Tracking, Privacy Policy, and License Terms.
     - **Reading Settings:** Sets `Home` as the static front page and `Blog` as the engineering posts feed.
     - **Navigation Menus:** Creates and maps the primary header navigation (`primary`), main footer links (`footer-main`), and legal links (`footer-legal`).
     - **Engineering Articles:** Seeds 4 comprehensive technical deep dives with tags and categories.
     - **Sample eCommerce Products:** If the OmnifyWP eCommerce plugin is active, seeds starter products into the high-speed SQL engine.
   - You can re-run the importer at any time to update or sync newly released demo sections without breaking your custom modifications.

---

## 🛠️ Installation & Setup

1. Copy or clone this folder into `wp-content/themes/omnify` on your WordPress installation (or upload the `omnify-theme.zip` package via **Appearance > Themes > Add New > Upload Theme**).
2. Go to **Appearance > Themes** in your WordPress dashboard.
3. Activate **OmnifyWP Marketing**.
4. Click **Import Demo Content** in the welcome notice or visit **Appearance > Demo Content**.
5. Navigate to **Appearance > Editor** to customize page layouts, patterns, or colors using Full Site Editing.

---

## 🔗 Useful Links

- **wp.org Plugin:** [https://wordpress.org/plugins/omnifywp-ecommerce/](https://wordpress.org/plugins/omnifywp-ecommerce/)
- **Live Demo Playground:** [Launch Instant Demo](https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json)
- **Documentation:** [https://omnifywp.com/doc/](https://omnifywp.com/doc/)
- **Core Plugin Repository:** [https://github.com/omnifywp/omnifywp-ecommerce](https://github.com/omnifywp/omnifywp-ecommerce)

---

## 📄 License

GPLv2 or later.
