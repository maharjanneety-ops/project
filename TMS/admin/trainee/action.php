<?php 
include('../common/header.php'); 
include('../common/dbsetting.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $address = $_POST['address'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email= $_POST['email'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $organization_name = $_POST['organization_name'] ?? ''; 
    $designation = $_POST['designation'] ?? '';
    $last_degree = $_POST['last_degree'] ?? '';

    // INSERT
    if (isset($_POST['save'])) {
        $sql = "INSERT INTO trainee(fullname , address, phone, email, dob, organization_name, designation, last_degree ) 
                VALUES ('$fullname','$address','$phone','$email','$dob','$organization_name','$designation','$last_degree')";

        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location:list.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

    // UPDATE
    if (isset($_POST['update'])) {
        $trainee_id = intval($_POST['trainee_id'] ?? 0);

        if ($trainee_id > 0) {
            $sql = "UPDATE trainee SET 
                        fullname='$fullname', 
                        address='$address', 
                        phone='$phone', 
                        email='$email', 
                        dob='$dob',
                        organization_name='$organization_name', 
                        designation='$designation', 
                        last_degree='$last_degree'
                    WHERE trainee_id=$trainee_id";

            $res = mysqli_query($connection, $sql);

            if ($res) {
                header("Location: list.php");
                exit;
            } else {
                echo "Update Error: " . mysqli_error($connection);
            }
        } else {
            echo "Invalid trainee ID.";
        }
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM trainee WHERE trainee_id = $id";
    $connection->query($sql);

    $connection->close();
    header("Location: list.php");
    exit;
}
?>
