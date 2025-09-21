<?php 
include('../common/header.php'); 
include('../common/dbsetting.php'); 

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<div class='container mt-5'><div class='alert alert-danger'>Invalid request.</div></div>";
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM trainee WHERE trainee_id = $id";
$result = mysqli_query($connection, $sql);
$trainee = mysqli_fetch_assoc($result);

if (!$trainee) {
    echo "<div class='container mt-5'><div class='alert alert-warning'>Trainee not found.</div></div>";
    exit;
}
?>

<body>
<div class="container-fluid">
  <div class="row">
    <?php include('../common/sidebar.php'); ?>
    <main class="col-md-10 ms-sm-auto px-md-5 py-4">
      <h3 class="mb-3 fw-bold text-primary">Edit Trainee</h3>
      <div class="card shadow-lg border-0 rounded-4 p-4">
        <div class="card-body">
          <form action="action.php" method="POST">
            <input type="hidden" name="trainee_id" value="<?php echo $trainee['trainee_id']; ?>">

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control" value="<?php echo htmlspecialchars($trainee['fullname']); ?>" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($trainee['address']); ?>" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo htmlspecialchars($trainee['phone']); ?>" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($trainee['email']); ?>" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="<?php echo $trainee['dob']; ?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Organization</label>
                <input type="text" name="organization_name" class="form-control" value="<?php echo htmlspecialchars($trainee['organization_name']); ?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Designation</label>
                <input type="text" name="designation" class="form-control" value="<?php echo htmlspecialchars($trainee['designation']); ?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Last Degree</label>
                <input type="text" name="last_degree" class="form-control" value="<?php echo htmlspecialchars($trainee['last_degree']); ?>">
              </div>
            </div>

            <div class="mt-4">
              <button type="submit" name="update" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
              <a href="list.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include('../common/footer.php'); ?>
