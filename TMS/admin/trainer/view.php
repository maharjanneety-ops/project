<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
<div class="container-fluid">
  <div class="row">
    <?php include('../common/sidebar.php'); ?>

    <main class="col-md-10 ms-sm-auto px-md-5 py-4">
      <h3 class="mb-2">Trainer Details</h3><hr/>

      <?php
      if (isset($_GET['view'])) {
          $id = intval($_GET['view']);
          $sql = "SELECT * FROM trainer WHERE trainer_id = $id";
          $result = mysqli_query($connection, $sql);

          if ($row = mysqli_fetch_assoc($result)) {
      ?>
          <table class="table table-bordered">
            <tr><th>ID</th><td><?php echo $row['trainer_id']; ?></td></tr>
            <tr><th>Full Name</th><td><?php echo $row['fullname']; ?></td></tr>
            <tr><th>Address</th><td><?php echo $row['address']; ?></td></tr>
            <tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
            <tr><th>Phone</th><td><?php echo $row['phone']; ?></td></tr>
            <tr><th>Last Degree</th><td><?php echo $row['last_degree']; ?></td></tr>
            <tr><th>CV</th>
                <td>
                  <?php if (!empty($row['CV'])) { ?>
                    <a href="../uploads/<?php echo $row['CV']; ?>" target="_blank">Download CV</a>
                  <?php } else { echo "Not uploaded"; } ?>
                </td>
            </tr>
            <tr><th>Created At</th><td><?php echo $row['created_at']; ?></td></tr>
            <tr><th>User ID</th><td><?php echo $row['user_id']; ?></td></tr>
          </table>

          <a href="edit.php?edit=<?php echo $row['trainer_id']; ?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="list.php" class="btn btn-secondary btn-sm">Back</a>
      <?php
          } else {
              echo "<p class='text-danger'>Trainer not found.</p>";
          }
      }
      ?>
    </main>
  </div>
</div>

<?php include('../common/footer.php'); ?>
