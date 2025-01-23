<?php
include_once 'conf.php';
// Vérifie si le fichier APP.php existe
if (file_exists('APP.php')) {
    // Redirection vers APP.php
    header('Location: APP.php');
    exit;
} else {
    // Affiche un message d'erreur si APP.php est introuvable
    echo "Erreur : Le fichier APP.php est introuvable.";
    exit;
}
?>
