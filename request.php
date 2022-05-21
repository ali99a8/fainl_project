

<?php
$in_name = $_POST['name'];
$in_email = $_POST['email'];
$in_request = $_POST['request'];

  // Database connection
  $conn = mysqli_connect('localhost','root','','project');
  mysqli_query($conn,"INSERT INTO `connect_us` ( `name`, `email`, `request`) VALUES  ( '".$in_name ."','".$in_email."' , '".$in_request."' );");
  if($conn){
    header("location:http://localhost/dashboard/project/login.html");  }
 
  
?> 
