<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_orders">
        <div class="abrf-page-head">
            <h2>📋 Orders List</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Orders List section provides a complete overview of all rental bookings and transactions. From here, you can manage, track, filter, and review all customer orders in a centralized dashboard. It is designed to handle large-scale rental operations with advanced filtering and pagination support.</p>

        <h4 class="abrf-h4">🔎 Advanced Order Filtering System</h4>
        <p class="abrf-p">RentalForge provides a powerful filtering system that allows you to quickly find specific orders based on multiple criteria.</p>
        <ul class="abrf-list">
            <li>👉 <strong>Post Name:</strong> Filter orders by related rental post or listing.</li>
            <li>👉 <strong>Order ID:</strong> Search and locate a specific order using its unique ID.</li>
            <li>👉 <strong>Order Date:</strong> Filter orders based on a specific order creation date.</li>
            <li>👉 <strong>Order Date Between:</strong> Select a date range to view orders within a specific period.</li>
            <li>👉 <strong>Booking Date:</strong> Filter orders based on the actual rental booking date.</li>
            <li>👉 <strong>Booking Date Between:</strong> Search bookings within a selected date range.</li>
            <li>👉 <strong>User Name:</strong> Find orders placed by a specific customer.</li>
            <li>👉 <strong>Location:</strong> Filter orders based on property or rental location.</li>
            <li>👉 <strong>Billing Name:</strong> Search using billing customer name.</li>
            <li>👉 <strong>Billing Email:</strong> Filter orders using customer email address.</li>
            <li>👉 <strong>Billing Phone:</strong> Search orders using customer phone number.</li>
        </ul>

        <h4 class="abrf-h4">📊 Order Management Features</h4>
        <ul class="abrf-list">
            <li>👉 View complete order details including customer, property, pricing, and booking information</li>
            <li>👉 Track order status and rental activity in real-time</li>
            <li>👉 Access full billing and customer information per order</li>
            <li>👉 Organized table view for easy scanning and management</li>
        </ul>

        <h4 class="abrf-h4">🔁 Rent Status &amp; Handover</h4>
        <ul class="abrf-list">
            <li>👉 Every row shows its <strong>rent status</strong> (Waiting, In Rent, Completed, Delay, Canceled) alongside the WooCommerce order status.</li>
            <li>👉 <strong>Mark Delivered</strong> — shown while a booking is still waiting; hands the item over and moves it to <strong>In Rent</strong>.</li>
            <li>👉 <strong>Mark Received</strong> — shown while a booking is <strong>In Rent</strong>; takes the item back, releases the security deposit and completes the order.</li>
            <li>👉 Once a booking reaches its final stage the buttons are replaced by a plain status label.</li>
            <li>👉 Delivery and return timestamps are stored with the order automatically when these actions are used.</li>
        </ul>

        <h4 class="abrf-h4">📄 PDF & CSV <span class="abrf-protag">pro</span></h4>
        <ul class="abrf-list">
            <li>👉 <strong>Order List PDF:</strong> Download the filtered orders as a branded PDF document with one click.</li>
            <li>👉 <strong>Order List CSV:</strong> Export the filtered orders to CSV, ready for Excel, Google Sheets or any accounting tool.</li>
            <li>👉 Both documents follow the column settings you choose in <strong>Configuration → Order Lists PDF/CSV</strong>.</li>
        </ul>

        <h4 class="abrf-h4">✉️ Re-send Mail <span class="abrf-protag">pro</span></h4>
        <ul class="abrf-list">
            <li>👉 Use the <strong>Re-send Mail</strong> button to deliver the booking confirmation e-mail and PDF ticket to the customer again.</li>
            <li>👉 Useful when a customer never received the first e-mail or asks for a new copy.</li>
        </ul>

        <h4 class="abrf-h4">✅ Check-In <span class="abrf-protag">pro</span></h4>
        <ul class="abrf-list">
            <li>👉 When an order status is booked, the <strong>Not Checked!</strong> button appears next to the order.</li>
            <li>👉 Click it to mark the customer as checked in; the button changes to <strong>Checked</strong> and records who checked them in.</li>
            <li>👉 Helps you confirm that every booking has actually been served.</li>
        </ul>

        <h4 class="abrf-h4">📄 Pagination & Performance</h4>
        <ul class="abrf-list abrf-list--dot">
            <li>Fully paginated order system for handling large datasets efficiently</li>
            <li>Optimized query structure for fast loading performance</li>
            <li>Smooth navigation between pages without performance degradation</li>
        </ul>

        <h4 class="abrf-h4">🗑️ Order Actions</h4>
        <ul class="abrf-list">
            <li>👉 <strong>Delete Order:</strong> Permanently remove an order from the system when no longer needed.</li>
            <li>👉 View full order details before performing any action to ensure safe management.</li>
        </ul>

        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list abrf-list--dot">
            <li>Advanced filtering for fast order tracking</li>
            <li>Full visibility of customer and booking data</li>
            <li>Scalable system for high-volume rental businesses</li>
            <li>Optimized performance with pagination support</li>
            <li>Easy order management with minimal effort</li>
        </ul>

        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/order_list.png" alt="RentalForge Order List Overview">
            <figcaption>RentalForge Order List Overview</figcaption>
        </figure>
    </section>
<?php
