<?php
session_start();

// Vérifie si l'utilisateur est connecté et s'il est admin
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: pagedeconexion.php'); // Redirige vers la page de connexion
    exit;
}

// Récupère le nom d'utilisateur
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('images/background.png') no-repeat center center fixed; /* Image de fond */
            background-size: cover; /* L'image couvre tout l'écran */
            color: #FFD700;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8); /* Fond semi-transparent pour contraste */
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(255, 215, 0.5);
            position: relative;
        }

        /* Style du logo */
        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px; /* Taille du logo ajustable */
            height: auto;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #FFD700;
        }

        h2 {
            margin-top: 40px;
            font-size: 1.8rem;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .button-container a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 220px;
            height: 60px;
            text-align: center;
            background-color: #FFD700;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.2s ease;
            font-size: 1rem;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .button-container a:hover {
            background-color: #e6c200;
            transform: translateY(-3px);
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 30px auto;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .logout-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Logo en haut à droite -->
        <img src="images/logo.png" alt="Logo du site" class="logo">

        <h1>Bienvenue, <?php echo htmlspecialchars($username); ?> !</h1>
        <p style="text-align: center;">Vous êtes connecté en tant qu'Administrateur</p>

        <!-- Gestion des utilisateurs -->
        <h2>Gestion des utilisateurs</h2>
        <div class="button-container">
            <a href="ajouter_utilisateur.php">Ajouter un utilisateur</a>
            <a href="modifier_utilisateur.php">Modifier un utilisateur</a>
            <a href="supprimer_utilisateur.php">Supprimer un utilisateur</a>
            <a href="bloquer_utilisateur.php">Bloquer/Débloquer un utilisateur</a>
            <a href="reinitialiser_password.php">Réinitialiser mot de passe</a>
        </div>

        <!-- Gestion des œuvres et enchères -->
        <h2>Gestion des œuvres et enchères</h2>
        <div class="button-container">
            <a href="ajouter_oeuvre.php">Ajouter une œuvre</a>
            <a href="modifier_oeuvre.php">Modifier une œuvre</a>
            <a href="supprimer_oeuvre.php">Supprimer une œuvre</a>
            <a href="gerer_encheres.php">Gérer les enchères</a>
            <a href="approuver_oeuvres.php">Approuver les œuvres</a>
        </div>

        <!-- Rapports et statistiques -->
        <h2>Rapports et statistiques</h2>
        <div class="button-container">
            <a href="voir_statistiques.php">Voir les statistiques</a>
            <a href="exporter_rapports.php">Exporter les rapports</a>
            <a href="activite_utilisateurs.php">Activité des utilisateurs</a>
        </div>

        <!-- Paramètres du site -->
        <h2>Paramètres du site</h2>
        <div class="button-container">
            <a href="parametres_generaux.php">Paramètres généraux</a>
            <a href="sauvegarder_base.php">Sauvegarder la base</a>
            <a href="restaurer_base.php">Restaurer la base</a>
            <a href="gestion_roles.php">Gérer les rôles</a>
        </div>

        <!-- Bouton de déconnexion -->
        <div style="text-align: center;">
            <a href="deconexion.php" class="logout-btn">Se déconnecter</a>
        </div>
    </div>
</body>
</html>
