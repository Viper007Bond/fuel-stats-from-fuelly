<?php /*

**************************************************************************

Plugin Name:  Fuel Stats From Fuelly
Description:
Plugin URI:   https://alex.blog/wordpress-plugins/
Version:      1.0.0
Author:       Alex Mills (Viper007Bond)
Author URI:   https://alex.blog/
Text Domain:  fuel-stats-from-fuelly
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html

**************************************************************************/

/**
 * Main plugin class.
 *
 * @since 1.0.0
 */
class Fuel_Stats_From_Fuelly {
	/**
	 * The single instance of this plugin.
	 *
	 * @see    Fuel_Stats_From_Fuelly()
	 *
	 * @access private
	 * @var    Fuel_Stats_From_Fuelly
	 */
	private static $instance;

	/**
	 * Constructor. Doesn't actually do anything as instance() creates the class instance.
	 */
	private function __construct() {
	}

	/**
	 * Prevents the class from being cloned.
	 */
	public function __clone() {
		wp_die( "Please don't clone Fuel_Stats_From_Fuelly" );
	}

	/**
	 * Prints the class from being unserialized and woken up.
	 */
	public function __wakeup() {
		wp_die( "Please don't unserialize/wakeup Fuel_Stats_From_Fuelly" );
	}

	/**
	 * Creates a new instance of this class if one hasn't already been made
	 * and then returns the single instance of this class.
	 *
	 * @return Fuel_Stats_From_Fuelly
	 */
	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new Fuel_Stats_From_Fuelly;
			self::$instance->setup();
		}

		return self::$instance;
	}

	/**
	 * Register all of the needed hooks and actions.
	 */
	public function setup() {

	}
}

/**
 * Returns the single instance of this plugin, creating one if needed.
 *
 * @return Fuel_Stats_From_Fuelly
 */
function Fuel_Stats_From_Fuelly() {
	return Fuel_Stats_From_Fuelly::instance();
}

/**
 * Initialize this plugin once all other plugins have finished loading.
 */
add_action( 'init', 'Fuel_Stats_From_Fuelly' );