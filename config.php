<?php
$host = 'dpg-d0npiqqli9vc73882atg-a.oregon-postgres.render.com';
$db   = 'gtweb_db';
$user = 'gtweb_db_user';
$pass = 'pjL83uSyzTTzifF79ZYuSGmomiXlGPwp';
$port = '5432';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
