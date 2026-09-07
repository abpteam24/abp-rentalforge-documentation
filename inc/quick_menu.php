<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_quick_menu">
        <div class="abrf-page-head">
            <h2>⚡ Top Quick Menu</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Quick Menu provides fast access to the most commonly used actions, allowing you to create content instantly without navigating through multiple pages.</p>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/quick_menu.png" alt="Quick Menu Overview">
            <figcaption>Quick Menu Overview</figcaption>
        </figure>
        <h4 class="abrf-h4">🚀 Quick Actions</h4>
        <p class="abrf-p">From this section, you can quickly perform the following actions:</p>
        <ul class="abrf-list">
            <li><strong>👉 Create a new post</strong> with all required fields</li>
            <li><strong>👉 Add a new property listing</strong> with full configuration</li>
            <li><strong>👉 Create and manage categories</strong> for better content organization</li>
            <li><strong>👉 Add new location data</strong> for filtering and management</li>
        </ul>
        <div class="abrf-alert abrf-note">💡 These quick actions appear in the top bar of the RentalForge dashboard when WooCommerce is active. New items open instantly in a popup — no page reload needed.</div>
    </section>
<?php
