<?php

    //Fonction de création de pages statiques lors de l'installation du plugin
    function create_db(){
        //Classe wpdb pour communiquer avec table 
        global $wpdb;

        //Nom table : préfixe de la table wp attributé au site + nom de la table
        $table_name = $wpdb->prefix . 'name_b';

        //Création de la table
        $sql = "CREATE TABLE $table_name(
                id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                nom VARCHAR(255) NOT NULL,
                mail VARCHAR(255) NOT NULL        
        )";

        //Inclure le fichier néceessaire pour exécuter la requête SQL
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        //Exécution requête création table SQL 
        dbDelta($sql);

        return var_dump($table_name);
    }


?>
