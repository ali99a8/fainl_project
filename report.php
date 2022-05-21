


<?php
  // Database connection
  $conn = mysqli_connect('localhost','root','','project');

  if($conn){
   $query = mysqli_query($conn,"SELECT * FROM `form_info` ");
  }
?>


<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Response</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <!--icons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <link rel="stylesheet" href="project.css" />
    <!-- animtion css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style></style>
</head>

<body >
<div class="report">
<nav class="navbar navbar-expand-lg nav">
        <div class="text-center">
           <h1 class="mr-5 " >تـقـاريـر</h1>
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="https://img.icons8.com/ios/40/000000/menu--v1.png" class="menubar"/>
            <img src="https://img.icons8.com/ios/40/000000/delete-sign--v1.png" class="closebar"/>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active ml-5 ">
               <!-- <img src="https://img.icons8.com/color/48/000000/delete-forever.png"/> -->
                </li>
                <li class="nav-item active ml-5 mb-3">
                <button class="btn btn_printer  "> <img src="https://img.icons8.com/officel/30/000000/print.png"/> <br>Print    </button>
                </li>
              
                <li class="nav-item active ml-5 mb-3">
                <button class="btn btn_home_report "><img src="https://img.icons8.com/flat-round/30/000000/home--v1.png"/> <br>Home   </button>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table table-bordered table-striped table-dark table-hover  text-center   ">
        <thead  class="thead-dark "  >
          <tr class="bg-primary   ">
            <th scope="col"> الاســم الطفل</th>
            <th scope="col"> الاســم الاب</th>
            <th scope="col">اســـم الام</th>
            <th scope="col">تاريخ الاولادة</th>
            <th scope="col">محل الاولادة</th>
            <th scope="col">جنس الطفل</th>
            <th scope="col">حـالة الطــفل</th>
            <th scope="col">وزن الطــفل</th>
            <th scope="col">مدة البقاء الطــفل</th>
          </tr>
        </thead>
        

        <?php
            
        while($Row = mysqli_fetch_assoc($query)){
       
          echo '<tbody>
          <tr>
            <td>'.$Row["input_name1"].'</td>
            <td>'.$Row["namefather"].'</td>
            <td>'.$Row["input_name2"].'</td>
            <td>'.$Row["input_date"].'</td>
            <td>'.$Row["in_space"].'</td>
            <td>'.$Row["genderbaby"].'</td>
            <td>'.$Row["input_stu"].'</td>
            <td>'.$Row["input_wei"].'</td>
            <td>'.$Row["input_stady"].'</td>
          </tr>
        </tbody>';

        }


        ?>
  
      </table>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
    <script src="report.js"></script>
    <script></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</body>

</html>