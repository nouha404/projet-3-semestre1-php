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
        // require_once('views/layout/base.html.php');
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

    }
} 

