<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_shortcode">
        <div class="abrf-page-head">
            <h2>🔗 RentalForge - Shortcodes</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Below are all available RentalForge shortcodes with their details. You can use these shortcodes in any page, post, or widget area. Each shortcode supports parameters that allow you to control layout, filtering, and frontend behavior. Please use parameters carefully, as they directly affect output display and rental functionality.</p>
        <p class="abrf-p">All listing shortcodes (<code class="abrf-code">[abprf-booking]</code>, <code class="abrf-code">[abprf-post]</code>, <code class="abrf-code">[abprf-property]</code>) also accept these shared parameters:</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Parameter</th><th>Description</th></tr></thead>
                <tbody>
                <tr><td>brand_id</td><td>Filter posts by brand ID. <code class="abrf-code">[abprf-booking brand_id="3"]</code></td></tr>
                <tr><td>slider_style</td><td>Display type used by gallery rendering. <strong>gallery, slider</strong> | Default: <strong>gallery</strong></td></tr>
                <tr><td>sort</td><td>Sorting order of the results. <strong>ASC, DESC</strong> | Default: <strong>ASC</strong> <code class="abrf-code">[abprf-booking sort="DESC"]</code></td></tr>
                <tr><td>pagination</td><td>Enable or disable pagination. <strong>yes, no</strong> | Default: <strong>yes</strong></td></tr>
                <tr><td>pagination-style</td><td>Pagination behavior. <strong>live</strong> | Default: <strong>live</strong></td></tr>
                <tr><td>form</td><td>Search form layout on the booking listing. <strong>inline, yes, no</strong> | Default: <strong>inline</strong></td></tr>
                </tbody>
            </table>
        </div>
        <div class="abrf-alert abrf-note">💡 <strong>Booking vs. post list:</strong> <code class="abrf-code">[abprf-booking]</code> renders the full listing <em>together with</em> the search form. <code class="abrf-code">[abprf-post]</code> and <code class="abrf-code">[abprf-property]</code> list items without the search form.</div>
        <h4 class="abrf-h4">📅 Booking shortcode</h4>
        <p class="abrf-p"><code class="abrf-code">[abprf-booking]</code></p>
        <p class="abrf-p">This shortcode allows you to display the complete RentalForge booking form on any page, post, or custom layout. This provides a flexible way to create a dedicated booking page without requiring visitors to access a specific rental item page.</p>
        <p class="abrf-p">When a rental item is selected, customers can complete the entire booking process directly from the shortcode page. The booking experience is identical to the rental details page, ensuring a consistent and user-friendly reservation workflow.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Parameter</th><th>Description</th></tr></thead>
                <tbody>
                <tr><td>style</td><td>Layout style of the listing. <strong>grid, list, masonry</strong> | Default: <strong>grid</strong> <code class="abrf-code">[abprf-booking style="list"]</code></td></tr>
                <tr><td>post_id</td><td>Display a specific post. When used, other filtering parameters will be ignored. <code class="abrf-code">[abprf-booking post_id="123"]</code></td></tr>
                <tr><td>cat_id</td><td>Filter posts by category ID. <code class="abrf-code">[abprf-booking cat_id="1"]</code></td></tr>
                <tr><td>loc_id</td><td>Filter posts by location ID. <code class="abrf-code">[abprf-booking loc_id="2"]</code></td></tr>
                <tr><td>lat</td><td>Latitude for geo-based search. Combined with <code class="abrf-code">lng</code> (and optional <code class="abrf-code">radius</code>) it matches posts near the given coordinates or inside a location polygon. <code class="abrf-code">[abprf-booking lat="40.7128" lng="-74.0060" radius="10"]</code></td></tr>
                <tr><td>lng</td><td>Longitude for geo-based search. <code class="abrf-code">[abprf-booking lat="40.7128" lng="-74.0060"]</code></td></tr>
                <tr><td>radius</td><td>Search radius in kilometers for geo-based search. Without it, the matching location's own service radius is used. <code class="abrf-code">[abprf-booking lat="40.7128" lng="-74.0060" radius="20"]</code></td></tr>
                <tr><td>rent_rule</td><td>Filter by rental type: <strong>hourly, daily, multi_day, monthly, multi_month</strong> <code class="abrf-code">[abprf-booking rent_rule="daily"]</code></td></tr>
                <tr><td>show</td><td>Number of posts to display. Default: <strong>9</strong> <code class="abrf-code">[abprf-booking show="12"]</code></td></tr>
                <tr><td>column</td><td>Number of columns (only works with grid layout). Default: <strong>3</strong> <code class="abrf-code">[abprf-booking column="4"]</code></td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">📄 Post List shortcode</h4>
        <p class="abrf-p"><code class="abrf-code">[abprf-post]</code></p>
        <p class="abrf-p">Use this shortcode to display the rental post listing anywhere on your website. You can place it inside any page, post, or widget area. The following parameters allow you to customize the output.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Parameter</th><th>Description</th></tr></thead>
                <tbody>
                <tr><td>style</td><td>Layout style of the listing. <strong>grid, list, masonry</strong> | Default: <strong>grid</strong> <code class="abrf-code">[abprf-post style="list"]</code></td></tr>
                <tr><td>post_id</td><td>Display a specific post. When used, other filtering parameters will be ignored. <code class="abrf-code">[abprf-post post_id="123"]</code></td></tr>
                <tr><td>cat_id</td><td>Filter posts by category ID. <code class="abrf-code">[abprf-post cat_id="1"]</code></td></tr>
                <tr><td>loc_id</td><td>Filter posts by location ID. <code class="abrf-code">[abprf-post loc_id="2"]</code></td></tr>
                <tr><td>lat</td><td>Latitude for geo-based search. Combined with <code class="abrf-code">lng</code> (and optional <code class="abrf-code">radius</code>) it matches posts near the given coordinates or inside a location polygon. <code class="abrf-code">[abprf-post lat="40.7128" lng="-74.0060" radius="10"]</code></td></tr>
                <tr><td>lng</td><td>Longitude for geo-based search. <code class="abrf-code">[abprf-post lat="40.7128" lng="-74.0060"]</code></td></tr>
                <tr><td>radius</td><td>Search radius in kilometers for geo-based search. Without it, the matching location's own service radius is used. <code class="abrf-code">[abprf-post lat="40.7128" lng="-74.0060" radius="20"]</code></td></tr>
                <tr><td>rent_rule</td><td>Filter by rental type: <strong>hourly, daily, multi_day, monthly, multi_month</strong> <code class="abrf-code">[abprf-post rent_rule="daily"]</code></td></tr>
                <tr><td>show</td><td>Number of posts to display. Default: <strong>9</strong> <code class="abrf-code">[abprf-post show="12"]</code></td></tr>
                <tr><td>column</td><td>Number of columns (only works with grid layout). Default: <strong>3</strong> <code class="abrf-code">[abprf-post column="4"]</code></td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🏠 Property List shortcode</h4>
        <p class="abrf-p"><code class="abrf-code">[abprf-property]</code></p>
        <p class="abrf-p">Use this shortcode to display rental property listings anywhere on your website.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Parameter</th><th>Description</th></tr></thead>
                <tbody>
                <tr><td>style</td><td>Layout style. <strong>grid, list</strong> | Default: <strong>grid</strong> <code class="abrf-code">[abprf-property style="list"]</code></td></tr>
                <tr><td>post_id</td><td>Display a specific property. Overrides other filters. <code class="abrf-code">[abprf-property post_id="123"]</code></td></tr>
                <tr><td>cat_id</td><td>Filter by category ID. <code class="abrf-code">[abprf-property cat_id="1"]</code></td></tr>
                <tr><td>loc_id</td><td>Filter by location ID. <code class="abrf-code">[abprf-property loc_id="2"]</code></td></tr>
                <tr><td>lat</td><td>Latitude for geo-based search. Combined with <code class="abrf-code">lng</code> (and optional <code class="abrf-code">radius</code>) it matches properties near the given coordinates or inside a location polygon. <code class="abrf-code">[abprf-property lat="40.7128" lng="-74.0060" radius="10"]</code></td></tr>
                <tr><td>lng</td><td>Longitude for geo-based search. <code class="abrf-code">[abprf-property lat="40.7128" lng="-74.0060"]</code></td></tr>
                <tr><td>radius</td><td>Search radius in kilometers for geo-based search. Without it, the matching location's own service radius is used. <code class="abrf-code">[abprf-property lat="40.7128" lng="-74.0060" radius="20"]</code></td></tr>
                <tr><td>brand_id</td><td>Filter by brand ID. <code class="abrf-code">[abprf-property brand_id="3"]</code></td></tr>
                <tr><td>rent_rule</td><td>Rental type filter: <strong>hourly, daily, multi_day, monthly, multi_month</strong> <code class="abrf-code">[abprf-property rent_rule="monthly"]</code></td></tr>
                <tr><td>show</td><td>Number of properties to display. Default: <strong>9</strong> <code class="abrf-code">[abprf-property show="15"]</code></td></tr>
                <tr><td>column</td><td>Number of columns (grid layout only). Default: <strong>3</strong> <code class="abrf-code">[abprf-property column="4"]</code></td></tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🖼️ Gallery shortcode</h4>
        <p class="abrf-p"><code class="abrf-code">[abprf-gallery]</code></p>
        <p class="abrf-p">Use this shortcode to display property image galleries or sliders anywhere on your website.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Parameter</th><th>Description</th></tr></thead>
                <tbody>
                <tr><td>slider_style</td><td>Display type: <strong>gallery, slider</strong> | Default: <strong>gallery</strong> <code class="abrf-code">[abprf-gallery slider_style="slider"]</code></td></tr>
                <tr><td>post_id</td><td>Show gallery for a specific post only. <code class="abrf-code">[abprf-gallery post_id="123"]</code></td></tr>
                <tr><td>cat_id</td><td>Filter gallery by category. <code class="abrf-code">[abprf-gallery cat_id="1"]</code></td></tr>
                <tr><td>loc_id</td><td>Filter gallery by location. <code class="abrf-code">[abprf-gallery loc_id="2"]</code></td></tr>
                <tr><td>rent_rule</td><td>Filter by rental type: <strong>hourly, daily, multi_day, monthly, multi_month</strong> <code class="abrf-code">[abprf-gallery rent_rule="daily"]</code></td></tr>
                <tr><td>column</td><td>Number of images per row (gallery mode only). Default: <strong>3</strong> <code class="abrf-code">[abprf-gallery column="4"]</code></td></tr>
                </tbody>
            </table>
        </div>
    </section>
<?php