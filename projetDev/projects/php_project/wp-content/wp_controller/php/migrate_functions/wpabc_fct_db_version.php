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

?>