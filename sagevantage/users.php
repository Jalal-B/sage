<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Récupérez les informations de l'utilisateur depuis la session
$username = $_SESSION['username'];
$role_id = $_SESSION['role_id'];

// Vous pouvez ajouter d'autres informations de l'utilisateur ici si nécessaire
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur - Sage et Vantage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="users.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Sage/Vantage</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="tasks.html">Tâches</a></li>
                    <li><a href="users.php">Profil</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="user-profile">
                <h2>Profil Utilisateur</h2>
                <div class="profile-info">
                    <p><strong>Nom d'utilisateur:</strong> <?php echo htmlspecialchars($username); ?></p>
                    <p><strong>Rôle:</strong> <?php echo htmlspecialchars($role_id); ?></p>
                    <!-- Ajoutez d'autres informations de l'utilisateur ici si nécessaire -->
                </div>
                <div class="profile-actions">
                    <a href="#" class="btn">Modifier le profil</a>
                    <a href="#" class="btn">Changer le mot de passe</a>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Intégration Sage et Vantage. Tous droits réservés by Bichrou Jalal Eddine.</p>
        </div>
    </footer>
</body>
</html>