<?php
<?php
require_once '/Users/irvinysl/Dowloads/conf.php';

try {
    $stmt = $pdo->query("SELECT 1");
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>

?>
