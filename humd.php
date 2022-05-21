

<?php
$in_value1 = $_POST['input_one'];
$in_value2 = $_POST['input_two'];

  // Database connection
  $conn = mysqli_connect('localhost','root','','project');
  mysqli_query($conn,"INSERT INTO `date_from_humd` (`input_one`, `input_two`) VALUES  ( '".$in_value1 ."','".$in_value2."' );");
  if($conn){
    header("location:http://localhost/dashboard/project/login.html");  }
 
  
?> 
