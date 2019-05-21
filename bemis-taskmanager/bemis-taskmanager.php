<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              bemis.bestmilano.it
 * @since             1.0.1
 * @package           Bemis_Taskmanager
 *
 * @wordpress-plugin
 * Plugin Name:       BeMIS Task Manager
 * Plugin URI:        bemis.bestmilano.it
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            BEST Milan
 * Author URI:        bemis.bestmilano.it
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bemis-taskmanager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BEMIS_TASKMANAGER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bemis-taskmanager-activator.php
 */
function activate_bemis_taskmanager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bemis-taskmanager-activator.php';
	Bemis_Taskmanager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bemis-taskmanager-deactivator.php
 */
function deactivate_bemis_taskmanager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bemis-taskmanager-deactivator.php';
	Bemis_Taskmanager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bemis_taskmanager' );
register_deactivation_hook( __FILE__, 'deactivate_bemis_taskmanager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bemis-taskmanager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bemis_taskmanager() {

	$plugin = new Bemis_Taskmanager();
	$plugin->run();

}
run_bemis_taskmanager();
