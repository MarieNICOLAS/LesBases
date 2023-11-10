<?php
    //Fonction création d'une page statique
    function create_page(){

        //Création nouvelle page 
        $page = array(
            'post_title' => 'Formulaire de contact',
            'post_content' => '[shortcode]',
            'post_status' => 'publish',
            'post_type' => 'page'
        );

        $page_id= wp_insert_post($page); //Créer la nouvelle page

        if (!is_wp_error($page_id)){

            //Enregistre ID de la nouvelle page dans les options
            update_option('plugin_formulaire_page_id', $page_id); 
            echo "Le formulaire a été ajouté à la nouvelle page";
            
        }else{
            echo "Erreur lors de la création de la page : " . $page_id->get_error_message();
        }
    }

?>