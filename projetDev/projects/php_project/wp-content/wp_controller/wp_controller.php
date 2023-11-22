<?php
/*
 * Plugin Name: WordPress Controller ( By ActivBrowser )
 * Description: <todo description>
 * Version: 1.0.0-alpha
 * Requires at least: 4.6
 * Requires PHP: 5.6
 * Author: Marie Nicolas <marie.nicolas@axivit.com>
 */

#########################################
# Local dependencies                    #
#########################################


require_once(ABSPATH . "wp-content/plugins/wp_controller/php/utils/global.php");
require_once(WPABC_DIR . "/php/classes/wpabc_main.php");
require_once(WPABC_DIR . "/php/utils/wpabc_functions.php");

###########################################
# Installation/Uninstallation callback    #
###########################################

register_activation_hook(__FILE__, 'wpabc_activate_plugin');

###########################################
# Main                                    #
###########################################

WPABC\main::get_instance();

?>