<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include('../common/sidebar.php'); ?>

      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h3 class="mb-2">Add New Trainer</h3><hr/>
        <div class="row g-4">
          <div class="col-md-12">
            <a href="list.php" class="btn btn-success btn-sm mb-2">View Trainers</a>

            <form method="POST" action="action.php" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group p-1 mb-3 col-6">
                  <label for="fullname">Full Name</label>
                  <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="last_degree">Last Degree</label>
                  <input type="text" class="form-control" id="last_degree" name="last_degree" required>
                </div>

                <div class="form-group p-1 mb-3 col-6">
                  <label for="cv">CV (PDF/DOC)</label>
                  <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                </div>

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
