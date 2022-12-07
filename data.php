<?php

function find_login(): array{
    return [
        ['id'=> 1, 'role' => 'rp-biblio', 'password' => 'admin'],
        ['id'=> 2, 'role' => 'rp-pret', 'password' => 'passer'],
        ['id'=> 4, 'role' => 'adherent', 'password' => 'passer'],
    ];
    
}

function find_ouvrage(): array {
    return [
        ['id' => 1,'titre' => 'Harry Poter',"date-d'édition" => '10/01/2017'],
        ['id' => 2,'titre' => "Les zinzins de l'espace","date-d'édition" => '12/01/2017'],
        ['id' => 3,'titre' => 'Naruto Shippuden',"date-d'édition" => '10/02/2018'],
        ['id' => 4,'titre' => 'One Piece',"date-d'édition" => '10/05/1998'],
        ['id' => 5,'titre' => 'Demon Slayer',"date-d'édition" => '16/07/2021'],
        ['id' => 6,'titre' => 'Vol de Nuit',"date-d'édition" => '09/07/2018'],
        ['id' => 7,'titre' => "Sous l'Orage","date-d'édition" => '18/12/2007'],
        
    ];

}

function find_rayons() : array{
    return [
        ['id' => 1,'ouvrage_id' => 1, 'nom' => 'Fantasy'],
        ['id' => 2,'ouvrage_id' => 2, 'nom' => 'Litterature'],
        ['id' => 3,'ouvrage_id' => 3, 'nom' => 'Shonen'],
        ['id' => 4,'ouvrage_id' => 4, 'nom' => 'Shonen'],
        ['id' => 5,'ouvrage_id' => 5, 'nom' => 'Shonen'],
        ['id' => 6,'ouvrage_id' => 6, 'nom' => 'Roman'],
        ['id' => 7,'ouvrage_id' => 7, 'nom' => 'Litterature'],
    ];

}

function find_auteur_books() {
    return [
        ['id' => 1,'nom' => 'J.K', 'prenom' => 'Rowling', 'profession' => 'Ecrivain', 'ouvrage_id' => 1],
        ['id' => 2,'nom' => 'Phillippe', 'prenom' => 'Traversat', 'profession' => 'Créateur programme', 'ouvrage_id' => 2 ],
        ['id' => 3,'nom' => 'Kishimoto', 'prenom' => 'Masashi', 'profession' => 'Mangaka', 'ouvrage_id' => 3],
        ['id' => 4,'nom' => 'Oda', 'prenom' => 'Eiichiro', 'profession' => 'Mangaka', 'ouvrage_id' => 4],
        ['id' => 5,'nom' => 'Gotoge', 'prenom' => 'Koyoharu', 'profession' => 'Mangaka', 'ouvrage_id' => 5],
        ['id' => 6,'nom' => 'Antoine', 'prenom' => 'de Saint-Exupéry', 'profession' => 'Ecrivain', 'ouvrage_id' => 6],
        ['id' => 7,'nom' => 'Badian', 'prenom' => 'Seydou', 'profession' => 'Ecrivain', 'ouvrage_id' => 7],
    ];

}

function find_exemplaire() {
    return [
        ['id' => 1, 'date-enregistrement' => '24/10/2022'],
        ['id' => 2, 'date-enregistrement' => '25/07/2022'],
        ['id' => 3, 'date-enregistrement' => '12/02/2022'],
        ['id' => 4, 'date-enregistrement' => '17/09/2022'],
        ['id' => 5, 'date-enregistrement' => '08/05/2022'],
        ['id' => 6, 'date-enregistrement' => '03/12/2022'],
        ['id' => 7, 'date-enregistrement' => '09/11/2022']
    ];

}

function find_pret() {
    return [
        ['id' => 1,'date-retour' => '30/11/2022', 'id_exemplaire' => 1, 'statut' => 'retourner'],
        ['id' => 2,'date-retour' => '10/01/2022', 'id_exemplaire' => 2, 'statut' => 'retourner'],
        ['id' => 3,'date-retour' => '15/05/2022', 'id_exemplaire' => 3, 'statut' => 'en-cours'],
        ['id' => 4,'date-retour' => '28/09/2022', 'id_exemplaire' => 4, 'statut' => 'retourner'],
        ['id' => 5,'date-retour' => '15/10/2022', 'id_exemplaire' => 5, 'statut' => 'en-cours'],
        ['id' => 6,'date-retour' => '16/10/2022', 'id_exemplaire' => 6, 'statut' => 'retourner'],
        ['id' => 7,'date-retour' => '17/10/2022', 'id_exemplaire' => 7, 'statut' => 'en-cours'],
    ];

}