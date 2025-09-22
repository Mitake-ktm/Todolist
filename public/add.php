<?php
require_once '../config/config.php';

if (!empty($_POST['description'])) {
    $desc = $_POST['description'];
    $stmt = $pdo->prepare("INSERT INTO tasks (user_id, description) VALUES (?, ?)");
    $stmt->execute([1, $desc]);
}

header("Location: index.php");
exit;