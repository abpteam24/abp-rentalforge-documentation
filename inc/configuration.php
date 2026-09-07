<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_configuration">
        <div class="abrf-page-head">
            <h2>⚙️ Configuration Overview</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Configuration holds the <strong>system-wide defaults</strong> of RentalForge. Values set here apply to every property automatically — and a single property can still override them from its own settings. This lets you manage the look and behaviour of the whole site from one place.</p>
        <h4 class="abrf-h4">📚 Configuration sections</h4>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Section</th><th>What it controls</th></tr></thead>
                <tbody>
                <tr><td>🎚️ ON/OFF</td><td>Master switches that show or hide every RentalForge feature site-wide — SKU, deposit, features, FAQ, categories, locations, discounts and more.</td></tr>
                <tr><td>🛠️ RentalForge</td><td>Main plugin defaults — booking labels, URL slugs, search form layout and general behaviour.</td></tr>
                <tr><td>📄 PDF (PRO)</td><td>Branding of generated PDF documents — logo, colors, background and terms.</td></tr>
                <tr><td>📑 Order Lists PDF / CSV (PRO)</td><td>Which columns appear when you download order lists as PDF or CSV.</td></tr>
                <tr><td>📧 E-mail (PRO)</td><td>Booking confirmation e-mails, PDF tickets, admin notifications and mail templates.</td></tr>
                <tr><td>🖼️ Slider</td><td>How property image sliders and thumbnails behave on the website.</td></tr>
                <tr><td>☎️ Contact Information</td><td>Company name, address, phone and e-mail used in documents and footers.</td></tr>
                <tr><td>🎨 CSS Property</td><td>Colors, border radius and font sizes used by the RentalForge section.</td></tr>
                </tbody>
            </table>
        </div>
        <div class="abrf-alert abrf-tip">
            <span class="abrf-alert-ic">💡</span>
            <div><strong>Where are the discounts?</strong> Seasonal and Early Bird discounts are not configured here — the real plugin places them into two dedicated Pro screens: <strong>Post Management → Discount</strong> (per rental item) and <strong>Global Data → Global Discount</strong> (site-wide rules). See those pages for full details.</div>
        </div>
        <div class="abrf-alert abrf-warn">
            <span class="abrf-alert-ic">⚠️</span>
            <div><strong>Requirements reminder.</strong> RentalForge requires <strong>WooCommerce</strong> to manage bookings and orders. If WooCommerce is not active, RentalForge menus and functions may not be available — activate it first, then re-visit this screen.</div>
        </div>
    </section>
<?php
