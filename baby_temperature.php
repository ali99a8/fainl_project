

<?php
$in_value1 = $_POST['number_lower'];
$in_value2 = $_POST['number_upper'];

  // Database connection
  $conn = mysqli_connect('localhost','root','','project');
  mysqli_query($conn,"INSERT INTO `date_from_baby` ( `number_lower`, `number_upper`) VALUES  ( '".$in_value1 ."','".$in_value2."' );");
  if($conn){
    header("location:http://localhost/dashboard/project/login.html");  }
 
  
?> 
