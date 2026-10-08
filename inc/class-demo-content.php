<?php
/**
 * Omnify Theme – Demo Content Importer & Updater
 *
 * Provides a 1-click demo content installation and update experience
 * for the Omnify Marketing theme.
 *
 * @package OmnifyWP_Marketing
 * @version 2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Omnify_Demo_Content {

	/**
	 * Singleton instance.
	 *
	 * @var Omnify_Demo_Content|null
	 */
	private static ?Omnify_Demo_Content $instance = null;

	/**
	 * Get singleton instance.
	 */
	public static function get_instance(): Omnify_Demo_Content {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	private function __construct() {
		add_action( 'admin_menu', [ $this, 'register_admin_page' ] );
		add_action( 'admin_notices', [ $this, 'render_activation_notice' ] );
		add_action( 'admin_post_omnify_import_demo', [ $this, 'handle_import_action' ] );
		add_action( 'admin_post_omnify_reset_demo', [ $this, 'handle_reset_action' ] );
		add_action( 'admin_post_omnify_dismiss_demo_notice', [ $this, 'handle_dismiss_notice' ] );
		add_action( 'after_switch_theme', [ $this, 'on_theme_activation' ] );
	}

	/**
	 * Hook on theme activation.
	 */
	public function on_theme_activation(): void {
		// Reset dismiss flag on fresh theme activation so new users get the prompt
		delete_option( 'omnify_demo_notice_dismissed' );
	}

	/**
	 * Register Demo Content admin page under Appearance.
	 */
	public function register_admin_page(): void {
		add_theme_page(
			__( 'Omnify Demo Content', 'omnifywp-marketing' ),
			__( 'Demo Content', 'omnifywp-marketing' ),
			'manage_options',
			'omnify-demo-content',
			[ $this, 'render_admin_page' ]
		);
	}

	/**
	 * Display dismissible admin notice if demo content hasn't been imported yet.
	 */
	public function render_activation_notice(): void {
		// Only display to administrators
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		// Don't show on our own demo content page
		$screen = get_current_screen();
		if ( $screen && 'appearance_page_omnify-demo-content' === $screen->id ) {
			return;
		}

		// Don't show if dismissed or already imported
		if ( get_option( 'omnify_demo_notice_dismissed' ) ) {
			return;
		}

		$is_imported = get_option( 'omnify_demo_content_imported_at' );
		$page_url    = admin_url( 'themes.php?page=omnify-demo-content' );
		$dismiss_url = wp_nonce_url( admin_url( 'admin-post.php?action=omnify_dismiss_demo_notice' ), 'omnify_dismiss_notice' );

		?>
		<div class="notice notice-info is-dismissible omnify-admin-notice" style="border-left-color: #126343; padding: 14px 18px; background: #f7fcf9; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
			<div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
				<div style="display: flex; align-items: center; gap: 12px;">
					<span style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #126343; border-radius: 8px; color: #fff;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
					</span>
					<div>
						<strong style="font-size: 14px; color: #063d26; display: block; margin-bottom: 2px;">
							<?php echo $is_imported ? esc_html__( 'Omnify Marketing Theme is Active', 'omnifywp-marketing' ) : esc_html__( 'Welcome to Omnify Marketing Theme!', 'omnifywp-marketing' ); ?>
						</strong>
						<span style="color: #3D5147; font-size: 13px;">
							<?php if ( $is_imported ) : ?>
								<?php esc_html_e( 'Demo content is installed. You can update or re-sync demo pages, menus, and engineering posts at any time.', 'omnifywp-marketing' ); ?>
							<?php else : ?>
								<?php esc_html_e( 'Set up your site with 1-click demo content: home layout, navigation menus, features matrix, and engineering articles.', 'omnifywp-marketing' ); ?>
							<?php endif; ?>
						</span>
					</div>
				</div>
				<div style="display: flex; align-items: center; gap: 8px;">
					<a href="<?php echo esc_url( $page_url ); ?>" class="button button-primary" style="background: #126343; border-color: #0b5135; text-shadow: none; font-weight: 600; padding: 4px 14px; height: auto;">
						<?php echo $is_imported ? esc_html__( 'Manage / Update Demo Content', 'omnifywp-marketing' ) : esc_html__( 'Import Demo Content', 'omnifywp-marketing' ); ?> &rarr;
					</a>
					<a href="<?php echo esc_url( $dismiss_url ); ?>" class="button" style="color: #64748b; border-color: #cbd5e1;">
						<?php esc_html_e( 'Dismiss', 'omnifywp-marketing' ); ?>
					</a>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Handle dismiss notice action.
	 */
	public function handle_dismiss_notice(): void {
		check_admin_referer( 'omnify_dismiss_notice' );
		if ( current_user_can( 'manage_options' ) ) {
			update_option( 'omnify_demo_notice_dismissed', 1 );
		}
		wp_safe_redirect( wp_get_referer() ? wp_get_referer() : admin_url() );
		exit;
	}

	/**
	 * Handle the import or update demo content POST action.
	 */
	public function handle_import_action(): void {
		check_admin_referer( 'omnify_import_demo_action', 'omnify_demo_nonce' );

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'You do not have permission to perform this action.', 'omnifywp-marketing' ) );
		}

		$options = [
			'import_pages'    => isset( $_POST['omnify_opt_pages'] ),
			'set_front_page'  => isset( $_POST['omnify_opt_front_page'] ),
			'import_menus'    => isset( $_POST['omnify_opt_menus'] ),
			'import_posts'    => isset( $_POST['omnify_opt_posts'] ),
			'import_products' => isset( $_POST['omnify_opt_products'] ),
		];

		$results = $this->run_import( $options );

		set_transient( 'omnify_demo_import_results', $results, 60 );
		update_option( 'omnify_demo_content_imported_at', current_time( 'mysql' ) );

		wp_safe_redirect( admin_url( 'themes.php?page=omnify-demo-content&status=success' ) );
		exit;
	}

	/**
	 * Handle the reset demo content POST action.
	 */
	public function handle_reset_action(): void {
		check_admin_referer( 'omnify_reset_demo_action', 'omnify_reset_nonce' );

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'You do not have permission to perform this action.', 'omnifywp-marketing' ) );
		}

		$results = $this->run_reset();

		set_transient( 'omnify_demo_reset_results', $results, 60 );

		wp_safe_redirect( admin_url( 'themes.php?page=omnify-demo-content&status=reset_success' ) );
		exit;
	}

	/**
	 * Reset and remove demo pages, menus, sample posts and reading configuration.
	 *
	 * @return array Summary of reset actions performed.
	 */
	public function run_reset(): array {
		$results = [
			'pages_deleted' => 0,
			'posts_deleted' => 0,
			'menus_deleted' => 0,
			'reading_reset' => false,
			'messages'      => [],
		];

		// 1. Delete demo pages
		$pages_data = $this->get_demo_pages_data();
		foreach ( array_keys( $pages_data ) as $slug ) {
			$page = get_page_by_path( $slug );
			if ( ! $page && isset( $pages_data[ $slug ]['post_title'] ) ) {
				$page = get_page_by_title( $pages_data[ $slug ]['post_title'] );
			}
			if ( $page ) {
				wp_delete_post( $page->ID, true );
				$results['pages_deleted']++;
			}
		}
		if ( $results['pages_deleted'] > 0 ) {
			$results['messages'][] = sprintf(
				/* translators: %d: count */
				__( '%d demo pages removed.', 'omnifywp-marketing' ),
				$results['pages_deleted']
			);
		}

		// 2. Reset front page reading setting
		update_option( 'show_on_front', 'posts' );
		delete_option( 'page_on_front' );
		delete_option( 'page_for_posts' );
		$results['reading_reset'] = true;
		$results['messages'][] = __( 'Homepage display reset to default latest blog posts feed.', 'omnifywp-marketing' );

		// 3. Delete demo navigation menus
		$demo_menus = [
			'Omnify Primary Menu',
			'Omnify Footer Links',
			'Omnify Legal Links',
		];
		foreach ( $demo_menus as $menu_name ) {
			$menu_obj = wp_get_nav_menu_object( $menu_name );
			if ( $menu_obj ) {
				wp_delete_nav_menu( $menu_obj->term_id );
				$results['menus_deleted']++;
			}
		}
		if ( $results['menus_deleted'] > 0 ) {
			$results['messages'][] = sprintf(
				/* translators: %d: count */
				__( '%d demo navigation menus removed.', 'omnifywp-marketing' ),
				$results['menus_deleted']
			);
		}

		// 4. Delete demo sample blog posts
		$demo_post_slugs = [
			'architecture-deep-dive-custom-sql-tables',
			'benchmarking-50000-concurrent-checkouts',
			'zero-bloat-digital-fulfillment-pipeline',
			'migrating-from-legacy-cart-systems-to-omnifywp',
		];
		foreach ( $demo_post_slugs as $slug ) {
			$post = get_page_by_path( $slug, OBJECT, 'post' );
			if ( $post ) {
				wp_delete_post( $post->ID, true );
				$results['posts_deleted']++;
			}
		}
		if ( $results['posts_deleted'] > 0 ) {
			$results['messages'][] = sprintf(
				/* translators: %d: count */
				__( '%d demo blog posts removed.', 'omnifywp-marketing' ),
				$results['posts_deleted']
			);
		}

		// 5. Clean up tracking options
		delete_option( 'omnify_demo_content_imported_at' );
		delete_option( 'omnify_demo_notice_dismissed' );

		return $results;
	}

	/**
	 * Execute the demo content import / update process.
	 *
	 * @param array $opts Selected options.
	 * @return array Summary of actions performed.
	 */
	public function run_import( array $opts = [] ): array {
		$opts = wp_parse_args( $opts, [
			'import_pages'    => true,
			'set_front_page'  => true,
			'import_menus'    => true,
			'import_posts'    => true,
			'import_products' => true,
		] );

		$results = [
			'pages_created'   => 0,
			'pages_updated'   => 0,
			'menus_configured'=> false,
			'front_configured'=> false,
			'posts_created'   => 0,
			'products_created'=> 0,
			'messages'        => [],
		];

		// 1. Pages Setup
		if ( $opts['import_pages'] ) {
			$pages_data = $this->get_demo_pages_data();
			foreach ( $pages_data as $slug => $data ) {
				$existing = get_page_by_path( $slug );
				if ( ! $existing ) {
					// Check by title in case slug differs slightly
					$existing = get_page_by_title( $data['post_title'] );
				}

				if ( $existing ) {
					// Update page content if requested or ensure correct template/status
					wp_update_post( [
						'ID'           => $existing->ID,
						'post_status'  => 'publish',
						'post_type'    => 'page',
					] );
					$results['pages_updated']++;
				} else {
					$page_id = wp_insert_post( [
						'post_name'    => $slug,
						'post_title'   => $data['post_title'],
						'post_content' => $data['post_content'],
						'post_status'  => 'publish',
						'post_type'    => 'page',
						'post_author'  => get_current_user_id() ?: 1,
					] );
					if ( ! is_wp_error( $page_id ) ) {
						$results['pages_created']++;
					}
				}
			}
			$results['messages'][] = sprintf(
				/* translators: 1: created count, 2: updated count */
				__( '%1$d demo pages created, %2$d verified/updated.', 'omnifywp-marketing' ),
				$results['pages_created'],
				$results['pages_updated']
			);
		}

		// 2. Set Front Page and Blog Page
		if ( $opts['set_front_page'] ) {
			$home_page = get_page_by_path( 'home' );
			$blog_page = get_page_by_path( 'blog' );

			if ( $home_page ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $home_page->ID );
				$results['front_configured'] = true;
			}
			if ( $blog_page ) {
				update_option( 'page_for_posts', $blog_page->ID );
			}
			if ( $results['front_configured'] ) {
				$results['messages'][] = __( 'Homepage set to "Home" and Posts page set to "Blog".', 'omnifywp-marketing' );
			}
		}

		// 3. Navigation Menus Configuration
		if ( $opts['import_menus'] ) {
			$this->configure_navigation_menus();
			$results['menus_configured'] = true;
			$results['messages'][] = __( 'Primary, Footer, and Legal navigation menus successfully created and mapped.', 'omnifywp-marketing' );
		}

		// 4. Sample Blog Posts
		if ( $opts['import_posts'] ) {
			$posts_created = $this->create_sample_blog_posts();
			$results['posts_created'] = $posts_created;
			$results['messages'][] = sprintf(
				/* translators: %d: number of posts */
				__( '%d engineering blog posts imported with categories & tags.', 'omnifywp-marketing' ),
				$posts_created
			);
		}

		// 5. eCommerce Products (if OmnifyWP is active)
		if ( $opts['import_products'] ) {
			$products_created = $this->maybe_seed_ecommerce_products();
			if ( $products_created > 0 ) {
				$results['products_created'] = $products_created;
				$results['messages'][] = sprintf(
					/* translators: %d: number of products */
					__( '%d sample store products seeded into OmnifyWP engine.', 'omnifywp-marketing' ),
					$products_created
				);
			}
		}

		return $results;
	}

	/**
	 * Demo pages dataset.
	 */
	private function get_demo_pages_data(): array {
		return [
			'home' => [
				'post_title'   => __( 'Home', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:pattern {"slug":"omnify/hero-marketing"} /-->
<!-- wp:pattern {"slug":"omnify/interactive-dashboard-showcase"} /-->
<!-- wp:pattern {"slug":"omnify/interactive-store-studio"} /-->
<!-- wp:pattern {"slug":"omnify/savings-calculator"} /-->
<!-- wp:pattern {"slug":"omnify/features-grid"} /-->
<!-- wp:pattern {"slug":"omnify/feature-split-catalog"} /-->
<!-- wp:pattern {"slug":"omnify/feature-split-analytics"} /-->
<!-- wp:pattern {"slug":"omnify/value-pillars"} /-->
<!-- wp:pattern {"slug":"omnify/workflow-steps"} /-->
<!-- wp:pattern {"slug":"omnify/audience-solutions"} /-->
<!-- wp:pattern {"slug":"omnify/faq"} /-->
<!-- wp:pattern {"slug":"omnify/quick-install"} /-->
<!-- wp:pattern {"slug":"omnify/cta-band"} /-->',
			],
			'features' => [
				'post_title'   => __( 'Features & Architecture', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:pattern {"slug":"omnify/features-grid"} /-->
<!-- wp:pattern {"slug":"omnify/feature-split-catalog"} /-->
<!-- wp:pattern {"slug":"omnify/feature-split-analytics"} /-->
<!-- wp:pattern {"slug":"omnify/value-pillars"} /-->
<!-- wp:pattern {"slug":"omnify/cta-band"} /-->',
			],
			'compare' => [
				'post_title'   => __( 'Compare with Other Platforms', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:heading {"level":1} -->
<h1>Platform Comparison: OmnifyWP vs. Traditional WordPress Carts &amp; SaaS</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p class="lead">Compare real benchmark numbers, database architecture, transaction fee overhead, and scalability bottlenecks.</p>
<!-- /wp:paragraph -->
<!-- wp:pattern {"slug":"omnify/savings-calculator"} /-->
<!-- wp:pattern {"slug":"omnify/cta-band"} /-->',
			],
			'integrations' => [
				'post_title'   => __( 'Integrations & Payment Gateways', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:heading {"level":1} -->
<h1>Integrations &amp; Payment Ecosystem</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p class="lead">OmnifyWP connects seamlessly with Stripe Elements, PayPal Vault, Amazon S3, Cloudflare R2, Webhooks, and REST APIs.</p>
<!-- /wp:paragraph -->
<!-- wp:pattern {"slug":"omnify/audience-solutions"} /-->
<!-- wp:pattern {"slug":"omnify/cta-band"} /-->',
			],
			'documentation' => [
				'post_title'   => __( 'Developer Documentation', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:heading {"level":1} -->
<h1>Developer Documentation &amp; REST API Reference</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p class="lead">Complete architecture overview, custom SQL schema specifications, webhook handlers, and CLI tooling reference.</p>
<!-- /wp:paragraph -->
<!-- wp:pattern {"slug":"omnify/quick-install"} /-->
<!-- wp:pattern {"slug":"omnify/faq"} /-->',
			],
			'blog' => [
				'post_title'   => __( 'Engineering Blog', 'omnifywp-marketing' ),
				'post_content' => '', // Standard posts page
			],
			'cart' => [
				'post_title'   => __( 'Shopping Cart', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:shortcode -->[omnify_cart]<!-- /wp:shortcode -->',
			],
			'checkout' => [
				'post_title'   => __( 'Checkout', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:shortcode -->[omnify_checkout]<!-- /wp:shortcode -->',
			],
			'customer-portal' => [
				'post_title'   => __( 'Customer Portal & Downloads', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:shortcode -->[omnify_customer_portal]<!-- /wp:shortcode -->',
			],
			'order-tracking' => [
				'post_title'   => __( 'Track Your Order', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:shortcode -->[omnify_order_tracking]<!-- /wp:shortcode -->',
			],
			'privacy-policy' => [
				'post_title'   => __( 'Privacy Policy', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:heading {"level":2} -->
<h2>Privacy Policy</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>This privacy policy describes how OmnifyWP collects and processes your personal data when using our eCommerce software platform.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Data Sovereignty &amp; Zero Tracking</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>OmnifyWP is self-hosted on your own WordPress server infrastructure. Customer personal data, payment references, and download logs remain entirely in your private MySQL database. We do not transmit tracking telemetry or telemetry cookies to third-party ad networks.</p>
<!-- /wp:paragraph -->',
			],
			'license' => [
				'post_title'   => __( 'Software License & Terms', 'omnifywp-marketing' ),
				'post_content' => '<!-- wp:heading {"level":2} -->
<h2>Software License Agreement</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>OmnifyWP is free and open-source software released under the terms of the GNU General Public License v2 (or at your option any later version).</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3>Freedom &amp; Extensibility</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>You have the freedom to run, modify, fork, inspect, and deploy the source code across unlimited client and commercial projects without vendor lock-in or recurring platform commissions.</p>
<!-- /wp:paragraph -->',
			],
		];
	}

	/**
	 * Configure Primary and Footer menus with demo links.
	 */
	private function configure_navigation_menus(): void {
		$locations = get_nav_menu_locations();

		// 1. Primary Navigation Menu
		$primary_menu_name = 'Omnify Primary Menu';
		$primary_menu = wp_get_nav_menu_object( $primary_menu_name );
		if ( ! $primary_menu ) {
			$primary_menu_id = wp_create_nav_menu( $primary_menu_name );
		} else {
			$primary_menu_id = $primary_menu->term_id;
		}

		if ( ! is_wp_error( $primary_menu_id ) ) {
			// Populate primary menu items if empty
			$existing_items = wp_get_nav_menu_items( $primary_menu_id );
			if ( empty( $existing_items ) ) {
				$nav_items = [
					[ 'title' => __( 'Home', 'omnifywp-marketing' ),         'slug' => 'home' ],
					[ 'title' => __( 'Features', 'omnifywp-marketing' ),     'slug' => 'features' ],
					[ 'title' => __( 'Compare', 'omnifywp-marketing' ),      'slug' => 'compare' ],
					[ 'title' => __( 'Integrations', 'omnifywp-marketing' ), 'slug' => 'integrations' ],
					[ 'title' => __( 'Docs', 'omnifywp-marketing' ),         'slug' => 'documentation' ],
					[ 'title' => __( 'Blog', 'omnifywp-marketing' ),         'slug' => 'blog' ],
				];

				foreach ( $nav_items as $order => $item ) {
					$page = get_page_by_path( $item['slug'] );
					$url  = $page ? get_permalink( $page->ID ) : home_url( '/' . $item['slug'] . '/' );
					wp_update_nav_menu_item( $primary_menu_id, 0, [
						'menu-item-title'   => $item['title'],
						'menu-item-url'     => $url,
						'menu-item-type'    => $page ? 'post_type' : 'custom',
						'menu-item-object'  => $page ? 'page' : 'custom',
						'menu-item-object-id'=> $page ? $page->ID : 0,
						'menu-item-status'  => 'publish',
						'menu-item-position'=> $order + 1,
					] );
				}
			}
			$locations['primary'] = (int) $primary_menu_id;
		}

		// 2. Footer Main Links Menu
		$footer_menu_name = 'Omnify Footer Links';
		$footer_menu = wp_get_nav_menu_object( $footer_menu_name );
		if ( ! $footer_menu ) {
			$footer_menu_id = wp_create_nav_menu( $footer_menu_name );
		} else {
			$footer_menu_id = $footer_menu->term_id;
		}

		if ( ! is_wp_error( $footer_menu_id ) ) {
			$existing_footer = wp_get_nav_menu_items( $footer_menu_id );
			if ( empty( $existing_footer ) ) {
				$footer_items = [
					[ 'title' => __( 'Features', 'omnifywp-marketing' ),     'slug' => 'features' ],
					[ 'title' => __( 'Compare', 'omnifywp-marketing' ),      'slug' => 'compare' ],
					[ 'title' => __( 'Integrations', 'omnifywp-marketing' ), 'slug' => 'integrations' ],
					[ 'title' => __( 'Documentation', 'omnifywp-marketing' ),'slug' => 'documentation' ],
					[ 'title' => __( 'Engineering Blog', 'omnifywp-marketing' ), 'slug' => 'blog' ],
				];
				foreach ( $footer_items as $order => $item ) {
					$page = get_page_by_path( $item['slug'] );
					$url  = $page ? get_permalink( $page->ID ) : home_url( '/' . $item['slug'] . '/' );
					wp_update_nav_menu_item( $footer_menu_id, 0, [
						'menu-item-title'   => $item['title'],
						'menu-item-url'     => $url,
						'menu-item-type'    => $page ? 'post_type' : 'custom',
						'menu-item-object'  => $page ? 'page' : 'custom',
						'menu-item-object-id'=> $page ? $page->ID : 0,
						'menu-item-status'  => 'publish',
						'menu-item-position'=> $order + 1,
					] );
				}
			}
			$locations['footer-main'] = (int) $footer_menu_id;
		}

		// 3. Footer Legal Links Menu
		$legal_menu_name = 'Omnify Legal Links';
		$legal_menu = wp_get_nav_menu_object( $legal_menu_name );
		if ( ! $legal_menu ) {
			$legal_menu_id = wp_create_nav_menu( $legal_menu_name );
		} else {
			$legal_menu_id = $legal_menu->term_id;
		}

		if ( ! is_wp_error( $legal_menu_id ) ) {
			$existing_legal = wp_get_nav_menu_items( $legal_menu_id );
			if ( empty( $existing_legal ) ) {
				$legal_items = [
					[ 'title' => __( 'Privacy Policy', 'omnifywp-marketing' ), 'slug' => 'privacy-policy' ],
					[ 'title' => __( 'License Terms', 'omnifywp-marketing' ),  'slug' => 'license' ],
					[ 'title' => __( 'Order Tracking', 'omnifywp-marketing' ), 'slug' => 'order-tracking' ],
				];
				foreach ( $legal_items as $order => $item ) {
					$page = get_page_by_path( $item['slug'] );
					$url  = $page ? get_permalink( $page->ID ) : home_url( '/' . $item['slug'] . '/' );
					wp_update_nav_menu_item( $legal_menu_id, 0, [
						'menu-item-title'   => $item['title'],
						'menu-item-url'     => $url,
						'menu-item-type'    => $page ? 'post_type' : 'custom',
						'menu-item-object'  => $page ? 'page' : 'custom',
						'menu-item-object-id'=> $page ? $page->ID : 0,
						'menu-item-status'  => 'publish',
						'menu-item-position'=> $order + 1,
					] );
				}
			}
			$locations['footer-legal'] = (int) $legal_menu_id;
		}

		set_theme_mod( 'nav_menu_locations', $locations );
	}

	/**
	 * Create rich engineering sample blog posts.
	 *
	 * @return int Number of posts created.
	 */
	private function create_sample_blog_posts(): int {
		$posts = [
			[
				'slug'     => 'architecture-deep-dive-custom-sql-tables',
				'title'    => __( 'Architecture Deep Dive: Why OmnifyWP Uses Custom SQL Tables Over wp_posts', 'omnifywp-marketing' ),
				'category' => 'Architecture',
				'tags'     => [ 'MySQL', 'Performance', 'Database', 'High Scale' ],
				'content'  => '<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Traditional WordPress eCommerce plugins rely heavily on <code>wp_posts</code> and the dreaded <code>wp_postmeta</code> key-value table. While flexible for blogging, executing high-throughput queries across millions of metadata rows inevitably causes database contention, table locks, and skyrocketing latency.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>The Postmeta Performance Bottleneck</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>In standard WordPress architectures, retrieving an order with customer billing, shipping, line items, and tax breakdowns requires dozens of self-joins against <code>wp_postmeta</code>. Under flash-sale conditions with hundreds of concurrent checkouts, MySQL query execution times jump from milliseconds to multiple seconds.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>OmnifyWP Purpose-Built SQL Schema</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>OmnifyWP replaces the EAV anti-pattern with optimized first-class relational tables designed with composite indexes and strict foreign key relationships:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li><code>wp_omnify_products</code> — Fixed-column catalog indexing for instant filtering and sub-millisecond retrieval.</li>
<li><code>wp_omnify_orders</code> — Atomic order records with customer references and payment status.</li>
<li><code>wp_omnify_order_items</code> — Denormalized product snapshot preserving pricing at purchase time.</li>
<li><code>wp_omnify_customers</code> — Dedicated customer accounts with aggregated lifetime value (LTV).</li>
<li><code>wp_omnify_product_files</code> — Secure digital asset registry with tamper-proof SHA-256 checksums.</li>
</ul>
<!-- /wp:list -->

<!-- wp:heading {"level":2} -->
<h2>Benchmark Results: 10x Throughput</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>In stress testing against a catalog of 100,000 products and 500,000 orders, OmnifyWP demonstrated an 89% reduction in SQL query count per checkout and sustained over 2,400 requests per second on standard commodity hardware.</p>
<!-- /wp:paragraph -->',
			],
			[
				'slug'     => 'benchmarking-50000-concurrent-checkouts',
				'title'    => __( 'Benchmarking 50,000 Concurrent Checkouts with 12ms Response Times', 'omnifywp-marketing' ),
				'category' => 'Performance',
				'tags'     => [ 'Benchmark', 'Stress Test', 'Cache', 'Concurrency' ],
				'content'  => '<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Can a WordPress-based eCommerce engine sustain flash-sale traffic spikes without crashing? We put OmnifyWP through an automated load test simulating 50,000 shoppers and recorded the exact metrics.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>Testing Methodology</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Using distributed k6 load testing clusters across three geographic regions, we simulated cart creations, promo code validations, and Stripe Elements checkout completions ramping from 1,000 to 50,000 concurrent sessions over a 15-minute window.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>Key Metrics Observed</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul>
<li><strong>Average API Latency:</strong> 12.4ms (p95: 28.1ms, p99: 46.8ms)</li>
<li><strong>Peak Order Throughput:</strong> 1,840 completed checkouts per minute</li>
<li><strong>Database CPU Utilization:</strong> Peaked at 38% on a 4-vCPU MySQL 8 instance</li>
<li><strong>Zero Dropped Transactions:</strong> 100% order integrity with zero deadlock errors</li>
</ul>
<!-- /wp:list -->

<!-- wp:heading {"level":2} -->
<h2>Why the Architecture Scales</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>By bypassing heavy WordPress hook overhead during checkout calculation and executing streamlined queries via prepared statements, OmnifyWP keeps memory footprint minimal (under 8MB per request).</p>
<!-- /wp:paragraph -->',
			],
			[
				'slug'     => 'zero-bloat-digital-fulfillment-pipeline',
				'title'    => __( 'The Zero-Bloat Digital Fulfillment Pipeline: Signed S3 URLs & License Generation', 'omnifywp-marketing' ),
				'category' => 'Security',
				'tags'     => [ 'Digital Downloads', 'AWS S3', 'Security', 'Fulfillment' ],
				'content'  => '<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Selling large software binaries, audio libraries, or video courses on WordPress typically creates high server bandwidth usage and security vulnerabilities with exposed file URLs. OmnifyWP solves this with an automated cloud fulfillment pipeline.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>Expiring Signed Cloud URLs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Instead of piping multi-gigabyte files through PHP workers (which ties up server processes and exhausts memory limits), OmnifyWP generates temporary, cryptographically signed pre-authenticated URLs for Amazon S3 or Cloudflare R2. Downloads stream directly from CDN edges to the customer with sub-second response times.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>Automatic Software License Key Generation</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Each digital order instantly issues unique, cryptographically verified license keys with customizable activation caps, domain binding, and instant revocation hooks accessible through the customer portal.</p>
<!-- /wp:paragraph -->',
			],
			[
				'slug'     => 'migrating-from-legacy-cart-systems-to-omnifywp',
				'title'    => __( 'Migrating from Legacy Cart Systems to OmnifyWP: Step-by-Step Blueprint', 'omnifywp-marketing' ),
				'category' => 'Engineering',
				'tags'     => [ 'Migration', 'eCommerce', 'Guide', 'REST API' ],
				'content'  => '<!-- wp:paragraph {"className":"lead"} -->
<p class="lead">Ready to upgrade from bloated legacy store plugins to a fast, clean architecture? Here is the comprehensive checklist for migrating products, orders, customers, and digital download assets seamlessly.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>Phase 1: Database Pre-Flight &amp; Schema Mapping</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>OmnifyWP provides a non-destructive migration CLI tool. It scans existing store tables, extracts SKU inventories, customer addresses, and historical sales, and batches them cleanly into dedicated OmnifyWP tables without modifying or corrupting legacy data.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2>Phase 2: Customer Account &amp; Access Transition</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Existing customer passwords and WP User accounts are fully preserved. When users log into the new Omnify Customer Portal, their previous download permissions and order histories are immediately accessible without requiring password resets.</p>
<!-- /wp:paragraph -->',
			],
		];

		$created_count = 0;

		foreach ( $posts as $post_info ) {
			$existing = get_page_by_path( $post_info['slug'], OBJECT, 'post' );
			if ( $existing ) {
				continue;
			}

			// Ensure category exists
			$term = term_exists( $post_info['category'], 'category' );
			if ( ! $term ) {
				$term = wp_insert_term( $post_info['category'], 'category' );
			}
			$cat_id = is_array( $term ) ? (int) $term['term_id'] : (int) $term;

			$post_id = wp_insert_post( [
				'post_name'    => $post_info['slug'],
				'post_title'   => $post_info['title'],
				'post_content' => $post_info['content'],
				'post_status'  => 'publish',
				'post_type'    => 'post',
				'post_category'=> [ $cat_id ],
				'tags_input'   => $post_info['tags'],
				'post_author'  => get_current_user_id() ?: 1,
			] );

			if ( ! is_wp_error( $post_id ) ) {
				$created_count++;
			}
		}

		return $created_count;
	}

	/**
	 * Seed sample eCommerce products if OmnifyWP plugin is active.
	 *
	 * @return int Number of products seeded.
	 */
	private function maybe_seed_ecommerce_products(): int {
		global $wpdb;
		$table_name = $wpdb->prefix . 'omnify_products';

		// Verify table exists
		$table_exists = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $table_name ) );
		if ( ! $table_exists ) {
			return 0;
		}

		// Check if products already exist
		$existing_count = (int) $wpdb->get_var( "SELECT COUNT(*) FROM {$table_name}" );
		if ( $existing_count > 0 ) {
			return 0;
		}

		$sample_products = [
			[
				'name'         => 'OmnifyWP Developer Pro License',
				'slug'         => 'omnifywp-developer-pro-license',
				'sku'          => 'OM-DEV-001',
				'price'        => 149.00,
				'regular_price'=> 199.00,
				'sale_price'   => 149.00,
				'product_type' => 'digital',
				'status'       => 'publish',
				'stock_status' => 'instock',
				'short_desc'   => 'Single site production license with 1 year of priority engineering support and instant automatic cloud updates.',
				'description'  => 'Empower your online business with high-throughput architecture, custom database indexing, and streamlined checkout.',
			],
			[
				'name'         => 'Cloud Storage & S3 Auto-Sync Addon',
				'slug'         => 'cloud-storage-s3-auto-sync-addon',
				'sku'          => 'OM-ADD-002',
				'price'        => 49.00,
				'regular_price'=> 49.00,
				'sale_price'   => null,
				'product_type' => 'digital',
				'status'       => 'publish',
				'stock_status' => 'instock',
				'short_desc'   => 'Automated sync of digital products directly to Amazon S3 and Cloudflare R2 storage buckets.',
				'description'  => 'Zero-bloat digital fulfillment pipeline with secure, expiring signed download URLs.',
			],
			[
				'name'         => 'Agency Unlimited Lifetime Bundle',
				'slug'         => 'agency-unlimited-lifetime-bundle',
				'sku'          => 'OM-AGC-003',
				'price'        => 499.00,
				'regular_price'=> 699.00,
				'sale_price'   => 499.00,
				'product_type' => 'digital',
				'status'       => 'publish',
				'stock_status' => 'instock',
				'short_desc'   => 'Deploy across unlimited client client stores with white-label customer portal and priority SLA.',
				'description'  => 'The ultimate toolkit for agencies and eCommerce developers building next-generation WordPress stores.',
			],
			[
				'name'         => 'Omnify Store Design System & UI Kit',
				'slug'         => 'omnify-store-design-system-kit',
				'sku'          => 'OM-DSN-004',
				'price'        => 79.00,
				'regular_price'=> 99.00,
				'sale_price'   => 79.00,
				'product_type' => 'digital',
				'status'       => 'publish',
				'stock_status' => 'instock',
				'short_desc'   => 'Over 40 high-converting block patterns, Figma tokens, and interactive conversion components.',
				'description'  => 'Modern, mobile-responsive layout blocks tailored specifically for high-conversion eCommerce websites.',
			],
		];

		$inserted = 0;
		$now = current_time( 'mysql' );

		foreach ( $sample_products as $prod ) {
			$res = $wpdb->insert(
				$table_name,
				[
					'name'          => $prod['name'],
					'slug'          => $prod['slug'],
					'sku'           => $prod['sku'],
					'price'         => $prod['price'],
					'regular_price' => $prod['regular_price'],
					'sale_price'    => $prod['sale_price'],
					'product_type'  => $prod['product_type'],
					'status'        => $prod['status'],
					'stock_status'  => $prod['stock_status'],
					'short_desc'    => $prod['short_desc'],
					'description'   => $prod['description'],
					'created_at'    => $now,
					'updated_at'    => $now,
				],
				[ '%s', '%s', '%s', '%f', '%f', '%f', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ]
			);
			if ( false !== $res ) {
				$inserted++;
			}
		}

		return $inserted;
	}

	/**
	 * Render the Demo Content administration page.
	 */
	public function render_admin_page(): void {
		$imported_at = get_option( 'omnify_demo_content_imported_at' );
		$results     = get_transient( 'omnify_demo_import_results' );
		if ( $results ) {
			delete_transient( 'omnify_demo_import_results' );
		}

		// Calculate current site status metrics
		$pages_count  = count( get_pages() );
		$posts_count  = (int) wp_count_posts()->publish;
		$front_page_id= (int) get_option( 'page_on_front' );
		$is_front_set = ( 'page' === get_option( 'show_on_front' ) && $front_page_id > 0 );
		$menus_count  = count( wp_get_nav_menus() );
		$plugin_active= is_plugin_active( 'omnifywp-ecommerce/omnifywp-ecommerce.php' ) || class_exists( '\Omnify\eCommerce\Omnify_eCommerce' );

		?>
		<div class="wrap omnify-demo-wrap" style="max-width: 1060px; margin-top: 24px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;">
			
			<!-- Header Banner -->
			<div style="background: linear-gradient(135deg, #063d26 0%, #126343 100%); color: #ffffff; padding: 32px 36px; border-radius: 12px; margin-bottom: 24px; box-shadow: 0 4px 14px rgba(6,61,38,0.15); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
				<div style="max-width: 600px;">
					<div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
						<span style="background: rgba(255,255,255,0.18); color: #34d399; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; padding: 4px 10px; border-radius: 999px;">
							<?php esc_html_e( 'Official Marketing Theme', 'omnifywp-marketing' ); ?>
						</span>
						<?php if ( $imported_at ) : ?>
							<span style="background: rgba(52,211,153,0.2); color: #a8dfbf; font-size: 11px; font-weight: 600; padding: 4px 10px; border-radius: 999px;">
								&#10003; <?php esc_html_e( 'Demo Installed', 'omnifywp-marketing' ); ?>
							</span>
						<?php endif; ?>
					</div>
					<h1 style="color: #ffffff; margin: 0 0 10px 0; font-size: 28px; font-weight: 800; letter-spacing: -0.02em;">
						<?php esc_html_e( 'OmnifyWP Demo Content Setup &amp; Updates', 'omnifywp-marketing' ); ?>
					</h1>
					<p style="color: #a8dfbf; margin: 0; font-size: 15px; line-height: 1.5;">
						<?php esc_html_e( 'One-click setup for pages, primary menus, custom template sections, and engineering articles. Keep your site synchronized with the latest theme showcase at any time.', 'omnifywp-marketing' ); ?>
					</p>
				</div>
				<div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="button" style="background: rgba(255,255,255,0.15); color: #ffffff; border: 1px solid rgba(255,255,255,0.3); font-weight: 600; padding: 8px 18px; height: auto; text-shadow: none; border-radius: 6px;">
						<?php esc_html_e( 'Preview Live Site', 'omnifywp-marketing' ); ?> &UpperRightArrow;
					</a>
				</div>
			</div>

			<!-- Success / Status Flash Message -->
			<?php if ( isset( $_GET['status'] ) && 'success' === $_GET['status'] ) : ?>
				<div class="notice notice-success" style="border-left-color: #22a06b; background: #f7fcf9; padding: 16px 20px; border-radius: 8px; margin-bottom: 24px; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
					<h3 style="margin: 0 0 8px 0; color: #063d26; font-size: 16px; font-weight: 700;">
						&#10004; <?php esc_html_e( 'Demo Content Successfully Configured!', 'omnifywp-marketing' ); ?>
					</h3>
					<?php if ( ! empty( $results['messages'] ) ) : ?>
						<ul style="margin: 0; padding-left: 18px; color: #1e3728; font-size: 13.5px; line-height: 1.6;">
							<?php foreach ( $results['messages'] as $msg ) : ?>
								<li><?php echo esc_html( $msg ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php else : ?>
						<p style="margin: 0; color: #1e3728; font-size: 13.5px;">
							<?php esc_html_e( 'All selected pages, navigation menus, and articles are up to date.', 'omnifywp-marketing' ); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php elseif ( isset( $_GET['status'] ) && 'reset_success' === $_GET['status'] ) : 
				$reset_results = get_transient( 'omnify_demo_reset_results' );
				if ( $reset_results ) {
					delete_transient( 'omnify_demo_reset_results' );
				}
			?>
				<div class="notice notice-warning" style="border-left-color: #d97706; background: #fffbeb; padding: 16px 20px; border-radius: 8px; margin-bottom: 24px; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
					<h3 style="margin: 0 0 8px 0; color: #92400e; font-size: 16px; font-weight: 700;">
						&#9888; <?php esc_html_e( 'Demo Content Successfully Reset &amp; Removed', 'omnifywp-marketing' ); ?>
					</h3>
					<?php if ( ! empty( $reset_results['messages'] ) ) : ?>
						<ul style="margin: 0; padding-left: 18px; color: #78350f; font-size: 13.5px; line-height: 1.6;">
							<?php foreach ( $reset_results['messages'] as $msg ) : ?>
								<li><?php echo esc_html( $msg ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php else : ?>
						<p style="margin: 0; color: #78350f; font-size: 13.5px;">
							<?php esc_html_e( 'All demo pages, navigation menus, and sample articles have been cleanly removed.', 'omnifywp-marketing' ); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<!-- Site Status Grid -->
			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 16px; margin-bottom: 24px;">
				
				<!-- Card 1: Front Page -->
				<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
					<div style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #64748b; margin-bottom: 6px;">
						<?php esc_html_e( 'Homepage Mode', 'omnifywp-marketing' ); ?>
					</div>
					<div style="font-size: 18px; font-weight: 700; color: <?php echo $is_front_set ? '#0b5135' : '#b45309'; ?>; margin-bottom: 4px;">
						<?php echo $is_front_set ? '&#10003; ' . esc_html__( 'Static Front Page', 'omnifywp-marketing' ) : '&#9888; ' . esc_html__( 'Default Blog Feed', 'omnifywp-marketing' ); ?>
					</div>
					<div style="font-size: 12.5px; color: #64748b;">
						<?php
						if ( $is_front_set ) {
							$front_page = get_post( $front_page_id );
							echo esc_html( sprintf( __( 'Assigned to: "%s"', 'omnifywp-marketing' ), $front_page ? $front_page->post_title : 'ID ' . $front_page_id ) );
						} else {
							esc_html_e( 'Will be set to "Home" on import', 'omnifywp-marketing' );
						}
						?>
					</div>
				</div>

				<!-- Card 2: Pages -->
				<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
					<div style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #64748b; margin-bottom: 6px;">
						<?php esc_html_e( 'Published Pages', 'omnifywp-marketing' ); ?>
					</div>
					<div style="font-size: 24px; font-weight: 800; color: #0b5135; margin-bottom: 4px;">
						<?php echo esc_html( $pages_count ); ?>
					</div>
					<div style="font-size: 12.5px; color: #64748b;">
						<?php esc_html_e( '12 core marketing & store pages', 'omnifywp-marketing' ); ?>
					</div>
				</div>

				<!-- Card 3: Menus -->
				<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
					<div style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #64748b; margin-bottom: 6px;">
						<?php esc_html_e( 'Navigation Menus', 'omnifywp-marketing' ); ?>
					</div>
					<div style="font-size: 24px; font-weight: 800; color: #0b5135; margin-bottom: 4px;">
						<?php echo esc_html( $menus_count ); ?>
					</div>
					<div style="font-size: 12.5px; color: #64748b;">
						<?php esc_html_e( 'Primary, Footer & Legal menus', 'omnifywp-marketing' ); ?>
					</div>
				</div>

				<!-- Card 4: Blog Articles -->
				<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
					<div style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: #64748b; margin-bottom: 6px;">
						<?php esc_html_e( 'Engineering Posts', 'omnifywp-marketing' ); ?>
					</div>
					<div style="font-size: 24px; font-weight: 800; color: #0b5135; margin-bottom: 4px;">
						<?php echo esc_html( $posts_count ); ?>
					</div>
					<div style="font-size: 12.5px; color: #64748b;">
						<?php esc_html_e( 'Rich benchmark & architecture guides', 'omnifywp-marketing' ); ?>
					</div>
				</div>

			</div>

			<!-- Main Action Panel -->
			<div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 32px; box-shadow: 0 2px 8px rgba(0,0,0,0.03); margin-bottom: 24px;">
				<h2 style="margin: 0 0 10px 0; font-size: 20px; font-weight: 700; color: #063d26;">
					<?php echo $imported_at ? esc_html__( 'Update / Re-import Demo Content', 'omnifywp-marketing' ) : esc_html__( 'One-Click Demo Content Importer', 'omnifywp-marketing' ); ?>
				</h2>
				<p style="margin: 0 0 20px 0; color: #475569; font-size: 14px; line-height: 1.5;">
					<?php esc_html_e( 'Select the components you want to create or synchronize. Existing user customizations will not be overwritten destructively; missing pages and templates will be restored.', 'omnifywp-marketing' ); ?>
				</p>

				<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="omnify_import_demo">
					<?php wp_nonce_field( 'omnify_import_demo_action', 'omnify_demo_nonce' ); ?>

					<div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 24px; padding: 18px 20px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px;">
						
						<label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
							<input type="checkbox" name="omnify_opt_pages" value="1" checked style="margin-top: 3px;">
							<div>
								<strong style="color: #0f172a; font-size: 14px;"><?php esc_html_e( 'Demo Pages (12 Core Pages)', 'omnifywp-marketing' ); ?></strong>
								<div style="color: #64748b; font-size: 12.5px;">
									<?php esc_html_e( 'Home, Features & Architecture, Compare Matrix, Integrations, Documentation, Blog, Cart, Checkout, Portal, Order Tracking, Privacy, License.', 'omnifywp-marketing' ); ?>
								</div>
							</div>
						</label>

						<label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
							<input type="checkbox" name="omnify_opt_front_page" value="1" checked style="margin-top: 3px;">
							<div>
								<strong style="color: #0f172a; font-size: 14px;"><?php esc_html_e( 'Automatic Front Page & Posts Configuration', 'omnifywp-marketing' ); ?></strong>
								<div style="color: #64748b; font-size: 12.5px;">
									<?php esc_html_e( 'Configures WordPress Reading settings to display "Home" as the static front page and "Blog" as the engineering articles feed.', 'omnifywp-marketing' ); ?>
								</div>
							</div>
						</label>

						<label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
							<input type="checkbox" name="omnify_opt_menus" value="1" checked style="margin-top: 3px;">
							<div>
								<strong style="color: #0f172a; font-size: 14px;"><?php esc_html_e( 'Navigation Menus & Location Mapping', 'omnifywp-marketing' ); ?></strong>
								<div style="color: #64748b; font-size: 12.5px;">
									<?php esc_html_e( 'Builds and assigns "Omnify Primary Menu" to primary location and "Omnify Footer Links" to footer locations.', 'omnifywp-marketing' ); ?>
								</div>
							</div>
						</label>

						<label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
							<input type="checkbox" name="omnify_opt_posts" value="1" checked style="margin-top: 3px;">
							<div>
								<strong style="color: #0f172a; font-size: 14px;"><?php esc_html_e( 'Sample Engineering Blog Posts', 'omnifywp-marketing' ); ?></strong>
								<div style="color: #64748b; font-size: 12.5px;">
									<?php esc_html_e( 'Imports 4 comprehensive architecture deep dives with tags and categories to populate your blog archive immediately.', 'omnifywp-marketing' ); ?>
								</div>
							</div>
						</label>

						<label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
							<input type="checkbox" name="omnify_opt_products" value="1" checked style="margin-top: 3px;">
							<div>
								<strong style="color: #0f172a; font-size: 14px;"><?php esc_html_e( 'eCommerce Sample Products (OmnifyWP Plugin)', 'omnifywp-marketing' ); ?></strong>
								<div style="color: #64748b; font-size: 12.5px;">
									<?php esc_html_e( 'Seeds 4 sample software products with pricing, SKUs, and descriptions directly into OmnifyWP high-speed SQL tables if empty.', 'omnifywp-marketing' ); ?>
								</div>
							</div>
						</label>

					</div>

					<div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
						<button type="submit" class="button button-primary" style="background: #126343; border-color: #0b5135; font-size: 14.5px; font-weight: 700; padding: 8px 24px; height: auto; text-shadow: none; border-radius: 6px; cursor: pointer;">
							<?php echo $imported_at ? esc_html__( 'Update / Re-import Demo Content Now', 'omnifywp-marketing' ) : esc_html__( 'Import Demo Content (1-Click)', 'omnifywp-marketing' ); ?> &rarr;
						</button>

						<?php if ( $imported_at ) : ?>
							<span style="color: #64748b; font-size: 13px;">
								<?php echo esc_html( sprintf( __( 'Last updated: %s', 'omnifywp-marketing' ), date_i18n( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ), strtotime( $imported_at ) ) ) ); ?>
							</span>
						<?php endif; ?>
					</div>
				</form>
			</div>

			<!-- Reset & Remove Demo Content Card -->
			<div style="background: #ffffff; border: 1px solid #fee2e2; border-radius: 12px; padding: 24px 28px; box-shadow: 0 2px 8px rgba(0,0,0,0.02); margin-bottom: 24px;">
				<div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
					<div>
						<h3 style="margin: 0 0 6px 0; font-size: 16px; font-weight: 700; color: #991b1b;">
							<?php esc_html_e( 'Reset &amp; Remove Demo Content', 'omnifywp-marketing' ); ?>
						</h3>
						<p style="margin: 0; color: #64748b; font-size: 13px; line-height: 1.5; max-width: 650px;">
							<?php esc_html_e( 'Need a clean slate? This will safely remove the 12 demo pages, sample blog posts, and navigation menus created by the demo importer and reset the front page setting.', 'omnifywp-marketing' ); ?>
						</p>
					</div>
					<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" onsubmit="return confirm('<?php echo esc_js( __( 'Are you sure you want to remove all demo pages, menus, and sample posts? This action cannot be undone.', 'omnifywp-marketing' ) ); ?>');">
						<input type="hidden" name="action" value="omnify_reset_demo">
						<?php wp_nonce_field( 'omnify_reset_demo_action', 'omnify_reset_nonce' ); ?>
						<button type="submit" class="button button-secondary" style="color: #b91c1c; border-color: #fca5a5; background: #fff5f5; font-size: 13.5px; font-weight: 600; padding: 7px 18px; height: auto; text-shadow: none; border-radius: 6px; cursor: pointer;">
							<?php esc_html_e( 'Reset / Remove Demo Content', 'omnifywp-marketing' ); ?>
						</button>
					</form>
				</div>
			</div>

			<!-- Documentation / Help Card -->
			<div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px 24px;">
				<h4 style="margin: 0 0 8px 0; color: #1e293b; font-size: 14px; font-weight: 700;">
					<?php esc_html_e( 'Need to customize or reset something?', 'omnifywp-marketing' ); ?>
				</h4>
				<p style="margin: 0 0 10px 0; color: #475569; font-size: 13px; line-height: 1.5;">
					<?php esc_html_e( 'All pages use modern WordPress Block Patterns located in the theme. You can edit page layouts inside the WordPress Site Editor (Appearance > Editor) or standard Page Editor at any time.', 'omnifywp-marketing' ); ?>
				</p>
				<div style="display: flex; gap: 14px; font-size: 13px;">
					<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" style="color: #126343; font-weight: 600; text-decoration: none;">
						&rarr; <?php esc_html_e( 'Open Site Editor', 'omnifywp-marketing' ); ?>
					</a>
					<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" style="color: #126343; font-weight: 600; text-decoration: none;">
						&rarr; <?php esc_html_e( 'Edit Navigation Menus', 'omnifywp-marketing' ); ?>
					</a>
					<a href="<?php echo esc_url( admin_url( 'edit.php?post_type=page' ) ); ?>" style="color: #126343; font-weight: 600; text-decoration: none;">
						&rarr; <?php esc_html_e( 'View All Pages', 'omnifywp-marketing' ); ?>
					</a>
				</div>
			</div>

		</div>
		<?php
	}
}

// Instantiate
Omnify_Demo_Content::get_instance();
