<!-- details.php -->
<?php
include_once 'functions.php';

if (isset($_GET['bike_id'])) {
    $bikeId = $_GET['bike_id'];
    $bikeDetails = getBikeDetails($bikeId);
    
    if ($bikeDetails) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Détails du Vélo - Gestion de Maintenance Vélo</title>
            <link rel="stylesheet" href="./assets/css/detailsVelo.css">
        </head>
        <body>
            <div class="container">
                <h1>Détails du Vélo</h1>
                <ul>
                    <li><strong>Marque :</strong> <?php echo $bikeDetails['marque']; ?></li>
                    <li><strong>Modèle :</strong> <?php echo $bikeDetails['modele']; ?></li>
                    <li><strong>Type de Vélo :</strong> <?php echo $bikeDetails['types']; ?></li>
                    <!-- Ajoutez d'autres détails du vélo ici en fonction de votre structure de base de données -->
                </ul>
                <a href="index.php">Retour à la Liste des Tâches</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Aucun détail de vélo trouvé.";
    }
} else {
    echo "ID de vélo non spécifié.";
}
?>
