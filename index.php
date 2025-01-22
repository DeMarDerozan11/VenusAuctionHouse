<?php
session_start();
include_once 'conf.php'; // Assure-toi que le chemin est correct

// Initialiser la connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifie si une page est spécifiée dans l'URL
if (!isset($_GET['page'])) {
    // Par défaut, charge APP.php si aucune page n'est spécifiée
    include 'APP.php';
    exit;
}

// Récupérer le nom de la page spécifiée
$page = $_GET['page'];

// Sécuriser le chemin pour éviter les inclusions non autorisées
$page = basename($page); // Extrait uniquement le nom du fichier, par exemple "APP.php"

// Vérifie si le fichier existe
if (file_exists($page)) {
    include $page; // Charge dynamiquement la page demandée
} else {
    // Si la page demandée n'existe pas, affiche une erreur 404
    http_response_code(404);
    echo "Page non trouvée.";
}
?>

