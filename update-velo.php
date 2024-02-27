<!-- update-velo.php -->
<?php
include_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bikeId = $_POST['id_velo'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $type = $_POST['type'];

    // Mettre à jour les détails du vélo
    if (updateBikeDetails($bikeId, $marque, $modele, $type)) {
        // Rediriger vers la liste des vélos après la modification
        header("Location: liste-velos.php");
        exit();
    } else {
        echo "Erreur lors de la mise à jour des détails du vélo.";
    }
} elseif (isset($_GET['bike_id'])) {
    $bikeId = $_GET['bike_id'];
    $bikeDetails = getBikeDetails($bikeId);

    if (!$bikeDetails) {
        echo "Aucun détail de vélo trouvé.";
        exit();
    }
} else {
    echo "ID de vélo non spécifié.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Vélo - Gestion de Maintenance Vélo</title>
    <link rel="stylesheet" href="./assets/css/updateVelo.css">
</head>
<body>
    <div class="container">
        <h1>Modifier le Vélo</h1>
        <form action="" method="post">
            <label for="marque">Marque :</label>
            <input type="text" name="marque" value="<?php echo $bikeDetails['marque']; ?>" required>
            <br>
            <label for="modele">Modèle :</label>
            <input type="text" name="modele" value="<?php echo $bikeDetails['modele']; ?>" required>
            <br>
            <label for="type">Type :</label>
            <input type="text" name="type" value="<?php echo $bikeDetails['types']; ?>" required>
            <br>
            <input type="hidden" name="id_velo" value="<?php echo $bikeId; ?>">
            <input type="submit" value="Modifier le Vélo">
        </form>

        <a href="liste-velos.php">Retour à la Liste des Vélos</a>
    </div>
</body>
</html>
