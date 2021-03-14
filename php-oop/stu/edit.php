<?php
  
  // Include database file
  include 'studant.php';

  $StudentObj = new Students();

  // Edit customer record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $Student = $StudentObj->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['update'])) {
    $StudentObj->updateRecord($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</h4>
</div><br> 

<div class="container">
  <form action="edit.php" method="POST">
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control" name="uname" value="<?php echo $Student['std_name']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="upmobile">mobile address:</label>
      <input type="text" class="form-control" name="upmobile" value="<?php echo $Student['std_mobile']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="upadrees">addres:</label>
      <input type="text" class="form-control" name="upadrees" value="<?php echo $Student['std_address']; ?>" required="">
    </div>
    <div class="form-group">
      <label for="std_age">age:</label>
      <input type="text" class="form-control" name="c" value="<?php echo $Student['std_age']; ?>" required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $Student['std_id']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>