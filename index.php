<?php
// Inclure conf.php pour toutes les pages
require_once '/Users/irvinysl/site/conf.php';

// Récupérer le fichier demandé
$page = isset($_GET['page']) ? $_GET['page'] : 'APP.php';

// Vérifie si le fichier demandé existe
if (file_exists($page)) {
    require_once $page;
} else {
    http_response_code(404);
    echo "Page non trouvée.";
}

?>
