<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/rome.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="final_first_page.css">
</head>
<body>
    <nav style="position:absolute;">
        <a href="#" class="logo">Millideals.in</a>
        <ul>
            <li><a href="#" class="btn bg-white">Register</a></li>
            <li><a href="#" class="btn bg-white">Sign in</a></li>

        </ul>
        <button id="button_class"><span><i class="fas fa-bars"></i></span></button>
    </nav>
    <div class="container" style="width:100%;" id="container_style">
        <div class="row">
            <div class="col-lg-4">
            <h1 class="bg-primary text-white text-center">Search</h1>
                <form action="maredumilli_update.php" style="border:1px solid silver;padding:10px;margin-top:-2.1%" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter your destination</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your destination or property" name="Address" value="Maredumilli">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Indate</label><label for="exampleInputPassword1" style="margin-left:38%">Outdate</label><br>
                        <input  type="text" class="form-control clickable input-md" id="input_from" placeholder="&#xf133;  Check-In" style="width:49%;display:inline" name="Indate">                        
                        <input  type="text" class="form-control clickable input-md" id="input_to" placeholder="&#xf133;  Check-Out" style="width:49%;display:inline" name="Outdate">                   
                    </div>
                    <div class="form-group">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Adults childrens Rooms</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Adults Childrens Rooms" name="Adults">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%" onclick="chech_me_out()">Submit</button>
                </form>
            </div>
            <div class="col-lg-7" style="margin-left:2%;width:100%">                
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
                </div>
                <!-- The slideshow/carousel -->
                <div class="carousel-inner" style="background-image:url(p2.jpg)">
                    <div class="carousel-item active">
                        <img src="p5.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p4.jpg" alt="Chicago" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p3.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p2.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p6.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p7.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p8.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="p9.jpg" alt="New York" class="d-block" style="width:100%">
                    </div>
                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class=" my-5">
    <footer class="text-center text-white" style="background-color: #caced1;width:121%;margin-left:-10.4%;margin-bottom:-4.2%">
    <!-- Grid container -->
    <div class=" p-4">
        <!-- Section: Images -->
        <section class="">
        <div class="row">
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
                >
                <img
                    src="https://mdbootstrap.com/img/new/fluid/city/113.jpg"
                    class="w-100"
                    />
                <a href="#!">
                <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                </a>
            </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
                >
                <img
                    src="https://mdbootstrap.com/img/new/fluid/city/111.jpg"
                    class="w-100"
                    />
                <a href="#!">
                <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                </a>
            </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
                >
                <img
                    src="https://mdbootstrap.com/img/new/fluid/city/112.jpg"
                    class="w-100"
                    />
                <a href="#!">
                <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                </a>
            </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
                >
                <img
                    src="https://mdbootstrap.com/img/new/fluid/city/114.jpg"
                    class="w-100"
                    />
                <a href="#!">
                <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                </a>
            </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
                >
                <img
                    src="https://mdbootstrap.com/img/new/fluid/city/115.jpg"
                    class="w-100"
                    />
                <a href="#!">
                <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                </a>
            </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
                >
                <img
                    src="https://mdbootstrap.com/img/new/fluid/city/116.jpg"
                    class="w-100"
                    />
                <a href="#!">
                <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.2);"
                    ></div>
                </a>
            </div>
            </div>
        </div>
        </section>
        <!-- Section: Images -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Millideals.in</a>
    </div>
    <!-- Copyright -->
    </footer>

    </div>
<!-- End of .container -->
    <script>
        let btn = document.querySelector("#button_class");
        let ul = document.querySelector("ul");

        btn.onmouseup = function() {
            ul.classList.toggle("show");
        }
    </script>
    <script>
        function check_me_out(){
            var a=document.getElementById('exampleCheck1').value;
            alert(a);

        }
    </script>
    <script>
        var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#dp1').datepicker({

  beforeShowDay: function(date) {
    return date.valueOf() >= now.valueOf();
  },
  autoclose: true

}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

    var newDate = new Date(ev.date);
    newDate.setDate(newDate.getDate() + 1);
    checkout.datepicker("update", newDate);

  }
  $('#dp2')[0].focus();
});


var checkout = $('#dp2').datepicker({
  beforeShowDay: function(date) {
    if (!checkin.datepicker("getDate").valueOf()) {
      return date.valueOf() >= new Date().valueOf();
    } else {
      return date.valueOf() > checkin.datepicker("getDate").valueOf();
    }
  },
  autoclose: true

}).on('changeDate', function(ev) {});

    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/rome.js"></script>
    <script src="js/main.js"></script>
</body>
</html>