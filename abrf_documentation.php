<?php
	/**
	 * Plugin Name: ABP RentalForge - Documentation
	 * Plugin URI:
	 * Description: Standalone documentation for ABP RentalForge (free & pro). No admin menu. Display it anywhere with the [abrf-documentation] shortcode. Fully independent markup/CSS/JS (prefix: abrf) so it never conflicts with the rental plugin.
	 * Version: 2.0.0
	 * Author: abpteam
	 * Author URI: http://www.abp-team.com/
	 * Text Domain: abrf_documentation
	 * Domain Path: /languages
	 */
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	if ( ! class_exists( 'ABRF_Documentation' ) ) {
		class ABRF_Documentation {
			public function __construct() {
				if ( ! defined( 'ABRF_DOC_DIR' ) ) {
					define( 'ABRF_DOC_DIR', dirname( __FILE__ ) );
				}
				if ( ! defined( 'ABRF_DOC_URL' ) ) {
					define( 'ABRF_DOC_URL', plugins_url() . '/' . plugin_basename( dirname( __FILE__ ) ) );
				}
				add_shortcode( 'abrf-documentation', array( $this, 'do_documentation' ) );
				add_shortcode( 'abprf-documentation', array( $this, 'do_documentation' ) );
				add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
			}
			public function enqueue_styles(): void {
				if ( is_admin() ) {
					return;
				}
				$enqueue = false;
				if ( is_singular() ) {
					$post = get_post();
					if ( $post && ( has_shortcode( $post->post_content, 'abrf-documentation' ) || has_shortcode( $post->post_content, 'abprf-documentation' ) ) ) {
						$enqueue = true;
					}
				}
				$enqueue = (bool) apply_filters( 'abrf_doc_enqueue', $enqueue );
				if ( $enqueue ) {
					wp_enqueue_style( 'abrf-documentation', ABRF_DOC_URL . '/assets/css/documentation.css', array(), '2.0.0' );
					wp_enqueue_script( 'abrf-documentation', ABRF_DOC_URL . '/assets/js/documentation.js', array(), '2.0.0', true );
				}
			}
			public function do_documentation(): bool|string {
				ob_start();
				$this->documentation();
				$html = ob_get_clean();
				// Safety net (bulletproof): page builders / themes often HTML-decode
				// shortcode output and re-run do_shortcode() on it. A plain entity is
				// not enough in that case, so we insert an invisible <wbr> right after
				// every '[' — the rendered text is unchanged ("[abprf-booking]") but no
				// shortcode regex can ever match it, no matter how many times the
				// content is decoded and re-processed.
				return str_replace( '[', '[<wbr>', (string) $html );
			}
			public function documentation(): void {
				?>
                <div class="abrf-doc" id="abrf-doc">
                    <!-- TOP BAR -->
                    <header class="abrf-topbar">
                        <button class="abrf-burger" type="button" aria-label="Toggle menu">☰</button>
                        <div class="abrf-brand"><span class="abrf-logo">📘</span><span>RentalForge Docs</span></div>
                        <div class="abrf-search">
                            <span class="abrf-search-ico">🔍</span>
                            <input type="search" placeholder="Search documentation…" aria-label="Search documentation">
                        </div>
                        <span class="abrf-badge">📚 User Guide</span>
                        <button class="abrf-topbtn" type="button" onclick="window.print()">🖨️ Print</button>
                    </header>
                    <!-- BODY -->
                    <div class="abrf-shell">
                        <!-- NAV -->
                        <nav class="abrf-nav" aria-label="Documentation sections">
                            <button class="abrf-nav-link" data-abrf-target="#abrf_getting_start"><span class="abrf-nl-ic">🚀</span>Getting Started</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_feature"><span class="abrf-nl-ic">⭐</span>Features</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_application"><span class="abrf-nl-ic">📌</span>Applications</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_menu_lists"><span class="abrf-nl-ic">🧭</span>Menu Overview</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_quick_menu"><span class="abrf-nl-ic">⚡</span>Quick Menu</button>

                            <div class="abrf-nav-group">
                                <button class="abrf-nav-toggle" data-abrf-group="gp_post" data-abrf-target="#abrf_post">
                                    <span>📝 Post Management</span><span class="abrf-caret">▶</span>
                                </button>
                                <div class="abrf-nav-sub">
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_general">⚙️ General Settings</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_property_price">💰 Properties &amp; Pricing</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_date">📅 Date Configuration</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_additional">➕ Additional Services</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_client_form">🧾 Client Forms</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_post_discount">✂️ Discount <span class="abrf-protag">pro</span></button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_tc">📜 Terms &amp; Conditions</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_faq">❓ FAQs</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_tax">🧾 Tax Settings</button>
                                </div>
                            </div>

                            <button class="abrf-nav-link" data-abrf-target="#abrf_properties"><span class="abrf-nl-ic">🏠</span>Properties</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_orders"><span class="abrf-nl-ic">📦</span>Orders</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_create_order"><span class="abrf-nl-ic">➕</span>Add Order <span class="abrf-protag">pro</span></button>

                            <div class="abrf-nav-group">
                                <button class="abrf-nav-toggle" data-abrf-group="gp_global" data-abrf-target="#abrf_global_data">
                                    <span>🌐 Global Data</span><span class="abrf-caret">▶</span>
                                </button>
                                <div class="abrf-nav-sub">
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_date_global">📅 Dates</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_additional_global">💰 Additional Services</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_client_form_global">📋 Client Form</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_global_discount">✂️ Global Discount <span class="abrf-protag">pro</span></button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_tc_global">🤝 T&amp;C</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_faq_global">❓ FAQ</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_category_global">🏘️ Category</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_location_global">📍 Location</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_brand_global">🏷️ Brands</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_feature_global">🔗 Feature</button>
                                </div>
                            </div>

                            <div class="abrf-nav-group">
                                <button class="abrf-nav-toggle" data-abrf-group="gp_config" data-abrf-target="#abrf_configuration">
                                    <span>⚙️ Configuration</span><span class="abrf-caret">▶</span>
                                </button>
                                <div class="abrf-nav-sub">
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_rental_forge">🛠️ RentalForge</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_on_off">🎚️ ON/OFF</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_pdf">📄 PDF <span class="abrf-protag">pro</span></button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_booking_pdf">📑 Order Lists PDF <span class="abrf-protag">pro</span></button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_csv">📑 Order Lists CSV <span class="abrf-protag">pro</span></button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_email">📧 E-mail <span class="abrf-protag">pro</span></button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_slider">🖼️ Slider</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_contact">☎️ Contact Information</button>
                                    <button class="abrf-nav-link" data-abrf-target="#abrf_css_value">🎨 CSS Property</button>
                                </div>
                            </div>

                            <button class="abrf-nav-link" data-abrf-target="#abrf_status"><span class="abrf-nl-ic">🛡️</span>Status</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_license_pro"><span class="abrf-nl-ic">🔑</span>License <span class="abrf-protag">pro</span></button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_shortcode"><span class="abrf-nl-ic">🔗</span>Shortcodes</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_template"><span class="abrf-nl-ic">🧩</span>Templating</button>
                            <button class="abrf-nav-link" data-abrf-target="#abrf_translate"><span class="abrf-nl-ic">🌍</span>Translate</button>
                        </nav>
                        <!-- CONTENT -->
                        <main class="abrf-content">
							<?php
								require_once ABRF_DOC_DIR . '/inc/getting_start.php';
								require_once ABRF_DOC_DIR . '/inc/features.php';
								require_once ABRF_DOC_DIR . '/inc/application.php';
								require_once ABRF_DOC_DIR . '/inc/menu_lists.php';
								require_once ABRF_DOC_DIR . '/inc/quick_menu.php';
								/************************/
								require_once ABRF_DOC_DIR . '/inc/post_menu.php';
								require_once ABRF_DOC_DIR . '/inc/post_general.php';
								require_once ABRF_DOC_DIR . '/inc/post_property_price.php';
								require_once ABRF_DOC_DIR . '/inc/post_date.php';
								require_once ABRF_DOC_DIR . '/inc/post_additional.php';
								require_once ABRF_DOC_DIR . '/inc/post_client_form.php';
								require_once ABRF_DOC_DIR . '/inc/post_discount.php';
								require_once ABRF_DOC_DIR . '/inc/post_tc.php';
								require_once ABRF_DOC_DIR . '/inc/post_faq.php';
								require_once ABRF_DOC_DIR . '/inc/post_tax.php';
								/************************/
								require_once ABRF_DOC_DIR . '/inc/property_list.php';
								require_once ABRF_DOC_DIR . '/inc/order_list.php';
								require_once ABRF_DOC_DIR . '/inc/add_order.php';
								/************************/
								require_once ABRF_DOC_DIR . '/inc/global_data.php';
								require_once ABRF_DOC_DIR . '/inc/global_date.php';
								require_once ABRF_DOC_DIR . '/inc/global_additional.php';
								require_once ABRF_DOC_DIR . '/inc/global_client_form.php';
								require_once ABRF_DOC_DIR . '/inc/global_discount.php';
								require_once ABRF_DOC_DIR . '/inc/global_tc.php';
								require_once ABRF_DOC_DIR . '/inc/global_faq.php';
								require_once ABRF_DOC_DIR . '/inc/global_category.php';
								require_once ABRF_DOC_DIR . '/inc/global_location.php';
								require_once ABRF_DOC_DIR . '/inc/global_brand.php';
								require_once ABRF_DOC_DIR . '/inc/global_feature.php';
								/************************/
								require_once ABRF_DOC_DIR . '/inc/configuration.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_rental_forge.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_on_off.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_pdf.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_order_list.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_csv.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_email.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_slider.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_contact.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_css.php';
								/************************/
								require_once ABRF_DOC_DIR . '/inc/status.php';
								require_once ABRF_DOC_DIR . '/inc/configuration_license.php';
								require_once ABRF_DOC_DIR . '/inc/shortcode.php';
								require_once ABRF_DOC_DIR . '/inc/templating.php';
								require_once ABRF_DOC_DIR . '/inc/translate.php';
							?>
                            <!-- PREV / NEXT NAVIGATION -->
                            <nav class="abrf-page-nav" aria-label="Page navigation">
                                <button class="abrf-navbtn abrf-navbtn--prev" type="button" aria-label="Previous page">← Previous</button>
                                <span class="abrf-navinfo" aria-live="polite"></span>
                                <button class="abrf-navbtn abrf-navbtn--next" type="button" aria-label="Next page">Next →</button>
                            </nav>
                        </main>
                    </div>
                    <div class="abrf-backdrop"></div>
                    <button class="abrf-top" type="button" aria-label="Back to top">↑</button>
                </div>
				<?php
			}
		}
		new ABRF_Documentation();
	}