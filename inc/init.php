<?php

//Déclaration des variables
$user = "root";
$pass = "";

//Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// déclaration de variable
$content = '';

//inclusion des fichiers
require_once('functions.php');
?>