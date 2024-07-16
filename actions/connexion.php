<?php
// Informations de connexion à la base de données
$servername = "db";
$username = "root";
$password = "my-secret-pw";
$dbname = "ufcbanking";

try {
    // Créer une nouvelle connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur de PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
    die("Erreur lors de la connexion à la base de données : " . $e->getMessage());
}

