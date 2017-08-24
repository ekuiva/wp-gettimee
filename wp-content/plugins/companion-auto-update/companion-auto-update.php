<?php
/*
 * Plugin Name: Companion Auto Update
 * Plugin URI: http://codeermeneer.nl/
 * Description: This plugin auto updates all plugins, all themes and the wordpress core.
 * Version: 2.9.6
 * Author: Qreative-Web
 * Author URI: http://codeermeneer.nl/
 * Contributors: papin
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: companion-auto-update
 * Domain Path: /languages/
*/

// Disable direct access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Load translations
function cau_load_translations() {
	load_plugin_textdomain( 'companion-auto-update', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'init', 'cau_load_translations' );

// Install db
function cau_install() {
	cau_database_creation(); // Db handle
	if (! wp_next_scheduled ( 'cau_set_schedule_mail' )) wp_schedule_event(time(), 'daily', 'cau_set_schedule_mail'); //Set schedule
}
add_action('cau_set_schedule_mail', 'cau_check_updates_mail');

function cau_database_creation() {

	global $wpdb;
	global $cau_db_version;

	$cau_db_version = '1.4.3';

	// Create db table
	$table_name = $wpdb->prefix . "auto_updates"; 

	$sql = "CREATE TABLE $table_name (
		id INT(9) NOT NULL AUTO_INCREMENT,
		name VARCHAR(255) NOT NULL,
		onoroff VARCHAR(99999) NOT NULL,
		UNIQUE KEY id (id)
	)";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	// Database version
	add_option( "cau_db_version", "$cau_db_version" );

	// Insert data
	cau_install_data();

	// Updating..
	$installed_ver = get_option( "cau_db_version" );
	if ( $installed_ver != $cau_db_version ) update_option( "cau_db_version", $cau_db_version );

}

// Check if database table exists before creating
function cau_check_if_exists( $whattocheck ) {

	global $wpdb;
	$table_name = $wpdb->prefix . "auto_updates"; 

	$rows 	= $wpdb->get_col( "SELECT COUNT(*) as num_rows FROM $table_name WHERE name = '$whattocheck'" );
	$check 	= $rows[0];

	if( $check > 0) {
		return true;
	} else {
		return false;
	}

}

// Inset Data
function cau_install_data() {

	global $wpdb;
	$table_name = $wpdb->prefix . "auto_updates"; 
	$toemail 	= get_option('admin_email');

	// Update configs
	if( !cau_check_if_exists( 'plugins' ) ) $wpdb->insert( $table_name, array( 'name' => 'plugins', 'onoroff' => 'on' ) );
	if( !cau_check_if_exists( 'themes' ) ) $wpdb->insert( $table_name, array( 'name' => 'themes', 'onoroff' => 'on' ) );
	if( !cau_check_if_exists( 'minor' ) ) $wpdb->insert( $table_name, array( 'name' => 'minor', 'onoroff' => 'on' ) );
	if( !cau_check_if_exists( 'major' ) ) $wpdb->insert( $table_name, array( 'name' => 'major', 'onoroff' => 'on' ) );

	// Email configs
	if( !cau_check_if_exists( 'email' ) ) $wpdb->insert( $table_name, array( 'name' => 'email', 'onoroff' => '' ) );
	if( !cau_check_if_exists( 'send' ) ) $wpdb->insert( $table_name, array( 'name' => 'send', 'onoroff' => '' ) );
	if( !cau_check_if_exists( 'sendupdate' ) ) $wpdb->insert( $table_name, array( 'name' => 'sendupdate', 'onoroff' => '' ) );

	// Advanced
	if( !cau_check_if_exists( 'notUpdateList' ) ) $wpdb->insert( $table_name, array( 'name' => 'notUpdateList', 'onoroff' => '' ) );
	if( !cau_check_if_exists( 'translations' ) ) $wpdb->insert( $table_name, array( 'name' => 'translations', 'onoroff' => 'on' ) );
	if( !cau_check_if_exists( 'wpemails' ) ) $wpdb->insert( $table_name, array( 'name' => 'wpemails', 'onoroff' => 'on' ) );

}
register_activation_hook( __FILE__, 'cau_install' );

// Clear everything
function cau_remove() {
	global $wpdb;
	$table_name = $wpdb->prefix . "auto_updates"; 
	$wpdb->query( "DROP TABLE IF EXISTS $table_name" );
	wp_clear_scheduled_hook('cau_set_schedule_mail');
}
register_deactivation_hook(  __FILE__, 'cau_remove' );

// Update
function cau_update_db_check() {
    global $cau_db_version;
    if ( get_site_option( 'cau_db_version' ) != $cau_db_version ) {
        cau_database_creation();
    }
}
add_action( 'plugins_loaded', 'cau_update_db_check' );

// Add plugin to menu
function register_cau_menu_page() {
	add_submenu_page( 'tools.php', __('Auto Updater', 'companion-auto-update'), __('Auto Updater', 'companion-auto-update'), 'manage_options', 'cau-settings', 'cau_frontend' );
}
add_action( 'admin_menu', 'register_cau_menu_page' );

function active_tab( $page ) {

	if( !isset( $_GET['tab'] ) ) {
		$cur_page = '';
	} else {
		$cur_page = $_GET['tab'];
	}

	if( $page == $cur_page ) {
		echo 'nav-tab-active';
	}

}

// Settings page
function cau_frontend() { ?>
	
	<div class='wrap'>

		<h1 class="wp-heading-inline"><?php _e('Auto Updater', 'companion-auto-update'); ?></h1>

 		<a href="http://codeermeneer.nl/cau_poll/" target="_blank" class="page-title-action"><?php _e('Give feedback', 'companion-auto-update'); ?></a>
 		<a href="https://translate.wordpress.org/projects/wp-plugins/companion-auto-update/" target="_blank" class="page-title-action"><?php _e('Help us translate', 'companion-auto-update'); ?></a>
 		<a href="https://www.paypal.me/dakel/1/" target="_blank" class="page-title-action"><?php _e('Donate to help development', 'companion-auto-update'); ?></a>

		<hr class="wp-header-end">

		<h2 class="nav-tab-wrapper wp-clearfix">
			<a href="tools.php?page=cau-settings" class="nav-tab <?php active_tab(''); ?>"><?php _e('Dashboard', 'companion-auto-update'); ?></a>
			<a href="tools.php?page=cau-settings&amp;tab=pluginlist" class="nav-tab <?php active_tab('pluginlist'); ?>"><?php _e('Filter plugins', 'companion-auto-update'); ?></a>
			<a href="tools.php?page=cau-settings&amp;tab=schedule" class="nav-tab <?php active_tab('schedule'); ?>"><?php _e('Scheduling', 'companion-auto-update'); ?></a>
		</h2>

		<?php

		if( !isset( $_GET['tab'] ) ) {

			if ( !wp_next_scheduled ( 'cau_set_schedule_mail' )) echo '<div id="message" class="error"><p><b>'.__('Companion Auto Update was not able to set the event for sending you emails, please re-activate the plugin in order to set the event', 'companion-auto-update').'.</b></p></div>';

		    global $cau_db_version;
			if ( get_site_option( 'cau_db_version' ) != $cau_db_version ) echo '<div id="message" class="error"><p><b>'.__('Database Update', 'companion-auto-update').' &ndash;</b> '.__('It seems like something went wrong while updating the database, please re-activate this plugin', 'companion-auto-update').'.</p></div>';

			if( isset( $_POST['submit'] ) ) {

				global $wpdb;
				$table_name = $wpdb->prefix . "auto_updates"; 

				$plugins 		= $_POST['plugins'];
				$themes 		= $_POST['themes'];
				$minor 			= $_POST['minor'];
				$major 			= $_POST['major'];
				$translations 	= $_POST['translations'];
				$send 			= $_POST['cau_send'];
				$sendupdate 	= $_POST['cau_send_update'];
				$wpemails 		= $_POST['wpemails'];

				$email 			= sanitize_text_field( $_POST['cau_email'] );

				$wpdb->query( " UPDATE $table_name SET onoroff = '$plugins' WHERE name = 'plugins' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$themes' WHERE name = 'themes' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$minor' WHERE name = 'minor' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$major' WHERE name = 'major' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$translations' WHERE name = 'translations' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$email' WHERE name = 'email' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$send' WHERE name = 'send' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$sendupdate' WHERE name = 'sendupdate' " );
				$wpdb->query( " UPDATE $table_name SET onoroff = '$wpemails' WHERE name = 'wpemails' " );

				echo '<div id="message" class="updated"><p><b>'.__('Settings saved', 'companion-auto-update').'.</b></p></div>';
			}

			?>

			<form method="POST">

				<table class="form-table">
					<tr>
						<th scope="row"><?php _e('Auto Updater', 'companion-auto-update');?></th>
						<td>
							<fieldset>

								<?php

								global $wpdb;
								$table_name = $wpdb->prefix . "auto_updates"; 

								$cau_configs = $wpdb->get_results( "SELECT * FROM $table_name" );

								echo '<p><input id="'.$cau_configs[0]->name.'" name="'.$cau_configs[0]->name.'" type="checkbox"';
								if( $cau_configs[0]->onoroff == 'on' ) echo 'checked';
								echo '/> <label for="'.$cau_configs[0]->name.'">'.__('Auto update plugins?', 'companion-auto-update').'</label></p>';

								echo '<p><input id="'.$cau_configs[1]->name.'" name="'.$cau_configs[1]->name.'" type="checkbox"';
								if( $cau_configs[1]->onoroff == 'on' ) echo 'checked';
								echo '/> <label for="'.$cau_configs[1]->name.'">'.__('Auto update themes?', 'companion-auto-update').'</label></p>';


								echo '<p><input id="'.$cau_configs[2]->name.'" name="'.$cau_configs[2]->name.'" type="checkbox"';
								if( $cau_configs[2]->onoroff == 'on' ) echo 'checked';
								echo '/> <label for="'.$cau_configs[2]->name.'">'.__('Auto update minor core updates?', 'companion-auto-update').'</label></p>';


								echo '<p><input id="'.$cau_configs[3]->name.'" name="'.$cau_configs[3]->name.'" type="checkbox"';
								if( $cau_configs[3]->onoroff == 'on' ) echo 'checked';
								echo '/> <label for="'.$cau_configs[3]->name.'">'.__('Auto update major core updates?', 'companion-auto-update').'</label></p>';

								echo '<p><input id="'.$cau_configs[8]->name.'" name="'.$cau_configs[8]->name.'" type="checkbox"';
								if( $cau_configs[8]->onoroff == 'on' ) echo 'checked';
								echo '/> <label for="'.$cau_configs[8]->name.'">'.__('Auto update translation files?', 'companion-auto-update').'</label></p>';

								?>

							</fieldset>
						</td>
					</tr>
				</table>

				<h2 class="title"><?php _e('Email Notifications', 'companion-auto-update');?></h2>
				<p><?php _e('Email notifications are send once a day, you can choose what notifications to send below.', 'companion-auto-update');?></p>

				<?php
				if( $cau_configs[4]->onoroff == '' ) $toemail = get_option('admin_email'); 
				else $toemail = $cau_configs[4]->onoroff;
				?>

				<table class="form-table">
					<tr>
						<th scope="row"><?php _e('Update available', 'companion-auto-update');?></th>
						<td>
							<p>
								<input id="cau_send" name="cau_send" type="checkbox" <?php if( $cau_configs[5]->onoroff == 'on' ) { echo 'checked'; } ?> />
								<label for="cau_send"><?php _e('Send me emails when an update is available.', 'companion-auto-update');?></label>
							</p>
						</td>
					</tr>
					<tr>
						<th scope="row"><?php _e('Successful update', 'companion-auto-update');?></th>
						<td>
							<p>
								<input id="cau_send_update" name="cau_send_update" type="checkbox" <?php if( $cau_configs[6]->onoroff == 'on' ) { echo 'checked'; } ?> />
								<label for="cau_send_update"><?php _e('Send me emails when something has been updated.', 'companion-auto-update');?></label>
							</p>
						</td>
					</tr>
					<tr>
						<th scope="row"><?php _e('Core notifications', 'companion-auto-update');?></th>
						<td>
							<p>
								<input id="wpemails" name="wpemails" type="checkbox" <?php if( $cau_configs[9]->onoroff == 'on' ) { echo 'checked'; } ?> />
								<label for="wpemails"><?php _e('By default wordpress sends an email when a core update happend. Uncheck this box to disable these emails.', 'companion-auto-update');?></label>
							</p>
						</td>
					</tr>
					<tr>
						<th scope="row"><?php _e('Email address', 'companion-auto-update');?></th>
						<td>
							<p>
								<label for="cau_email"><?php _e('To', 'companion-auto-update');?>:</label>
								<input type="text" name="cau_email" id="cau_email" class="regular-text" placeholder="<?php echo get_option('admin_email'); ?>" value="<?php echo esc_html( $toemail ); ?>" />
							</p>

							<p class="description"><?php _e('Seperate email addresses using commas.', 'companion-auto-update');?></p>
						</td>
					</tr>
				</table>

			<?php submit_button();

			} else if( $_GET['tab'] == 'pluginlist' ) {

				selectPlugins();

			}  else if( $_GET['tab'] == 'schedule' ) {

				schedule();

			} ?>

	</div>

<?php }

function donotupdatelist() {

	global $wpdb;
	$table_name 	= $wpdb->prefix . "auto_updates"; 
	$config 		= $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'notUpdateList'");

	$list 			= $config[0]->onoroff;
	$list 			= explode( ", ", $list );
	$returnList 	= array();

	foreach ( $list as $key ) array_push( $returnList, $key );
	
	return $returnList;

}

function schedule() { 

	$plugin_schedule 	= wp_get_schedule( 'wp_update_plugins' );
	$theme_schedule 	= wp_get_schedule( 'wp_update_themes' );
	$core_schedule 		= wp_get_schedule( 'wp_version_check' );
	$mail_sc 				= wp_get_schedule( 'cau_set_schedule_mail' );

	if( isset( $_POST['submit'] ) ) {

		// Set variables
		$plugin_sc 		= $_POST['plugin_schedule'];
		$theme_sc 		= $_POST['theme_schedule'];
		$core_sc 		= $_POST['core_schedule'];
		$schedule_mail 	= $_POST['schedule_mail'];

		// First clear schedules
		wp_clear_scheduled_hook('wp_update_plugins');
		wp_clear_scheduled_hook('wp_update_themes');
		wp_clear_scheduled_hook('wp_version_check');
		wp_clear_scheduled_hook('cau_set_schedule_mail');

		// Then set the new times
		wp_schedule_event( time(), $plugin_sc, 'wp_update_plugins' );
		wp_schedule_event( time(), $theme_sc, 'wp_update_themes' );
		wp_schedule_event( time(), $core_sc, 'wp_version_check' );
		wp_schedule_event( time(), $schedule_mail, 'cau_set_schedule_mail' );

		echo '<div id="message" class="updated"><p>'.__('Changes were saved. Reload the page to see the changes made.', 'companion-auto-update').'</p></div>';

	}
	?>

	<form method="POST">
	
		<div class="message error warning">
			<p class="warning">
				<strong><?php _e('Warning', 'companion-auto-update'); ?></strong> &dash; <?php _e('Changing these settings may affect your sites perfomance.', 'companion-auto-update'); ?>
			</p>
		</div>

		<h2 class="title"><?php _e('Updating', 'companion-auto-update');?></h2>
		<?php _e('How often should the auto updater kick in? (Default twice daily)', 'companion-auto-update'); ?>
		<table class="form-table">
			<tr>
				<th scope="row"><?php _e('Plugin update interval', 'companion-auto-update');?></th>
				<td>
					<p>
						<select name='plugin_schedule'>
							<option value='hourly' <?php if( $plugin_schedule == 'hourly' ) { echo "SELECTED"; } ?> ><?php _e('Hourly', 'companion-auto-update');?></option>
							<option value='twicedaily' <?php if( $plugin_schedule == 'twicedaily' ) { echo "SELECTED"; } ?> ><?php _e('Twice Daily', 'companion-auto-update');?></option>
							<option value='daily' <?php if( $plugin_schedule == 'daily' ) { echo "SELECTED"; } ?> ><?php _e('Daily', 'companion-auto-update');?></option>
						</select>
					</p>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('Theme update interval', 'companion-auto-update');?></th>
				<td>
					<p>
						<select name='theme_schedule'>
							<option value='hourly' <?php if( $theme_schedule == 'hourly' ) { echo "SELECTED"; } ?> ><?php _e('Hourly', 'companion-auto-update');?></option>
							<option value='twicedaily' <?php if( $theme_schedule == 'twicedaily' ) { echo "SELECTED"; } ?> ><?php _e('Twice Daily', 'companion-auto-update');?></option>
							<option value='daily' <?php if( $theme_schedule == 'daily' ) { echo "SELECTED"; } ?> ><?php _e('Daily', 'companion-auto-update');?></option>
						</select>
					</p>
				</td>
			</tr>
			<tr>
				<th scope="row"><?php _e('Core update interval', 'companion-auto-update');?></th>
				<td>
					<p>
						<select name='core_schedule'>
							<option value='hourly' <?php if( $core_schedule == 'hourly' ) { echo "SELECTED"; } ?> ><?php _e('Hourly', 'companion-auto-update');?></option>
							<option value='twicedaily' <?php if( $core_schedule == 'twicedaily' ) { echo "SELECTED"; } ?> ><?php _e('Twice Daily', 'companion-auto-update');?></option>
							<option value='daily' <?php if( $core_schedule == 'daily' ) { echo "SELECTED"; } ?> ><?php _e('Daily', 'companion-auto-update');?></option>
						</select>
					</p>
				</td>
			</tr>		
		</table>

		<h2 class="title"><?php _e('Email Notifications', 'companion-auto-update');?></h2>
		<?php _e('How often should notifications be send? (Default daily)', 'companion-auto-update'); ?>
		<table class="form-table">
			<tr>
				<th scope="row"><?php _e('Email Notifications', 'companion-auto-update');?></th>
				<td>
					<p>
						<select name='schedule_mail'>
							<option value='hourly' <?php if( $mail_sc == 'hourly' ) { echo "SELECTED"; } ?> ><?php _e('Hourly', 'companion-auto-update');?></option>
							<option value='twicedaily' <?php if( $mail_sc == 'twicedaily' ) { echo "SELECTED"; } ?> ><?php _e('Twice Daily', 'companion-auto-update');?></option>
							<option value='daily' <?php if( $mail_sc == 'daily' ) { echo "SELECTED"; } ?> ><?php _e('Daily', 'companion-auto-update');?></option>
						</select>
					</p>
				</td>
			</tr>
		</table>

		<input type='submit' name='submit' id='submit' class='button button-primary' value='<?php _e( "Save changes", "companion-auto-update" ); ?>'>

	</form>

<?php }

function selectPlugins() { ?>

	<p><?php _e('Here you can select plugins that you do not wish to automatically update', 'companion-auto-update'); ?>.</p>

	<?php 

	global $wpdb;
	$table_name = $wpdb->prefix . "auto_updates";

	$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'plugins'");
	foreach ( $configs as $config ) if( $config->onoroff != 'on' ) echo '<div id="message" class="error"><p><b>'.__('Auto updating disabled', 'companion-auto-update').' &ndash;</b> '.__('You have <strong>disabled</strong> auto updating, these settings do not work unless you <strong>enable</strong> it', 'companion-auto-update').'.</p></div>';

	if( isset( $_POST['submit'] ) ) {

		$noUpdateList 	= '';
		$noUpdateCount 	= 0;

		foreach ( $_POST['post'] as $key ) {
			$noUpdateList .= $key.', ';
			$noUpdateCount++;
		}

		$wpdb->query( " UPDATE $table_name SET onoroff = '$noUpdateList' WHERE name = 'notUpdateList' " );
		echo '<div id="message" class="updated"><p><b>'.__('Succes', 'companion-auto-update').' &ndash;</b> '.sprintf( esc_html__( '%1$s plugins have been added to the no-update-list', 'companion-auto-update' ), $noUpdateCount ).'.</p></div>';
	}

	if( isset( $_POST['reset'] ) ) {

		$wpdb->query( " UPDATE $table_name SET onoroff = '' WHERE name = 'notUpdateList' " );
		echo '<div id="message" class="updated"><p><b>'.__('Succes', 'companion-auto-update').' &ndash;</b> '.__( 'The no-update-list has been reset, all plugins will be auto-updated from now on', 'companion-auto-update' ).'.</p></div>';
	}

	?>

	<form method="POST">

		<p>
			<input type='submit' name='submit' id='submit' class='button button-primary' value='<?php _e( "Save changes", "companion-auto-update" ); ?>'>
			<input type='submit' name='reset' id='reset' class='button button-alt' value='<?php _e( "Reset list", "companion-auto-update" ); ?>'>
		</p>

		<table class="wp-list-table widefat autoupdate striped plugins">
			<thead>
				<tr>
					<td id='cb' class='manage-column column-cb check-column'>&nbsp;</td>
					<th id='name' class='manage-column column-name column-primary'><strong><?php _e('Plugin', 'companion-auto-update'); ?></strong></th>
					<th id='description' class='manage-column column-description'><strong><?php _e('Description', 'companion-auto-update'); ?></strong></th>
				</tr>
			</thead>

			<tbody id="the-list">

			<?php 

			foreach ( get_plugins() as $key => $value ) {

				$slug 			= $key;
				$actualSlug 	= array_shift( explode( '/', $slug ) );
				$hash 			= explode( '/', $slug );
				$slug_hash 		= md5( $slug[0] );

				foreach ( $value as $k => $v ) {

					if( $k == "Name" ) $name = $v;
					if( $k == "Description" ) $description = $v;

				}

				if( in_array( $actualSlug, donotupdatelist() ) ) {

					$class 		= 'inactive';
					$checked 	= 'CHECKED';
					$status 	= __( 'Auto-updating: disabled' , 'companion-auto-update' );

				} else {
					
					$class 		= 'active';
					$checked 	= '';
					$status 	= __( 'Auto-updating: enabled' , 'companion-auto-update' );

				}

				echo '<tr id="post-'.$slug_hash.'" class="'.$class.'">

					<th scope="row" class="check-column">			
						<label class="screen-reader-text" for="cb-select-'.$slug_hash.'">Select '. $name .'</label>
						<input id="cb-select-'.$slug_hash.'" type="checkbox" name="post[]" value="'.$actualSlug.'" '.$checked.' ><label></label>
						<div class="locked-indicator"></div>
					</th>

					<td class="plugin-title column-primary">
						<strong class="plugin-name">
							'. $name .'
						</strong>
						<div class="row-actions visible status">
							'. $status .'
						</div>
					</td>

					<td class="column-description desc">
						<div class="plugin-description">
							<p>'.$description.'</p>
						</div>
					</td>

				</tr>';

			}
			?>

			</tbody>
		</table>

		<p>
			<input type='submit' name='submit' id='submit' class='button button-primary' value='<?php _e( "Save changes", "companion-auto-update" ); ?>'>
			<input type='submit' name='reset' id='reset' class='button button-alt' value='<?php _e( "Reset list", "companion-auto-update" ); ?>'>
		</p>

	</form>

<?php }

// Load admin styles
function load_cau_sytyles( $hook ) {

        if( $hook != 'tools_page_cau-settings' ) return;
        wp_enqueue_style( 'cau_admin_styles', plugins_url('backend/style.css', __FILE__) );

}
add_action( 'admin_enqueue_scripts', 'load_cau_sytyles' );

// Send e-mails
require_once('companion-auto-update-check-updates.php');

// Add settings link on plugin page
function cau_settings_link( $links ) { 

	$settings_link = '<a href="tools.php?page=cau-settings">'.__('Settings', 'companion-auto-update' ).'</a>'; 
	array_unshift( $links, $settings_link ); 
	return $links; 

}
$plugin = plugin_basename(__FILE__); 
add_filter( "plugin_action_links_$plugin", "cau_settings_link" );

// Only update plugin which are enabled
function cau_dont_update( $update, $item ) {

	$plugins = donotupdatelist();

    if ( in_array( $item->slug, $plugins ) ) {
		// Use the normal API response to decide whether to update or not
    	return $update; 
    } else {
    	// Always update plugins
    	return true; 
    } 

}

// Auto Update Class
class CAU_auto_update {

	public function __construct() {
	
        // Enable Update filters
        add_action( 'plugins_loaded', array( &$this, 'CAU_auto_update_filters' ), 1 );

    }

    public function CAU_auto_update_filters() {

		global $wpdb;
		$table_name = $wpdb->prefix . "auto_updates"; 

		// Enable for major updates
		$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'major'");
		foreach ( $configs as $config ) {

			if( $config->onoroff == 'on' ) add_filter( 'allow_major_auto_core_updates', '__return_true', 1 ); // Turn on
			if( $config->onoroff != 'on' ) add_filter( 'allow_major_auto_core_updates', '__return_false', 1 ); // Turn off

		}

		// Enable for minor updates
		$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'minor'");
		foreach ( $configs as $config ) {

			if( $config->onoroff == 'on' ) add_filter( 'allow_minor_auto_core_updates', '__return_true', 1 ); // Turn on
			if( $config->onoroff != 'on' ) add_filter( 'allow_minor_auto_core_updates', '__return_false', 1 ); // Turn off

		}

		// Enable for plugins
		$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'plugins'");
		foreach ( $configs as $config ) {

			if( $config->onoroff == 'on' ) add_filter( 'auto_update_plugin', 'cau_dont_update', 10, 2 ); // Turn on
			if( $config->onoroff != 'on' ) add_filter( 'auto_update_plugin', '__return_false', 1 ); // Turn off

		}

		// Enable for themes
		$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'themes'");
		foreach ( $configs as $config ) {
			if( $config->onoroff == 'on' ) add_filter( 'auto_update_theme', '__return_true', 1 ); // Turn on
			if( $config->onoroff != 'on' ) add_filter( 'auto_update_theme', '__return_false', 1 ); // Turn off
		}

		// Enable for translation files
		$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'translations'");
		foreach ( $configs as $config ) {
			if( $config->onoroff == 'on' ) add_filter( 'auto_update_translation', '__return_true' ); // Turn on
			if( $config->onoroff != 'on' ) add_filter( 'auto_update_translation', '__return_false' ); // Turn off
		}

		// WP Email Config
		$configs = $wpdb->get_results( "SELECT * FROM $table_name WHERE name = 'wpemail'");
		foreach ( $configs as $config ) {
			if( $config->onoroff == 'on' ) add_filter( 'auto_core_update_send_email', '__return_true' );
			if( $config->onoroff != 'on' ) add_filter( 'auto_core_update_send_email', '__return_false' );
		}
		

	}

}
new CAU_auto_update();

?>