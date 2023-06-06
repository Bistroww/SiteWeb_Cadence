<?php

function getdb(): PDO
{
    $dsn = 'mysql:dbname=' .DB_NAME. ';host=' .DB_HOST. ';charset=utf8';

    try {
        $db = new PDO($dsn, DB_USER, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set Errorhandling to Exception
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Set default fetch mode to array
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Disable emulated prepared statements
    } catch (PDOException $e) {
        die ('Erreur de connxion à la base de données : ' . $e->getMessage());
    }

    return $db;
}



function GetBiere(PDO $db)
{
    $db = getdb();
    $sql = 'SELECT * FROM biere';
    $query = $db->prepare($sql);
    $query->execute();
    $bieres = $query->fetchAll(PDO::FETCH_ASSOC);;
    return $bieres;
    var_dump($bieres);
}

function GetClient(PDO $db)
{
    $db = getdb();
    $sql = 'SELECT * FROM client';
    $query = $db->prepare($sql);
    $query->execute();
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);;
    return $clients;
    var_dump($clients);
}