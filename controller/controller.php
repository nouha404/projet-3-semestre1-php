<?php
    require_once('index.php');
    
    if (isset($_GET['x'])) {
        $x = $_GET['x'];
    switch ($x) {
        case "1":
            require_once('./views/layout/connexion.html.php');
            break;
        case "-1":
            header("location:index.php");
            break;

    }
}

    if (isset($_GET['btn-save'])) {
        $x = $_GET['btn-save'];
    switch ($x) {
        case 'connexion':
            require_once('./views/layout/base.rb.html.php');
            break;
    }
}

