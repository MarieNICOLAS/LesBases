<?php
/**
 * Retrieves the current version of the database
 *
 * @return int
 */
function wpabc_db_version()
{
    // TODO: Tu as la possibilité d'assigner une valeur par défault avec "get_option()"
    $db_version = get_option('wpabc_db_version', '0');

    if(!isset($db_version) || strlen($db_version) === '0')
    {
        update_option('wpabc_db_version', $db_version);
    }

    return intval($db_version);
}

/**
 * Performs the migration of SQL scripts from a specified directory.
 *
 * This function scans the predefined global directory for SQL files
 * and executes them on the given database connection.
 * It tracks which scripts have been executed to prevent re-execution
 * Using a wordpress option containing the current version.
 *
 * @return void
 */
function wpabc_migrate_db()
{
    $db_version = wpabc_db_version();

    // TODO: En faire une globale
    $wpabc_path_script_migrate = plugin_dir_path(__FILE__) . 'databases/migrations/';

    // TODO: Pareil
    $migrate_files = glob($wpabc_path_script_migrate . '*.sql');
    $nb_migrate_files = count($migrate_files);

    if($db_version < $nb_migrate_files)
    {
        for ($i = $db_version + 1; $i <= $nb_migrate_files; $i++)
        {
            $script_migration = file_get_contents($migrate_files[$i - 1]);
            // TODO: Tu as oublié d'executer tes scripts avec un Eval() ou require_once()
            update_option('wpabc_db_version', $i);
        }
    }
}
?>