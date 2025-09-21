<?php 
include('../common/header.php'); 
include('../common/dbsetting.php'); 


if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<div class='container mt-5'><div class='alert alert-danger'>Invalid request.</div></div>";
    exit;
}

$id = intval($_GET['id']); 


$sql = "SELECT * FROM training WHERE training_id = $id";
$result = mysqli_query($connection, $sql);
$training = mysqli_fetch_assoc($result);

if (!$training) {
    echo "<div class='container mt-5'><div class='alert alert-warning'>Training not found.</div></div>";
    exit;
}
?>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include('../common/sidebar.php'); ?>
      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-4 fw-bold text-primary">Edit Training</h3>

        <div class="card shadow-lg border-0 rounded-4 p-4">
          <div class="card-body">
            <form action="action.php" method="POST">
              <input type="hidden" name="training_id" value="<?php echo $training['training_id']; ?>">

              <div class="mb-3">
                <label class="form-label fw-semibold">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($training['title']); ?>" required>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Start Date</label>
                  <input type="date" name="start_date" class="form-control" value="<?php echo $training['start_date']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">End Date</label>
                  <input type="date" name="end_date" class="form-control" value="<?php echo $training['end_date']; ?>" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="description" rows="5" class="form-control" required><?php echo htmlspecialchars($training['description']); ?></textarea>
              </div>

              <div class="mt-4 d-flex gap-2">
                <button type="submit" name="update" class="btn btn-success px-4">
                  <i class="fas fa-save"></i> Update
                </button>
                <a href="list.php" class="btn btn-secondary px-4">
                  <i class="fas fa-arrow-left"></i> Cancel
                </a>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
