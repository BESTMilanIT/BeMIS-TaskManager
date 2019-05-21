<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       bemis.bestmilano.it
 * @since      1.0.0
 *
 * @package    Bemis_Taskmanager
 * @subpackage Bemis_Taskmanager/public
 */
//
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Bemis_Taskmanager
 * @subpackage Bemis_Taskmanager/public
 * @author     BEST Milan <it.resp@bestmilano.it>
 */
class Bemis_Taskmanager_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_shortcode( 'Bemis_Taskmanager_page',array('Bemis_Taskmanager_Public','Bemis_Taskmanager_init') );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bemis_Taskmanager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bemis_Taskmanager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 wp_enqueue_style('gmaterial_style_1', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css', array(), $this->version, 'all' );
		 wp_enqueue_style('gmaterial_style_2', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), $this->version, 'all' );
		 wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bemis-taskmanager-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bemis_Taskmanager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bemis_Taskmanager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 //
		 wp_enqueue_script('gmaterial_script', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js');
		 wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bemis-taskmanager-public.js', array( 'jquery' ), $this->version, false );

	}
	public static function Bemis_Taskmanager_init(){
		if(is_user_logged_in()){
			include plugin_dir_path(__FILE__).'partials/Bemis_Taskmanager_routes.php';
		}
	}

}
