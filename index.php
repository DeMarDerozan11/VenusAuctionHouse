<?php
// Inclure conf.php pour toutes les pages
require_once '/Users/irvinysl/site/conf.php';

// Récupérer le chemin de la page demandée
$page = isset($_GET['page']) ? $_GET['page'] : 'APP.php';

// Sécuriser le chemin pour éviter l'accès à des fichiers non désirés
$page = basename($page); // Extrait uniquement le nom du fichier

// Vérifie si le fichier existe avant de l'inclure
if (file_exists($page)) {
    require_once $page;
} else {
    http_response_code(404);
    echo "Page non trouvée.";
}


?>
