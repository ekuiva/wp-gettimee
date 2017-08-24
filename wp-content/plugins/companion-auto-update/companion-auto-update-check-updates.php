<?php
function cau_check_updates_mail() {

	global $wpdb;
	$table_name 	= $wpdb->prefix . "auto_updates"; 
	$cau_configs 	= $wpdb->get_results( "SELECT * FROM $table_name" );

	if( $cau_configs[5]->onoroff == 'on' ) { 
		cau_list_theme_updates(); // Check for theme updates
		cau_list_plugin_updates(); // Check for plugin updates
	}

	if( $cau_configs[6]->onoroff == 'on' ) if( $cau_configs[0]->onoroff == 'on' ) cau_plugin_updated(); // Check for updated plugins
}

function cau_set_email() {

	global $wpdb;
	$table_name 	= $wpdb->prefix . "auto_updates"; 
	$cau_configs 	= $wpdb->get_results( "SELECT * FROM $table_name" );

	if( $cau_configs[4]->onoroff == '' ) $toemail = get_option('admin_email'); 
	else $toemail = $cau_configs[4]->onoroff;

	return $toemail;

}

function cau_set_content( $single, $plural ) {

	return sprintf( esc_html__( 
		'There are one or more %1$s updates available on your WordPress site at: %2$s, but you have disabled auto-updating for %3$s. Login to your dashboard to manually update your %3$s.', 'companion-auto-update' 
	), $single, get_site_url(),  $plural);

}

// Checks if theme updates are available
function cau_list_theme_updates() {

	global $wpdb;
	$table_name = $wpdb->prefix . "auto_updates"; 

	$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'themes'");
	foreach ( $configs as $config ) {

		if( $config->onoroff != 'on' ) {

			require_once ABSPATH . '/wp-admin/includes/update.php';
			$themes = get_theme_updates();

			if ( !empty( $themes ) ) {

				$subject 		= '[' . get_bloginfo( 'name' ) . '] ' . __('Theme update available.', 'companion-auto-update');
				$type 			= __('theme', 'companion-auto-update');
				$type_plural	= __('themes', 'companion-auto-update');
				$message 		= cau_set_content( $type, $type_plural );

				wp_mail( cau_set_email() , $subject, $message, $headers );
			}

		}

	}

}

// Checks if plugin updates are available
function cau_list_plugin_updates() {
	
	global $wpdb;
	$table_name = $wpdb->prefix . "auto_updates"; 

	$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'plugins'");
	foreach ( $configs as $config ) {

		if( $config->onoroff != 'on' ) {

			require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
			$plugins = get_plugin_updates();

			if ( !empty( $plugins ) ) {

				$subject 		= '[' . get_bloginfo( 'name' ) . '] ' . __('Plugin update available.', 'companion-auto-update');
				$type 			= __('plugin', 'companion-auto-update');
				$type_plural	= __('plugins', 'companion-auto-update');
				$message 		= cau_set_content( $type, $type_plural );

				wp_mail( cau_set_email() , $subject, $message, $headers );
			}

		}

	}
}

// Creates the messages to be send
function cau_updated_message( $type, $updatedList ) {

	return sprintf( esc_html__( 
		'We have updated one or more %1$s on your WordPress site at %2$s, be sure to check if everything still works properly. The following %1$s have been updated: %3$s', 'companion-auto-update' 
	), $type, get_site_url(), $updatedList );

}

// Alerts when plugin has been updated
function cau_plugin_updated() {

	$today 			= date("Y-m-d");
	$yesterday 		= date('Y-m-d',strtotime("-1 days"));
	$updatedList 	= '';
	$all_plugins 	= get_plugins();

	$updatedPlugins = false;

	foreach ( $all_plugins as $key => $value ) {

		$slug 			= explode( '/', $key );
		$slug_hash 		= md5( $slug[0] );
		$last_updated 	= get_transient( "cau_{$slug_hash}" );

		if ( false === $last_updated ) {
			$last_updated = cau_get_last_updated( $slug );
			set_transient( "cau_{$slug_hash}", $last_updated, 86400 );
		}

		if ( $last_updated ) {
			$last_updated 	= explode( ' ', $last_updated );
			$last_updated = $last_updated[0];

			if( $last_updated == $today OR $last_updated == $yesterday ) {
				foreach ( $value as $k => $v ) {
					if( $k == "Name" )  $updatedList .= "- ".$v;
					if( $k == "Version" )  $updatedList .= " ".__("to version:")." ".$v."\n";
				}

				$updatedPlugins = true;

				$subject 		= '[' . get_bloginfo( 'name' ) . '] ' . __('One or more plugins have been updated.', 'companion-auto-update');
				$type 			= __('plugins', 'companion-auto-update');
				$message 		= cau_updated_message( $type, "\n".$updatedList );

			}
		}

	}

	if( $updatedPlugins ) {
		wp_mail( cau_set_email() , $subject, $message, $headers );
	}

}		

// Do some high-tech stuff
function cau_get_last_updated( $slug ) {
	$request = wp_remote_post(
		'http://api.wordpress.org/plugins/info/1.0/',
		array(
			'body' => array(
				'action' => 'plugin_information',
				'request' => serialize(
					(object) array(
						'slug' => $slug,
						'fields' => array( 'last_updated' => true )
					)
				)
			)
		)
	);
	if ( 200 != wp_remote_retrieve_response_code( $request ) ) return false;

	$response = unserialize( wp_remote_retrieve_body( $request ) );
	// Return an empty but cachable response if the plugin isn't in the .org repo
	if ( empty( $response ) )
		return '';
	if ( isset( $response->last_updated ) )
		return sanitize_text_field( $response->last_updated );

	return false;
}

?>