<?php
require_once '../config/config.php';

if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $pdo->prepare("SELECT done FROM tasks WHERE id = ?");
    $stmt->execute([$id]);
    $task = $stmt->fetch();

    if ($task) {
        $newStatus = $task['done'] ? 0 : 1;
        $update = $pdo->prepare("UPDATE tasks SET done = ? WHERE id = ?");
        $update->execute([$newStatus, $id]);
    }
}

header("Location: index.php");
exit;