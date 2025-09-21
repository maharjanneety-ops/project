<?php
include('../common/header.php'); 
include('../common/dbsetting.php'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['save'])) {
        $training_id = $_POST['training_id'];
        $batch_title = $_POST['batch_title'];
        $created_at  = date('Y-m-d');
        $userid      = $_SESSION['userid'];

        $sql = "INSERT INTO batch (training_id, batch_title, created_at, user_id) 
                VALUES ('$training_id', '$batch_title', '$created_at', '$userid')";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: list.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

    if (isset($_POST['update'])) {
        $id          = $_POST['batch_id'];
        $training_id = $_POST['training_id'];
        $batch_title = $_POST['batch_title'];

        $sql = "UPDATE batch 
                SET training_id = '$training_id', batch_title = '$batch_title' 
                WHERE batch_id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: list.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM batch WHERE batch_id = $id";
    $connection->query($sql);

    $connection->close();
    header("Location: list.php");
}
?>
