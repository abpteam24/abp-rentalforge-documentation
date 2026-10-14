<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_menu_lists">
        <div class="abrf-page-head">
            <h2>🧭 RentalForge - Menu</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">After installing RentalForge, you will get a dedicated admin dashboard menu that centralizes all rental management features in one place. You can customize the menu label and icon from the Icon &amp; Label Configuration settings. All plugin modules are organized into structured tabs under this main menu, allowing you to manage bookings, properties, pricing, availability, inventory, orders, and system settings from a clean and user-friendly interface.</p>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/menu_lists.png" alt="RentalForge Menu Overview">
            <figcaption>RentalForge Admin Menu Overview</figcaption>
        </figure>
        <h4 class="abrf-h4">📋 Menu Items</h4>
        <ul class="abrf-list">
            <li><strong>⚡ Top Quick Menu</strong> — fast-access buttons in the top bar (New Post, New Property, New Category, New Location).</li>
            <li><strong>📊 Dashboard</strong> — the default screen: rental KPIs, recent orders, quick actions and the System Status tools.</li>
            <li><strong>📝 Post Lists</strong> — manage all rental posts.</li>
            <li><strong>🏠 Properties</strong> — manage rental properties and inventory.</li>
            <li><strong>📋 Orders</strong> — view and manage all booking orders.</li>
            <li><strong>➕ Order</strong> <span class="abrf-protag">pro</span> — manually create a booking from the admin panel.</li>
            <li><strong>🌐 Global Data</strong> — configure global settings and shared data.</li>
            <li><strong>⚙️ Configuration</strong> — manage all plugin configurations and settings.</li>
            <li><strong>📘 Documentation</strong> — the built-in step-by-step guide inside the plugin.</li>
        </ul>
        <div class="abrf-alert abrf-note">💡 The <strong>Order</strong> tab appears automatically when the <strong>RentalForge Pro</strong> plugin is active. The Pro <strong>License</strong> is not a menu tab — it is activated from the <strong>License card in the Dashboard sidebar</strong> (see the License Activation section).</div>
    </section>
<?php
