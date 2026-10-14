<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_partial_payment">
        <div class="abrf-page-head">
            <h2>💰 Partial Payment <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The <strong>Partial Payment</strong> feature lets customers pay only a part of the total booking price at checkout and settle the remaining balance later. It is available with the <strong>RentalForge Pro</strong> version. The amount due now can be a percentage of the total, a fixed amount, or the property deposit amount — set globally and overridden per rental item.</p>
        <div class="abrf-alert abrf-note">💡 <strong>Availability:</strong> Partial Payment must first be turned on under <strong>Configuration → ON/OFF</strong> (<strong>Partial Payment</strong> switch). While the switch is OFF, no item charges a partial amount and the full price is collected at checkout.</div>

        <h4 class="abrf-h4">🌐 Global Data → Partial Payment</h4>
        <p class="abrf-p">The site-wide calculation method is configured under <strong>RentalForge → Global Data → Partial Payment</strong>. It is used by any item that has Partial Payment enabled but no value of its own.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Partial Payment Type</th><td>How the amount due now is calculated: <strong>Percentage</strong> of the total booking price, a <strong>Fixed</strong> amount, or the property <strong>Deposit Amount</strong>.</td></tr>
                <tr><th>Partial Payment Value</th><td>The percentage or fixed amount used by the selected type. Ignored when the type is <strong>Deposit Amount</strong>.</td></tr>
                </tbody>
            </table>
        </div>

        <h4 class="abrf-h4">📝 Per-Item Override (Post Management → Partial Payment)</h4>
        <p class="abrf-p">Each rental item has a <strong>Partial Payment Configuration</strong> tab so you can control it individually.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Partial Payment</th><td>Enable or disable Partial Payment for this specific item. Disabled = the full amount is charged at checkout.</td></tr>
                <tr><th>Partial Payment Type</th><td><strong>Percentage</strong>, <strong>Fixed</strong> or <strong>Deposit Amount</strong> for this item.</td></tr>
                <tr><th>Partial Payment Value</th><td>The percentage or fixed amount for this item. Leave it empty to fall back to the <strong>Global Data → Partial Payment</strong> configuration.</td></tr>
                </tbody>
            </table>
        </div>
        <div class="abrf-alert abrf-note">💡 The <strong>Deposit Amount</strong> type is available only while the <strong>Deposit</strong> feature is enabled, and it charges the property deposit as the amount due now.</div>

        <h4 class="abrf-h4">🛒 Checkout Behaviour</h4>
        <ul class="abrf-list">
            <li>👉 On the cart and checkout, the customer can choose the <strong>Full</strong> amount or the <strong>Partial</strong> amount.</li>
            <li>👉 When Partial is chosen, a fee line named <strong>“Partial Payment : Balance Due Later”</strong> is added to reduce the amount charged now, and the remaining balance is recorded on the order.</li>
            <li>👉 The order is marked with the <strong>Partial Payment</strong> (<code>wc-partial</code>) status so you can filter partial orders in the order list.</li>
        </ul>

        <h4 class="abrf-h4">📦 Admin Order List</h4>
        <ul class="abrf-list">
            <li>👉 The order list shows the <strong>Paid</strong> (deposit) and <strong>Due</strong> (balance) amounts for every partial order.</li>
            <li>👉 Use the <strong>Mark Received</strong> button to settle the outstanding balance when the customer pays it.</li>
        </ul>

        <h4 class="abrf-h4">👤 My Account Bookings</h4>
        <ul class="abrf-list">
            <li>👉 The customer's <strong>My Account → My Bookings</strong> tab shows the <strong>Payment Option</strong>, the <strong>Paid</strong> deposit, the <strong>Due</strong> balance and the balance paid date.</li>
            <li>👉 A <strong>Pay Due Payment</strong> button lets the customer pay the remaining balance later, which creates a due-payment order and clears the outstanding amount.</li>
        </ul>

        <div class="abrf-alert abrf-warn">⚠️ Turn the <strong>Partial Payment</strong> ON/OFF switch off to completely disable the feature site-wide. Turn it off for a single item (or turn off the Master switch) to always charge the full amount at checkout.</div>
    </section>
<?php
