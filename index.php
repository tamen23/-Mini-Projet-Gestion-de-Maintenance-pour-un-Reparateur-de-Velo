<!-- index.php -->
<?php
include_once 'functions.php';

$tasks = getTasks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion de Maintenance Vélo</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Liste des Tâches de Maintenance</h1>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    Tâche <?php echo $task['id_tache']; ?> - <?php echo $task['descriptions']; ?>
                    (Statut : <?php echo $task['statut']; ?>)
                    <a href="details-velo.php?bike_id=<?php echo $task['id_velo']; ?>">Détails du Vélo</a>
                    <a href="updateStatus.php?task_id=<?php echo $task['id_tache']; ?>">Modifier le Statut</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <a class="button" href="ajouter-tache.php">Ajouter une Tâche</a>
        <a class="button" href="liste-velos.php">Voir la Liste des Vélos</a>
    </div>
</body>
</html>
