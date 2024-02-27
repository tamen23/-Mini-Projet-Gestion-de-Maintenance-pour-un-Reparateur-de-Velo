<!-- functions.php -->
<?php
include_once 'db.php';

// Fonction pour récupérer la liste des tâches
function getTasks() {
    global $conn;
    $sql = "SELECT * FROM taches_maintenance";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Fonction pour ajouter une nouvelle tâche
function addTask($description, $bikeId) {
    global $conn;
    $sql = "INSERT INTO taches_maintenance (descriptions, id_velo, statut) VALUES ('$description', $bikeId, 'A FAIRE')";
    return $conn->query($sql);
}

// Fonction pour mettre à jour le statut d'une tâche
function updateTaskStatus($taskId, $status) {
    global $conn;
    $sql = "UPDATE taches_maintenance SET statut='$status' WHERE id_tache=$taskId";
    return $conn->query($sql);
}

function getTaskDetails($taskId) {
    global $conn;
    $sql = "SELECT * FROM taches_maintenance WHERE id_tache=$taskId";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}




// Fonction pour récupérer les détails d'un vélo
function getBikeDetails($bikeId) {
    global $conn;
    $sql = "SELECT * FROM velos WHERE id_velo=$bikeId";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function getBikes() {
    global $conn;
    $sql = "SELECT * FROM velos";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function updateBikeDetails($bikeId, $marque, $modele, $type) {
    global $conn;
    $sql = "UPDATE velos SET marque='$marque', modele='$modele', types='$type' WHERE id_velo=$bikeId";
    return $conn->query($sql);
}

function addBike($marque, $modele, $type) {
    global $conn;
    $sql = "INSERT INTO velos (marque, modele, types) VALUES ('$marque', '$modele', '$type')";
    return $conn->query($sql);
}

function deleteBikeAndTasks($bikeId) {
    global $conn;

    // Supprimer les tâches associées au vélo
    $sqlDeleteTasks = "DELETE FROM taches_maintenance WHERE id_velo=$bikeId";
    $conn->query($sqlDeleteTasks);

    // Supprimer le vélo
    $sqlDeleteBike = "DELETE FROM velos WHERE id_velo=$bikeId";
    return $conn->query($sqlDeleteBike);
}

?>
