<?php
include 'conn.php';
if(isset($_POST['kamlesh'])){
    $neme = $_POST['neme'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $q = "INSERT INTO `xyz`(`name`,`email`,`password`,`mobile`) VALUES ('$neme','$email','$password','$mobile')";
    $query = mysqli_query($con, $q);
    if($query){
        echo "ok";
    }
else{
        echo "else";
}
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
      <input type="neme" class="form-control" id="neme" placeholder="Enter email" name="neme">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="email">mobile:</label>
      <input type="mobile" class="form-control" id="email" placeholder="Enter email" name="mobile">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="kamlesh">Submit</button>
  </form>
</div>

</body> 
</html>
