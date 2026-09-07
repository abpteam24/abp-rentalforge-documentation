<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_csv">
        <div class="abrf-page-head">
            <h2>📑 RentalForge - Order Lists CSV Configuration <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">These settings control which columns appear inside the exported order list CSV file. Turn a column <strong>ON</strong> to include it in the CSV, or <strong>OFF</strong> to hide it.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Column</th><th>What it controls</th></tr></thead>
                <tbody>
                <tr><th>Order ID</th><td>Shows the WooCommerce order number. By default, <strong>ON</strong></td></tr>
                <tr><th>Property / Post</th><td>Shows the rental property (post) name and ID. By default, <strong>ON</strong></td></tr>
                <tr><th>SKU</th><td>Shows the product SKU when one is set. By default, <strong>ON</strong></td></tr>
                <tr><th>Category / Location / Brand</th><td>Shows the property category, location and brand. By default, <strong>ON</strong></td></tr>
                <tr><th>Client &amp; Additional Info</th><td>Shows the customer (client) form data and the additional services information. By default, <strong>ON</strong></td></tr>
                <tr><th>Booking Details</th><td>Shows rent rule, booking date, duration, order date, ticket name and price. By default, <strong>ON</strong></td></tr>
                <tr><th>Book / Order Status</th><td>Shows the booking status and the WooCommerce order status. By default, <strong>ON</strong></td></tr>
                <tr><th>Payment Method &amp; Billing</th><td>Shows the payment method and the customer billing information. By default, <strong>ON</strong></td></tr>
                </tbody>
            </table>
        </div>
        <ol class="abrf-steps">
            <li>Toggle the columns you want to include in the exported file.</li>
            <li>Save the settings and use the "CSV" download button in the Orders page to export the filtered orders.</li>
        </ol>
    </section>
<?php
