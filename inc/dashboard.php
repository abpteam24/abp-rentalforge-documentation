<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_dashboard">
        <div class="abrf-page-head">
            <h2>📊 Dashboard &amp; System Status</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The <strong>Dashboard</strong> is the default screen of RentalForge and the first thing you see after activating the plugin. It gives you a complete picture of your rental business and also contains the built-in <strong>System Status</strong> tools that confirm everything is set up correctly.</p>

        <h4 class="abrf-h4">📈 Dashboard Overview</h4>
        <ul class="abrf-list">
            <li>👉 <strong>Revenue &amp; rental KPIs</strong> — at-a-glance totals for bookings, rentals and revenue.</li>
            <li>👉 <strong>Recent Orders</strong> — the latest bookings with their rent status and totals.</li>
            <li>👉 <strong>Quick Actions</strong> — shortcut cards to ON/OFF Configuration, Global Dates, Additional Services, Client Form, Locations, Categories, Brands and (Pro) Deposit Settings.</li>
            <li>👉 <strong>Content Breakdown</strong> — published, draft, private and trashed rental posts.</li>
            <li>👉 <strong>Upcoming / Today</strong> — rentals scheduled for today and the near future.</li>
        </ul>

        <h4 class="abrf-h4">📦 Today's Deliveries</h4>
        <ul class="abrf-list">
            <li>👉 <strong>Today's deliveries &amp; pending handovers</strong> — every booking that starts today, plus any booking still waiting to be handed over (rent status Waiting / Pending), so nothing is missed.</li>
            <li>👉 <strong>Status chip</strong> — each row is labelled <strong>Due today</strong>, <strong>Overdue</strong> (start already passed) or <strong>Upcoming</strong> (starts later).</li>
            <li>👉 <strong>Mark Delivered</strong> — hand the item over in one click; the booking moves to <strong>In Rent</strong>.</li>
            <li>👉 <strong>Today's rent &amp; deposit</strong> — the amount to collect for each item, with the booking popup showing exactly who booked what and the full price details.</li>
        </ul>

        <h4 class="abrf-h4">💵 Today's Collections</h4>
        <ul class="abrf-list">
            <li>👉 <strong>Due, overdue &amp; active rentals</strong> — every booking whose return is due today or already overdue (and not yet Completed / Canceled), plus every rental currently <strong>In Rent</strong>.</li>
            <li>👉 <strong>Status chip</strong> — each row is labelled <strong>Due today</strong>, <strong>Overdue by N day(s)</strong> or <strong>Upcoming</strong>.</li>
            <li>👉 <strong>Mark Received</strong> — settle the payment and take the item back in one click; the booking moves to <strong>Completed</strong>.</li>
            <li>👉 <strong>Security deposit</strong> — when an order is marked received (manually or automatically) the deposit is released and deducted from the outstanding total.</li>
        </ul>

        <h4 class="abrf-h4">🔁 Rent Status Workflow</h4>
        <ul class="abrf-list">
            <li>👉 Each booking moves through <strong>Waiting → In Rent → Completed</strong> (with extra <strong>Delay</strong> and <strong>Canceled</strong> states).</li>
            <li>👉 <strong>Mark Delivered</strong> is shown while the booking is waiting and moves it to <strong>In Rent</strong>.</li>
            <li>👉 <strong>Mark Received</strong> is shown once it is <strong>In Rent</strong> and completes the booking.</li>
            <li>👉 The actions are available from the <strong>Dashboard</strong>, the <strong>Orders list</strong> and the delivery popup — the button only appears when the booking is in the matching stage.</li>
            <li>👉 <strong>Delivery &amp; return timestamps</strong> are saved with the order when you mark it delivered / received.</li>
            <li>👉 With the <strong>Auto Delivery</strong> and <strong>Auto Return</strong> switches ON (default) the status advances automatically from the booking times — no clicks needed.</li>
        </ul>

        <h4 class="abrf-h4">🛡️ System Status</h4>
        <p class="abrf-p">The <strong>System Status</strong> card on the Dashboard shows the versions and checks below. Everything green means you are ready to start renting.</p>
        <ol class="abrf-steps">
            <li><strong>Plugin :</strong> the currently installed version of RentalForge. Keeping the plugin updated ensures the latest features, performance improvements and security fixes.</li>
            <li><strong>WordPress :</strong> the current WordPress version running on your site. RentalForge is tested against supported WordPress releases for maximum compatibility.</li>
            <li><strong>PHP :</strong> the PHP version installed on your server. An up-to-date, supported PHP version improves performance, stability and security.</li>
            <li><strong>WooCommerce :</strong> the installed WooCommerce version, or <strong>Not active</strong>. RentalForge depends entirely on WooCommerce for booking, cart, checkout and order management — use the <strong>Install &amp; Activate</strong> button if it is missing.</li>
            <li><strong>ABP PDF Support Tools :</strong> <span class="abrf-protag">pro</span> status of the PDF add-on. It is required to generate PDF invoices, booking documents and downloadable PDF files. A button is provided to install and activate it when available.</li>
            <li><strong>Booking Page :</strong> status of the page holding the booking shortcode (<code>rf_booking</code>). Create it automatically with the <strong>Fix</strong> button or place the shortcode manually.</li>
            <li><strong>Rental Post List Page :</strong> status of the post listing page (<code>rf_post</code>) used to showcase available rental items.</li>
            <li><strong>Property List Page :</strong> status of the property listing page (<code>rf_property</code>).</li>
            <li><strong>Gallery Page :</strong> status of the gallery page (<code>rf_gallery</code>) used to display rental item galleries and images.</li>
            <li><strong>First Post Added :</strong> confirms at least one rental post exists, with a quick <strong>Fix</strong> link to add one.</li>
            <li><strong>Number of Posts :</strong> total rental posts / listings in your system.</li>
            <li><strong>Number of Properties :</strong> total properties / assets / rentable items managed by RentalForge.</li>
            <li><strong>Dummy Import :</strong> import sample rental data to explore the plugin quickly, or remove it again when you no longer need it.</li>
        </ol>

        <div class="abrf-alert abrf-note">💡 The <strong>License</strong> status for RentalForge Pro is not a menu tab — it is shown as a card in the <strong>Dashboard sidebar</strong> (see the License Activation section).</div>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/status.png" alt="RentalForge Dashboard and System Status">
            <figcaption>RentalForge Dashboard with the System Status card</figcaption>
        </figure>
    </section>
<?php
