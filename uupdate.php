<?php
include 'conn.php';
$ids = $_GET['id'];
$query = "SELECT * FROM `xyz` WHERE id=$ids";
$conect = mysqli_query($con, $query);
$fetch = mysqli_fetch_array($conect);
if(isset($_POST['kamlesh'])){
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $qer="UPDATE `xyz` SET`name`='$name',`email`='$email',`password`='$password',`mobile`='$mobile' WHERE id=$ids";
    $query = mysqli_query($con,$qer);
      header('location:tabal.php');
  

}





?>









<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) Form</h2>
  <form method="post">
  <div class="form-group">
      <label for="email">neme:</label>
      <input type="neme" class="form-control" id="neme" placeholder="Enter email" name="name" value="<?=$fetch['name']?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?=$fetch['email']?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?=$fetch['password']?>">
    </div>
    <div class="form-group">
      <label for="email">mobile:</label>
      <input type="mobile" class="form-control" id="email" placeholder="Enter email" name="mobile" value="<?=$fetch['mobile']?>">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="kamlesh">Submit</button>
  </form>
</div>

</body> 
</html>
