<?php
include('../common/header.php'); 
include('../common/dbsetting.php'); // Database connection

// Fetch all trainees
$sql = "SELECT * FROM trainee ORDER BY trainee_id DESC";
$result = mysqli_query($connection, $sql);
?>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <?php include('../common/sidebar.php'); ?>

      <!-- Main Content -->
      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-4">Trainee List</h3>
        <a href="add.php" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Add New Trainee</a>

        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
              <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                  <td><?php echo $row['trainee_id']; ?></td>
                  <td><?php echo $row['fullname']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td>
                    <a href="view.php?id=<?php echo $row['trainee_id']; ?>" class="btn btn-sm btn-secondary">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="edit.php?id=<?php echo $row['trainee_id']; ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-pen"></i>
                    </a>
                    <a href="action.php?delete=<?php echo $row['trainee_id']; ?>" 
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Are you sure you want to delete this trainee?');">
                       <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center">No trainees found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
