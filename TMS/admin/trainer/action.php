<?php 
include('../common/header.php'); 
include('../common/dbsetting.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ADD trainer
    if (isset($_POST['save'])) {
        $fullname = $_POST['fullname'];
        $address  = $_POST['address'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $last_degree = $_POST['last_degree'];
        $created_at = date('Y-m-d');
        $userid   = $_SESSION['userid']; 

        $cv = null;
        if (!empty($_FILES['cv']['name'])) {
            $cv = time() . "_" . basename($_FILES['cv']['name']);
            $targetPath = "../uploads/" . $cv;
            move_uploaded_file($_FILES['cv']['tmp_name'], $targetPath);
        }

        $sql = "INSERT INTO trainer (fullname, address, email, phone, last_degree, cv, created_at, user_id) 
                VALUES ('$fullname', '$address', '$email', '$phone', '$last_degree', '$cv', '$created_at', '$userid')";

        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: list.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

    
    if (isset($_POST['update'])) {
        $trainer_id = intval($_POST['trainer_id']);
        $fullname = $_POST['fullname'];
        $address  = $_POST['address'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $last_degree = $_POST['last_degree'];

        $cvUpdate = "";
        if (!empty($_FILES['cv']['name'])) {
            $cv = time() . "_" . basename($_FILES['cv']['name']);
            $targetPath = "../uploads/" . $cv;
            move_uploaded_file($_FILES['cv']['tmp_name'], $targetPath);
            //$cvUpdate = ", cv='$cv'";
        }

        $sql = "UPDATE trainer 
                SET fullname='$fullname', address='$address', email='$email', phone='$phone', last_degree='$last_degree', cv='$cv'
                WHERE trainer_id=$trainer_id";

        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: list.php");
            exit;
        } else {
            echo "Update Error: " . mysqli_error($connection);
        }
    }
}

// DELETE trainer
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM trainer WHERE trainer_id = $id";
    $connection->query($sql);

    $connection->close();
    header("Location: list.php");
}
?>
