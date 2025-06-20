<?php
/*
 * Plugin Name: redirect user after logout
 */
function redirect_function() {
    wp_redirect ('https://www.google.com/');
}
add_action( 'logout_redirect', 'redirect_function' );
?>
