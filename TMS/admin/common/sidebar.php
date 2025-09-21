<?php include('config.php'); ?>      

      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="text-center mt-4">
          <h4>Admin Panel</h4>
        </div>
        <a href="<?php echo BASE_URL;  ?>/admin/dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
        <a href="<?php echo BASE_URL;  ?>/admin/training/list.php"><i class="fas fa-chalkboard-teacher"></i> Manage Trainings</a>
        <a href="<?php echo BASE_URL;  ?>/admin/trainer/list.php"><i class="fas fa-user-tie"></i> Trainers</a>
        <a href="<?php echo BASE_URL;  ?>/admin/trainee/list.php"><i class="fas fa-user-graduate"></i> Trainees</a>
        <a href="<?php echo BASE_URL;  ?>/admin/batch/list.php"><i class="fas fa-layer-group"></i> Batches</a>
        <a href="<?php echo BASE_URL;  ?>/admin/enrollment/list.php"><i class="fas fa-file-signature"></i> Enrollments</a>
        <a href="<?php echo BASE_URL;  ?>/admin/report/list.php"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="<?php echo BASE_URL;  ?>/admin/settings/list.php"><i class="fas fa-cogs"></i> Settings</a>
        <a href="<?php echo BASE_URL;  ?>/admin/logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Log out</a>


      </nav>