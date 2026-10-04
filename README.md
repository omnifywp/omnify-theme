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

## 🚀 Installation & Setup

1. Copy or clone this folder into `wp-content/themes/omnify` on your WordPress installation (or install via the `omnify-marketing.zip` release).
2. Go to **Appearance > Themes** in your WordPress dashboard.
3. Activate **OmnifyWP Marketing**.
4. Navigate to **Appearance > Editor** to customize page layouts, patterns, or colors using Full Site Editing.

---

## 🔗 Useful Links

- **WordPress.org Plugin:** [https://wordpress.org/plugins/omnifywp-ecommerce/](https://wordpress.org/plugins/omnifywp-ecommerce/)
- **Live Demo Playground:** [Launch Instant Demo](https://playground.wordpress.net/?blueprint-url=https%3A%2F%2Fraw.githubusercontent.com%2Fomnifywp%2Fomnifywp-ecommerce%2Fmain%2Fblueprint.json)
- **Documentation:** [https://omnifywp.com/doc/](https://omnifywp.com/doc/)
- **Core Plugin Repository:** [https://github.com/omnifywp/omnifywp-ecommerce](https://github.com/omnifywp/omnifywp-ecommerce)

---

## 📄 License

GPLv2 or later.
