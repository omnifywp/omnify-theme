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
    add_theme_support( 'custom-logo', [
        'height'      => 36,
        'width'       => 170,
        'flex-width'  => true,
        'flex-height' => true,
    ] );
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

/**
 * Fallback SVG Site Icon / Favicon
 */
function omnify_marketing_favicon(): void {
    if ( ! has_site_icon() ) {
        $icon_url = get_template_directory_uri() . '/assets/images/logo-icon.svg';
        echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $icon_url ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'omnify_marketing_favicon', 2 );
add_action( 'login_head', 'omnify_marketing_favicon', 2 );

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
    // Theme stylesheet (style.css with auto cache-busting)
    wp_enqueue_style(
        'omnify-marketing-style',
        get_stylesheet_uri(),
        [],
        (string) filemtime( get_stylesheet_directory() . '/style.css' )
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

/**
 * Ensure all theme patterns are dynamically registered
 */
function omnify_marketing_register_patterns(): void {
    $pattern_dir = get_template_directory() . '/patterns/';
    if ( is_dir( $pattern_dir ) ) {
        foreach ( glob( $pattern_dir . '*.php' ) as $file ) {
            $data = get_file_data( $file, [
                'title'      => 'Title',
                'slug'       => 'Slug',
                'categories' => 'Categories',
            ] );
            if ( ! empty( $data['slug'] ) && ! WP_Block_Patterns_Registry::get_instance()->is_registered( $data['slug'] ) ) {
                ob_start();
                include $file;
                $content = ob_get_clean();
                register_block_pattern( $data['slug'], [
                    'title'      => $data['title'] ?: basename( $file, '.php' ),
                    'content'    => $content,
                    'categories' => ! empty( $data['categories'] ) ? array_map( 'trim', explode( ',', $data['categories'] ) ) : [ 'omnify-features' ],
                ] );
            }
        }
    }
}
add_action( 'init', 'omnify_marketing_register_patterns', 15 );

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
 * SEO, AIO & GEO Meta Tags + JSON-LD Structured Data
 * ============================================================ */
function omnify_marketing_seo_aio_geo_head(): void {
    // 1. Robots directive optimized for Google AI Overviews & SearchGPT
    echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">' . "\n";
    echo '<meta name="geo.region" content="US-CA">' . "\n";
    echo '<meta name="geo.placename" content="San Francisco">' . "\n";
    echo '<meta name="rating" content="General">' . "\n";

    // 2. Open Graph & Twitter Cards + Schema for Single Posts
    if ( is_singular( 'post' ) ) {
        global $post;
        $title       = get_the_title( $post );
        $desc        = has_excerpt( $post ) ? get_the_excerpt( $post ) : wp_trim_words( strip_shortcodes( $post->post_content ), 28 );
        $url         = get_permalink( $post );
        $img_url     = has_post_thumbnail( $post ) ? get_the_post_thumbnail_url( $post, 'large' ) : get_template_directory_uri() . '/assets/images/mockup-dashboard.png';
        $author_name = get_the_author_meta( 'display_name', $post->post_author );
        $pub_date    = get_the_date( 'c', $post );
        $mod_date    = get_the_modified_date( 'c', $post );

        echo '<meta property="og:type" content="article">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url( $img_url ) . '">' . "\n";
        echo '<meta property="article:published_time" content="' . esc_attr( $pub_date ) . '">' . "\n";
        echo '<meta property="article:modified_time" content="' . esc_attr( $mod_date ) . '">' . "\n";
        echo '<meta property="article:author" content="' . esc_attr( $author_name ) . '">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url( $img_url ) . '">' . "\n";

        // JSON-LD for Single Blog Post (BlogPosting + BreadcrumbList)
        $categories  = get_the_category( $post->ID );
        $cat_name    = ! empty( $categories ) ? $categories[0]->name : 'Engineering';
        $cat_url     = ! empty( $categories ) ? get_category_link( $categories[0]->term_id ) : home_url( '/blog/' );
        $word_count  = str_word_count( strip_tags( $post->post_content ) );
        $read_mins   = max( 1, (int) ceil( $word_count / 200 ) );

        $schema = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                [
                    '@type'            => 'BlogPosting',
                    '@id'              => esc_url( $url ) . '#article',
                    'isPartOf'         => [
                        '@type' => 'Blog',
                        '@id'   => home_url( '/blog/#blog' ),
                        'name'  => 'OmnifyWP Engineering Blog',
                    ],
                    'headline'         => $title,
                    'description'      => $desc,
                    'inLanguage'       => get_locale(),
                    'mainEntityOfPage' => esc_url( $url ),
                    'datePublished'    => $pub_date,
                    'dateModified'     => $mod_date,
                    'articleSection'   => $cat_name,
                    'wordCount'        => $word_count,
                    'timeRequired'     => 'PT' . $read_mins . 'M',
                    'author'           => [
                        '@type'     => 'Person',
                        'name'      => $author_name,
                        'jobTitle'  => 'Senior WordPress Architect',
                        'url'       => get_author_posts_url( $post->post_author ),
                    ],
                    'publisher'        => [
                        '@type' => 'Organization',
                        'name'  => 'OmnifyWP',
                        'url'   => home_url(),
                        'logo'  => [
                            '@type' => 'ImageObject',
                            'url'   => get_template_directory_uri() . '/assets/images/mockup-dashboard.png',
                        ],
                    ],
                    'image'            => [
                        '@type' => 'ImageObject',
                        'url'   => $img_url,
                    ],
                    'speakable'        => [
                        '@type'       => 'SpeakableSpecification',
                        'cssSelector' => [ '.om-ai-summary', '.om-single-title' ],
                    ],
                ],
                [
                    '@type'           => 'BreadcrumbList',
                    '@id'             => esc_url( $url ) . '#breadcrumb',
                    'itemListElement' => [
                        [
                            '@type'    => 'ListItem',
                            'position' => 1,
                            'name'     => 'Home',
                            'item'     => home_url( '/' ),
                        ],
                        [
                            '@type'    => 'ListItem',
                            'position' => 2,
                            'name'     => 'Blog',
                            'item'     => home_url( '/blog/' ),
                        ],
                        [
                            '@type'    => 'ListItem',
                            'position' => 3,
                            'name'     => $cat_name,
                            'item'     => esc_url( $cat_url ),
                        ],
                        [
                            '@type'    => 'ListItem',
                            'position' => 4,
                            'name'     => $title,
                            'item'     => esc_url( $url ),
                        ],
                    ],
                ],
            ],
        ];

        echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    } elseif ( is_home() || is_archive() ) {
        // Archive / Blog Index Schema
        $blog_schema = [
            '@context'    => 'https://schema.org',
            '@type'       => 'CollectionPage',
            'name'        => is_archive() ? get_the_archive_title() : 'OmnifyWP Engineering & eCommerce Blog',
            'description' => 'In-depth architectural guides, conversion benchmarks, and security teardowns for modern WordPress store owners and developers.',
            'url'         => is_archive() ? get_permalink() : home_url( '/blog/' ),
            'publisher'   => [
                '@type' => 'Organization',
                'name'  => 'OmnifyWP',
                'url'   => home_url(),
            ],
        ];
        echo '<script type="application/ld+json">' . wp_json_encode( $blog_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    } elseif ( is_front_page() ) {
        $data = [
            '@context'            => 'https://schema.org',
            '@type'               => 'SoftwareApplication',
            'name'                => 'OmnifyWP eCommerce',
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem'     => 'WordPress 6.5+',
            'url'                 => home_url(),
            'description'         => 'A high-performance eCommerce plugin for WordPress with purpose-built SQL tables, digital asset delivery, and a complete store management suite.',
        ];
        echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'omnify_marketing_seo_aio_geo_head' );

/* ============================================================
 * Helper: Dynamic Reading Time
 * ============================================================ */
function omnify_reading_time_string( int $post_id = 0 ): string {
    $post = get_post( $post_id );
    if ( ! $post ) {
        return '4 min read';
    }
    $words = str_word_count( strip_tags( $post->post_content ) );
    $mins  = max( 1, (int) ceil( $words / 200 ) );
    return $mins . ' min read';
}
add_shortcode( 'omnify_reading_time', function() {
    return omnify_reading_time_string();
} );

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
