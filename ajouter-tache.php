<!-- addTask.php -->
<?php
include_once 'functions.php';

// Récupérer la liste des vélos existants
$bikes = getBikes();

// Traitement du formulaire lors de la soumission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];
    $bikeId = $_POST['bike_id'];
    $status = $_POST['status'];
    
    // Ajouter la tâche
    if (addTask($description, $bikeId, $status)) {
        // Rediriger vers la liste des tâches après l'ajout
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur lors de l'ajout de la tâche.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de Tâches - Gestion de Maintenance Vélo</title>
    <link rel="stylesheet" href="./assets/css/ajoutTache.css">
</head>
<body>
    <div class="container">
        <h1>Ajout de Tâches</h1>
        <form action="" method="post">
            <label for="description">Description de la tâche :</label>
            <input type="text" name="description" required>
            <br>
            <label for="bike_id">ID du Vélo :</label>
            <!-- Liste déroulante pour les vélos -->
            <select name="bike_id" required>
                <?php foreach ($bikes as $bike): ?>
                    <option value="<?php echo $bike['id_velo']; ?>"><?php echo $bike['marque'] . ' ' . $bike['modele']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="status">Statut de la Tâche :</label>
            <!-- Liste déroulante pour le statut -->
            <select name="status" required>
                <option value="A FAIRE">À Faire</option>
                <option value="EN COURS">En Cours</option>
                <option value="TERMINÉ">Terminé</option>
            </select>
            <br>
            <input type="submit" value="Ajouter la Tâche">
        </form>
    </div>
</body>
</html>
