<?php

# -----------------------------------------
# Directories [ WPABC_DIR ]
# -----------------------------------------
defined("WPABC_DIR") or define("WPABC_DIR", ABSPATH."wp-content/plugins/wp_controller/");


$migrate_files = glob($wpabc_path_script_migrate . '*.sql');

# -----------------------------------------
# Dependency Injection
# -----------------------------------------


$wpabc_path_script_migrate = plugin_dir_path(__FILE__) . 'databases/migrations/';

?>