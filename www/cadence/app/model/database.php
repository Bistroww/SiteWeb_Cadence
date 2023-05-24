<?php

function getdb(): PDO
{
    $dsn = 'mysql:dbname=cadence;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set Errorhandling to Exception
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Set default fetch mode to array
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Disable emulated prepared statements
    } catch (PDOException $e) {
        echo 'Erreur de connxion à la base de données : ' . $e->getMessage();
    }

    return $db;
}