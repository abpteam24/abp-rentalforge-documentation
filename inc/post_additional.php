<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_additional">
        <div class="abrf-page-head">
            <h2>➕ Additional Services Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The Additional Services Configuration system allows you to manage extra services that can be added to a rental. These services can be controlled both globally and at individual post level, giving you full flexibility in pricing and service management.</p>
        <h4 class="abrf-h4">🌍 Global Additional Services</h4>
        <p class="abrf-p">From the Global Configuration panel, you can define a standard set of additional services that apply across the entire system.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Create global additional services (e.g. cleaning, delivery, insurance, setup, etc.)</li>
            <li><strong>👉</strong> Enable or disable services globally</li>
            <li><strong>👉</strong> Maintain a centralized service list for all posts</li>
        </ul>
        <h4 class="abrf-h4">🏠 Custom Post-Level Configuration</h4>
        <p class="abrf-p">Each individual post can also have its own custom additional services setup.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Import services directly from global configuration</li>
            <li><strong>👉</strong> Add new custom services specific to that post</li>
            <li><strong>👉</strong> Modify imported or custom services</li>
            <li><strong>👉</strong> Remove services if not required for that post</li>
        </ul>
        <h4 class="abrf-h4">🔄 Import &amp; Flexibility System</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> One-click import from global services</li>
            <li><strong>👉</strong> Fully editable after import (no restrictions)</li>
            <li><strong>👉</strong> Combine global and custom services within a single post</li>
            <li><strong>👉</strong> Adjust pricing per post if needed</li>
        </ul>
        <h4 class="abrf-h4">⚙️ Smart Behavior</h4>
        <ul class="abrf-list">
            <li>Global services act as a base template</li>
            <li>Each post can inherit or customize services independently</li>
            <li>Changes in global configuration do not overwrite existing post-level custom settings</li>
        </ul>
        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> Saves time with reusable service templates</li>
            <li><strong>👉</strong> Ensures consistency across all properties</li>
            <li><strong>👉</strong> Provides full customization where needed</li>
            <li><strong>👉</strong> Scales easily for large rental platforms</li>
        </ul>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/additional.png" alt="Additional Services Configuration Overview">
            <figcaption>Additional Services Configuration Overview</figcaption>
        </figure>
    </section>
<?php
