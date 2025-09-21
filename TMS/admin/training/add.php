<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>



<body>
  <div class="container-fluid">
    <div class="row">
 
      <?php include('../common/sidebar.php');  ?>


      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-2">Add New Trainings</h3><hr/>
        <div class="row g-4">
          <div class="col-md-12">
            <a href="list.php" class="btn btn-success btn-sm mb-2">View Training</a>

           
            <form method="POST" action=action.php>

              <div class="row">
                <div class="form-group p-1 mb-3 col-6">
                  <label for="formGroupExampleInput">Training </label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Name of the training" required>
                </div>

                <div class="form-group col-6">
                  <label for="formGroupExampleInput2">Start date</label>
                  <input type="date" class="form-control" id="formGroupExampleInput2" name="start_date" placeholder="Start date of the training" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="formGroupExampleInput">End date </label>
                  <input type="date" class="form-control" id="formGroupExampleInput" name="end_date" placeholder="End date of the training" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="formGroupExampleInput">Description of the training</label>
                  <textarea class="form-control" id="formGroupExampleInput" name="description" placeholder="Description of the training" required></textarea>
                </div>
                <?php
            if (!empty($sucessMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$sucessMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

 

               

                
                <div class="form-group mt-3">
                  <button type="submit" name="save" class="btn btn-success btn-sm">Save</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
