<?php
<?php
require_once '/Users/irvinysl/Documents/site/conf.php';

try {
    $stmt = $pdo->query("SELECT 1");
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>

?>
