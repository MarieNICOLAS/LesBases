<?php
//Fonction autoloader perso namespace "WPABC"
function wpabc_autoloader($class)
{
    //Vérification si la classe appartient à WPAbc
    if (strpos($class, 'WPABC\\') === 0)
    {
        $class = str_replace('WPABC\\', '', $class);
        $class_file = WPABC_DIR . '/php/classes/' . str_replace('\\','/', $class) . '.php';

        //Inclure le fichier de classe s'il existe
        if (file_exists($class_file))
        {
            include_once $class_file;
        }
    }
}
//Enregistrer la fonction d'autoloader
spl_autoload_register('wpabc_autoloader');
?>



        
        
