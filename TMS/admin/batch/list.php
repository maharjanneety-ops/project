<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
  <div class="container-fluid">
    <div class="row">

      <?php include('../common/sidebar.php'); ?>

      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-3">Batch List</h3>
        <a href="add.php" class="btn btn-success mb-3">
          + Add New Batch
        </a>

        <div class="table-responsive">
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th scope="col">Batch ID</th>
                <th scope="col">Training ID</th>
                <th scope="col">Batch Title</th>
                <th scope="col">Created At</th>
                <th scope="col">User ID</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $sql = "SELECT * FROM batch ORDER BY batch_id DESC";
              $result = mysqli_query($connection, $sql);
              while($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $row['batch_id']; ?></td>
                <td><?php echo $row['training_id']; ?></td>
                <td><?php echo $row['batch_title']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td><?php echo $row['user_id']; ?></td>
                <td>
                  <a href="view.php?id=<?php echo $row['batch_id']; ?>" class="btn btn-sm btn-secondary">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="edit.php?id=<?php echo $row['batch_id']; ?>" class="btn btn-sm btn-primary">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="action.php?delete=<?php echo $row['batch_id']; ?>" onclick="return confirm('Are you sure want to delete this batch?');" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
