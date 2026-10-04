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
  const toggle = document.querySelector( '.om-nav-toggle' );
  const nav    = document.querySelector( '.om-nav' );

  if ( toggle && nav ) {
    toggle.addEventListener( 'click', function () {
      const isOpen = nav.classList.toggle( 'is-open' );
      toggle.setAttribute( 'aria-expanded', String( isOpen ) );
      toggle.setAttribute( 'aria-label', isOpen ? 'Close menu' : 'Open menu' );
      document.body.style.overflow = isOpen ? 'hidden' : '';
    } );

    // Close on Escape key
    document.addEventListener( 'keydown', function ( e ) {
      if ( e.key === 'Escape' && nav.classList.contains( 'is-open' ) ) {
        nav.classList.remove( 'is-open' );
        toggle.setAttribute( 'aria-expanded', 'false' );
        document.body.style.overflow = '';
        toggle.focus();
      }
    } );

    // Close when clicking a nav link on mobile
    nav.querySelectorAll( 'a' ).forEach( function ( link ) {
      link.addEventListener( 'click', function () {
        nav.classList.remove( 'is-open' );
        toggle.setAttribute( 'aria-expanded', 'false' );
        document.body.style.overflow = '';
      } );
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

} )();
