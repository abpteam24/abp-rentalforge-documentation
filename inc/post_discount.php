<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_post_discount">
        <div class="abrf-page-head">
            <h2>✂️ Post Discount <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The <strong>Discount</strong> tab appears in the post edit area when the <strong>RentalForge Pro</strong> version is active. It lets you apply Seasonal and Early Bird discounts to the whole rental item — the price your customers see is reduced automatically while the discount period is active.</p>
        <div class="abrf-alert abrf-note">💡 <strong>Position:</strong> inside the item editor, the Discount tab sits between <strong>Client Form</strong> and <strong>Resources</strong>. It is the single item-level discount screen.</div>
        <h4 class="abrf-h4">🌤️ Seasonal Discount</h4>
        <p class="abrf-p">Lowers the item price by a percentage during one or more date ranges of the year — e.g. a low-season rate or a festival special price.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Seasonal Discount?</th><td>Master switch for this item. Default: <strong>ON</strong></td></tr>
                <tr><th>Add New Seasonal date Range</th><td>Click to add another start/end/discount period. You can stack as many periods as you need.</td></tr>
                <tr><th>Start Date</th><td>First day of the discounted period.</td></tr>
                <tr><th>End Date</th><td>Last day of the discounted period.</td></tr>
                <tr><th>Discount (%)</th><td>Percentage deducted from the normal price, e.g. <code class="abrf-code">10</code> means 10% off.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🐦 Early Bird Discount</h4>
        <p class="abrf-p">Rewards customers who book during a window you define — bookings placed between the Early Bird start and end dates automatically receive the discount.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Early Bird Discount?</th><td>Master switch for this item. Default: <strong>ON</strong></td></tr>
                <tr><th>Add New Early Bird date Range</th><td>Add another booking window with its own discount.</td></tr>
                <tr><th>Start Date / End Date</th><td>Define the booking window during which the discount applies.</td></tr>
                <tr><th>Discount (%)</th><td>Percentage deducted from the rental price for early bookings, e.g. <code class="abrf-code">15</code>.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">📍 Property-wise discount &amp; location stock</h4>
        <ul class="abrf-list">
            <li><strong>👉 Property-wise:</strong> open the item → <strong>Properties &amp; Pricing</strong> tab. There you can give <strong>each property</strong> its own Seasonal / Early Bird ranges and prices.</li>
            <li><strong>👉 Location wise:</strong> in the same tab, enable <strong>Location Wise Pricing and Quantity</strong> to set a different price, stock and discount per location.</li>
            <li><strong>👉 Availability:</strong> every discount type can first be switched on globally. Go to <strong>Configuration → ON/OFF</strong> and leave <strong>Seasonal Discount</strong> / <strong>Early Bird Discount</strong> and their <strong>Property Wise</strong> options <strong>ON</strong>.</li>
        </ul>
        <ol class="abrf-steps">
            <li>Turn on the discount type you want for this item.</li>
            <li>Add one or more date ranges and the discount percentage.</li>
            <li>Click <strong>Save</strong> — the item price automatically drops during the defined periods.</li>
        </ol>
    </section>
<?php