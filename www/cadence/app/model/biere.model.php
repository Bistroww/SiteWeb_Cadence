<?php

// Crer une fonction qui retourne un tableau contenant toutes les bières
function getBieresByName(string $nom, PDO $db)
{
    $db = getdb();
    $sql = 'SELECT * FROM biere WHERE nom_biere = :nom';
    $query = $db->prepare($sql);
    $query->bindValue(':nom', $nom . "%", PDO::PARAM_STR);
    $query->execute();
    $bieres = $query->fetchAll();
    return $bieres;
}




// Crer une fonction qui ajoute une bière avec un nom, un type, une brasserie, un pays et un goût avec une requête préparée
function addBiere(string $nom, string $type, string $brasserie, string $pays, string $gout, PDO $db)
{
    $db = getdb();
    $sql = 'INSERT INTO biere (nom_biere, type_biere, brasserie_biere, pays_biere, gout_biere) VALUES (:nom, :type, :brasserie, :pays, :gout)';
    $query = $db->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':type', $type, PDO::PARAM_STR);
    $query->bindValue(':brasserie', $brasserie, PDO::PARAM_STR);
    $query->bindValue(':pays', $pays, PDO::PARAM_STR);
    $query->bindValue(':gout', $gout, PDO::PARAM_STR);
    $query->execute();
    $biere = $query->fetchAll();
    return $biere;
}


//function addBiere(string $nom, string $type, PDO $db)
//{
//    $db = getdb();
//    $sql = 'INSERT INTO biere (nom_biere, type_biere) VALUES (:nom, :type)';s
//    $query = $db->prepare($sql);
//    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
//    $query->bindValue(':type', $type, PDO::PARAM_STR);
//    $query->execute();
//}