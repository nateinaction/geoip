<?php
/**
 * This file helps to prevent any issues from file name change
 * wpengine-geoip.php -> class-geoip.php to adhere to WPCS
 *
 * @package wpengine-geoip
 */

namespace WPEngine;

// Exit if this file is directly accessed.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$active_plugins = get_option( 'active_plugins', array() );
foreach ( $active_plugins as $key => $active_plugin ) {
	if ( strstr( $active_plugin, '/wpengine-geoip.php' ) ) {
		$active_plugins[ $key ] = str_replace( '/wpengine-geoip.php', '/class-geoip.php', $active_plugin );
	}
}
update_option( 'active_plugins', $active_plugins );
