<?php
require_once('../data.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../public/app.css" /> 
    <link rel="stylesheet" href="../public/test.css" />
</head>
<body>
    <?php
        require_once('lister_ouvrage.html.php');
        require_once('lister_rayon.html.php');
        require_once('lister_auteur.html.php');
        require_once('lister_exemplaire.html.php');
        
    ?>
</body>
</html>