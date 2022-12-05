<?php
    require_once('data.php'); 

function find_all_ouvrages() {
    $ouvrages = find_ouvrage();
    foreach($ouvrages as $ouvrage => $ouvrageValue) {
        $ouvrages[] = $ouvrageValue;
    }
    return $ouvrages;

}

function find_rayons_with_ouvrage_name(): array {
    $rayons = find_rayons();
    $ouvrage_with_ouvrage_name = [];
    foreach ($rayons as $rayonsKey => $rayonsValue) {
        $ouvragesID = find_ouvrage_with_id($rayonsValue['ouvrage_id']);
        $ouvrage_with_ouvrage_name [] = [
            'id' => $rayonsValue['id'],
            'titre' => $ouvragesID['titre'],
            'rayon' => $rayonsValue['nom'],
        ];
    }
    return $ouvrage_with_ouvrage_name;
    
}

function find_ouvrage_with_id(int $id){
    $ouvrages = find_ouvrage();
    // Si id ouvrage = id rayons je recuperer le titre de ouvrage
    foreach($ouvrages as $key){
        if($key['id'] == $id) {
            return $key;
        }
    }
    return [];
}

function find_rayons_with_ouvrage_name_by_filtring(string $name): array {
    $rayons = find_rayons();
    $ouvrage_with_ouvrage_name = [];
    foreach ($rayons as $rayonsKey => $rayonsValue) {
        $ouvragesID = find_ouvrage_with_id($rayonsValue['ouvrage_id']);
        if($rayonsValue['nom'] == $name) {
            $ouvrage_with_ouvrage_name [] = [
                'id' => $rayonsValue['id'],
                'titre' => $ouvragesID['titre'],
                'rayon' => $rayonsValue['nom'],
            ];

        }
    }
    return $ouvrage_with_ouvrage_name;
}

function find_all_books_auteurs_with_them_ouvrage_name() {
    $authors = find_auteur_books();
    $all_authors = [];
    foreach($authors as $authorKey => $authorValue) {
        //si ouvrage de find_ouvrage = 'id' de find_auteur_books c'est le bon
        $ouvragesID = find_ouvrage_with_id($authorValue['ouvrage_id']);
        $all_authors[] = [
            'id' => $authorValue['id'],
            'nom' => $authorValue['nom'],
            'prenom' => $authorValue['prenom'],
            'profession' => $authorValue['profession'],
            'livre' => $ouvragesID['titre'],
        ];

    }
    return $all_authors;
}

function find_all_exemplaires() {
    $exemplaires = find_exemplaire();
    $arrayExemplaire = [];
    foreach($exemplaires as $exemplaireKey) {
        $arrayExemplaire [] = $exemplaireKey;
    }
    return $arrayExemplaire;
}
