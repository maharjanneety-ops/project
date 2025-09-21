<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
  <div class="container-fluid">
    <div class="row">

      <?php include('../common/sidebar.php'); ?>

      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-2">Add New Batch</h3><hr/>
        <div class="row g-4">
          <div class="col-md-12">
            <a href="list.php" class="btn btn-success btn-sm mb-2">View Batches</a>

           
            <form method="POST" action="action.php">
              <div class="row">

          
                <div class="form-group p-1 mb-3 col-6">
                  <label for="training_id">Select Training</label>
                  <select class="form-control" id="training_id" name="training_id" required>
                    <option value="">-- Select Training --</option>
                    <?php
                      $trainings = mysqli_query($connection, "SELECT training_id, title FROM training");
                      while ($training = mysqli_fetch_assoc($trainings)) {
                          echo "<option value='".$training['training_id']."'>".$training['title']."</option>";
                      }
                    ?>
                  </select>
                </div>

               
                <div class="form-group p-1 mb-3 col-6">
                  <label for="batch_title">Batch Title</label>
                  <input type="text" class="form-control" id="batch_title" name="batch_title" placeholder="Enter batch title" required>
                </div>

                <div class="form-group mt-3">
                  <button type="submit" class="btn btn-success btn-sm" name="save">Save</button>
                </div>
              </div>
            </form>
           

          </div>
        </div>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
