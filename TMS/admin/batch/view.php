<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
<div class="container-fluid">
  <div class="row">
    <?php include('../common/sidebar.php'); ?>

    <main class="col-md-10 ms-sm-auto px-md-5 py-4">
      <h3 class="mb-3">Batch Details</h3><hr/>

      <?php
      if (isset($_GET['id'])) {
          $id = intval($_GET['id']);
          $sql = "SELECT * FROM batch WHERE batch_id = $id";
          $result = mysqli_query($connection, $sql);

          if ($row = mysqli_fetch_assoc($result)) {
      ?>
          <table class="table table-bordered" style="font-size: 15px; line-height: 1.6;">
            <tr>
              <th style="width: 200px;">Batch ID</th>
              <td><?php echo $row['batch_id']; ?></td>
            </tr>
            <tr>
              <th>Training ID</th>
              <td><?php echo $row['training_id']; ?></td>
            </tr>
            <tr>
              <th>Batch Title</th>
              <td><?php echo $row['batch_title']; ?></td>
            </tr>
            <tr>
              <th>Created At</th>
              <td><?php echo $row['created_at']; ?></td>
            </tr>
            <tr>
              <th>User ID</th>
              <td><?php echo $row['user_id']; ?></td>
            </tr>
          </table>

          <a href="edit.php?id=<?php echo $row['batch_id']; ?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="list.php" class="btn btn-secondary btn-sm">Back</a>
      <?php
          } else {
              echo "<p class='text-danger'>Batch not found.</p>";
          }
      }
      ?>
    </main>
  </div>
</div>

<?php include('../common/footer.php'); ?>
