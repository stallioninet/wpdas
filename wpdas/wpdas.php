<?php 
/**
 * Plugin Name:       Delivery Availability Search
 * Plugin URI:        https://example.com/plugins/wpdas/
 * Description:       A simple WordPress plugin which manages Delivery Zones and Zip codes of service companies.
 * Version:           1.0.0
 * Requires at least: 5.4
 * Requires PHP:      7.2
 * Author:            STALLIONi Net Solutions
 * Author URI:        https://stallioni.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpdas
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

if( !defined( 'WPDAS_VER' ) )
	define( 'WPDAS_VER', '1.0.0' );

global $wpdas_db_version;

$wpdas_db_version = '1.0';

define('WPDAS_DIR', plugin_dir_path( __FILE__ ));

define('WPDAS_URL', plugin_dir_url( __DIR__ ));


add_action( 'init', 'wpdas_load_textdomain' );

/**
 * Load plugin textdomain.
 */
function wpdas_load_textdomain() {
  load_plugin_textdomain( 'wpdas', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

register_activation_hook( __FILE__, 'wpdas_activation_plugin');

register_deactivation_hook( __FILE__, 'wpdas_deactivation_plugin');

// trigger the function when activate the plugin //
function wpdas_activation_plugin(){

	global $wpdb;

	global $wpdas_db_version;

	$table_name = $wpdb->prefix . 'zipcode_gallons';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		id bigint(20) NOT NULL AUTO_INCREMENT,
		city varchar(100) NOT NULL,
		tax_group varchar(100) NOT NULL,
		zipcode int(10) NOT NULL,
		boiler varchar(100) NOT NULL,
		fuel varchar(100) NOT NULL,
		quantity int(11) NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

	dbDelta( $sql );

	add_option( 'wpdas_db_version', $wpzg_db_version );

	require plugin_dir_path( __FILE__ ) . 'includes/wpdas-sample-data.php';

    // Set default content to Fuel & Boil Service //
    if (FALSE === get_option('wpdas_fuel_boil_text') && FALSE === update_option('wpdas_fuel_boil_text',FALSE)){
        $default_value = 'YES, WE DELIVER FUEL TO THIS ZIP CODE! MINIMUM DELIVERY IS 150 GALLONS. WE ALSO DO BOILER
        SERVICE TO YOUR AREA. PLEASE CLICK THE LINK BELOW TO CREATE AN ACCOUNT & ORDER
        FUEL/REQUEST BOILER SERVICE';
        add_option('wpdas_fuel_boil_text', $default_value);
    }

    // Set default content to Only fuel service //
    if (FALSE === get_option('wpdas_fuel_text') && FALSE === update_option('wpdas_fuel_text',FALSE)){
        $default_value = 'YES, WE DELIVER FUEL TO THIS ZIP CODE. THE MINIMUM DELIVERY IS 350 GALLONS OR MORE.
        UNFORTUNETLY, WE DO NOT OFFER BOILER SERVICE IN YOUR AREA. PLEASE CLICK THE LINK BELOW TO
        CREATE AN ACCOUNT & ORDER FUEL';
        add_option('wpdas_fuel_text', $default_value);
    }

    // Set default content to Fuel & Boil service if not available //
    if (FALSE === get_option('wpdas_no_boil_fuel_text') && FALSE === update_option('wpdas_no_boil_fuel_text',FALSE)){
        $default_value = 'YOUR ZIP CODE DOES NOT APPEAR IN THE DELIVERY ZONE, PLEASE CALL OFFICE TO VERIFY. WE MIGHT
        BE ABLE TO ACCOMMODATE A DELIVERY';
        add_option('wpdas_no_boil_fuel_text', $default_value);
    }

}

//trigger the function when deactivate the plugin //
function wpdas_deactivation_plugin(){
		
}

require plugin_dir_path( __FILE__ ) . 'includes/wpdas-functions.php';