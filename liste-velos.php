<!-- bikeList.php -->
<?php
include_once 'functions.php';

$bikes = getBikes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Vélos - Gestion de Maintenance Vélo</title>
    <link rel="stylesheet" href="./assets/css/listeVelo.css">
</head>
<body>
    <div class="container">
        <h1>Liste des Vélos</h1>
        <ul>
            <?php foreach ($bikes as $bike): ?>
                <li>
                    Vélo <?php echo $bike['id_velo']; ?> - <?php echo $bike['marque'] . ' ' . $bike['modele']; ?>
                    (Type : <?php echo $bike['types']; ?>)
                    <a href="update-velo.php?bike_id=<?php echo $bike['id_velo']; ?>">Modifier ce Vélo</a>
                    <a href="delete-velo.php?bike_id=<?php echo $bike['id_velo']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce vélo et toutes ses tâches associées ?')">Supprimer ce Vélo</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <button onclick="window.location.href='index.php'">Retour à la Liste des Tâches</button>
        <button onclick="window.location.href='ajouter-velo.php'">Ajouter un Vélo</button>
    </div>
</body>
</html>
