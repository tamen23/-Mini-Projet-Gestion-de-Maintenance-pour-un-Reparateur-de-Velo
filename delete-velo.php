<!-- deleteBike.php -->
<?php
include_once '../fonction/functions.php';

if (isset($_GET['bike_id'])) {
    $bikeId = $_GET['bike_id'];

    // Supprimer le vélo et ses tâches associées en cascade
    if (deleteBikeAndTasks($bikeId)) {
        // Rediriger vers la liste des vélos après la suppression
        header("Location: liste-velos.php");
        exit();
    } else {
        echo "Erreur lors de la suppression du vélo et de ses tâches associées.";
    }
} else {
    echo "ID de vélo non spécifié.";
}
?>
