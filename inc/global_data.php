<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_global_data">
        <div class="abrf-page-head">
            <h2>🌐 RentalForge – Global Data Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Global Data holds the system-wide default settings of RentalForge. Every item (property, equipment, vehicle, etc.) inherits these values automatically. A global value can be overridden for a single item from the item's own Post Management settings, so you keep one place to manage the defaults while still being able to customize each item.</p>

        <p class="abrf-p">Think of Global Data as your central control panel: set a default once here and every rental item picks it up. Whenever a particular item needs something different, simply override that single value from the item's own settings without affecting the rest of your catalogue.</p>

        <h4 class="abrf-h4">📂 What Global Data Covers</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Global Section</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Dates</th><td>Manage the default date configuration that every rental item inherits.</td></tr>
                    <tr><th>Additional Services</th><td>Create default additional services that can be offered on any rental item.</td></tr>
                    <tr><th>Client Form</th><td>Define the default customer information form fields.</td></tr>
                    <tr><th>Global Discount <span class="abrf-protag">pro</span></th><td>Site-wide Seasonal and Early Bird discount ranges inherited by every item.</td></tr>
                    <tr><th>Terms &amp; Conditions</th><td>Set the default terms &amp; conditions text shown on every item.</td></tr>
                    <tr><th>FAQ</th><td>Manage the default frequently asked questions.</td></tr>
                    <tr><th>Category / Location / Brand</th><td>Create and manage the global categories, locations and brands used across all items.</td></tr>
                    <tr><th>Feature</th><td>Create default feature/rules lists that describe each rental item.</td></tr>
                </tbody>
            </table>
        </div>

        <div class="abrf-alert abrf-note">💡 Use the sub-menu under <strong>Global Data</strong> on the left to configure each section.</div>
    </section>
<?php
