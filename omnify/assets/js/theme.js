/**
 * OmnifyWP Marketing Theme — theme.js
 *
 * Lightweight, accessible JS for:
 * 1. Mobile navigation toggle
 * 2. FAQ accordion
 * 3. Screenshot gallery tabs
 * 4. Light/dark theme toggle (persisted in localStorage)
 * 5. Smooth scroll for anchor links
 */
( function () {
  'use strict';

  // ─── 1. Mobile Navigation ────────────────────────────────────────────────
  const toggle   = document.querySelector( '.om-nav-toggle' );
  const nav      = document.querySelector( '.om-nav' );
  const backdrop = document.querySelector( '.om-nav-backdrop' );

  if ( toggle && nav ) {
    // Portal nav drawer & backdrop directly to body on mobile viewports
    // This completely bypasses parent sticky header, backdrop-filter, or transform stacking contexts
    function portalNavToBody() {
      if ( window.innerWidth <= 900 ) {
        if ( backdrop && backdrop.parentElement !== document.body ) {
          document.body.appendChild( backdrop );
        }
        if ( nav.parentElement !== document.body ) {
          document.body.appendChild( nav );
        }
      }
    }
    portalNavToBody();
    window.addEventListener( 'resize', portalNavToBody );

    function closeNav() {
      nav.classList.remove( 'is-open' );
      toggle.classList.remove( 'is-active' );
      if ( backdrop ) backdrop.classList.remove( 'is-open' );
      toggle.setAttribute( 'aria-expanded', 'false' );
      toggle.setAttribute( 'aria-label', 'Open menu' );
      document.body.style.overflow = '';
    }

    function openNav() {
      portalNavToBody();
      nav.classList.add( 'is-open' );
      toggle.classList.add( 'is-active' );
      if ( backdrop ) backdrop.classList.add( 'is-open' );
      toggle.setAttribute( 'aria-expanded', 'true' );
      toggle.setAttribute( 'aria-label', 'Close menu' );
      document.body.style.overflow = 'hidden';
    }

    toggle.addEventListener( 'click', function ( e ) {
      e.stopPropagation();
      const isOpen = nav.classList.contains( 'is-open' );
      if ( isOpen ) {
        closeNav();
      } else {
        openNav();
      }
    } );

    // Dedicated mobile drawer close button
    const closeBtn = nav.querySelector( '.om-nav-close-btn' );
    if ( closeBtn ) {
      closeBtn.addEventListener( 'click', function ( e ) {
        e.stopPropagation();
        closeNav();
      } );
    }

    if ( backdrop ) {
      backdrop.addEventListener( 'click', closeNav );
    }

    // Close on Escape key
    document.addEventListener( 'keydown', function ( e ) {
      if ( e.key === 'Escape' && nav.classList.contains( 'is-open' ) ) {
        closeNav();
        toggle.focus();
      }
    } );

    // Close when clicking a nav link on mobile
    nav.querySelectorAll( 'a' ).forEach( function ( link ) {
      link.addEventListener( 'click', closeNav );
    } );
  }

  // ─── 2. FAQ Accordion ────────────────────────────────────────────────────
  document.querySelectorAll( '.om-faq__question' ).forEach( function ( question ) {
    question.addEventListener( 'click', function () {
      const item     = question.closest( '.om-faq__item' );
      const answer   = item.querySelector( '.om-faq__answer' );
      const isOpen   = item.classList.contains( 'om-faq__item--open' );
      const expanded = isOpen ? 'false' : 'true';

      // Close all other open items (accordion behaviour)
      document.querySelectorAll( '.om-faq__item--open' ).forEach( function ( openItem ) {
        if ( openItem !== item ) {
          openItem.classList.remove( 'om-faq__item--open' );
          const otherQ = openItem.querySelector( '.om-faq__question' );
          const otherA = openItem.querySelector( '.om-faq__answer' );
          if ( otherQ ) otherQ.setAttribute( 'aria-expanded', 'false' );
          if ( otherA ) {
            otherA.style.maxHeight = '';
            otherA.setAttribute( 'hidden', '' );
          }
        }
      } );

      if ( ! isOpen ) {
        // Open this item
        item.classList.add( 'om-faq__item--open' );
        question.setAttribute( 'aria-expanded', 'true' );
        if ( answer ) {
          answer.removeAttribute( 'hidden' );
          // Force layout reflow before setting height for smooth transition
          const height = answer.scrollHeight;
          answer.style.maxHeight = '0px';
          requestAnimationFrame( function () {
            answer.style.maxHeight = height + 'px';
          } );
        }
      } else {
        // Close this item
        item.classList.remove( 'om-faq__item--open' );
        question.setAttribute( 'aria-expanded', 'false' );
        if ( answer ) {
          answer.style.maxHeight = '0px';
          setTimeout( function () {
            if ( ! item.classList.contains( 'om-faq__item--open' ) ) {
              answer.setAttribute( 'hidden', '' );
              answer.style.maxHeight = '';
            }
          }, 360 );
        }
      }
    } );

    // Keyboard: Space to toggle
    question.addEventListener( 'keydown', function ( e ) {
      if ( e.key === ' ' || e.key === 'Enter' ) {
        e.preventDefault();
        question.click();
      }
    } );
  } );

  // ─── 3. Screenshot Gallery Tabs ──────────────────────────────────────────
  document.querySelectorAll( '.om-gallery-tabs' ).forEach( function ( tabList ) {
    const tabs   = tabList.querySelectorAll( '.om-gallery-tab' );
    const panels = document.querySelectorAll( '.om-gallery-panel' );

    tabs.forEach( function ( tab ) {
      tab.addEventListener( 'click', function () {
        const targetId = tab.getAttribute( 'aria-controls' );

        tabs.forEach( function ( t ) {
          t.setAttribute( 'aria-selected', 'false' );
        } );
        tab.setAttribute( 'aria-selected', 'true' );

        panels.forEach( function ( panel ) {
          panel.classList.toggle( 'is-active', panel.id === targetId );
          panel.hidden = panel.id !== targetId;
        } );
      } );

      // Arrow key navigation for tabs
      tab.addEventListener( 'keydown', function ( e ) {
        const tabArr = Array.from( tabs );
        const idx    = tabArr.indexOf( tab );
        let next;

        if ( e.key === 'ArrowRight' ) {
          next = tabArr[ ( idx + 1 ) % tabArr.length ];
        } else if ( e.key === 'ArrowLeft' ) {
          next = tabArr[ ( idx - 1 + tabArr.length ) % tabArr.length ];
        }

        if ( next ) {
          e.preventDefault();
          next.focus();
          next.click();
        }
      } );
    } );

    // Init first tab active
    if ( tabs.length > 0 ) {
      tabs[ 0 ].setAttribute( 'aria-selected', 'true' );
    }
  } );

  // ─── 3b. Interactive Hero Mockup Tabs ────────────────────────────────────
  document.querySelectorAll( '.om-mockup-tab' ).forEach( function ( btn ) {
    btn.addEventListener( 'click', function () {
      const targetId = btn.getAttribute( 'data-tab-target' );
      const bar      = btn.closest( '.om-mockup-tabs-bar' );
      const frame    = btn.closest( '.om-browser-frame' );
      if ( ! bar || ! frame ) return;

      bar.querySelectorAll( '.om-mockup-tab' ).forEach( function ( tab ) {
        tab.classList.remove( 'is-active' );
        tab.style.background = 'transparent';
        tab.style.color      = '#64748B';
        tab.style.borderColor = 'transparent';
        tab.style.fontWeight  = '600';
      } );

      btn.classList.add( 'is-active' );
      btn.style.background = '#EFF8F2';
      btn.style.color      = '#0B5135';
      btn.style.borderColor = '#D4E8DC';
      btn.style.fontWeight  = '700';

      frame.querySelectorAll( '.om-mockup-panel' ).forEach( function ( panel ) {
        if ( panel.id === targetId ) {
          panel.classList.add( 'is-active' );
          panel.style.display = 'block';
        } else {
          panel.classList.remove( 'is-active' );
          panel.style.display = 'none';
        }
      } );
    } );
  } );

  // ─── 4. Theme (Dark/Light) Toggle ────────────────────────────────────────
  const themeToggle = document.getElementById( 'om-theme-toggle' );
  const STORAGE_KEY = 'omnify-theme-pref';

  function applyTheme( theme ) {
    document.documentElement.setAttribute( 'data-theme', theme );
    if ( themeToggle ) {
      const label = theme === 'dark' ? 'Switch to light mode' : 'Switch to dark mode';
      themeToggle.setAttribute( 'aria-label', label );
    }
  }

  function getPreference() {
    try {
      const stored = localStorage.getItem( STORAGE_KEY );
      if ( stored ) return stored;
    } catch ( _ ) {}
    return window.matchMedia( '(prefers-color-scheme: dark)' ).matches ? 'dark' : 'light';
  }

  applyTheme( getPreference() );

  if ( themeToggle ) {
    themeToggle.addEventListener( 'click', function () {
      const current = document.documentElement.getAttribute( 'data-theme' );
      const next    = current === 'dark' ? 'light' : 'dark';
      applyTheme( next );
      try { localStorage.setItem( STORAGE_KEY, next ); } catch ( _ ) {}
    } );
  }

  // Listen for OS preference changes
  window.matchMedia( '(prefers-color-scheme: dark)' ).addEventListener( 'change', function ( e ) {
    try {
      if ( ! localStorage.getItem( STORAGE_KEY ) ) {
        applyTheme( e.matches ? 'dark' : 'light' );
      }
    } catch ( _ ) {
      applyTheme( e.matches ? 'dark' : 'light' );
    }
  } );

  // ─── 5. Smooth scroll for on-page anchor links ───────────────────────────
  document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
    anchor.addEventListener( 'click', function ( e ) {
      const target = document.querySelector( anchor.getAttribute( 'href' ) );
      if ( target ) {
        e.preventDefault();
        target.scrollIntoView( { behavior: 'smooth', block: 'start' } );
        target.focus( { preventScroll: true } );
      }
    } );
  } );

  // ─── 6. Sticky header shadow on scroll ───────────────────────────────────
  const header = document.querySelector( '.om-site-header' );
  if ( header ) {
    const observer = new IntersectionObserver(
      function ( [ entry ] ) {
        header.classList.toggle( 'is-scrolled', ! entry.isIntersecting );
      },
      { rootMargin: '-1px 0px 0px 0px', threshold: 1 }
    );
    const sentinel = document.createElement( 'div' );
    document.body.prepend( sentinel );
    observer.observe( sentinel );
  }

  // ─── 7. Interactive Fee Savings & ROI Calculator ───────────────────────────
  const slider      = document.getElementById( 'om-calc-revenue-slider' );
  const revDisplay  = document.getElementById( 'om-calc-revenue-val' );
  const aovDisplay  = document.getElementById( 'om-calc-aov-val' );
  const costSaas    = document.getElementById( 'om-cost-saas' );
  const costWoo     = document.getElementById( 'om-cost-woo' );
  const totalSavings= document.getElementById( 'om-calc-total-savings' );
  const aovGroup    = document.getElementById( 'om-calc-aov-group' );

  if ( slider && revDisplay && totalSavings ) {
    let currentAov = 50;

    function formatCurrency( num ) {
      return '$' + Math.round( num ).toLocaleString( 'en-US' );
    }

    function calculateSavings() {
      const monthlyGmv = parseFloat( slider.value ) || 25000;
      revDisplay.textContent = formatCurrency( monthlyGmv ) + ' / mo';
      if ( aovDisplay ) aovDisplay.textContent = formatCurrency( currentAov ) + '.00';

      const ordersPerMonth = Math.max( 1, Math.round( monthlyGmv / currentAov ) );
      
      // SaaS: $79/mo base ($948/yr) + 2.9% GMV + $0.30 per tx + $150/mo app fees ($1,800/yr)
      const saasPlatformPlanYearly = 948 + 1800;
      const saasTxFeeYearly = ( ( monthlyGmv * 0.029 ) + ( ordersPerMonth * 0.30 ) ) * 12;
      const saasTotal = Math.round( saasPlatformPlanYearly + saasTxFeeYearly );

      // WooCommerce: extensions stack + high-performance hosting tier
      const wooTotal = Math.round( 1450 + ( monthlyGmv > 40000 ? 720 : 0 ) );

      if ( costSaas ) costSaas.textContent = formatCurrency( saasTotal ) + ' / yr';
      if ( costWoo )  costWoo.textContent  = formatCurrency( wooTotal ) + ' / yr';

      // OmnifyWP total annual savings
      totalSavings.textContent = formatCurrency( saasTotal );
    }

    slider.addEventListener( 'input', calculateSavings );

    if ( aovGroup ) {
      aovGroup.querySelectorAll( '.om-aov-pill' ).forEach( function ( pill ) {
        pill.addEventListener( 'click', function () {
          aovGroup.querySelectorAll( '.om-aov-pill' ).forEach( function ( p ) {
            p.classList.remove( 'is-active' );
          } );
          pill.classList.add( 'is-active' );
          currentAov = parseFloat( pill.getAttribute( 'data-aov' ) ) || 50;
          calculateSavings();
        } );
      } );
    }

    calculateSavings();
  }

  // ─── 8. Developer Quick Install Terminal & 1-Click Copy ────────────────────
  const termCodeText = document.getElementById( 'om-terminal-code-text' );
  const termCopyBtn  = document.getElementById( 'om-terminal-copy' );
  const termTabs     = document.getElementById( 'om-term-tabs' );

  const termCommands = {
    'wp-cli':   'wp plugin install omnifywp-ecommerce --activate',
    'composer': 'composer require omnifywp/omnifywp-ecommerce',
    'git':      'git clone https://github.com/omnifywp/omnifywp-ecommerce.git wp-content/plugins/omnifywp-ecommerce'
  };

  if ( termTabs && termCodeText ) {
    termTabs.querySelectorAll( '.om-term-tab' ).forEach( function ( tab ) {
      tab.addEventListener( 'click', function () {
        termTabs.querySelectorAll( '.om-term-tab' ).forEach( function ( t ) {
          t.classList.remove( 'is-active' );
        } );
        tab.classList.add( 'is-active' );
        const type = tab.getAttribute( 'data-term-type' );
        if ( termCommands[ type ] ) {
          termCodeText.textContent = termCommands[ type ];
        }
      } );
    } );
  }

  if ( termCopyBtn && termCodeText ) {
    termCopyBtn.addEventListener( 'click', function () {
      const textToCopy = termCodeText.textContent.trim();
      navigator.clipboard.writeText( textToCopy ).then( function () {
        termCopyBtn.classList.add( 'is-copied' );
        const label = termCopyBtn.querySelector( '.om-copy-label' );
        const oldLabel = label ? label.textContent : 'Copy';
        if ( label ) label.textContent = 'Copied!';
        setTimeout( function () {
          termCopyBtn.classList.remove( 'is-copied' );
          if ( label ) label.textContent = oldLabel;
        }, 2200 );
      } ).catch( function () {} );
    } );
  }

  // ─── 9. Sticky Floating Conversion Bar ─────────────────────────────────────
  const floatingBar   = document.getElementById( 'om-floating-bar' );
  const floatingClose = document.getElementById( 'om-floating-close' );

  if ( floatingBar ) {
    let isDismissed = false;
    try {
      isDismissed = sessionStorage.getItem( 'om-floating-dismissed' ) === '1';
    } catch ( _ ) {}

    if ( ! isDismissed ) {
      function checkFloatingBar() {
        // Hide completely on mobile and tablet (<= 1024px)
        if ( isDismissed || window.innerWidth <= 1024 ) {
          floatingBar.classList.remove( 'is-visible' );
          return;
        }
        if ( window.scrollY > 550 ) {
          floatingBar.classList.add( 'is-visible' );
        } else {
          floatingBar.classList.remove( 'is-visible' );
        }
      }

      window.addEventListener( 'scroll', checkFloatingBar, { passive: true } );
      window.addEventListener( 'resize', checkFloatingBar, { passive: true } );

      if ( floatingClose ) {
        floatingClose.addEventListener( 'click', function () {
          floatingBar.classList.remove( 'is-visible' );
          isDismissed = true;
          try {
            sessionStorage.setItem( 'om-floating-dismissed', '1' );
          } catch ( _ ) {}
        } );
      }
    }
  }

  // ─── 10. Interactive Features Page Controller ─────────────────────────────
  const featuresPage = document.querySelector( '.om-features-page' );
  if ( featuresPage ) {

    // 10A. Interactive Playground Tabs
    const pgTabs = featuresPage.querySelectorAll( '.om-playground-tab' );
    const pgPanels = featuresPage.querySelectorAll( '.om-playground-panel' );

    pgTabs.forEach( function ( tab ) {
      tab.addEventListener( 'click', function () {
        const targetId = tab.getAttribute( 'data-target' );
        pgTabs.forEach( function ( t ) { t.classList.remove( 'is-active' ); } );
        pgPanels.forEach( function ( p ) { p.classList.remove( 'is-active' ); } );

        tab.classList.add( 'is-active' );
        const activePanel = document.getElementById( targetId );
        if ( activePanel ) {
          activePanel.classList.add( 'is-active' );
        }
      } );
    } );

    // 10B. Tab 1: Benchmark Query Simulator
    const benchSimBtn = document.getElementById( 'om-bench-run-sim' );
    const omnifyTimeVal = document.getElementById( 'om-sim-omnify-time' );
    const wooTimeVal = document.getElementById( 'om-sim-woo-time' );

    if ( benchSimBtn && omnifyTimeVal && wooTimeVal ) {
      benchSimBtn.addEventListener( 'click', function () {
        benchSimBtn.disabled = true;
        benchSimBtn.textContent = 'Simulating query execution...';

        setTimeout( function () {
          // Generate realistic micro-variances
          const omniMs = ( 2.8 + Math.random() * 1.6 ).toFixed( 1 );
          const wooMs = ( 175 + Math.random() * 38 ).toFixed( 1 );

          omnifyTimeVal.textContent = omniMs + ' ms';
          wooTimeVal.textContent = wooMs + ' ms';

          benchSimBtn.disabled = false;
          benchSimBtn.textContent = 'Re-Run Benchmark Simulation';
        }, 420 );
      } );
    }

    // 10C. Tab 2: 14 Payment Gateways Data & Interactive Switcher
    const gatewayData = {
      stripe: {
        name: 'Stripe Elements & Digital Wallets',
        badge: 'Global Credit & Debit Cards',
        commission: '0% OmnifyWP Commission (You keep 100%)',
        currencies: '135+ Global Currencies (USD, EUR, GBP, AUD, CAD, etc.)',
        methods: 'Visa, Mastercard, Amex, Apple Pay, Google Pay, 3D Secure 2',
        refunds: 'Instant In-App Full & Partial Refunds via REST API',
        webhooks: 'Automated Webhooks with HMAC Secret Signature Validation'
      },
      paypal: {
        name: 'PayPal Commerce Platform',
        badge: 'Global Wallet & Smart Buttons',
        commission: '0% OmnifyWP Commission (Zero extra fees)',
        currencies: '200+ Countries & 25+ Global Currencies',
        methods: 'PayPal Balance, Pay in 4 Installments, Venmo, Credit Cards',
        refunds: 'Real-time In-App PayPal Capture Refunds',
        webhooks: 'Automated Webhook ID Notification Verification'
      },
      razorpay: {
        name: 'Razorpay Payment Suite',
        badge: 'India & South Asia Ecosystem',
        commission: '0% OmnifyWP Commission',
        currencies: 'INR + 90+ International Currencies',
        methods: 'UPI (GPay, PhonePe, Paytm), NetBanking (58 Banks), RuPay, Cards',
        refunds: 'Native In-App Razorpay Refund Dispatcher',
        webhooks: 'Instant Webhook Signature Verification'
      },
      mollie: {
        name: 'Mollie Payments (Europe)',
        badge: 'European Union Standard',
        commission: '0% OmnifyWP Commission',
        currencies: 'EUR, GBP, CHF, DKK, NOK, PLN, SEK',
        methods: 'iDEAL, Bancontact, Cartes Bancaires, SEPA Direct Debit, EPS, Przelewy24',
        refunds: 'Automated SEPA & Card Return Notifications',
        webhooks: 'Server-to-Server Order Status Sync'
      },
      paystack: {
        name: 'Paystack (Africa)',
        badge: 'Pan-African Payment Engine',
        commission: '0% OmnifyWP Commission',
        currencies: 'NGN, GHS, ZAR, KES, USD',
        methods: 'Debit Cards, Direct Bank Accounts, USSD Codes, Mobile Money, EFT',
        refunds: 'Integrated Paystack API Return Processor',
        webhooks: 'SHA-512 Signed Event Webhooks'
      },
      tap: {
        name: 'Tap Payments (Middle East & GCC)',
        badge: 'GCC Regional Standard',
        commission: '0% OmnifyWP Commission',
        currencies: 'KWD, SAR, AED, BHD, QMR, OMR, USD',
        methods: 'KNET, Benefit, Mada, Visa, Mastercard, American Express',
        refunds: 'Direct Regional Gateway Reversals',
        webhooks: 'Real-Time GCC Transaction Callbacks'
      },
      alipay: {
        name: 'Alipay Cross-Border',
        badge: 'East Asia & Global Travelers',
        commission: '0% OmnifyWP Commission',
        currencies: 'CNY, USD, EUR, GBP, HKD, JPY, SGD',
        methods: 'Alipay Mobile App QR Code & In-App Web Checkout',
        refunds: 'Cryptographic Alipay Private Key API Refunds',
        webhooks: 'RSA2-Signed Server Notification Callbacks'
      },
      wechat: {
        name: 'WeChat Pay (Tenpay)',
        badge: 'East Asia & Mobile Ecosystem',
        commission: '0% OmnifyWP Commission',
        currencies: 'CNY, HKD, USD, EUR, JPY, AUD',
        methods: 'WeChat Native App Pay & Dynamic QR Scan Checkout',
        refunds: 'Certificate-Signed Dual-Way Refund Handshake',
        webhooks: 'HMAC-SHA256 Encrypted Callback Verification'
      },
      sslcommerz: {
        name: 'SSLCommerz Multi-Channel',
        badge: 'South Asia / Bangladesh Gateway',
        commission: '0% OmnifyWP Commission',
        currencies: 'BDT, USD, EUR, GBP',
        methods: 'bKash, Nagad, Rocket, Local Visa/Mastercard, EMI Banking',
        refunds: 'Store Credential API Status Queries',
        webhooks: 'IPN (Instant Payment Notification) Verification'
      },
      khalti: {
        name: 'Khalti Digital Wallet',
        badge: 'Nepal Modern Payments',
        commission: '0% OmnifyWP Commission',
        currencies: 'NPR (Nepalese Rupee)',
        methods: 'Khalti Wallet, Mobile Banking, SCT Cards, ConnectIPS',
        refunds: 'Automated Wallet Transaction Lookup',
        webhooks: 'REST Callback Verification'
      },
      esewa: {
        name: 'eSewa Payment Network',
        badge: 'Nepal Pioneer Wallet',
        commission: '0% OmnifyWP Commission',
        currencies: 'NPR (Nepalese Rupee)',
        methods: 'eSewa Direct Balance & Connected Bank Transfers',
        refunds: 'Merchant Portal Settlement Reversals',
        webhooks: 'Encrypted Token Return Handshake'
      },
      bacs: {
        name: 'Bank Transfer (BACS / Wire)',
        badge: 'Offline High-Value Payments',
        commission: '0% OmnifyWP Commission',
        currencies: 'All Global Currencies',
        methods: 'Direct IBAN / SWIFT Wire with Custom Store Bank Details & Order Reference',
        refunds: 'Manual Accounting Reconciliation with Admin Order Notes',
        webhooks: 'Manual Admin Confirmation in Orders Dashboard'
      },
      cod: {
        name: 'Cash on Delivery (COD)',
        badge: 'Physical Delivery Payments',
        commission: '0% OmnifyWP Commission',
        currencies: 'All Currencies',
        methods: 'Payment on parcel arrival; configurable delivery instructions',
        refunds: 'Manual RMA Stock Return Processing',
        webhooks: 'Driver / Courier Status Update in Order Notes'
      },
      cheque: {
        name: 'Cheque / Mail-in Payment',
        badge: 'Traditional Paper Cheque',
        commission: '0% OmnifyWP Commission',
        currencies: 'All Currencies',
        methods: 'Payee Name & Mail-in Street Address with Order ID Memo',
        refunds: 'Check Cancellation Support',
        webhooks: 'Admin Deposit Confirmation'
      }
    };

    const gwBtns = featuresPage.querySelectorAll( '.om-gw-btn' );
    const gwTitle = document.getElementById( 'om-gw-active-title' );
    const gwBadge = document.getElementById( 'om-gw-active-badge' );
    const gwComm = document.getElementById( 'om-gw-active-commission' );
    const gwCurr = document.getElementById( 'om-gw-active-currencies' );
    const gwMethods = document.getElementById( 'om-gw-active-methods' );
    const gwRefunds = document.getElementById( 'om-gw-active-refunds' );
    const gwWebhooks = document.getElementById( 'om-gw-active-webhooks' );

    gwBtns.forEach( function ( btn ) {
      btn.addEventListener( 'click', function () {
        gwBtns.forEach( function ( b ) { b.classList.remove( 'is-active' ); } );
        btn.classList.add( 'is-active' );
        const key = btn.getAttribute( 'data-gateway' );
        const d = gatewayData[ key ];
        if ( d && gwTitle ) {
          gwTitle.textContent = d.name;
          if ( gwBadge ) gwBadge.textContent = d.badge;
          if ( gwComm ) gwComm.textContent = d.commission;
          if ( gwCurr ) gwCurr.textContent = d.currencies;
          if ( gwMethods ) gwMethods.textContent = d.methods;
          if ( gwRefunds ) gwRefunds.textContent = d.refunds;
          if ( gwWebhooks ) gwWebhooks.textContent = d.webhooks;
        }
      } );
    } );

    // 10D. Tab 3: HMAC Cryptographic Simulator
    const hmacFile = document.getElementById( 'om-sim-file-id' );
    const hmacEmail = document.getElementById( 'om-sim-email' );
    const hmacExpiry = document.getElementById( 'om-sim-expiry' );
    const hmacDisplay = document.getElementById( 'om-sim-hmac-sig' );
    const hmacUrlDisplay = document.getElementById( 'om-sim-full-url' );
    const hmacVerifyBtn = document.getElementById( 'om-sim-verify-btn' );
    const hmacVerifyStatus = document.getElementById( 'om-sim-verify-status' );

    function simplePseudoHmac( str ) {
      let hash = 0;
      for ( let i = 0; i < str.length; i++ ) {
        const char = str.charCodeAt( i );
        hash = ( ( hash << 5 ) - hash ) + char;
        hash = hash & hash;
      }
      const rawHex = Math.abs( hash ).toString( 16 ).padStart( 8, '0' );
      // Repeat to form a realistic 64-char hex string
      let out = '';
      for ( let j = 0; j < 8; j++ ) {
        out += ( ( ( hash * ( j + 7 ) ) & 0xFFFFFFFF ) >>> 0 ).toString( 16 ).padStart( 8, '0' );
      }
      return out.substring( 0, 64 );
    }

    function updateHmacSimulator() {
      if ( ! hmacDisplay || ! hmacUrlDisplay ) return;
      const file = hmacFile ? hmacFile.value : '402';
      const email = hmacEmail ? ( hmacEmail.value || 'customer@example.com' ) : 'customer@example.com';
      const hours = hmacExpiry ? hmacExpiry.value : '48';
      const expiryTimestamp = Math.floor( Date.now() / 1000 ) + ( parseInt( hours, 10 ) * 3600 );
      const seed = 'file=' + file + '&user=' + email + '&exp=' + expiryTimestamp + '&salt=wp_omnify_secret';
      const sig = simplePseudoHmac( seed );

      hmacDisplay.textContent = sig;
      hmacUrlDisplay.textContent = 'https://yourstore.com/?omnify_download=1&file=' + file + '&exp=' + expiryTimestamp + '&sig=' + sig.substring( 0, 24 ) + '...';
    }

    if ( hmacFile ) hmacFile.addEventListener( 'input', updateHmacSimulator );
    if ( hmacEmail ) hmacEmail.addEventListener( 'input', updateHmacSimulator );
    if ( hmacExpiry ) hmacExpiry.addEventListener( 'change', updateHmacSimulator );
    updateHmacSimulator();

    if ( hmacVerifyBtn && hmacVerifyStatus ) {
      hmacVerifyBtn.addEventListener( 'click', function () {
        hmacVerifyStatus.innerHTML = '<span style="color:#FBBF24;">● Verifying cryptographic signature & expiry...</span>';
        setTimeout( function () {
          hmacVerifyStatus.innerHTML = '<span style="color:#34D399;font-weight:700;">✓ VALID HMAC-SHA256 SIGNATURE</span> &bull; 0/5 Download attempts &bull; Token Active';
        }, 320 );
      } );
    }

    // 10E. Expandable Technical Specs on Feature Cards
    const specToggles = featuresPage.querySelectorAll( '.om-card__spec-toggle' );
    specToggles.forEach( function ( btn ) {
      btn.addEventListener( 'click', function () {
        const card = btn.closest( '.om-card' );
        if ( ! card ) return;
        const drawer = card.querySelector( '.om-card__spec-drawer' );
        if ( ! drawer ) return;

        const isOpen = drawer.classList.toggle( 'is-open' );
        btn.classList.toggle( 'is-open', isOpen );
        btn.setAttribute( 'aria-expanded', String( isOpen ) );
      } );
    } );

    // 10F. Category Filtering & Live Instant Search
    const catPills = featuresPage.querySelectorAll( '.om-cat-pill' );
    const searchInput = document.getElementById( 'om-feature-search' );
    const searchClear = document.getElementById( 'om-feature-search-clear' );
    const countBadge = document.getElementById( 'om-feature-count' );
    const emptyState = document.getElementById( 'om-features-empty' );
    const resetBtn = document.getElementById( 'om-features-reset' );
    const featureCards = featuresPage.querySelectorAll( '.om-card[data-category]' );
    const featureSections = featuresPage.querySelectorAll( '.om-section[data-pillar]' );

    let currentCategory = 'all';

    function runFeatureFilter() {
      const query = ( searchInput ? searchInput.value : '' ).trim().toLowerCase();
      let matchCount = 0;

      if ( searchClear ) {
        searchClear.style.display = query.length > 0 ? 'block' : 'none';
      }

      featureCards.forEach( function ( card ) {
        const cardCategory = card.getAttribute( 'data-category' ) || '';
        const title = ( card.querySelector( '.om-card__title' )?.textContent || '' ).toLowerCase();
        const body = ( card.querySelector( '.om-card__body' )?.textContent || '' ).toLowerCase();
        const keywords = ( card.getAttribute( 'data-keywords' ) || '' ).toLowerCase();

        const matchesCat = ( currentCategory === 'all' || cardCategory.includes( currentCategory ) );
        const matchesQuery = ( ! query || title.includes( query ) || body.includes( query ) || keywords.includes( query ) );

        const isMatch = matchesCat && matchesQuery;
        card.classList.toggle( 'is-hidden', ! isMatch );

        if ( isMatch ) matchCount++;
      } );

      // Hide empty sections
      featureSections.forEach( function ( section ) {
        const visibleCards = section.querySelectorAll( '.om-card:not(.is-hidden)' );
        section.classList.toggle( 'is-hidden', visibleCards.length === 0 );
      } );

      // Update count badge
      if ( countBadge ) {
        if ( currentCategory === 'all' && ! query ) {
          countBadge.textContent = 'Showing all ' + featureCards.length + ' features';
        } else {
          countBadge.textContent = 'Showing ' + matchCount + ' of ' + featureCards.length + ' features';
        }
      }

      // Empty state
      if ( emptyState ) {
        emptyState.classList.toggle( 'is-visible', matchCount === 0 );
      }
    }

    catPills.forEach( function ( pill ) {
      pill.addEventListener( 'click', function () {
        catPills.forEach( function ( p ) { p.classList.remove( 'is-active' ); } );
        pill.classList.add( 'is-active' );
        currentCategory = pill.getAttribute( 'data-filter' ) || 'all';
        runFeatureFilter();
      } );
    } );

    if ( searchInput ) {
      searchInput.addEventListener( 'input', runFeatureFilter );
    }

    if ( searchClear ) {
      searchClear.addEventListener( 'click', function () {
        if ( searchInput ) {
          searchInput.value = '';
          searchInput.focus();
        }
        runFeatureFilter();
      } );
    }

    if ( resetBtn ) {
      resetBtn.addEventListener( 'click', function () {
        if ( searchInput ) searchInput.value = '';
        currentCategory = 'all';
        catPills.forEach( function ( p ) {
          p.classList.toggle( 'is-active', p.getAttribute( 'data-filter' ) === 'all' );
        } );
        runFeatureFilter();
      } );
    }

  }

  // ─── 11. Interactive Performance Comparison (Home & Compare Pages) ───
  const perfContainers = document.querySelectorAll( '.om-perf-comparator' );
  if ( perfContainers.length > 0 ) {
    const perfData = {
      starter: {
        ttfb:   { omni: '18 ms', woo: '145 ms', edd: '85 ms', sure: '110 ms', wOmni: '12%', wWoo: '45%', wEdd: '28%', wSure: '35%' },
        query:  { omni: '1 query', woo: '28 queries', edd: '14 queries', sure: '6 queries + API', wOmni: '4%', wWoo: '60%', wEdd: '35%', wSure: '22%' },
        memory: { omni: '6.8 MB', woo: '32.4 MB', edd: '18.2 MB', sure: '14.0 MB', wOmni: '15%', wWoo: '68%', wEdd: '40%', wSure: '30%' },
        concurr:{ omni: '520 /min', woo: '65 /min', edd: '160 /min', sure: '120 /min', wOmni: '100%', wWoo: '14%', wEdd: '32%', wSure: '24%' }
      },
      growth: {
        ttfb:   { omni: '24 ms', woo: '285 ms', edd: '140 ms', sure: '195 ms', wOmni: '14%', wWoo: '82%', wEdd: '48%', wSure: '60%' },
        query:  { omni: '1 query', woo: '38 queries', edd: '18 queries', sure: '8 queries + API', wOmni: '4%', wWoo: '85%', wEdd: '45%', wSure: '26%' },
        memory: { omni: '8.2 MB', woo: '44.6 MB', edd: '22.4 MB', sure: '18.1 MB', wOmni: '18%', wWoo: '90%', wEdd: '50%', wSure: '40%' },
        concurr:{ omni: '420 /min', woo: '42 /min', edd: '115 /min', sure: '90 /min', wOmni: '100%', wWoo: '10%', wEdd: '28%', wSure: '22%' }
      },
      enterprise: {
        ttfb:   { omni: '32 ms', woo: '840 ms', edd: '310 ms', sure: '220 ms', wOmni: '18%', wWoo: '100%', wEdd: '65%', wSure: '52%' },
        query:  { omni: '1 query', woo: '54+ queries', edd: '26 queries', sure: '10 queries + API', wOmni: '4%', wWoo: '100%', wEdd: '58%', wSure: '30%' },
        memory: { omni: '11.4 MB', woo: '78.5 MB', edd: '36.2 MB', sure: '24.5 MB', wOmni: '22%', wWoo: '100%', wEdd: '60%', wSure: '42%' },
        concurr:{ omni: '360 /min', woo: '12 /min (Throttled)', edd: '75 /min', sure: '60 /min (Capped)', wOmni: '100%', wWoo: '4%', wEdd: '20%', wSure: '16%' }
      }
    };

    perfContainers.forEach( function ( container ) {
      const scenarioBtns = container.querySelectorAll( '.om-perf-scenario-btn' );

      function applyPerfScenario( scenarioKey ) {
        const d = perfData[ scenarioKey ];
        if ( ! d ) return;

        function setRow( prefix, dataObj ) {
          ['omni', 'woo', 'edd', 'sure'].forEach( function ( key ) {
            const valEl = container.querySelector( '#om-val-' + prefix + '-' + key ) || container.querySelector( '.om-val-' + prefix + '-' + key );
            const barEl = container.querySelector( '#om-bar-' + prefix + '-' + key ) || container.querySelector( '.om-bar-' + prefix + '-' + key );
            const capKey = key.charAt( 0 ).toUpperCase() + key.slice( 1 );
            if ( valEl && dataObj[ key ] !== undefined ) {
              valEl.textContent = dataObj[ key ];
            }
            if ( barEl && dataObj[ 'w' + capKey ] !== undefined ) {
              barEl.style.width = dataObj[ 'w' + capKey ];
            }
          } );
        }

        setRow( 'ttfb', d.ttfb );
        setRow( 'query', d.query );
        setRow( 'mem', d.memory );
        setRow( 'conc', d.concurr );
      }

      scenarioBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
          scenarioBtns.forEach( function ( b ) { b.classList.remove( 'is-active' ); } );
          btn.classList.add( 'is-active' );
          const key = btn.getAttribute( 'data-scenario' );
          applyPerfScenario( key );
        } );
      } );

      // Concurrency Benchmark Runner Button inside this container
      const runSimBtn = container.querySelector( '#om-run-perf-sim-btn' ) || container.querySelector( '.om-run-perf-sim-btn' );
      const simResultStatus = container.querySelector( '#om-perf-sim-status' ) || container.querySelector( '.om-perf-sim-status' );

      if ( runSimBtn && simResultStatus ) {
        runSimBtn.addEventListener( 'click', function () {
          runSimBtn.disabled = true;
          runSimBtn.textContent = 'Simulating 500 concurrent checkout sessions...';
          simResultStatus.innerHTML = '<span style="color:#D97706;font-weight:600;">Dispatching concurrent requests across MySQL threads...</span>';

          setTimeout( function () {
            simResultStatus.innerHTML = '<span style="color:#15803D;font-weight:700;">✓ OmnifyWP: 500/500 requests OK (21.4ms avg)</span> &bull; 0% packet loss &bull; 0 lock waits';
            runSimBtn.disabled = false;
            runSimBtn.textContent = 'Re-Run Load Simulation';
          }, 550 );
        } );
      }
    } );
  }

  // ─── 12. Compare Page TCO Calculator & Table Filters ───
  const comparePage = document.querySelector( '.om-compare-page' );
  if ( comparePage ) {

    // 11B. Interactive 3-Year TCO Savings Calculator
    const revBtns = comparePage.querySelectorAll( '.om-tco-rev-btn' );
    const tcoChecks = comparePage.querySelectorAll( '.om-tco-feature-check' );
    const savingsValEl = document.getElementById( 'om-tco-savings-val' );
    const savingsBreakdownEl = document.getElementById( 'om-tco-savings-breakdown' );

    let currentRev = 100000;

    function calculateTcoSavings() {
      if ( ! savingsValEl ) return;

      let annualAddonCost = 0;
      tcoChecks.forEach( function ( chk ) {
        if ( chk.checked ) {
          annualAddonCost += parseFloat( chk.getAttribute( 'data-woo-cost' ) ) || 0;
        }
      } );

      // EDD 2% fee or SaaS take rate avoided
      const eddFeeAvoided = currentRev * 0.02;
      const totalAnnualSavings = annualAddonCost + Math.min( eddFeeAvoided, 800 );
      const threeYearSavings = Math.round( totalAnnualSavings * 3 );

      savingsValEl.textContent = '$' + threeYearSavings.toLocaleString();
      if ( savingsBreakdownEl ) {
        savingsBreakdownEl.textContent = 'Includes ~$' + Math.round( annualAddonCost * 3 ).toLocaleString() + ' in WooCommerce paid addon license renewals + transaction fee savings.';
      }
    }

    revBtns.forEach( function ( btn ) {
      btn.addEventListener( 'click', function () {
        revBtns.forEach( function ( b ) { b.classList.remove( 'is-active' ); } );
        btn.classList.add( 'is-active' );
        currentRev = parseFloat( btn.getAttribute( 'data-revenue' ) ) || 100000;
        calculateTcoSavings();
      } );
    } );

    tcoChecks.forEach( function ( chk ) {
      chk.addEventListener( 'change', calculateTcoSavings );
    } );
    calculateTcoSavings();

    // 11C. Comparison Table Column Filter / Focus
    const compFilterBtns = comparePage.querySelectorAll( '.om-comp-filter-btn' );
    const compTable = document.getElementById( 'om-master-compare-table' );

    if ( compFilterBtns && compTable ) {
      compFilterBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
          compFilterBtns.forEach( function ( b ) { b.classList.remove( 'is-active' ); } );
          btn.classList.add( 'is-active' );
          const focus = btn.getAttribute( 'data-focus' );

          compTable.classList.remove( 'is-focused-woo', 'is-focused-edd', 'is-focused-surecart' );
          if ( focus !== 'all' ) {
            compTable.classList.add( 'is-focused-' + focus );
          }
        } );
      } );
    }

  }

  // ─── 12. Interactive Home Page Playground & Simulators ─────────────────────
  ( function initHomePageInteractions() {

    // 12A. Hero Timeframe Switcher
    const heroTfBtns = document.querySelectorAll( '.om-hero-tf-btn' );
    const heroStatRev = document.getElementById( 'om-hero-stat-revenue' );
    const heroStatOrders = document.getElementById( 'om-hero-stat-orders' );
    const heroStatDl = document.getElementById( 'om-hero-stat-downloads' );
    const heroStatAov = document.getElementById( 'om-hero-stat-aov' );
    const heroRevBadge = document.getElementById( 'om-hero-rev-badge' );
    const heroRevSub = document.getElementById( 'om-hero-rev-sub' );

    const heroTfData = {
      '30d': { rev: '$14,892.40', badge: '+18.4%', sub: 'vs last 30 days', orders: '284', dl: '1,420', aov: '$52.44' },
      '7d':  { rev: '$3,842.50',  badge: '+24.1%', sub: 'vs last 7 days',  orders: '73',  dl: '365',   aov: '$52.63' },
      'all': { rev: '$94,210.00', badge: '100% Free Core', sub: 'all time total', orders: '1,894', dl: '9,470', aov: '$49.74' }
    };

    if ( heroTfBtns.length && heroStatRev ) {
      heroTfBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
          heroTfBtns.forEach( function ( b ) {
            b.classList.remove( 'is-active' );
            b.style.background = 'transparent';
            b.style.color = '#64748B';
            b.style.fontWeight = '600';
            b.style.boxShadow = 'none';
          } );
          btn.classList.add( 'is-active' );
          btn.style.background = '#FFFFFF';
          btn.style.color = '#0B5135';
          btn.style.fontWeight = '700';
          btn.style.boxShadow = '0 1px 2px rgba(0,0,0,0.05)';

          const period = btn.getAttribute( 'data-period' ) || '30d';
          const d = heroTfData[ period ];
          if ( d ) {
            heroStatRev.textContent = d.rev;
            if ( heroRevBadge ) heroRevBadge.textContent = d.badge;
            if ( heroRevSub ) heroRevSub.textContent = d.sub;
            if ( heroStatOrders ) heroStatOrders.textContent = d.orders;
            if ( heroStatDl ) heroStatDl.textContent = d.dl;
            if ( heroStatAov ) heroStatAov.textContent = d.aov;
          }
        } );
      } );
    }

    // 12B. Live 1-Click Checkout Simulator
    const simCheckoutBtn = document.getElementById( 'om-hero-sim-btn' );
    const simFeedback = document.getElementById( 'om-hero-sim-feedback' );
    const simTitle = document.getElementById( 'om-sim-title' );
    const simDesc = document.getElementById( 'om-sim-desc' );
    const txBody = document.getElementById( 'om-hero-tx-body' );
    const ordersCountEl = document.getElementById( 'om-hero-orders-count' );
    let simulatedOrderId = 1043;

    if ( simCheckoutBtn && simFeedback ) {
      simCheckoutBtn.addEventListener( 'click', function () {
        simCheckoutBtn.disabled = true;
        simFeedback.style.display = 'block';
        simTitle.innerHTML = 'Step 1/3: Validating Cart &amp; Inventory (2.4ms)...';
        simDesc.textContent = 'Checking dedicated wp_omnify_products table...';

        setTimeout( function () {
          simTitle.innerHTML = 'Step 2/3: Dispatching Stripe Elements Webhook (8.1ms)...';
          simDesc.textContent = 'Direct merchant settlement • 0% platform take fee';
        }, 300 );

        setTimeout( function () {
          simTitle.innerHTML = 'Step 3/3: Generating Cryptographic HMAC Token (3.7ms)...';
          simDesc.textContent = 'Token sha256_e891f4 signed with 48h expiration';
        }, 650 );

        setTimeout( function () {
          simTitle.innerHTML = '✓ Order #' + simulatedOrderId + ' Completed in 14.2ms!';
          simDesc.innerHTML = '1-click checkout finalized &bull; Instant customer locker access unlocked.';

          // Prepend new row to Recent Transactions table
          if ( txBody ) {
            const tr = document.createElement( 'tr' );
            tr.setAttribute( 'data-status', 'completed' );
            tr.style.borderBottom = '1px solid #F1F5F9';
            tr.style.background = '#ECFDF5';
            tr.style.transition = 'all 0.3s ease';
            tr.innerHTML = '<td style="padding:10px;font-family:var(--om-font-mono);font-weight:700;color:#18794E;">#' + simulatedOrderId + '</td>' +
              '<td style="padding:10px;font-weight:600;">alex.live@test.io</td>' +
              '<td style="padding:10px;color:#475569;">Full-Grain Leather Wallet</td>' +
              '<td style="padding:10px;font-weight:700;">$49.00</td>' +
              '<td style="padding:10px;"><span style="background:#10B981;color:#fff;padding:3px 8px;border-radius:9999px;font-size:0.72rem;font-weight:700;">Just Paid (14ms)</span></td>';
            txBody.insertBefore( tr, txBody.firstChild );
          }

          if ( ordersCountEl ) {
            const current = parseInt( ordersCountEl.textContent, 10 ) || 18;
            ordersCountEl.textContent = String( current + 1 );
          }

          simulatedOrderId++;
          simCheckoutBtn.disabled = false;
          simCheckoutBtn.innerHTML = '<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>Test Another 1-Click Order</span>';
        }, 1100 );
      } );
    }

    // 12C. Hero Orders Filter Pills
    const orderPills = document.querySelectorAll( '.om-hero-order-pill' );
    const ordersTbody = document.getElementById( 'om-hero-orders-tbody' );

    if ( orderPills.length && ordersTbody ) {
      orderPills.forEach( function ( pill ) {
        pill.addEventListener( 'click', function () {
          orderPills.forEach( function ( p ) {
            p.classList.remove( 'is-active' );
            p.style.background = '#F8FAFC';
            p.style.color = '#64748B';
            p.style.borderColor = 'transparent';
          } );
          pill.classList.add( 'is-active' );
          pill.style.background = '#EFF8F2';
          pill.style.color = '#0B5135';
          pill.style.borderColor = '#D4E8DC';

          const filter = pill.getAttribute( 'data-filter' ) || 'all';
          const rows = ordersTbody.querySelectorAll( 'tr' );
          rows.forEach( function ( row ) {
            const status = row.getAttribute( 'data-status' ) || '';
            if ( filter === 'all' || status === filter ) {
              row.style.display = '';
            } else {
              row.style.display = 'none';
            }
          } );
        } );
      } );
    }

    // 12D. Hero Product Switcher Tabs
    const prodTypeBtns = document.querySelectorAll( '.om-hero-prod-type-btn' );
    const prodTitle = document.getElementById( 'om-hero-prod-title' );
    const prodBadge1 = document.getElementById( 'om-hero-prod-badge-1' );
    const prodBadge2 = document.getElementById( 'om-hero-prod-badge-2' );
    const prodFile = document.getElementById( 'om-hero-prod-file' );
    const prodDesc = document.getElementById( 'om-hero-prod-desc' );
    const prodPrice = document.getElementById( 'om-hero-prod-price' );

    const prodData = {
      digital: {
        title: 'WordPress Masterclass & Design Assets',
        badge1: 'Digital Download',
        badge2: 'Custom License Key',
        file: 'masterclass-complete-v2.zip (384 MB)',
        desc: 'HMAC SHA-256 Link • Max 5 downloads • 48h validity',
        price: '$89.00'
      },
      physical: {
        title: 'Pro Sensor Controller (Hardware Kit)',
        badge1: 'Physical Merchandise',
        badge2: 'USPS Carrier Tracking',
        file: 'In Stock: 420 units • Ships within 24h',
        desc: 'Automated weight calculation & shipping zone rules',
        price: '$189.00'
      },
      bundle: {
        title: 'Creator Studio Ultimate Suite',
        badge1: 'Digital + Physical Bundle',
        badge2: 'Hybrid Fulfillment',
        file: 'Physical Gear + 3x HMAC Masterclass Downloads',
        desc: '1-click order fulfillment handles warehouse & instant downloads',
        price: '$249.00'
      }
    };

    if ( prodTypeBtns.length && prodTitle ) {
      prodTypeBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
          prodTypeBtns.forEach( function ( b ) {
            b.classList.remove( 'is-active' );
            b.style.background = '#FFFFFF';
            b.style.color = '#64748B';
            b.style.borderColor = '#E2E8F0';
          } );
          btn.classList.add( 'is-active' );
          btn.style.background = '#EFF8F2';
          btn.style.color = '#0B5135';
          btn.style.borderColor = '#22A06B';

          const type = btn.getAttribute( 'data-type' ) || 'digital';
          const p = prodData[ type ];
          if ( p ) {
            prodTitle.textContent = p.title;
            if ( prodBadge1 ) prodBadge1.textContent = p.badge1;
            if ( prodBadge2 ) prodBadge2.textContent = p.badge2;
            if ( prodFile ) prodFile.textContent = p.file;
            if ( prodDesc ) prodDesc.textContent = p.desc;
            if ( prodPrice ) prodPrice.textContent = p.price;
          }
        } );
      } );
    }

    // 12E. Hero Analytics Chart Tooltip Hover
    const chartCols = document.querySelectorAll( '.om-hero-chart-col' );
    const chartDetail = document.getElementById( 'om-hero-chart-detail' );

    if ( chartCols.length && chartDetail ) {
      chartCols.forEach( function ( col ) {
        col.addEventListener( 'mouseenter', function () {
          chartCols.forEach( function ( c ) { c.classList.remove( 'is-active' ); } );
          col.classList.add( 'is-active' );
          const day = col.getAttribute( 'data-day' ) || '';
          const sales = col.getAttribute( 'data-sales' ) || '';
          const orders = col.getAttribute( 'data-orders' ) || '';
          chartDetail.textContent = '● ' + day + ': ' + sales + ' (' + orders + ')';
        } );
      } );
    }

    // 12F. Bento Card 1: Live Query Race Simulation
    const raceBtn = document.getElementById( 'om-bento-race-btn' );
    const omniBar = document.getElementById( 'om-bento-omni-bar' );
    const wooBar  = document.getElementById( 'om-bento-woo-bar' );
    const omniMs  = document.getElementById( 'om-bento-omni-ms' );
    const wooMs   = document.getElementById( 'om-bento-woo-ms' );
    const raceRes = document.getElementById( 'om-bento-race-result' );

    if ( raceBtn && omniBar && wooBar ) {
      raceBtn.addEventListener( 'click', function () {
        raceBtn.disabled = true;
        raceBtn.innerHTML = '<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>Racing...</span>';

        // Reset
        omniBar.style.width = '0%';
        wooBar.style.width  = '0%';
        if ( omniMs ) omniMs.textContent = 'Executing...';
        if ( wooMs ) wooMs.textContent = 'Querying postmeta...';
        if ( raceRes ) raceRes.style.display = 'none';

        // Omnify finishes in 120ms
        setTimeout( function () {
          omniBar.style.width = '12%';
          if ( omniMs ) omniMs.textContent = '0.08s (Sub-100ms)';
        }, 120 );

        // WooCommerce finishes later
        setTimeout( function () {
          wooBar.style.width = '92%';
          if ( wooMs ) wooMs.textContent = '1.42s (84+ queries)';
          if ( raceRes ) raceRes.style.display = 'block';
          raceBtn.disabled = false;
          raceBtn.innerHTML = '<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>Re-Run Query Race</span>';
        }, 650 );
      } );
    }

    // 12G. Bento Card 2: HMAC Token Generator
    const hmacBtn = document.getElementById( 'om-bento-token-gen-btn' );
    const tokenStr = document.getElementById( 'om-bento-token-string' );
    const tokenExp = document.getElementById( 'om-bento-token-expires' );
    const tokenBadge = document.getElementById( 'om-bento-token-badge' );

    if ( hmacBtn && tokenStr ) {
      hmacBtn.addEventListener( 'click', function () {
        const randomHex = Math.random().toString( 16 ).substring( 2, 10 ) + Math.random().toString( 16 ).substring( 2, 6 );
        tokenStr.textContent = 'token=sha256_' + randomHex;
        if ( tokenExp ) tokenExp.textContent = '47h 59m 59s';
        if ( tokenBadge ) {
          tokenBadge.textContent = 'Verified Active (5/5)';
          tokenBadge.style.background = '#DCFCE7';
          tokenBadge.style.color = '#15803D';
        }
        hmacBtn.textContent = '✓ Token Generated & Cryptographically Verified!';
        setTimeout( function () {
          hmacBtn.textContent = 'Generate & Verify New HMAC Token';
        }, 1400 );
      } );
    }

    // 12H. Bento Card 3: 1-Click Payment Method Switcher
    const payPills = document.querySelectorAll( '.om-bento-pay-pill' );
    const payDesc  = document.getElementById( 'om-bento-pay-desc' );
    const payData = {
      apple: '✓ Biometric Touch ID/Face ID 1-Click Checkout',
      gpay:  '✓ 1-Tap Google Pay with Instant Address Fill',
      card:  '✓ Inline Stripe Elements with 3D Secure 2'
    };

    if ( payPills.length && payDesc ) {
      payPills.forEach( function ( pill ) {
        pill.addEventListener( 'click', function () {
          payPills.forEach( function ( p ) {
            p.classList.remove( 'is-active' );
            p.style.background = '#F8FAFC';
            p.style.color = '#64748B';
            p.style.borderColor = 'transparent';
          } );
          pill.classList.add( 'is-active' );
          pill.style.background = '#EFF8F2';
          pill.style.color = '#0B5135';
          pill.style.borderColor = '#D4E8DC';

          const pay = pill.getAttribute( 'data-pay' ) || 'apple';
          payDesc.textContent = payData[ pay ] || '';
        } );
      } );
    }

    // 12I. Product Catalog 3-Step Wizard Simulator
    const wizardStepBtns = document.querySelectorAll( '.om-wizard-step-btn' );
    const wizardPanels   = document.querySelectorAll( '.om-wizard-panel' );
    const wizardNextBtn  = document.getElementById( 'om-wizard-next-btn' );
    const wizardPrevBtn  = document.getElementById( 'om-wizard-prev-btn' );
    const wizardStepLbl  = document.getElementById( 'om-wizard-step-label' );
    let currentWizardStep = 1;

    function setWizardStep( step ) {
      currentWizardStep = step;
      wizardStepBtns.forEach( function ( btn ) {
        const s = parseInt( btn.getAttribute( 'data-step' ), 10 );
        btn.classList.toggle( 'is-active', s === step );
        const badge = btn.querySelector( 'span' );
        if ( badge ) {
          if ( s === step ) {
            btn.style.color = '#18794E';
            badge.style.background = '#18794E';
            badge.style.color = '#FFFFFF';
          } else {
            btn.style.color = '#64748B';
            badge.style.background = '#E2E8F0';
            badge.style.color = '#64748B';
          }
        }
      } );

      wizardPanels.forEach( function ( panel, idx ) {
        panel.style.display = ( idx + 1 === step ) ? 'block' : 'none';
      } );

      if ( wizardStepLbl ) {
        wizardStepLbl.textContent = 'Step ' + step + ' of 3 • Autosaved';
      }

      if ( wizardPrevBtn ) {
        wizardPrevBtn.style.display = ( step > 1 ) ? 'block' : 'none';
      }

      if ( wizardNextBtn ) {
        if ( step === 1 ) {
          wizardNextBtn.textContent = 'Next: Pricing →';
        } else if ( step === 2 ) {
          wizardNextBtn.textContent = 'Next: Files & Keys →';
        } else {
          wizardNextBtn.textContent = 'Publish Product ✓';
        }
      }
    }

    if ( wizardStepBtns.length && wizardPanels.length ) {
      wizardStepBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
          const s = parseInt( btn.getAttribute( 'data-step' ), 10 ) || 1;
          setWizardStep( s );
        } );
      } );

      if ( wizardNextBtn ) {
        wizardNextBtn.addEventListener( 'click', function () {
          if ( currentWizardStep < 3 ) {
            setWizardStep( currentWizardStep + 1 );
          } else {
            setWizardStep( 1 );
          }
        } );
      }

      if ( wizardPrevBtn ) {
        wizardPrevBtn.addEventListener( 'click', function () {
          if ( currentWizardStep > 1 ) {
            setWizardStep( currentWizardStep - 1 );
          }
        } );
      }
    }

    // 12J. Feature Split: Analytics Timeframe Switcher
    const splitTfBtns = document.querySelectorAll( '.om-split-tf-btn' );
    const splitNetSales = document.getElementById( 'om-split-net-sales' );
    const splitNetRate  = document.getElementById( 'om-split-net-rate' );
    const splitRefund   = document.getElementById( 'om-split-refund-val' );

    const splitData = {
      '30d':   { sales: '$12,480.00', rate: '↑ 22.4% conversion', refund: '0.4%' },
      '7d':    { sales: '$3,140.00',  rate: '↑ 28.1% conversion', refund: '0.2%' },
      'today': { sales: '$480.00',    rate: '↑ 31.0% conversion', refund: '0.0%' }
    };

    if ( splitTfBtns.length && splitNetSales ) {
      splitTfBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
          splitTfBtns.forEach( function ( b ) {
            b.classList.remove( 'is-active' );
            b.style.background = '#FFFFFF';
            b.style.color = '#64748B';
            b.style.borderColor = '#E2E8F0';
            b.style.fontWeight = '600';
          } );
          btn.classList.add( 'is-active' );
          btn.style.background = '#EFF8F2';
          btn.style.color = '#0B5135';
          btn.style.borderColor = '#D4E8DC';
          btn.style.fontWeight = '700';

          const period = btn.getAttribute( 'data-period' ) || '30d';
          const sd = splitData[ period ];
          if ( sd ) {
            splitNetSales.textContent = sd.sales;
            if ( splitNetRate ) splitNetRate.textContent = sd.rate;
            if ( splitRefund ) splitRefund.textContent = sd.refund;
          }
        } );
      } );
    }

  } )();

  // ─── 13. Interactive Integrations Directory & Webhook Inspector ─────────────
  ( function initIntegrationsController() {
    const integSearchInput = document.getElementById( 'om-integ-search' );
    const integPills       = document.querySelectorAll( '.om-integ-pill' );
    const integCountBadge  = document.getElementById( 'om-integ-count-badge' );
    const integCards       = document.querySelectorAll( '.om-card' );

    if ( integCards.length ) {
      // Auto-tag integration cards based on content if not explicitly tagged
      integCards.forEach( function ( card ) {
        const text = card.textContent.toLowerCase();
        if ( ! card.getAttribute( 'data-category' ) ) {
          if ( text.includes( 'stripe' ) || text.includes( 'paypal' ) || text.includes( 'razorpay' ) || text.includes( 'mollie' ) || text.includes( 'paystack' ) || text.includes( 'tap' ) || text.includes( 'alipay' ) || text.includes( 'wechat' ) || text.includes( 'sslcommerz' ) || text.includes( 'khalti' ) || text.includes( 'bank' ) ) {
            card.setAttribute( 'data-category', 'gateways' );
          } else if ( text.includes( 'analytics' ) || text.includes( 'pixel' ) || text.includes( 'meta' ) ) {
            card.setAttribute( 'data-category', 'marketing' );
          } else if ( text.includes( 'elementor' ) || text.includes( 'builder' ) || text.includes( 'gutenberg' ) || text.includes( 'astra' ) || text.includes( 'bricks' ) ) {
            card.setAttribute( 'data-category', 'builders' );
          } else if ( text.includes( 'rest api' ) || text.includes( 'api key' ) || text.includes( 'webhook' ) || text.includes( 'csv' ) ) {
            card.setAttribute( 'data-category', 'developer' );
          }
        }
      } );

      let activeCategory = 'all';

      function filterIntegrations() {
        const query = integSearchInput ? integSearchInput.value.trim().toLowerCase() : '';
        let visibleCount = 0;

        integCards.forEach( function ( card ) {
          const cardCat = card.getAttribute( 'data-category' ) || '';
          const cardText = card.textContent.toLowerCase();

          const matchesCat = ( activeCategory === 'all' || cardCat === activeCategory );
          const matchesQuery = ( ! query || cardText.includes( query ) );

          if ( matchesCat && matchesQuery ) {
            card.style.display = '';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        } );

        if ( integCountBadge ) {
          integCountBadge.textContent = 'Showing ' + visibleCount + ' of ' + integCards.length;
        }
      }

      integPills.forEach( function ( pill ) {
        pill.addEventListener( 'click', function () {
          integPills.forEach( function ( p ) {
            p.classList.remove( 'is-active' );
            p.style.background = '#FFFFFF';
            p.style.color = '#64748B';
            p.style.borderColor = '#E2E8F0';
            p.style.fontWeight = '600';
          } );
          pill.classList.add( 'is-active' );
          pill.style.background = '#EFF8F2';
          pill.style.color = '#0B5135';
          pill.style.borderColor = '#D4E8DC';
          pill.style.fontWeight = '700';

          activeCategory = pill.getAttribute( 'data-filter' ) || 'all';
          filterIntegrations();
        } );
      } );

      if ( integSearchInput ) {
        integSearchInput.addEventListener( 'input', filterIntegrations );
      }

      // Gateway Inspector Modal Logic
      const modal = document.getElementById( 'om-gateway-modal' );
      const modalClose = document.getElementById( 'om-modal-close' );
      const modalDone  = document.getElementById( 'om-modal-done-btn' );
      const modalTestPing = document.getElementById( 'om-modal-test-ping-btn' );
      const modalSimStatus = document.getElementById( 'om-modal-sim-status' );

      if ( modal ) {
        function closeModal() {
          modal.style.display = 'none';
        }
        if ( modalClose ) modalClose.addEventListener( 'click', closeModal );
        if ( modalDone ) modalDone.addEventListener( 'click', closeModal );
        modal.addEventListener( 'click', function ( e ) {
          if ( e.target === modal ) closeModal();
        } );

        if ( modalTestPing && modalSimStatus ) {
          modalTestPing.addEventListener( 'click', function () {
            modalTestPing.disabled = true;
            modalSimStatus.innerHTML = '<span style="color:#D97706;font-weight:600;">Dispatching webhook ping payload to local endpoint...</span>';
            setTimeout( function () {
              modalSimStatus.innerHTML = '<span style="color:#15803D;font-weight:700;">✓ HTTP 200 OK:</span> Order state verified &bull; HMAC download token generated &bull; Merchant balance updated.';
              modalTestPing.disabled = false;
              modalTestPing.textContent = 'Re-Send Test Webhook';
            }, 600 );
          } );
        }
      }

    }
  } )();

  // ─── 14. Interactive Documentation Explorer & Code Switcher ─────────────────
  ( function initDocsController() {
    const docsSearch = document.getElementById( 'om-docs-search-input' );
    const docsChips  = document.querySelectorAll( '.om-docs-chip' );
    const docsCards  = document.querySelectorAll( '.wp-block-columns .wp-block-column' );

    // Docs Live Search & Topic Filter
    if ( docsCards.length ) {
      function runDocsFilter() {
        const q = docsSearch ? docsSearch.value.trim().toLowerCase() : '';
        docsCards.forEach( function ( col ) {
          const text = col.textContent.toLowerCase();
          if ( ! q || text.includes( q ) ) {
            col.style.display = '';
            col.style.opacity = '1';
          } else {
            col.style.display = 'none';
          }
        } );
      }

      if ( docsSearch ) {
        docsSearch.addEventListener( 'input', runDocsFilter );
      }

      docsChips.forEach( function ( chip ) {
        chip.addEventListener( 'click', function () {
          docsChips.forEach( function ( c ) {
            c.classList.remove( 'is-active' );
            c.style.background = '#FFFFFF';
            c.style.color = '#64748B';
            c.style.borderColor = '#E2E8F0';
            c.style.fontWeight = '600';
          } );
          chip.classList.add( 'is-active' );
          chip.style.background = '#EFF8F2';
          chip.style.color = '#0B5135';
          chip.style.borderColor = '#D4E8DC';
          chip.style.fontWeight = '700';

          const topic = chip.getAttribute( 'data-topic' ) || 'all';
          if ( topic === 'all' ) {
            if ( docsSearch ) docsSearch.value = '';
          } else {
            if ( docsSearch ) docsSearch.value = topic.replace( '-', ' ' );
          }
          runDocsFilter();
        } );
      } );
    }

    // Docs Code Explorer Tabs & Copy
    const codeTabs = document.querySelectorAll( '.om-docs-tab' );
    const codeText = document.getElementById( 'om-docs-code-text' );
    const codeLang = document.getElementById( 'om-docs-code-lang' );
    const codeDesc = document.getElementById( 'om-docs-code-desc' );
    const codeCopyBtn = document.getElementById( 'om-docs-code-copy' );

    const docsSnippets = {
      cli: {
        lang: 'bash',
        text: 'wp plugin install omnifywp-ecommerce --activate',
        desc: 'Standard WordPress command line installation and activation'
      },
      curl: {
        lang: 'curl',
        text: 'curl -X GET https://mystore.local/wp-json/omnify/v1/orders \\\n  -H "Authorization: Bearer om_live_9f81a74e2d3c"',
        desc: 'Authenticated JSON REST endpoint for listing orders'
      },
      php: {
        lang: 'php',
        text: "add_action( 'omnify_order_completed', function( $order_id, $order ) {\n    // Instant webhook or CRM sync\n    error_log( 'OmnifyWP Order #' . $order_id . ' total: ' . $order->total );\n}, 10, 2 );",
        desc: 'PHP Action hook executed immediately after direct payment settlement'
      },
      hmac: {
        lang: 'php',
        text: "add_filter( 'omnify_hmac_token_expiry', function( $seconds ) {\n    return 72 * HOUR_IN_SECONDS; // Extend download links to 72 hours\n} );",
        desc: 'Customize the cryptographic token lifespan for digital assets'
      }
    };

    if ( codeTabs.length && codeText ) {
      codeTabs.forEach( function ( tab ) {
        tab.addEventListener( 'click', function () {
          codeTabs.forEach( function ( t ) {
            t.classList.remove( 'is-active' );
            t.style.background = 'transparent';
            t.style.color = '#94A3B8';
          } );
          tab.classList.add( 'is-active' );
          tab.style.background = 'rgba(255,255,255,0.12)';
          tab.style.color = '#FFFFFF';

          const langKey = tab.getAttribute( 'data-lang' ) || 'cli';
          const snippet = docsSnippets[ langKey ];
          if ( snippet ) {
            codeText.textContent = snippet.text;
            if ( codeLang ) codeLang.textContent = snippet.lang;
            if ( codeDesc ) codeDesc.textContent = snippet.desc;
          }
        } );
      } );

      if ( codeCopyBtn ) {
        codeCopyBtn.addEventListener( 'click', function () {
          const textToCopy = codeText.textContent;
          if ( navigator.clipboard && navigator.clipboard.writeText ) {
            navigator.clipboard.writeText( textToCopy ).then( function () {
              const label = codeCopyBtn.querySelector( '.om-copy-label' );
              if ( label ) label.textContent = 'Copied!';
              setTimeout( function () {
                if ( label ) label.textContent = 'Copy';
              }, 1600 );
            } );
          }
        } );
      }
    }

  } )();

  // ─── 15. Interactive Live Storefront & Checkout Studio ─────────────────────
  ( function initStoreStudio() {
    const studioSection = document.getElementById( 'live-store-studio' );
    if ( ! studioSection ) return;

    // Currency Switcher
    const currBtns = studioSection.querySelectorAll( '.om-studio-curr-btn' );
    let activeCurrency = 'USD';
    let activeSymbol = '$';
    let activeRate = 1.0;

    // Variant Switcher
    const varBtns = studioSection.querySelectorAll( '.om-studio-var-btn' );
    let activeBasePrice = 49;
    let activeVarName = 'Digital Creator License';
    let activeVarType = 'digital';

    // Upsell & Coupon
    const upsellCheck = document.getElementById( 'om-studio-upsell-check' );
    const upsellPriceEl = document.getElementById( 'om-studio-upsell-price' );
    const couponInput = document.getElementById( 'om-studio-coupon-input' );
    const couponBtn = document.getElementById( 'om-studio-apply-coupon' );
    const couponStatus = document.getElementById( 'om-studio-coupon-status' );

    // Math outputs
    const mathSubtotal = document.getElementById( 'om-studio-math-subtotal' );
    const mathDiscountRow = document.getElementById( 'om-studio-math-discount-row' );
    const mathDiscount = document.getElementById( 'om-studio-math-discount' );
    const mathUpsellRow = document.getElementById( 'om-studio-math-upsell-row' );
    const mathUpsell = document.getElementById( 'om-studio-math-upsell' );
    const mathTotal = document.getElementById( 'om-studio-math-total' );

    // Preview outputs
    const prodTitle = document.getElementById( 'om-studio-prod-title' );
    const prodSub = document.getElementById( 'om-studio-prod-sub' );
    const prodPrice = document.getElementById( 'om-studio-prod-price' );

    // Terminal outputs
    const triggerBtn = document.getElementById( 'om-studio-trigger-checkout' );
    const logStream = document.getElementById( 'om-studio-log-stream' );
    const activeStream = document.getElementById( 'om-studio-active-stream' );
    const statusPill = document.getElementById( 'om-studio-status-pill' );
    const resetBtn = document.getElementById( 'om-studio-reset-btn' );

    let appliedDiscountPct = 0;
    let appliedDiscountFixed = 0;
    let orderNum = 1044;

    function formatMoney( amount ) {
      const converted = amount * activeRate;
      return activeSymbol + converted.toFixed( 2 );
    }

    function recalculateStudio() {
      // Base Price
      const baseFormatted = formatMoney( activeBasePrice );
      if ( prodPrice ) prodPrice.textContent = baseFormatted;
      if ( mathSubtotal ) mathSubtotal.textContent = baseFormatted;

      // Upsell
      const upsellBase = 19;
      if ( upsellPriceEl ) upsellPriceEl.textContent = formatMoney( upsellBase );
      const hasUpsell = upsellCheck && upsellCheck.checked;
      if ( mathUpsellRow ) mathUpsellRow.style.display = hasUpsell ? 'flex' : 'none';
      if ( mathUpsell ) mathUpsell.textContent = '+' + formatMoney( upsellBase );

      // Discount
      let subtotal = activeBasePrice;
      let discountAmount = 0;
      if ( appliedDiscountPct > 0 ) {
        discountAmount = ( subtotal * appliedDiscountPct ) / 100;
      } else if ( appliedDiscountFixed > 0 ) {
        discountAmount = Math.min( appliedDiscountFixed, subtotal );
      }

      if ( mathDiscountRow ) {
        mathDiscountRow.style.display = discountAmount > 0 ? 'flex' : 'none';
      }
      if ( mathDiscount ) {
        mathDiscount.textContent = '-' + formatMoney( discountAmount );
      }

      // Grand Total
      let total = Math.max( 0, subtotal - discountAmount );
      if ( hasUpsell ) {
        total += upsellBase;
      }
      if ( mathTotal ) {
        mathTotal.textContent = formatMoney( total );
      }
    }

    // Currency Switcher Event
    currBtns.forEach( function ( btn ) {
      btn.addEventListener( 'click', function () {
        currBtns.forEach( function ( b ) {
          b.classList.remove( 'is-active' );
          b.style.background = 'transparent';
          b.style.color = '#64748B';
          b.style.fontWeight = '600';
          b.style.boxShadow = 'none';
        } );
        btn.classList.add( 'is-active' );
        btn.style.background = '#FFFFFF';
        btn.style.color = '#0B5135';
        btn.style.fontWeight = '700';
        btn.style.boxShadow = '0 1px 2px rgba(0,0,0,0.05)';

        activeCurrency = btn.getAttribute( 'data-curr' ) || 'USD';
        activeSymbol   = btn.getAttribute( 'data-sym' ) || '$';
        activeRate     = parseFloat( btn.getAttribute( 'data-rate' ) ) || 1.0;
        recalculateStudio();
      } );
    } );

    // Variant Switcher Event
    varBtns.forEach( function ( btn ) {
      btn.addEventListener( 'click', function () {
        varBtns.forEach( function ( b ) {
          b.classList.remove( 'is-active' );
          b.style.background = '#FFFFFF';
          b.style.borderColor = '#E2E8F0';
          const title = b.querySelector( 'div:first-child' );
          if ( title ) title.style.color = '#475569';
        } );
        btn.classList.add( 'is-active' );
        btn.style.background = '#EFF8F2';
        btn.style.borderColor = '#22A06B';
        const activeTitle = btn.querySelector( 'div:first-child' );
        if ( activeTitle ) activeTitle.style.color = '#0B5135';

        activeBasePrice = parseFloat( btn.getAttribute( 'data-base-price' ) ) || 49;
        activeVarName   = btn.getAttribute( 'data-name' ) || 'Product';
        activeVarType   = btn.getAttribute( 'data-type' ) || 'digital';

        if ( prodTitle ) prodTitle.textContent = activeVarName;
        if ( prodSub ) {
          if ( activeVarType === 'digital' ) {
            prodSub.textContent = 'Automated HMAC Signed Token Delivery';
          } else if ( activeVarType === 'physical' ) {
            prodSub.textContent = 'Tracked Carrier Shipment • In Stock';
          } else {
            prodSub.textContent = 'Hybrid Delivery: Physical Gear + Digital Locker';
          }
        }

        recalculateStudio();
      } );
    } );

    // Upsell Toggle
    if ( upsellCheck ) {
      upsellCheck.addEventListener( 'change', recalculateStudio );
    }

    // Coupon Validation
    if ( couponBtn && couponInput ) {
      couponBtn.addEventListener( 'click', function () {
        const code = couponInput.value.trim().toUpperCase();
        if ( ! couponStatus ) return;

        if ( code === 'SPEED20' || code === 'OMNIFY20' ) {
          appliedDiscountPct = 20;
          appliedDiscountFixed = 0;
          couponStatus.style.display = 'block';
          couponStatus.style.color = '#15803D';
          couponStatus.textContent = '✓ Coupon SPEED20 applied: 20% discount granted!';
        } else if ( code === 'FREE' || code === 'SPEED100' ) {
          appliedDiscountPct = 100;
          appliedDiscountFixed = 0;
          couponStatus.style.display = 'block';
          couponStatus.style.color = '#15803D';
          couponStatus.textContent = '✓ Coupon FREE applied: 100% test store discount!';
        } else if ( code === 'ZEROFEES' ) {
          appliedDiscountPct = 0;
          appliedDiscountFixed = 15;
          couponStatus.style.display = 'block';
          couponStatus.style.color = '#15803D';
          couponStatus.textContent = '✓ Coupon ZEROFEES applied: $15 off platform fee credit!';
        } else if ( code === '' ) {
          appliedDiscountPct = 0;
          appliedDiscountFixed = 0;
          couponStatus.style.display = 'none';
        } else {
          appliedDiscountPct = 0;
          appliedDiscountFixed = 0;
          couponStatus.style.display = 'block';
          couponStatus.style.color = '#DC2626';
          couponStatus.textContent = 'Invalid promo code. Try "SPEED20" or "FREE".';
        }
        recalculateStudio();
      } );
    }

    // Checkout Flow Simulator Trigger
    if ( triggerBtn && activeStream ) {
      triggerBtn.addEventListener( 'click', function () {
        triggerBtn.disabled = true;
        if ( statusPill ) {
          statusPill.style.background = '#854D0E';
          statusPill.style.color = '#FEF08A';
          statusPill.textContent = '● PROCESSING CHECKOUT';
        }

        activeStream.innerHTML = '<div style="color:#FDE047;">[0.00ms] POST /wp-json/omnify/v1/checkout/session initiated...</div>' +
          '<div style="color:#94A3B8;">&bull; Payload: ' + activeVarName + ' (' + ( mathTotal ? mathTotal.textContent : '' ) + ')</div>';

        setTimeout( function () {
          activeStream.innerHTML += '<div style="color:#6EE7B7;">[3.42ms] Validating stock against wp_omnify_products (1 query, 0 postmeta)</div>';
        }, 220 );

        setTimeout( function () {
          activeStream.innerHTML += '<div style="color:#6EE7B7;">[7.15ms] Direct merchant settlement authorized via Stripe Elements v3</div>' +
            '<div style="color:#A7F3D0;">&bull; Platform commission take rate: $0.00 (0.0%)</div>';
        }, 480 );

        setTimeout( function () {
          const randHash = Math.random().toString( 16 ).substring( 2, 10 ) + Math.random().toString( 16 ).substring( 2, 8 );
          activeStream.innerHTML += '<div style="color:#6EE7B7;">[10.90ms] Generating SHA-256 HMAC token: sha256_' + randHash + '</div>' +
            '<div style="color:#A7F3D0;">&bull; Token lifespan: 48 hours | Max attempts: 5</div>';
        }, 750 );

        setTimeout( function () {
          activeStream.innerHTML += '<div style="color:#34D399;font-weight:700;margin-top:6px;">[13.84ms] ✓ ORDER #' + orderNum + ' CREATED SUCCESSFULLY!</div>' +
            '<div style="color:#DCFCE7;background:rgba(16,185,129,0.15);padding:8px;border-radius:6px;margin-top:8px;">' +
            'Customer Locker Access Unlocked &bull; Latency: 13.84ms &bull; Zero Postmeta Bloat' +
            '</div>';

          if ( statusPill ) {
            statusPill.style.background = '#153B26';
            statusPill.style.color = '#34D399';
            statusPill.textContent = '● ORDER #' + orderNum + ' COMPLETED (13.8ms)';
          }

          triggerBtn.disabled = false;
          triggerBtn.innerHTML = '<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>Re-Run Live Checkout Flow</span>';
          orderNum++;

          // Auto-scroll terminal to bottom
          if ( logStream ) {
            logStream.scrollTop = logStream.scrollHeight;
          }
        }, 1050 );
      } );
    }

    // Reset Terminal
    if ( resetBtn && activeStream ) {
      resetBtn.addEventListener( 'click', function () {
        activeStream.innerHTML = '<span style="color:#A7F3D0;">[Awaiting order trigger from left panel]</span>';
        if ( statusPill ) {
          statusPill.style.background = '#153B26';
          statusPill.style.color = '#34D399';
          statusPill.textContent = '● READY FOR CHECKOUT';
        }
      } );
    }

    recalculateStudio();
  } )();

  // ─── 16. Back to Top Button with Circular Scroll Progress ─────────────────
  ( function initBackToTop() {
    const bttBtn = document.getElementById( 'om-back-to-top' );
    const bttBar = document.getElementById( 'om-btt-bar' );
    if ( ! bttBtn ) return;

    const totalLength = 119.38; // 2 * PI * 19

    function updateScrollProgress() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;

      if ( scrollTop > 300 ) {
        bttBtn.classList.add( 'is-visible' );
      } else {
        bttBtn.classList.remove( 'is-visible' );
      }

      if ( bttBar && scrollHeight > 0 ) {
        const progress = Math.min( 1, Math.max( 0, scrollTop / scrollHeight ) );
        const offset = totalLength * ( 1 - progress );
        bttBar.style.strokeDashoffset = offset;
      }
    }

    window.addEventListener( 'scroll', updateScrollProgress, { passive: true } );
    updateScrollProgress();

    bttBtn.addEventListener( 'click', function () {
      window.scrollTo( {
        top: 0,
        behavior: 'smooth'
      } );
    } );
  } )();

  // ─── 17. Persona / Audience Switcher (Store Owner vs Developer) ───────────
  ( function initPersonaSwitcher() {
    const urlParams = new URLSearchParams( window.location.search );
    const paramPersona = urlParams.get( 'persona' ) || urlParams.get( 'view' );
    let currentPersona = 'user';

    if ( paramPersona === 'developer' || paramPersona === 'dev' ) {
      currentPersona = 'developer';
    } else if ( paramPersona === 'user' || paramPersona === 'merchant' || paramPersona === 'store' ) {
      currentPersona = 'user';
    } else {
      try {
        const stored = localStorage.getItem( 'om_persona' );
        if ( stored === 'developer' || stored === 'user' ) {
          currentPersona = stored;
        }
      } catch ( e ) {}
    }

    function setPersona( persona, save ) {
      if ( ! persona ) return;
      currentPersona = persona;
      document.body.setAttribute( 'data-om-persona', persona );
      if ( save !== false ) {
        try {
          localStorage.setItem( 'om_persona', persona );
        } catch ( e ) {}
      }

      // Sync all persona buttons across the page
      document.querySelectorAll( '[data-persona]' ).forEach( function ( btn ) {
        const p = btn.getAttribute( 'data-persona' );
        const isActive = ( p === persona );
        btn.classList.toggle( 'is-active', isActive );
        if ( btn.hasAttribute( 'aria-selected' ) ) {
          btn.setAttribute( 'aria-selected', isActive ? 'true' : 'false' );
        }
      } );
    }

    // Set initial persona
    setPersona( currentPersona, false );

    // Attach click listeners to all persona switcher buttons
    document.addEventListener( 'click', function ( e ) {
      const btn = e.target.closest( '[data-persona]' );
      if ( ! btn ) return;
      e.preventDefault();
      const targetPersona = btn.getAttribute( 'data-persona' );
      setPersona( targetPersona, true );

      // If user clicked persona button in header or mobile menu, smooth scroll to top
      if ( btn.classList.contains( 'om-header-persona-btn' ) || btn.classList.contains( 'om-persona-pill' ) ) {
        window.scrollTo( { top: 0, behavior: 'smooth' } );
      }
    } );
  } )();

  // ─── 18. Store Owner Customer Storefront Simulator ────────────────────────
  ( function initUserStoreSimulator() {
    const couponInput = document.getElementById( 'om-sim-coupon-field' );
    const couponBtn = document.getElementById( 'om-sim-coupon-apply' );
    const couponNotice = document.getElementById( 'om-sim-discount-notice' );
    const priceDisplay = document.getElementById( 'om-sim-price-display' );
    const placeOrderBtn = document.getElementById( 'om-sim-place-order' );
    const applePayBtn = document.getElementById( 'om-sim-btn-apple' );
    const gpayBtn = document.getElementById( 'om-sim-btn-gpay' );
    const resetBtn = document.getElementById( 'om-sim-reset-btn' );
    const successPanel = document.getElementById( 'om-sim-success-panel' );

    if ( ! placeOrderBtn ) return;

    let basePrice = 49.00;
    let discount = 9.80; // default SAVE20 is applied initially

    function updatePrice() {
      const finalPrice = Math.max( 0, basePrice - discount );
      if ( priceDisplay ) {
        priceDisplay.textContent = '$' + basePrice.toFixed( 2 );
      }
      if ( placeOrderBtn && ! placeOrderBtn.classList.contains( 'is-completed' ) ) {
        placeOrderBtn.innerHTML = '<span>Complete Purchase ($' + finalPrice.toFixed( 2 ) + ')</span> &rarr;';
      }
    }

    if ( couponBtn && couponInput ) {
      couponBtn.addEventListener( 'click', function () {
        const val = couponInput.value.trim().toUpperCase();
        if ( val === 'SAVE20' ) {
          discount = 9.80;
          if ( couponNotice ) {
            couponNotice.style.display = 'block';
            couponNotice.style.color = '#15803D';
            couponNotice.textContent = 'Coupon SAVE20 applied: -$9.80 off!';
          }
        } else if ( val === 'FREE' ) {
          discount = 49.00;
          if ( couponNotice ) {
            couponNotice.style.display = 'block';
            couponNotice.style.color = '#15803D';
            couponNotice.textContent = '100% Free VIP Access Coupon Applied!';
          }
        } else if ( val === '' ) {
          discount = 0;
          if ( couponNotice ) couponNotice.style.display = 'none';
        } else {
          discount = 0;
          if ( couponNotice ) {
            couponNotice.style.display = 'block';
            couponNotice.style.color = '#DC2626';
            couponNotice.textContent = 'Invalid promo code. Try "SAVE20"';
          }
        }
        updatePrice();
      } );
    }

    function triggerCompleteOrder( paymentMethod ) {
      if ( ! placeOrderBtn ) return;
      placeOrderBtn.disabled = true;
      placeOrderBtn.innerHTML = '<span style="display:inline-flex;align-items:center;gap:6px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>Processing with ' + paymentMethod + '...</span>';

      setTimeout( function () {
        placeOrderBtn.disabled = false;
        placeOrderBtn.classList.add( 'is-completed' );
        placeOrderBtn.innerHTML = '<span>✓ Order Placed ($' + ( basePrice - discount ).toFixed( 2 ) + ')</span>';
        placeOrderBtn.style.background = '#0B5135';

        if ( successPanel ) {
          successPanel.style.boxShadow = '0 0 0 3px #22A06B, 0 10px 30px rgba(34, 160, 107, 0.25)';
          successPanel.style.transform = 'scale(1.02)';
          successPanel.style.transition = 'all 0.3s ease';
          setTimeout( function () {
            successPanel.style.transform = 'none';
          }, 400 );
        }
      }, 450 );
    }

    if ( placeOrderBtn ) {
      placeOrderBtn.addEventListener( 'click', function () {
        triggerCompleteOrder( 'Card' );
      } );
    }

    if ( applePayBtn ) {
      applePayBtn.addEventListener( 'click', function () {
        triggerCompleteOrder( 'Pay Touch ID' );
      } );
    }

    if ( gpayBtn ) {
      gpayBtn.addEventListener( 'click', function () {
        triggerCompleteOrder( 'Google Pay' );
      } );
    }

    if ( resetBtn ) {
      resetBtn.addEventListener( 'click', function () {
        if ( placeOrderBtn ) {
          placeOrderBtn.disabled = false;
          placeOrderBtn.classList.remove( 'is-completed' );
          placeOrderBtn.style.background = '';
        }
        if ( couponInput ) couponInput.value = 'SAVE20';
        discount = 9.80;
        if ( couponNotice ) {
          couponNotice.style.display = 'block';
          couponNotice.style.color = '#15803D';
          couponNotice.textContent = 'Coupon SAVE20 applied: -$9.80 off!';
        }
        if ( successPanel ) {
          successPanel.style.boxShadow = '';
          successPanel.style.transform = '';
        }
        updatePrice();
      } );
    }

    updatePrice();
  } )();

} )();


