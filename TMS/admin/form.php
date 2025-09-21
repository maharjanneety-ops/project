<?php include('common/header.php'); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training_management";

// DB connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TRAINING MODULE
    $training_title = $_POST['training_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $training_mode = $_POST['training_mode'];
    $target_audience = isset($_POST['target_audience']) ? implode(", ", $_POST['target_audience']) : "";
    $fee = $_POST['fee'];

    // TRAINER MODULE
    $trainer_name = $_POST['trainer_name'];
    $trainer_expertise = $_POST['trainer_expertise'];
    $trainer_contact = $_POST['trainer_contact'];
    $trainer_email = $_POST['trainer_email'];

    // BATCH MODULE
    $batch_name = $_POST['batch_name'];
    $capacity = $_POST['capacity'];
    $schedule = $_POST['schedule'];

    // TRAINEE MODULE
    $trainee_name = $_POST['trainee_name'];
    $trainee_email = $_POST['trainee_email'];
    $trainee_phone = $_POST['trainee_phone'];
    $trainee_training = $_POST['trainee_training'];
    $trainee_batch = $_POST['trainee_batch'];

    // ENROLLMENT MODULE
    $enroll_trainee = $_POST['enroll_trainee'];
    $enroll_training = $_POST['enroll_training'];
    $enroll_date = $_POST['enroll_date'];
    $enroll_status = $_POST['enroll_status'];

    // ADMIN MODULE
    $admin_username = $_POST['admin_username'];
    $admin_email = $_POST['admin_email'];
    $admin_role = $_POST['admin_role'];

    // INSERT into tables
    $conn->query("INSERT INTO trainings (title, start_date, end_date, description, target_audience, training_mode, fee) 
                  VALUES ('$training_title','$start_date','$end_date','$description','$target_audience','$training_mode','$fee')");

    $conn->query("INSERT INTO trainers (name, expertise, contact, email) 
                  VALUES ('$trainer_name','$trainer_expertise','$trainer_contact','$trainer_email')");

    $conn->query("INSERT INTO batches (batch_name, capacity, schedule) 
                  VALUES ('$batch_name','$capacity','$schedule')");

    $conn->query("INSERT INTO trainees (name, email, phone, training_id, batch_id) 
                  VALUES ('$trainee_name','$trainee_email','$trainee_phone','$trainee_training','$trainee_batch')");

    $conn->query("INSERT INTO enrollments (trainee_id, training_id, enrollment_date, status) 
                  VALUES ('$enroll_trainee','$enroll_training','$enroll_date','$enroll_status')");

    $conn->query("INSERT INTO admins (username, email, role) 
                  VALUES ('$admin_username','$admin_email','$admin_role')");

    echo "<div class='alert alert-success'>All data saved successfully!</div>";
}
?>

<body>
<div class="container-fluid">
<div class="row">
<?php include('common/sidebar.php'); ?>

<main class="col-md-10 ms-sm-auto px-md-5 py-4">
<h3 class="mb-2">Add Data – All Modules</h3><hr/>

<form method="POST" class="mb-5">

<!-- TRAINING -->
<h5>Training Information</h5><hr/>
<div class="row">
  <div class="col-md-4"><input type="text" name="training_title" class="form-control mb-2" placeholder="Training Title" required></div>
  <div class="col-md-4"><input type="date" name="start_date" class="form-control mb-2" required></div>
  <div class="col-md-4"><input type="date" name="end_date" class="form-control mb-2" required></div>
  <div class="col-md-12"><textarea name="description" class="form-control mb-2" placeholder="Training Description" required></textarea></div>
  <div class="col-md-12 mb-2">
    <label>Target Audience:</label><br/>
    <input type="checkbox" name="target_audience[]" value="Students"> Students
    <input type="checkbox" name="target_audience[]" value="Trainers"> Trainers
    <input type="checkbox" name="target_audience[]" value="Employees"> Employees
  </div>
  <div class="col-md-12 mb-2">
    <label>Training Mode:</label><br/>
    <input type="radio" name="training_mode" value="Online" required> Online
    <input type="radio" name="training_mode" value="In-person"> In-person
    <input type="radio" name="training_mode" value="Hybrid"> Hybrid
  </div>
  <div class="col-md-4"><input type="number" name="fee" class="form-control mb-2" placeholder="Training Fee"></div>
</div>

<!-- TRAINER -->
<h5 class="mt-4">Trainer Information</h5><hr/>
<div class="row">
  <div class="col-md-4"><input type="text" name="trainer_name" class="form-control mb-2" placeholder="Trainer Name"></div>
  <div class="col-md-4"><input type="text" name="trainer_expertise" class="form-control mb-2" placeholder="Expertise"></div>
  <div class="col-md-4"><input type="text" name="trainer_contact" class="form-control mb-2" placeholder="Contact Number"></div>
  <div class="col-md-4"><input type="email" name="trainer_email" class="form-control mb-2" placeholder="Email"></div>
</div>

<!-- BATCH -->
<h5 class="mt-4">Batch Information</h5><hr/>
<div class="row">
  <div class="col-md-4"><input type="text" name="batch_name" class="form-control mb-2" placeholder="Batch Name"></div>
  <div class="col-md-4"><input type="number" name="capacity" class="form-control mb-2" placeholder="Capacity"></div>
  <div class="col-md-4"><input type="text" name="schedule" class="form-control mb-2" placeholder="Schedule"></div>
</div>

<!-- TRAINEE -->
<h5 class="mt-4">Trainee Information</h5><hr/>
<div class="row">
  <div class="col-md-4"><input type="text" name="trainee_name" class="form-control mb-2" placeholder="Name"></div>
  <div class="col-md-4"><input type="email" name="trainee_email" class="form-control mb-2" placeholder="Email"></div>
  <div class="col-md-4"><input type="text" name="trainee_phone" class="form-control mb-2" placeholder="Phone"></div>
  <div class="col-md-4"><input type="number" name="trainee_training" class="form-control mb-2" placeholder="Training ID"></div>
  <div class="col-md-4"><input type="number" name="trainee_batch" class="form-control mb-2" placeholder="Batch ID"></div>
</div>

<!-- ENROLLMENT -->
<h5 class="mt-4">Enrollment Information</h5><hr/>
<div class="row">
  <div class="col-md-4"><input type="number" name="enroll_trainee" class="form-control mb-2" placeholder="Trainee ID"></div>
  <div class="col-md-4"><input type="number" name="enroll_training" class="form-control mb-2" placeholder="Training ID"></div>
  <div class="col-md-4"><input type="date" name="enroll_date" class="form-control mb-2"></div>
  <div class="col-md-4">
    <select name="enroll_status" class="form-control mb-2">
      <option value="Pending">Pending</option>
      <option value="Confirmed">Confirmed</option>
      <option value="Cancelled">Cancelled</option>
    </select>
  </div>
</div>

<!-- ADMIN -->
<h5 class="mt-4">Admin Information</h5><hr/>
<div class="row">
  <div class="col-md-4"><input type="text" name="admin_username" class="form-control mb-2" placeholder="Username"></div>
  <div class="col-md-4"><input type="email" name="admin_email" class="form-control mb-2" placeholder="Email"></div>
  <div class="col-md-4"><input type="text" name="admin_role" class="form-control mb-2" placeholder="Role"></div>
</div>

<!-- SUBMIT -->
<div class="mt-3">
  <button type="submit" class="btn btn-success">Save All</button>
</div>

</form>
</main>
</div>
</div>

<?php include('common/footer.php'); ?>
