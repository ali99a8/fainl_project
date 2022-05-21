

<?php
$num1 = $_POST['num_upper'];
$num2 = $_POST['num_lower'];

  // Database connection
  $conn = mysqli_connect('localhost','root','','project');
  mysqli_query($conn,"INSERT INTO `data_from_room`( `num_upper`,`num_lower`) VALUES ( '".$num1 ."','".$num2."' );");
  if($conn){
    header("location:http://localhost/dashboard/project/login.html");  }
 
  
?> 
