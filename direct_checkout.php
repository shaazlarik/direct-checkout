<?php
/**
* Plugin Name: Direct Checkout
* Plugin URI: https://github.com/shaazlarik/direct-checkout
* Author: Coding Perks
* Author URI: https://github.com/shaazlarik/direct-checkout
* Description: Adding one click purchase feature
* Version: 2.0.0
* Licence: GPL2 or Later
* License URL: http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
* Text Domain: direct-checkout
**/

defined( 'ABSPATH' ) or die('Please get proper access');

include_once( plugin_dir_path( __FILE__ ) . 'direct_updater.php' );

$updater = new DirectUpdater( __FILE__ );
$updater->set_username( 'shaazlarik' );
$updater->set_repository( 'direct-checkout' );
 
$updater->authorize( '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' ); // Your auth code goes here for private repos

$updater->initialize();

?>