<?php
require_once '../config/config.php';
echo "Database connexion ok <br>";


$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8"/>
        <title>To Do List</title>
        <link rel="stylesheet" href="assets/style.css">
</head>
    <body>
        <h1>To do list</h1>

        <!-- Form add task -->
        <form action="add.php" method="post">
            <input type="text" name="description" placeholder="Ajouter une tache" required>
            <button type="submit">Ajouter</button>
        </form>

        <!-- List of tasks -->
         <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <?= htmlspecialchars($task['description']) ?>
                    [<a href="update.php?id=<?= $task['id'] ?>">Fait</a>] 
                    [<a href="delete.php?id=<?= $task['id'] ?>">Suprimer</a>]
                </li>
            <?php endforeach; ?>
         </ul>
    </body>
</html>