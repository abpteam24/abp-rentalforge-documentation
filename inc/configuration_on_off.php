<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_on_off">
        <div class="abrf-page-head">
            <h2>🎚️ ON/OFF Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The <strong>ON/OFF</strong> section is the master switchboard of RentalForge. Every feature below can be switched on or off site-wide with a single toggle — after saving, the related menus and fields appear or disappear automatically. Keeping a feature <strong>OFF</strong> hides its admin sections and keeps the interface clean.</p>
        <div class="abrf-alert abrf-note">💡 To see the buttons below, open <strong>RentalForge → Configuration</strong> and click the <strong>ON/OFF</strong> section (the toggle icon).</div>
        <h4 class="abrf-h4">🧩 Core feature switches (free)</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Switch</th><th>What it controls</th></tr></thead>
                <tbody>
                <tr><th>Rent Date Time Rule</th><td>Which rent rules are allowed for the whole site (multi-select of hourly / daily / multi-day / monthly / multi-month).</td></tr>
                <tr><th>Post SKU</th><td>Show the SKU field when adding or editing a rental post.</td></tr>
                <tr><th>Post Sub Title</th><td>Show the sub-title field for rental posts.</td></tr>
                <tr><th>Post Icon</th><td>Show the icon field that gives each post a small frontend icon.</td></tr>
                <tr><th>Post Description</th><td>Show the custom description field for rental posts.</td></tr>
                <tr><th>Related Post</th><td>Show related-post suggestions on the frontend details page.</td></tr>
                <tr><th>Brand</th><td>Enable the Brand taxonomy and the Brands manager under Global Data.</td></tr>
                <tr><th>Property Description</th><td>Show the description field for individual properties.</td></tr>
                <tr><th>Deposit</th><td>Enable the deposit system (fixed amount, percentage, or fixed amount per quantity).</td></tr>
                <tr><th>Features</th><td>Enable property features / rules and the Feature manager under Global Data.</td></tr>
                <tr><th>Additional services</th><td>Enable global and per-post additional services.</td></tr>
                <tr><th>Terms &amp; Conditions</th><td>Enable the T&amp;C sections (global and per post).</td></tr>
                <tr><th>FAQ</th><td>Enable the FAQ sections (global and per post).</td></tr>
                <tr><th>Category</th><td>Enable the Category taxonomy and the Category manager under Global Data.</td></tr>
                <tr><th>Location</th><td>Enable the Location taxonomy and the Location manager under Global Data.</td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">💎 Pro switches (added by RentalForge Pro) <span class="abrf-protag">pro</span></h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Switch</th><th>What it controls</th></tr></thead>
                <tbody>
                <tr><th>Location Wise Stock Management</th><td>Allow a different stock, price and deposit per location on a property.</td></tr>
                <tr><th>Seasonal Discount</th><td>Master switch for all seasonal discount screens.</td></tr>
                <tr><th>Global Seasonal Discount</th><td>Show the seasonal block inside <strong>Global Data → Global Discount</strong>.</td></tr>
                <tr><th>Property Wise Seasonal Discount</th><td>Show seasonal settings inside <strong>Properties &amp; Pricing</strong> for each property.</td></tr>
                <tr><th>Early Bird Discount</th><td>Master switch for all early bird discount screens.</td></tr>
                <tr><th>Global Early Bird Discount</th><td>Show the early bird block inside <strong>Global Data → Global Discount</strong>.</td></tr>
                <tr><th>Property Wise Early Bird Discount</th><td>Show early bird settings inside <strong>Properties &amp; Pricing</strong> for each property.</td></tr>
                </tbody>
            </table>
        </div>
        <ol class="abrf-steps">
            <li>Turn a switch <strong>ON</strong> or <strong>OFF</strong> depending on the features you need.</li>
            <li>Click the <strong>Save</strong> button of the ON/OFF section.</li>
            <li>The related tabs, fields and menus appear or disappear everywhere immediately.</li>
        </ol>
    </section>
<?php