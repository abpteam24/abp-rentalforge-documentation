<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_location_global">
        <div class="abrf-page-head">
            <h2>📍 RentalForge – Global Location Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Here you can create, update, and delete RentalForge locations easily. Locations are used as start / end points for bookings and for filtering properties across the site. You will also find location shortcodes and many other options.</p>

        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Location Name</th><td>Type the name of the location, e.g. "New York - Downtown".</td></tr>
                    <tr><th>Shortcode</th><td>Each location provides a shortcode that you can place on any page to show the properties available at that location.</td></tr>
                    <tr><th>Latitude</th><td>The latitude coordinate of this location, e.g. <code>40.7128</code>. Used by geo-based search.</td></tr>
                    <tr><th>Longitude</th><td>The longitude coordinate of this location, e.g. <code>-74.0060</code>. Used by geo-based search.</td></tr>
                    <tr><th>Service Radius (km)</th><td>How far this location serves around its coordinates. Properties match a nearby search when they fall inside this radius.</td></tr>
                    <tr><th>Polygon (Area)</th><td>Define a custom service area by pasting one <code>lat,lng</code> pair per line, e.g. <code>40.7100,-74.0100</code>. A point inside the drawn polygon matches this location. Leave empty to use coordinates + radius only.</td></tr>
                </tbody>
            </table>
        </div>

        <ol class="abrf-steps">
            <li>Type Your Location Name here.</li>
            <li>Optionally add Latitude, Longitude, Service Radius or a Polygon (one <code>lat,lng</code> pair per line).</li>
            <li>Click to Save Location.</li>
            <li>Drop the location shortcode into a page or widget to display its properties. Geo fields also power radius / polygon searches in the post, property and booking shortcodes.</li>
        </ol>
    </section>
<?php
