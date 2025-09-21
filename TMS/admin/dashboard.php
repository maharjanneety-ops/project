<?php include('common/header.php'); ?>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
<?php include('common/sidebar.php');  ?>

      <!-- Main Content -->
      <main class="col-md-10 ms-sm-auto px-md-5 py-4">
        <h1 class="mb-4">Training Management System</h1>
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card text-bg-primary text-center p-4">
              <h5>Total Trainings</h5>
              <p>15</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-success text-center p-4">
              <h5>Active Batches</h5>
              <p>6</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-warning text-center p-4">
              <h5>Enrolled Trainees</h5>
              <p>120</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-danger text-center p-4">
              <h5>Upcoming Sessions</h5>
              <p>3</p>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

<?php include('common/footer.php'); ?>