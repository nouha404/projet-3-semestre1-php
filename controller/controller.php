<?php
require_once('models.php');

     // Gere la partie connexion lors qui clique sur le bouton
     if (isset($_POST['btn-save'])) {
        $x = $_POST['btn-save'];
        
        switch ($x) {
            case 'connexion':
                require_once('./views/layout/base.rb.html.php');
                break;
          
        }
 } else {
        require_once('views/layout/base.html.php');
    }

    if (isset($_GET['x'])) {
        $x = $_GET['x'];
        switch ($x) {
            case "1":
                require_once('./views/layout/connexion.html.php');
                break;
            case "-1":
                header("location:index.php");
                break;
            case 'ouvrages':
                $ouvrages = find_all_ouvrages();
                
                require_once('views/layout/base.rb.html.php');
                require_once('./views/responsable_bibliotheque/lister.ouvrages.html.php');
                break;
            case 'rayons':
                $rayons = find_rayons_with_ouvrage_name();
                require_once('views/layout/base.rb.html.php');

                if(isset ($_POST['btn-save']) == 'filtre-rayon') {
                    $rayonName = $_POST['rayons'];
                    $rayons = find_rayons_with_ouvrage_name_by_filtring($rayonName);
                    require_once('./views/responsable_bibliotheque/lister.rayons.filtrer.html.php');
                } else {
                    require_once('./views/responsable_bibliotheque/lister.rayons.html.php');
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

        }
}

// function