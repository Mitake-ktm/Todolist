<?php
// ============================
// Configuration of the MySQL connection
// ============================

$host = "localhost";
$dbname = "todolist";
$username = "root";
$password = "";

// ============================
// Connection with PDO
// ============================

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Activer les erreurs PDO (debug)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
