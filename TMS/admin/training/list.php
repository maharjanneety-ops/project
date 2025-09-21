<?php
include('../common/header.php');
include('../common/dbsetting.php'); // Database connection

// Fetch all trainings
$sql = "SELECT * FROM training ORDER BY training_id DESC";
$result = mysqli_query($connection, $sql);
?>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>

      <!-- Main Content -->
      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-4">Training List</h3>
        <a href="add.php" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Add New Training</a>

        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Created At</th>
              <th>User ID</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
              <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                  <td><?php echo $row['training_id']; ?></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['start_date']; ?></td>
                  <td><?php echo $row['end_date']; ?></td>
                  <td><?php echo $row['created_at']; ?></td>
                  <td><?php echo $row['user_id']; ?></td>
                  <td>
                    <a href="view.php?id=<?php echo $row['training_id']; ?>" class="btn btn-sm btn-secondary">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="edit.php?id=<?php echo $row['training_id']; ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-pen"></i>
                    </a>
                    <a href="action.php?delete=<?php echo $row['training_id']; ?>" 
                       class="btn btn-sm btn-danger" 
                       onclick="return confirm('Are you sure you want to delete this training?');">
                       <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr>
                <td colspan="7" class="text-center">No trainings found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
