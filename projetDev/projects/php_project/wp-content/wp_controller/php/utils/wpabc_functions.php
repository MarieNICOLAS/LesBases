<?php

/**
 * Callback called on plugin activation
 *
 * @return void
 */
function wpabc_activate_plugin()
{
    // TODO: Instancier les variables dans des fonctions utilisant la "memoization"
    // source: https://fr.wikipedia.org/wiki/M%C3%A9mo%C3%AFsation
    // TODO: J'ai retiré le double appel du hook 'admin_init'
    wpabc_migrate_db();
}

/**
 * Append database version (page)
 *
 * @return void
 */
function wpabc_add_admin_menu_db()
{
    if($_GET['debug'] === '1')
    {
        
    }
    
}

add_action('admin_menu', 'wpabc_add_admin_menu_db');

/**
   * Render database version (page)
   *
   * @return void
   */
function wpabc_db_version_page()
{
    ?>
    <div class="wrap">
        <h2>Configurer la version de la Base de Données</h2>
        <form action="" method="post">
            <?php
            // Récupération de la version actuelle
            $version_db = get_option('wpabc_db_version');
            ?>
            <label for="new_version">Nouvelle version de la base de données :</label>
            <input type="text" id="new_version" name="new_version" value="<?php echo esc_attr($version_db); ?>" />
            <p>Entrez la nouvelle version de la base de données</p>
            <input type="submit" class="button-primary" value="Enregistrer" />
        </form>
    </div>
    <?php
}

/**
 * Fonction gérant la soumission du formulaire
 * 
 * @return void
 */
function wpabc_gestion_form_version_db()
{
    if (isset($_POST['new_version'])) {
        $new_version = sanitize_text_field($_POST['new_version']);
        update_option('wpabc_db_version', $new_version);
    }
}

add_action('admin_init', 'wpabc_gestion_form_version_db');


?>