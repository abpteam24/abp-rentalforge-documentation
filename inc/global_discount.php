<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_global_discount">
        <div class="abrf-page-head">
            <h2>✂️ Global Discount <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The <strong>Global Discount</strong> section lives under <strong>RentalForge → Global Data</strong> and is available with the <strong>RentalForge Pro</strong> version. It defines site-wide Seasonal and Early Bird discounts that every rental item inherits automatically — you can still override them for a single item or property afterwards.</p>
        <div class="abrf-alert abrf-note">💡 <strong>Availability:</strong> this tab appears only when the Pro plugin is active. The blocks below also require their global switches under <strong>Configuration → ON/OFF</strong> (<strong>Global Seasonal Discount</strong> and <strong>Global Early Bird Discount</strong>).</div>
        <h4 class="abrf-h4">🌤️ Global Seasonal Discount</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Seasonal Discount?</th><td>Master switch for the global seasonal rules. Default: <strong>ON</strong></td></tr>
                <tr><th>Add New Seasonal date Range</th><td>Add another start/end/discount period shared by every item.</td></tr>
                <tr><th>Start Date</th><td>First day of the discounted period.</td></tr>
                <tr><th>End Date</th><td>Last day of the discounted period.</td></tr>
                <tr><th>Discount (%)</th><td>Percentage deducted from every item price, e.g. <code class="abrf-code">10</code> means 10% off.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🐦 Global Early Bird Discount</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Early Bird Discount?</th><td>Master switch for the global early bird rules. Default: <strong>ON</strong></td></tr>
                <tr><th>Add New Early Bird date Range</th><td>Add another global booking window with its own discount.</td></tr>
                <tr><th>Start Date / End Date</th><td>Define the booking window during which the discount applies.</td></tr>
                <tr><th>Discount (%)</th><td>Percentage deducted for early bookings, e.g. <code class="abrf-code">15</code>.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🔁 Global &amp; item-level priority</h4>
        <ol class="abrf-steps">
            <li>Set the global ranges here — every item inherits them.</li>
            <li>Item level: <strong>Post Management → Discount</strong> adds discounts for one specific rental item.</li>
            <li>Property level: <strong>Properties &amp; Pricing</strong> tab overrides discounts for a single property</li>
            <li>Click <strong>Save Global Discount</strong> — the discounted prices are applied everywhere immediately.</li>
        </ol>
        <div class="abrf-alert abrf-warn">⚠️ Same-type rules override one another from narrowest to widest scope: <strong>property</strong> → <strong>item (post)</strong> → <strong>global</strong>. If you want a different behaviour for one property, set a property-specific range instead of the global one.</div>
    </section>
<?php