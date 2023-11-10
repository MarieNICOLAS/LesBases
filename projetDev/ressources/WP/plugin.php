<?php
/*
    Plugin Name: Plugin Name
    Plugin URI: http://exemple.acme.com
    Description: Créer un plugin
    Author: Myo
    Author URI: http://example.acme.com
    @package Plugin 
    @version 1.0.0
*/

    defined("WPMN_DIR") or define("WPMN_DIR", ABSPATH."wp-content/plugins/pluginform/");

    //activation plugin
    require_once(WPMN_DIR."includes/utils/activation_plugin.php");
    register_activation_hook(__FILE__, 'fonction_activation_plugin');

    //desactivation plugin
    require_once(WPMN_DIR."includes/utils/wpmn_desactiv_plug.php");
    register_deactivation_hook(__FILE__, 'wpmn_desactiv_plugin');
    
    
?> 