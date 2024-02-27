<!-- updateStatus.php -->
<?php
include_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['task_id'];
    $status = $_POST['status'];

    // Mettre à jour le statut de la tâche
    if (updateTaskStatus($taskId, $status)) {
        // Rediriger vers la liste des tâches après la modification
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur lors de la mise à jour du statut de la tâche.";
    }
} elseif (isset($_GET['task_id'])) {
    $taskId = $_GET['task_id'];
    $taskDetails = getTaskDetails($taskId);

    if (!$taskDetails) {
        echo "Aucun détail de tâche trouvé.";
        exit();
    }
} else {
    echo "ID de tâche non spécifié.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Statut - Gestion de Maintenance Vélo</title>
    <link rel="stylesheet" href="./assets/css/updateStatus.css">
</head>
<body>
    <div class="container">
        <h1>Modifier le Statut de la Tâche</h1>
        <form action="" method="post">
            <label for="status">Nouveau Statut :</label>
            <select name="status" required>
                <option value="A FAIRE">À Faire</option>
                <option value="EN COURS">En Cours</option>
                <option value="TERMINÉ">Terminé</option>
            </select>
            <input type="hidden" name="task_id" value="<?php echo $taskId; ?>">
            <br>
            <input type="submit" value="Modifier le Statut">
        </form>
    </div>
</body>
</html>
