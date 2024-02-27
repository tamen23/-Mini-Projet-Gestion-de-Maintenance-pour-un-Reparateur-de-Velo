<!-- addBike.php -->
<?php
include_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $type = $_POST['type'];

    // Ajouter un nouveau vélo
    if (addBike($marque, $modele, $type)) {
        // Rediriger vers la liste des vélos après l'ajout
        header("Location: liste-velos.php");
        exit();
    } else {
        echo "Erreur lors de l'ajout du vélo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Vélo - Gestion de Maintenance Vélo</title>
    <link rel="stylesheet" href="./assets/css/ajoutVelo.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un Vélo</h1>
        <form action="" method="post">
            <label for="marque">Marque :</label>
            <input type="text" name="marque" required>
            <br>
            <label for="modele">Modèle :</label>
            <input type="text" name="modele" required>
            <br>
            <label for="type">Type :</label>
            <input type="text" name="type" required>
            <br>
            <input type="submit" value="Ajouter le Vélo">
        </form>

        <a href="liste-velos.php">Retour à la Liste des Vélos</a>
    </div>
</body>
</html>
