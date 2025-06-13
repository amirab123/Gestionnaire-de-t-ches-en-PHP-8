<?php
$taches = json_decode(file_get_contents("taches.json"), true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestionnaire de tâches</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>📝 Mes tâches</h1>

    <form action="ajouter.php" method="post">
        <input type="text" name="tache" placeholder="Nouvelle tâche" required>
        <button type="submit">Ajouter</button>
    </form>
<body>
    <div class="container">
        <h1>📝 Mes tâches</h1>
     
    </div>
</body>
    <ul>
        <?php foreach ($taches as $index => $tache) : ?>
            <li>
                <span style="<?= $tache['terminee'] ? 'text-decoration: line-through;' : '' ?>">
                    <?= htmlspecialchars($tache['nom']) ?>
                </span>
                <?php if (!$tache['terminee']) : ?>
                    <a href="terminer.php?index=<?= $index ?>">✅</a>
                <?php endif; ?>
                <a href="supprimer.php?index=<?= $index ?>">🗑️</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
