<!DOCTYPE html>
<html lang="en">

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
    <style>

    </style>
</head>
<?php

$conn = mysqli_connect('localhost','root','','project');
$Row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `data_from_room` ORDER BY id DESC"));
$Row2 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `date_from_baby` ORDER BY id DESC"));
$Row3 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `date_from_humd` ORDER BY id DESC"));


?>

<script>

startShowingMessage('realTemp', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/temp');
startShowingMessage('humidity', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/humidity');
startShowingMessage('bodyTemp', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/bodytemp');
startShowingMessage('tempfrom', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/tempfrom');
startShowingMessage('tempto', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/tempto');
startShowingMessage('humidityfrom', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/humidityfrom');
startShowingMessage('humidityto', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/humidityto');

function startShowingMessage(id, url){
  setInterval(async function(){
    const response = await fetch(url);
    const text = await response.text();
    document.getElementById(id).innerHTML = (JSON.parse(text)['last_value']);
    console.log(JSON.parse(text)['last_value']);
  }, 3000);     
}

</script>

<body class="body_display_1">
<nav class="navbar navbar-expand-lg nav bg_nav_dis">
        <div class="text-center img_room">
            <img class=" m-3  p-2" src="https://img.icons8.com/officel/40/000000/control-panel.png" />
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="https://img.icons8.com/ios/40/000000/menu--v1.png" class="menubar" />
            <img src="https://img.icons8.com/ios/40/000000/delete-sign--v1.png" class="closebar" />
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <button class="btn btn_back_room btn_back "><img
                            src="https://img.icons8.com/flat-round/30/000000/home--v1.png" /> <br>Home </button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="display_1 text-center mt-5">
        <div class="container">
            <div class="row  d-flex justify-content-center mt-5 ">
                <!-- box1  Temp room-->
                <div class="col-md-4 col-sm-6 m-3  ">
                    <div class="dis_box box_show_1  p-5">
                        <h1 class="pb-4"> <img  class="m-3 p-1" src="https://img.icons8.com/office/46/000000/person-at-home.png"/> درجة حرارة الحاضنة</h1>
                        <h3 class="p-5 title"> الفعلية ℃<span id="realTemp"> Loading </span> </h3>
                  
                        <h3 class="tit_2"> المحددة
                         <span class="pl-3 pr-4" id='tempfrom'>  <span>℃</span> </span> -
                         <span id=tempto>  <span>℃</span></span>  </h3>


                    </div>
                </div>
                    <!--  box3  Humidity-->
                    <div class="col-md-4 col-sm-6 m-3 ">
                    <div class="dis_box box_show_3 p-5">
                        <h1 class="pb-3"> <img class="m-3 p-1" src="https://img.icons8.com/color/48/000000/dew-point.png" /> نسبة الرطوبة</h1>
                        <h3 class="p-5 title"> الفعلية % <span id="humidity"> Loading </span></h3>
                        <h3 class="tit_2"> المحددة 
                            <span class="pl-4 pr-4" id="humidityfrom"><span>%</span> </span> -
                             <span id="humidityto"> <span>%</span></span></h3>
                    </div>
                </div>
                <!-- box2  baby-->
                <div class="col-md-4 col-sm-6 m-3 ">
                    <div class="dis_box box_show_2 p-5">
                        <h1 class="pb-3 "><img class="m-3 p-1" src="https://img.icons8.com/external-flaticons-flat-flat-icons/50/000000/external-child-relationship-flaticons-flat-flat-icons.png" />درجة حرارة الطفل</h1>
                        <h3 class="p-5 title"> الفعلية <span id="bodyTemp"> Loading</span> </h3>
                      
                    </div>
                </div>
            
                      <!-- box4   O2-->
                <div class="col-md-4 col-sm-6 m-3 ">
                    <div class="dis_box box_show_4 p-5">
                        <h1 class="pb-3"><img class="m-3 p-1" src="https://img.icons8.com/external-icongeek26-flat-icongeek26/44/000000/external-oxygen-medical-icongeek26-flat-icongeek26.png"/> نسبة الاوكسجين    </h1>
                        <h3 class="p-5 title"> <span id=""> تحت التطوير </span></h3>
                        <h3 class="tit_2">  
                           <!-- <span class="pl-4 pr-4" id=""></span> -->
                        </h3>
                    </div>
                </div>

            
            </div>

        </div>
    </div>






    <script src="//cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.7/all/gauge.min.js"></>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  <script src="display.js"></script>


</body>

</html>