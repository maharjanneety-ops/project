<?php include('../common/header.php'); ?>
<?php include('../common/dbsetting.php'); ?>

<?php
if (!isset($_GET['id'])) {
    echo "Invalid Request!";
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM batch WHERE batch_id = $id";
$result = mysqli_query($connection, $sql);
$batch = mysqli_fetch_assoc($result);

if (!$batch) {
    echo "Batch not found!";
    exit;
}
?>

<body>
<div class="container-fluid">
  <div class="row">

    <?php include('../common/sidebar.php'); ?>

    <main class="col-md-10 ms-sm-auto px-md-5 py-4">
      <h3 class="mb-2">Edit Batch</h3><hr/>
      <a href="list.php" class="btn btn-success btn-sm mb-3">Back to List</a>

      <form method="POST" action="action.php">
        <input type="hidden" name="batch_id" value="<?php echo $batch['batch_id']; ?>">

        <div class="row">
          <div class="form-group p-1 mb-3 col-6">
            <label for="training_id">Select Training</label>
            <select class="form-control" id="training_id" name="training_id" required>
              <option value="">-- Select Training --</option>
              <?php
              $trainings = mysqli_query($connection, "SELECT training_id, title FROM training");
              while ($training = mysqli_fetch_assoc($trainings)) {
                  $selected = ($training['training_id'] == $batch['training_id']) ? "selected" : "";
                  echo "<option value='".$training['training_id']."' $selected>".$training['title']."</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group p-1 mb-3 col-6">
            <label for="batch_title">Batch Title</label>
            <input type="text" class="form-control" id="batch_title" name="batch_title" 
                   value="<?php echo $batch['batch_title']; ?>" required>
          </div>

          <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-sm" name="update">Update</button>
          </div>
        </div>
      </form>
    </main>
  </div>
</div>

<?php include('../common/footer.php'); ?>
