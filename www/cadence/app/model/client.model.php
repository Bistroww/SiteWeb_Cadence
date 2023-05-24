<?php

// Crer une fonction qui ajoute un client avec un nom, un prénom, une date de naissance, adresse et un email avec une requête préparée et qui retourne l'id du client
function addClient(string $nom, string $prenom, string $date_naissance, string $adresse, string $email, PDO $db)
{
    $db = getdb();
    $sql = 'INSERT INTO client (nom_client, prenom_client, date_naissance_client, adresse_client, email_client) VALUES (:nom, :prenom, :date_naissance, :adresse, :email)';
    $query = $db->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $client = $query->fetchAll();
    return $client;
}
