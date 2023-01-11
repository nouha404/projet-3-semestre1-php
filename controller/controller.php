<?php
session_start();
$_SESSION['connect'] = 0;
require_once('models.php');
// Gere la partie connexion lors qui clique sur le bouton
if (isset($_POST['btn-save'])) {
    
    $x = $_POST['btn-save'];
    if ($x == 'connexion') {
            $role = $_POST['nom'];
            $password = $_POST['password'];
            $userRoleInDatabase = find_all_loger_role($role,$password);
            // si les infos saisis sont dans la db je recherche le user et affiche la page correspondant au lieu d'ecrire ici le mot de passe
            if($userRoleInDatabase ){
                $_SESSION['connect'] = 1;
                
                foreach($userRoleInDatabase as $user) {
                    if($user['role'] == 'rp-biblio'){
                        require_once('./views/layout/base.rb.html.php');
                    } elseif($user['role'] == 'rp-pret') {
                        require_once('./views/layout/base.rp.html.php');
                    } elseif($user['role'] == 'adherent') {
                        require_once('./views/layout/base.adr.html.php');
                    } 
                    
                } 
            } else {
                // echo "Je l'amene a la premiere page";
                echo '<h1 class="error" style="background:black;">Identifiant incorrecte</h1>';
                require_once('views/layout/base.html.php');
                // header('location:index.php?x=1');
                // exit();
            }
        }
 } else {
        // header("location:index.php?x=1");
        require_once('views/layout/base.html.php');
    }

if (isset($_GET['x'])) {
    
        $x = $_GET['x'];
    switch ($x) {

        case "1":
            require_once('./views/layout/connexion.html.php');
            break;
        case 'ouvrages':
                $ouvrages = find_all_ouvrages();
                require_once('views/layout/base.rb.html.php');
                require_once('./views/responsable_bibliotheque/lister.ouvrages.html.php');
            
            break;
        case 'rayons':
            $rayons = find_rayons_with_ouvrage_name();
            require_once('views/layout/base.rb.html.php');

            if (isset($_POST['btn-save']) == 'filtre-rayon') {
                $rayonName = $_POST['rayons'];
                $rayons = find_rayons_with_ouvrage_name_by_filtring($rayonName);
                require_once('./views/responsable_bibliotheque/lister.rayons.filtrer.html.php');
            } else {
                require_once('./views/responsable_bibliotheque/lister.rayons.html.php');
            }
            break;

        case 'prets-filter':
            require_once('views/layout/base.adr.html.php');
            if (isset($_POST['btn-save']) == 'filtre-rayon') {
                $statut = $_POST['statut'];
                $prets = find_all_pret_by_filtrer($statut);
                require_once('./views/adherent/demande.pret.filtre.html.php');
            } else {
                require_once('./views/adherent/demande.pret.html.php');
            }
            break;

        case 'auteurs':
            require_once('views/layout/base.rb.html.php');
            $authors = find_all_books_auteurs_with_them_ouvrage_name();
            require_once('./views/responsable_bibliotheque/lister.auteurs.html.php');
            break;
        case 'exemplaire':
            require_once('views/layout/base.rb.html.php');
            $exemplaires = find_all_exemplaires();
            require_once('./views/responsable_bibliotheque/lister.exemplaire.html.php');
            break;
        case 'c':
            $ouvrages = find_all_ouvrages();
            require_once('./views/responsable_bibliotheque/lister.ouvrages.html.php');
            break;
        case 'e':
            $ouvrages = find_all_ouvrages();
            require_once('./views/adherent/catalogue.html.php');
            // require_once('./views/responsable_bibliotheque/lister.ouvrages.html.php');
            break;
        case 'd':
            $pretWithExemplaires = find_exemplaire_with_pret();
            require_once('./views/adherent/demande.pret.html.php');
            break;
        case 'lb':
            require_once('views/layout/base.rp.html.php');
            $prets = find_exemplaire_with_pret();
            if (isset($_POST['btn-save']) == 'filtre-rayon') {
                $statut = $_POST['statuts'];
                $prets = find_all_pret_by_filtrer($statut);
                require_once('./views/responsable_pret/lister.prets.filter.html.php');
            } else {
                require_once('./views/responsable_pret/lister.prets.html.php');
            }
            break;
        case "-1":
            header('location:index.php'); 
            break;
    // fin swiitch case    
    }
}
// function