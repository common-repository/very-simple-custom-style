<?php
// If uninstall is not called from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

// Delete Option
delete_option( 'vscs-setting' );

// For site options in Multisite
delete_site_option( 'vscs-setting' );
