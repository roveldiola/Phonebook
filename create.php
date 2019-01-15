<?php

include ('server.php');

require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['phone']) ) {
  $username = $_GET['username'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $sql = 'INSERT INTO people(name, phone, username) VALUES(:name, :phone, :username)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':phone' => $phone, ':username' => $username])) {
    $message = 'data inserted successfully';
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="number" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="createP" class="btn btn-info">Create a person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>