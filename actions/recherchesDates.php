<?php

require_once'actions/connexion.php';

try {
    // Requête pour sélectionner toutes les données de la table notification
    $sql = "SELECT * FROM notificationReleve";

    // Préparer et exécuter la requête
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Récupérer tous les résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_POST['valider'])){
      $sql = $conn->prepare("SELECT * FROM notificationReleve WHERE dateEnvoi BETWEEN ? AND ? ");
      $sql->execute(array($_POST['dateDebut'], $_POST['dateFin']));
      $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    

} catch(PDOException $e) {
    die("Erreur lors de la connexion à la base de données : " . $e->getMessage());
}

// Fermer la connexion
$conn = null;

