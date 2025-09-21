<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
  <div class="container-fluid">
    <div class="row">

      <?php include('../common/sidebar.php'); ?>

      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-2">Add New Trainee</h3>
        <hr/>

        <div class="row g-4">
          <div class="col-md-12">
            <a href="list.php" class="btn btn-secondary btn-sm mb-3">
              <i class="fas fa-list"></i> View Trainees
            </a>

            <div class="card shadow-sm rounded-3">
              <div class="card-body">
                <form method="POST" action="action.php">
                  <div class="row">
                    
                    <div class="form-group p-1 mb-3 col-6">
                      <label for="fullname">Fullname</label>
                      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name of the trainee" required>
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address of the trainee" required>
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact number of the trainee" required>
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email of the trainee" required>
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="dob">Date of Birth</label>
                      <input type="date" class="form-control" id="dob" name="dob">
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="organization_name">Organization Name</label>
                      <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Organization of the trainee">
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="designation">Designation</label>
                      <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation of the trainee">
                    </div>

                    <div class="form-group p-1 mb-3 col-6">
                      <label for="last_degree">Last Degree</label>
                      <input type="text" class="form-control" id="last_degree" name="last_degree" placeholder="Last degree of the trainee">
                    </div>

                    <div class="form-group mt-3">
                      <button type="submit" class="btn btn-success btn-sm">
                        <i class="fas fa-save"></i> Save
                      </button>
                      <a href="list.php" class="btn btn-secondary btn-sm">
                        <i class="fas fa-times"></i> Cancel
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </main>
    </div>
  </div>

<?php include('../common/footer.php'); ?>
