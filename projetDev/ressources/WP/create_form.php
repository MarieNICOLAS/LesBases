<?php
    //Fonction qui affiche le formulaire
    function formulaire()
    {
        //Classe wpdb pour communiquer avec table 
        global $wpdb;

        //Affichage du formulaire de contact
        $formulaire = '
        <form method="post" action="">
            <label for="nom">Nom :</label>
            <input type="text" name="nom"><br>

            <label for="mail">Mail :</label>
            <input type="email" name="mail"><br>

            <input type="submit" value="Valider">
        </form>
        ';

        //Afficher le formulaire
        echo "$formulaire";

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $nom = sanitize_text_field($_POST['nom']);
            $mail = sanitize_email($_POST['mail']);
    
            if (empty($nom) || empty($mail))
            {
                echo "Veuillez remplir tous les champs du formulaire.";
            } 
            else 
            {
                // Enregistrement des données du formulaire dans la base de données
                $table_name = $wpdb->prefix . 'user_contact';
    
                $wpdb->insert(
                    $table_name,
                    array(
                        'nom' => $nom,
                        'mail' => $mail
                    )
                );
            }
        }

    }
    

?>