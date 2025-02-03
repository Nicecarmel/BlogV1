<?php
$host = "localhost"; // Adresse du serveur MySQL
$dbname = "blogv1"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe (vide par défaut sur XAMPP)

try {
    // Création d'une nouvelle instance de PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo "Connexion réussie !"; // Pour tester si la connexion fonctionne
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
