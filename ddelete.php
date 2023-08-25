<?php
include 'conn.php';
$id = $_GET['id'];
$q = "DELETE FROM `xyz` WHERE id =$id";

mysqli_query($con,$q);

header('location:tabal.php');


?>





