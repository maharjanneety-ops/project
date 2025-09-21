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
        <h3 class="mb-4 fw-bold text-primary">Training Details</h3>

        <div class="card shadow-lg border-0 rounded-4 p-4">
          <div class="card-body">
            <h4 class="card-title text-dark mb-4"><?php echo htmlspecialchars($training['title']); ?></h4>

            <div class="row mb-3">
              <div class="col-md-6">
                <p class="fs-6 mb-1"><strong class="text-secondary">Training ID:</strong> <?php echo $training['training_id']; ?></p>
                <p class="fs-6 mb-1"><strong class="text-secondary">Start Date:</strong> <?php echo $training['start_date']; ?></p>
                <p class="fs-6 mb-1"><strong class="text-secondary">End Date:</strong> <?php echo $training['end_date']; ?></p>
              </div>
              <div class="col-md-6">
                <p class="fs-6 mb-1"><strong class="text-secondary">Created At:</strong> <?php echo $training['created_at']; ?></p>
                <p class="fs-6 mb-1"><strong class="text-secondary">User ID:</strong> <?php echo $training['user_id']; ?></p>
              </div>
            </div>

            <h5 class="text-secondary mt-4">Description</h5>
            <div class="border rounded-3 p-3 bg-light fs-6" style="min-height:120px;">
              <?php echo nl2br(htmlspecialchars($training['description'])); ?>
            </div>

            <div class="mt-4 d-flex gap-2">
              <a href="edit.php?id=<?php echo $training['training_id']; ?>" class="btn btn-primary btn-sm px-3">
                <i class="fas fa-pen"></i> Edit
              </a>
              <a href="action.php?delete=<?php echo $training['training_id']; ?>" 
                 class="btn btn-danger btn-sm px-3" 
                 onclick="return confirm('Are you sure you want to delete this training?')">
                 <i class="fas fa-trash"></i> Delete
              </a>
              <a href="list.php" class="btn btn-secondary btn-sm px-3">
                <i class="fas fa-arrow-left"></i> Back to List
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
