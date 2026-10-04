<?php
/**
 * OmnifyWP Marketing Theme – functions.php
 *
 * @package OmnifyWP_Marketing
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ============================================================
 * Theme Setup
 * ============================================================ */
function omnify_marketing_setup(): void {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ] );

    // Navigation menus
    register_nav_menus( [
        'primary'     => __( 'Primary Navigation',  'omnifywp-marketing' ),
        'footer-main' => __( 'Footer — Main Links', 'omnifywp-marketing' ),
        'footer-legal'=> __( 'Footer — Legal Links','omnifywp-marketing' ),
    ] );

    // Default text domain
    load_theme_textdomain( 'omnifywp-marketing', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'omnify_marketing_setup' );

/* ============================================================
 * Enqueue Google Fonts (display=swap, preconnect)
 * ============================================================ */
function omnify_marketing_google_fonts(): void {
    // Preconnect
    wp_enqueue_style(
        'omnify-preconnect-fonts',
        'https://fonts.googleapis.com',
        [],
        null
    );

    $fonts_url = add_query_arg( [
        'family'  => implode( '&family=', [
            'Plus+Jakarta+Sans:wght@400;500;600;700;800',
            'Inter:wght@400;500;600',
            'JetBrains+Mono:wght@400;600',
        ] ),
        'display' => 'swap',
    ], 'https://fonts.googleapis.com/css2' );

    wp_enqueue_style( 'omnify-google-fonts', $fonts_url, [], null );
}
add_action( 'wp_enqueue_scripts', 'omnify_marketing_google_fonts' );

/* ============================================================
 * Enqueue Theme Scripts & Styles
 * ============================================================ */
function omnify_marketing_assets(): void {
    // Theme stylesheet (style.css)
    wp_enqueue_style(
        'omnify-marketing-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get( 'Version' )
    );

    // Theme JS (navigation, FAQ accordion, screenshot gallery, theme toggle)
    wp_enqueue_script(
        'omnify-marketing-js',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        wp_get_theme()->get( 'Version' ),
        [ 'strategy' => 'defer', 'in_footer' => true ]
    );

    // Pass minimal data to JS
    wp_localize_script( 'omnify-marketing-js', 'omnifyTheme', [
        'isHome' => is_front_page(),
        'rtl'    => is_rtl() ? '1' : '0',
    ] );
}
add_action( 'wp_enqueue_scripts', 'omnify_marketing_assets' );

/* ============================================================
 * Register Block Pattern Categories
 * ============================================================ */
function omnify_marketing_pattern_categories(): void {
    register_block_pattern_category( 'omnify-hero',        [ 'label' => __( 'OmnifyWP — Hero',         'omnifywp-marketing' ) ] );
    register_block_pattern_category( 'omnify-features',    [ 'label' => __( 'OmnifyWP — Features',     'omnifywp-marketing' ) ] );
    register_block_pattern_category( 'omnify-social-proof',[ 'label' => __( 'OmnifyWP — Social Proof', 'omnifywp-marketing' ) ] );
    register_block_pattern_category( 'omnify-cta',         [ 'label' => __( 'OmnifyWP — CTA',          'omnifywp-marketing' ) ] );
    register_block_pattern_category( 'omnify-pricing',     [ 'label' => __( 'OmnifyWP — Pricing',      'omnifywp-marketing' ) ] );
    register_block_pattern_category( 'omnify-faq',         [ 'label' => __( 'OmnifyWP — FAQ',          'omnifywp-marketing' ) ] );
}
add_action( 'init', 'omnify_marketing_pattern_categories' );

/* Block patterns inside /patterns are auto-registered by WordPress Core in block themes */

/* ============================================================
 * Body Classes
 * ============================================================ */
function omnify_marketing_body_classes( array $classes ): array {
    if ( is_singular() ) {
        $classes[] = 'om-singular';
    }
    if ( is_front_page() ) {
        $classes[] = 'om-front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'omnify_marketing_body_classes' );

/* ============================================================
 * Excerpt length
 * ============================================================ */
function omnify_marketing_excerpt_length(): int {
    return 30;
}
add_filter( 'excerpt_length', 'omnify_marketing_excerpt_length', 999 );

/* ============================================================
 * Disable Block Patterns from Core that clutter the inserter
 * ============================================================ */
add_action( 'after_setup_theme', function(): void {
    remove_theme_support( 'core-block-patterns' );
} );

/* ============================================================
 * Schema: JSON-LD Organization markup on front page
 * ============================================================ */
function omnify_marketing_json_ld(): void {
    if ( ! is_front_page() ) {
        return;
    }
    $data = [
        '@context'    => 'https://schema.org',
        '@type'       => 'SoftwareApplication',
        'name'        => 'OmnifyWP eCommerce',
        'applicationCategory' => 'BusinessApplication',
        'operatingSystem'     => 'WordPress 6.5+',
        'url'                 => home_url(),
        'description'         => 'A high-performance eCommerce plugin for WordPress with purpose-built SQL tables, digital asset delivery, and a complete store management suite.',
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'omnify_marketing_json_ld' );

/* ============================================================
 * Helper: Safe screenshot URL with fallback
 * ============================================================ */
function omnify_screenshot_url( string $filename ): string {
    $plugin_screens = WP_CONTENT_DIR . '/plugins/omnifywp-ecommerce/docs/screenshots/' . $filename;
    if ( file_exists( $plugin_screens ) ) {
        return content_url( 'plugins/omnifywp-ecommerce/docs/screenshots/' . $filename );
    }
    // Fallback to theme asset images (for mockups)
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

/* ============================================================
 * Helper: Browser frame wrapper around an image
 * ============================================================ */
function omnify_browser_frame( string $img_url, string $alt, string $tab_url = 'app.omnifywp.com', bool $echo = true ): string {
    $safe_url = esc_url( $img_url );
    $safe_alt = esc_attr( $alt );
    $safe_tab = esc_html( $tab_url );
    $html = <<<HTML
<div class="om-browser-frame">
  <div class="om-browser-chrome" role="presentation" aria-hidden="true">
    <div class="om-browser-dots">
      <span class="om-browser-dot om-browser-dot--red"></span>
      <span class="om-browser-dot om-browser-dot--yellow"></span>
      <span class="om-browser-dot om-browser-dot--green"></span>
    </div>
    <div class="om-browser-bar">
      <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      {$safe_tab}
    </div>
  </div>
  <div class="om-browser-viewport">
    <img src="{$safe_url}" alt="{$safe_alt}" loading="lazy" width="1200" height="720">
  </div>
</div>
HTML;
    if ( $echo ) {
        echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        return '';
    }
    return $html;
}
