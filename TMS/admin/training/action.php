<?php 
include('../common/header.php'); 
include('../common/dbsetting.php'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    


if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $created_at= date('Y-m-d');
    $userid = $_SESSION['userid'];

    
    $sql = "INSERT INTO training (title, start_date, end_date,description, created_at, user_id) VALUES ('$title','$start_date','$end_date','$description', '$created_at', '$userid')";

    $res = mysqli_query($connection, $sql);


    if ($res) {
        header("Location:list.php");
    } else {
        echo "Error";;
    }
}



if (isset($_POST['update'])) {
    $training_id = intval($_POST['training_id'] ?? 0);
    $title = $_POST['title'] ?? '';
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $description = $_POST['description'] ?? '';

    if ($training_id > 0) {
        $sql = "UPDATE training 
                SET title='$title', start_date='$start_date', end_date='$end_date', description='$description' 
                WHERE training_id=$training_id";

        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: list.php");
            exit;
        } else {
            echo "Update Error: " . mysqli_error($connection);
            exit;
        }
    } else {
        echo "Invalid Training ID.";
        exit;
    }
}






}





if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $bsql = "DELETE FROM batch WHERE training_id = $id";
    $connection->query($bsql);



    $sql = "DELETE FROM training WHERE training_id = $id";
    $connection->query($sql);

    $connection->close();
    header("Location: list.php");

}




?>