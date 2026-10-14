<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_my_account">
        <div class="abrf-page-head">
            <h2>👤 My Account Bookings</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">RentalForge adds a dedicated <strong>"My Bookings"</strong> tab to the WooCommerce <strong>My Account</strong> page. This lets each logged-in customer see every rental booking they have placed — rental period, items, prices, payment method and status — without needing to contact you or open a support ticket.</p>

        <h4 class="abrf-h4">⚙️ How It Works</h4>
        <ul class="abrf-list">
            <li>👉 The tab is registered automatically as a WooCommerce account endpoint — no setup required.</li>
            <li>👉 It appears in the My Account navigation menu right after <strong>Orders</strong>.</li>
            <li>👉 Only the currently logged-in customer's own bookings are shown. Guests are asked to log in first.</li>
            <li>👉 The list loads with the same responsive rental design used across the frontend.</li>
        </ul>

        <h4 class="abrf-h4">📄 Where to Find It</h4>
        <ul class="abrf-list">
            <li>👉 Log in as a customer and open the WooCommerce <strong>My Account</strong> page: <code>yoursite.com/my-account/</code>.</li>
            <li>👉 Click the <strong>My Bookings</strong> link in the account menu (after Orders).</li>
            <li>👉 A direct link also works: <code>yoursite.com/my-account/abprf-bookings/</code>.</li>
        </ul>

        <h4 class="abrf-h4">🧾 What Each Booking Shows</h4>
        <ul class="abrf-list">
            <li>👉 <strong>Rental title &amp; image</strong> — the booked post / property with its SKU if enabled.</li>
            <li>👉 <strong>Order ID &amp; order date</strong>.</li>
            <li>👉 <strong>Rental period</strong> — start and end date &amp; time, plus the current rent status badge (Pending, Waiting, In Rent, Completed, Delay, Canceled).</li>
            <li>👉 <strong>Duration &amp; rate rule</strong> — total rental duration and the applied pricing rule (Hourly, Daily, Monthly, etc.).</li>
            <li>👉 <strong>Location</strong> — the pickup location when the Location module is enabled.</li>
            <li>👉 <strong>Booked items</strong> — each property/quantity with its price.</li>
            <li>👉 <strong>Additional services</strong> — extra services booked with the order, when the module is enabled.</li>
            <li>👉 <strong>Client information</strong> — the values collected from the client form, when the module is enabled.</li>
            <li>👉 <strong>Price breakdown</strong> — Rent, Additional, Deposit (each shown when enabled / greater than zero) and the <strong>Total</strong>.</li>
            <li>👉 <strong>Payment method</strong> — the gateway used for the order.</li>
            <li>👉 <strong>Order status badge</strong> — the WooCommerce order status (Processing, Completed, etc.).</li>
        </ul>

        <h4 class="abrf-h4">📑 Pagination</h4>
        <ul class="abrf-list abrf-list--dot">
            <li>Bookings are shown with pagination, using the same <strong>Items Per Page</strong> value as the admin order list.</li>
            <li>Customers can move between pages without reloading the whole account layout.</li>
        </ul>

        <h4 class="abrf-h4">📄 Download PDF <span class="abrf-protag">pro</span></h4>
        <ul class="abrf-list">
            <li>👉 When the <strong>Pro</strong> plugin and <strong>ABP PDF Tools</strong> add-on are active, a <strong>Download PDF</strong> button is shown on every booking.</li>
            <li>👉 It generates the same branded booking PDF that administrators can create from the order list.</li>
        </ul>

        <h4 class="abrf-h4">🔌 Developer Hooks</h4>
        <ul class="abrf-list">
            <li>👉 <code>abprf_my_account_booking_actions</code> — receives the booking row; use it to print extra action buttons for each booking.</li>
            <li>👉 <code>abprf_my_account_partial_payment</code> — receives the booking row; use it to show partial payment / balance information.</li>
        </ul>

        <div class="abrf-alert abrf-note">💡 The <strong>My Bookings</strong> tab requires WooCommerce to be active. The Download PDF button appears only when RentalForge Pro and the ABP PDF Tools add-on are both installed and active.</div>
    </section>
<?php
