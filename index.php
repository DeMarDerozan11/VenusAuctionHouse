<?php


// Vérifier si une page est spécifiée dans l'URL
if (!isset($_GET['page'])) {
    // Si aucune page n'est spécifiée, redirige vers APP.php
    header('Location: ?page=APP.php');
    exit;
}

// Récupérer le nom de la page spécifiée
$page = $_GET['page'];

// Sécuriser le chemin pour éviter les inclusions non autorisées
$page = basename($page); // Extrait uniquement le nom du fichier (ex : APP.php)

// Vérifie si le fichier demandé existe
if (file_exists($page)) {
    require_once $page; // Charge dynamiquement la page demandée
} else {
    // Si le fichier n'existe pas, retourne une erreur 404
    http_response_code(404);
    echo "Page non trouvée.";
}
?>
