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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--link chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <!-- animtion css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style></style>
</head>
<script>

startShowingMessage('realTemp', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/temp');
startShowingMessage('humidity', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/humidity');
startShowingMessage('bodyTemp', 'https://io.adafruit.com/api/v2/aliabbas99/feeds/bodyTemp');
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
<body class="bg_chart">

    <nav class="navbar navbar-expand-lg nav bg_nav_chart">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="https://img.icons8.com/ios/40/000000/menu--v1.png" class="menubar"/>
            <img src="https://img.icons8.com/ios/40/000000/delete-sign--v1.png" class="closebar"/>        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active ml-5 mb-3">
                    <button class="btn btn_home_chart "><img src="https://img.icons8.com/flat-round/44/000000/home--v1.png"/> <br>Home   </button>
                </li>

            </ul>
        </div>
        <div class="text-center">
            <h1 class="mr-5 font-weight-bold">الوحة الرسومية</h1>
        </div>
    </nav>

    <div class="container chart chart2 mt-5">
        <div class="row">
            <!--box2-->
            <div class="col-md-12 m-2">
                <div class="boxchart ">
                    <div class="d-flex justify-content-between">
                        <img class="m-3 p-3" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/44/000000/external-room-vacation-planning-flaticons-lineal-color-flat-icons-2.png" />
                    </div>
                    <h1 class="text-center font-weight-bold "> درجة حرارة الحاضنة</h1>
                    <h2 class="text-center font-weight-bold mt-5 mb-3">الفـعـلـيـة</h2>
                    <canvas id="myChart2" style="width:100%;max-width:700px" class="mb-5 p-5"></canvas>
                    <div class="tit_3  text-center font-weight-bold mt-2 mb-5">  
                        <span class=""> المحددة</span> <br>
                    <span class=" font-weight-bold  " id="tempfrom">  </span>  ℃   -   
                    <span class=" font-weight-bold " id="tempto"> </span>  ℃
                    </div>
 
                </div>
            </div>
            </div>
        </div>


        <div class="container chart  mt-5">
            <div class="row">
            <!--box1-->
            <div class="col-md-12 m-2">
                <div class="boxchart ">
                    <div class="d-flex justify-content-between">
                        <img class="m-3" src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/000000/external-child-relationship-flaticons-flat-flat-icons.png" />
                    </div>
                    <h1 class="text-center font-weight-bold "> درجة حرارة الطفل</h1>
                    <h2 class="text-center font-weight-bold mt-5 mb-3">الفـعـلـيـة</h2>
                    <canvas id="myChart" style="width:100%;max-width:700px" class="mb-5 p-5"></canvas>
                  <<!--  <div class="tit_3 title_limt text-center font-weight-bold mt-2 mb-5">  
                        <span class=""> المحددة</span> <br>
                    <span class=" font-weight-bold ">  ℃ </span>    -   
                    <span class=" font-weight-bold ">  ℃</span>
                    </div> -->
                   
                </div>
            </div>
        </div>
    </div>

  

    <div class="container chart chart3 mt-5">
        <div class="row">
            <!--box3-->
            <div class="col-md-12 m-2">
                <div class="boxchart ">
                    <div class="d-flex justify-content-between">
                        <img class="m-3 p-1" src="https://img.icons8.com/color/48/000000/dew-point.png" />
                    </div>
                    <h1 class="text-center font-weight-bold "> نسبة الرطوبة</h1>
                    <h2 class="text-center font-weight-bold mt-5 mb-3">الفـعـلـيـة</h2>
                    <canvas id="myChart3" style="width:100%;max-width:700px" class="mb-5 p-5"></canvas>
                    <div class="tit_3 title_limt text-center font-weight-bold mt-2 mb-5 ">  
                        <span class=""> المحددة</span> <br>
                    <span class=" font-weight-bold  " id="humidityfrom">  </span>   % -   
                    <span class=" font-weight-bold " id="humidityto"></span> %
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script></script>
</body>

</html>