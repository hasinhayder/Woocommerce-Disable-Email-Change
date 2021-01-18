<?php
/*
Plugin Name: Woo Disable Email Change
Plugin URI: https://lwhh.org
Description: Prevent users from changing their email address from WooCommerce dashboard
Version: 1.0.0
Author: Hasin Hayder
Author URI: 
License: GPLv2 or later
Text Domain: woo-disable-email-change
*/

add_action('woocommerce_edit_account_form', function () {
?>
    <script>
        (function($) {
            $(document).ready(function() {
                $("#account_email").parent().remove();
            });
        })(jQuery);
    </script>
<?php
});
