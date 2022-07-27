<?php
/**
* Plugin Name: Smashing Plugin
* Plugin URI: https://github.com/shaazlarik/smashing-updater-plugin
* Author: Smashing Plugin
* Author URI: https://github.com/shaazlarik/smashing-updater-plugin
* Description: Adding one click purchase feature
* Version: 1.0.4
* Licence: GPL2 or Later
* License URL: http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
* Text Domain: smashing-updater-plugin
**/

include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'shaazlarik' );
$updater->set_repository( 'smashing-updater-plugin' );
 
$updater->authorize( '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' ); // Your auth code goes here for private repos

$updater->initialize();
