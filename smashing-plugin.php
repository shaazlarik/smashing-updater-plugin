<?php 
/*
	Plugin Name: Smashing Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.0
	Author: Matthew Ray
	Author URI: http://www.matthewray.com
*/

include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'shaazlarik' );
$updater->set_repository( 'smashing-updater-plugin' );
 
$updater->authorize( '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' ); // Your auth code goes here for private repos

$updater->initialize();
