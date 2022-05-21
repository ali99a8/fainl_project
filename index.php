

<?php
$input_name = $_POST['in_username'];

$input_password = $_POST['in_pass'];

  // Database connection
  $conn = mysqli_connect('localhost','root','','project');
  mysqli_query($conn,"INSERT INTO `login` (`in_username`, `in_pass`) VALUES ( '".$input_name ."','".$input_password."' );");
  if($conn){
    header("location:http://localhost/dashboard/project/login.html");  }
 
  
?> 
