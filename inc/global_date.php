<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_date_global">
        <div class="abrf-page-head">
            <h2>📅 RentalForge – Global Date Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Here you can define the global booking date behavior. These settings act as defaults for every rental item unless an item overrides them from its own Date Configuration.</p>

        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Rent Type</th><td>Choose the rental type (hourly, daily, multi-day, monthly, multi-month) that applies to your items globally.</td></tr>
                    <tr><th>Available Days</th><td>Select which days of the week are available for booking. Bookings are blocked on the days you leave unselected.</td></tr>
                    <tr><th>Date Range</th><td>Define how far in advance or how far in the past bookings can be made.</td></tr>
                    <tr><th>Holiday / Off Days</th><td>Set specific dates when the item is not available for booking.</td></tr>
                </tbody>
            </table>
        </div>

        <ol class="abrf-steps">
            <li>Adjust the date rules for your business model.</li>
            <li>Items that use the global default will follow these rules automatically.</li>
        </ol>
    </section>
<?php
