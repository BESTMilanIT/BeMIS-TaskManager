<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       bemis.bestmilano.it
 * @since      1.0.0
 *
 * @package    Bemis_Taskmanager
 * @subpackage Bemis_Taskmanager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bemis_Taskmanager
 * @subpackage Bemis_Taskmanager/includes
 * @author     BEST Milan <it.resp@bestmilano.it>
 */
class Bemis_Taskmanager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bemis-taskmanager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
