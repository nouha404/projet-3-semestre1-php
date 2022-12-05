<?php
    require_once('data.php'); 

function find_all_ouvrages() {
    $ouvrages = find_ouvrage();

    foreach($ouvrages as $ouvrage => $ouvrageValue) {
        $ouvrages[] = $ouvrageValue;
    }
    return $ouvrages;

}
// find_all_ouvrages();