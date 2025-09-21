<?php
include('../common/dbsetting.php');

if (!isset($_GET['id'])) {
    die("Invalid request.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM trainee WHERE trainee_id = $id";
$result = mysqli_query($connection, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Trainee not found.");
}

$trainee = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Trainee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .label-text {
            font-weight: 600;
            font-size: 1rem; /* Slightly bold for labels */
        }
        .value-text {
            font-size: 1rem; /* Clean readable size */
            color: #333;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4 text-primary"><i class="fas fa-user"></i> Trainee Details</h3>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Full Name:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['fullname']; ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Address:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['address']; ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Phone:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['phone']; ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Email:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['email']; ?></div>
        </div>
        <?php if (!empty($trainee['dob'])): ?>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Date of Birth:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['dob']; ?></div>
        </div>
        <?php endif; ?>
        <?php if (!empty($trainee['organization_name'])): ?>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Organization:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['organization_name']; ?></div>
        </div>
        <?php endif; ?>
        <?php if (!empty($trainee['designation'])): ?>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Designation:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['designation']; ?></div>
        </div>
        <?php endif; ?>
        <?php if (!empty($trainee['last_degree'])): ?>
        <div class="row mb-3">
            <div class="col-md-4 label-text">Last Degree:</div>
            <div class="col-md-8 value-text"><?php echo $trainee['last_degree']; ?></div>
        </div>
        <?php endif; ?>
        <div class="mt-4">
            <a href="list.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
            <a href="edit.php?id=<?php echo $trainee['trainee_id']; ?>" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
        </div>
    </div>
</div>
</body>
</html>
