<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
<div class="container-fluid">
  <div class="row">
    <?php include('../common/sidebar.php'); ?>

    <main class="col-md-10 ms-sm-auto px-md-5 py-4">
      <h3 class="mb-2">Edit Trainer</h3><hr/>

      <?php
      if (isset($_GET['edit'])) {
          $id = intval($_GET['edit']);
          $sql = "SELECT * FROM trainer WHERE trainer_id = $id";
          $result = mysqli_query($connection, $sql);

          if ($row = mysqli_fetch_assoc($result)) {
      ?>
          <form method="POST" action="action.php" enctype="multipart/form-data">
            <input type="hidden" name="trainer_id" value="<?php echo $row['trainer_id']; ?>">

            <div class="row">
              <div class="form-group p-1 mb-3 col-6">
                <label>Full Name</label>
                <input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname']; ?>" required>
              </div>

              <div class="form-group p-1 mb-3 col-6">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required>
              </div>

              <div class="form-group p-1 mb-3 col-6">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
              </div>

              <div class="form-group p-1 mb-3 col-6">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required>
              </div>

              <div class="form-group p-1 mb-3 col-6">
                <label>Last Degree</label>
                <input type="text" class="form-control" name="last_degree" value="<?php echo $row['last_degree']; ?>" required>
              </div>

              <div class="form-group p-1 mb-3 col-6">
                <label>Update CV (optional)</label>
                <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx">
                <?php if (!empty($row['cv'])) { ?>
                  <small>Current: <a href="../uploads/cv/<?php echo $row['cv']; ?>" target="_blank"><?php echo $row['cv']; ?></a></small>
                <?php } ?>
              </div>

              <div class="form-group mt-3">
                <button type="submit" name="update" class="btn btn-primary btn-sm">Update</button>
                <a href="list.php" class="btn btn-secondary btn-sm">Cancel</a>
              </div>
            </div>
          </form>
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
