<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Admin - Tableau de bord</title></head>
<body>
    <h2>Bienvenue, Admin</h2>
    <p>Vous êtes connecté à votre tableau de bord.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
