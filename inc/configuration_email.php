<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_email">
        <div class="abrf-page-head">
            <h2>📧 E-Mail Configuration <span class="abrf-protag">pro</span></h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The E-Mail section controls the automatic e-mails your customers receive after a booking. You can switch the mail system on or off, attach a PDF ticket and fully customise the message with the placeholders below.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead><tr><th>Field / Option</th><th>What it does</th></tr></thead>
                <tbody>
                <tr><th>Send Mail ?</th><td>Turn the switch <strong>ON</strong> to auto-send the booking e-mail to your client. The mail won't be sent if <strong>OFF</strong>. By default, <strong>ON</strong></td></tr>
                <tr><th>Send pdf Ticket ?</th><td>If you would like to email with PDF ticket, turn <strong>ON</strong> otherwise the PDF won't be sent if <strong>OFF</strong>. By default, <strong>ON</strong></td></tr>
                <tr><th>Which status send Mail ?</th><td>Please choose the order status for which the mail will be sent.</td></tr>
                <tr><th>Mail Subject</th><td>Add a subject to your email, please. Alternatively, your site title will be used.</td></tr>
                <tr>
                    <th>Mail Content</th>
                    <td>
                        <p class="abrf-p">Please use these placeholders to get real data in your e-mail.</p>
                        <p class="abrf-p"><code class="abrf-chip">#post_name</code> : In order to print the Property Name.</p>
                        <p class="abrf-p"><code class="abrf-chip">#client_name</code> : In order to print the Client Name.</p>
                        <p class="abrf-p"><code class="abrf-chip">#order_id</code> : In order to print the Order ID.</p>
                        <p class="abrf-p"><code class="abrf-chip">#pass_id</code> : In order to print the Client ID.</p>
                        <p class="abrf-p"><code class="abrf-chip">#from</code> : In order to print the Start Point.</p>
                        <p class="abrf-p"><code class="abrf-chip">#to</code> : In order to print the End Point.</p>
                        <p class="abrf-p"><code class="abrf-chip">#order_date</code> : In order to print the Order Date.</p>
                        <p class="abrf-p"><code class="abrf-chip">#status</code> : In order to print the Order Status.</p>
                        <p class="abrf-p"><code class="abrf-chip">#payment</code> : In order to print the Payment Method.</p>
                        <p class="abrf-p"><code class="abrf-chip">#booking_details</code> : In order to print the Booking Details.</p>
                        <p class="abrf-p"><code class="abrf-chip">#rent_details</code> : In order to print the Ticket Details.</p>
                        <p class="abrf-p"><code class="abrf-chip">#bill_info</code> : In order to print the Billing Information.</p>
                        <p class="abrf-p"><code class="abrf-chip">#price_details</code> : In order to print the Total Price.</p>
                    </td>
                </tr>
                <tr>
                    <th>Re-send Mail Content</th>
                    <td>
                        <p class="abrf-p">Please use these placeholders to get real data in your e-mail.</p>
                        <p class="abrf-p"><code class="abrf-chip">#post_name</code> : In order to print the Property Name.</p>
                        <p class="abrf-p"><code class="abrf-chip">#client_name</code> : In order to print the Client Name.</p>
                        <p class="abrf-p"><code class="abrf-chip">#order_id</code> : In order to print the Order ID.</p>
                        <p class="abrf-p"><code class="abrf-chip">#pass_id</code> : In order to print the Client ID.</p>
                        <p class="abrf-p"><code class="abrf-chip">#from</code> : In order to print the Start Point.</p>
                        <p class="abrf-p"><code class="abrf-chip">#to</code> : In order to print the End Point.</p>
                        <p class="abrf-p"><code class="abrf-chip">#order_date</code> : In order to print the Order Date.</p>
                        <p class="abrf-p"><code class="abrf-chip">#status</code> : In order to print the Order Status.</p>
                        <p class="abrf-p"><code class="abrf-chip">#payment</code> : In order to print the Payment Method.</p>
                        <p class="abrf-p"><code class="abrf-chip">#booking_details</code> : In order to print the Booking Details.</p>
                        <p class="abrf-p"><code class="abrf-chip">#rent_details</code> : In order to print the Ticket Details.</p>
                        <p class="abrf-p"><code class="abrf-chip">#bill_info</code> : In order to print the Billing Information.</p>
                        <p class="abrf-p"><code class="abrf-chip">#price_details</code> : In order to print the Total Price.</p>
                    </td>
                </tr>
                <tr><th>Admin Notification Mail</th><td>After an order is placed, if the admin would want to get a PDF ticket, please give a mail address.</td></tr>
                <tr><th>Mail From Name</th><td>The email from name should be added here, otherwise the site title will be used.</td></tr>
                <tr><th>Mail From Mail</th><td>The email from mail should be added here, otherwise it will be your admin mail.</td></tr>
                </tbody>
            </table>
        </div>
    </section>
<?php
