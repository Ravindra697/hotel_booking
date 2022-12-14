<?php
	// database connection code
	if(isset($_POST['Address'])){
		// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
		$con = mysqli_connect('localhost', 'root', '','hbooking');

		// get the post records

		$Address = $_POST['Address'];
		$Address1='.php';
		$result=$Address.$Address1;
		$Indate = $_POST['Indate'];
		$Outdate = $_POST['Outdate'];
		$Adults = $_POST['Adults'];
		// database insert SQL code
		$sql = "INSERT INTO `book` (`Address`, `Indate`, `Outdate`, `Adults`) VALUES ( '$Address', '$Indate', '$Outdate', '$Adults')";

		// insert in database 
		$rs = mysqli_query($con, $sql);
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="maredumilli_rooms_update.css">
</head>
<style>
    #search_bar{
        position: absolute;
    }
    @media screen and (min-width:801px){
        .container{
            width: 60%;
        }
        #search_bar{
            margin-left:1%;
        }
    }
    @media screen and (max-width:800px){
        .container{
            width: 100%;
        }
        #search_bar{
            display: none;
        }
        #responsive_image{
            display:none;
        }
    }
</style>
<body>
    <nav style="position:absolute;"><a href="#" class="logo">Millideals.in</a><ul><li><a href="#" class="btn bg-white">Register</a></li><li><a href="#" class="btn bg-white">Sign in</a></li></ul><button id="button_class"><span><i class="fas fa-bars"></i></span></button></nav>
    <div style="position:absolute;margin-left:83%;" id="responsive_image">
        <img src="responsive_add.PNG" style="width:200px;" alt=""><br><br>
        <img src="res_add_1.jpeg" style="width:200px;" alt="">

    </div>
    <div id="search_bar">
        <form action="maredumilli_rooms_upda.php" method="POST" class="bg-warning" style="padding:10px;border:1px solid silver">
            <h2>Search</h2>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-book" aria-hidden="true" style="color: black;"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter your destination" aria-label="Username" aria-describedby="basic-addon1" name="Address">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-check-o" aria-hidden="true" style="color: black;"></i></span>
                        </div>
                        <input type="date" class="form-control" placeholder="Indate" aria-label="Username" aria-describedby="basic-addon1" name="Indate">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-check-o" aria-hidden="true" style="color: black;"></i></span>
                        </div>
                        <input type="date" class="form-control" placeholder="Outdate" aria-label="Username" aria-describedby="basic-addon1" name="Outdate">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true" style="color: black;"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Adults childrens Rooms" aria-label="Username" aria-describedby="basic-addon1" name="Adults">
                    </div>
                    <button class="btn btn-primary mb-2" style="width: 100%">Search</button>
            </form>
            <div>
                <iframe style="margin-left:-2% ;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15212.194557295803!2d81.70909879999999!3d17.60042505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a373b673b8e73f3%3A0x1909145907cea2cf!2sMaredumilli%2C%20Andhra%20Pradesh%20533295!5e0!3m2!1sen!2sin!4v1659328416556!5m2!1sen!2sin" width="260" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
    <div>
        <div class="container" id="first_demo">
            <div id="one_card_style" style="margin-top: 16%;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 id="room_name_align">Cozy Rooms</h5>
                            <img src="7.webp" alt="" class="img-fluid" style="width:100%;height:200px;"><br>
                            <div>
                                &nbsp;<span>Room photo and details</span><br>&nbsp;<span><i class="fa fa-wifi" style="color:green"></i> Free Wifi</span><br>&nbsp;<span><i class="fa fa-bed"></i> One king Bed</span><br>&nbsp;<span><i class='fas fa-door-closed'></i> Room size: 23 m??/248 ft?? <span class="float-right" style="font-size: 20px;color: red;">Rs.1,230</span></span><br>&nbsp;<span><i class='fas fa-smoking-ban'></i> No smoking</span><br>&nbsp;<span><i class='fas fa-shower'></i> Shower <span class="float-right text-danger" style="font-size: 14px;">only 2 Rooms left</span></span><button class="btn btn-primary float-right" style="width: 100%;">Search</button>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top:3.3% ;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead>
                                    <tr><th>Benefits</th><th>Sleeps</th><th>price</th><th>Most Booked</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><p>Lowest Price avaliable </p><b><p>Your price includes :</p></b><p>Free breakfast</p><p>Free wifi</p><p>Extra low price (non refundable)</p></td><td></td><td>Save 39% Today</td><td><a href="maredumilli_maps.php"><button class="btn btn-primary text-white">Reserve</button></a></td>  </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="one_card_style" style="margin-top: 7%;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 id="room_name_align">Cozy Rooms</h5>
                            <img src="6.webp" alt="" class="img-fluid" style="width:100%;height:200px;"><br>
                            <div>
                                &nbsp;<span>Room photo and details</span><br>&nbsp;<span><i class="fa fa-wifi" style="color:green"></i> Free Wifi</span><br>&nbsp;<span><i class="fa fa-bed"></i> One king Bed</span><br>&nbsp;<span><i class='fas fa-door-closed'></i> Room size: 23 m??/248 ft?? <span class="float-right" style="font-size: 20px;color: red;">Rs.1,230</span></span><br>&nbsp;<span><i class='fas fa-smoking-ban'></i> No smoking</span><br>&nbsp;<span><i class='fas fa-shower'></i> Shower <span class="float-right text-danger" style="font-size: 14px;">only 2 Rooms left</span></span><button class="btn btn-primary float-right" style="width: 100%;">Search</button>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top:3.3% ;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead>
                                    <tr><th>Benefits</th><th>Sleeps</th><th>price</th><th>Most Booked</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><p>Lowest Price avaliable </p><b><p>Your price includes :</p></b><p>Free breakfast</p><p>Free wifi</p><p>Extra low price (non refundable)</p></td><td></td><td>Save 39% Today</td><td><a href="maredumilli_maps.php"><button class="btn btn-primary text-white">Reserve</button></a></td>  </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="one_card_style" style="margin-top:7%;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 id="room_name_align">Cozy Rooms</h5>
                            <img src="4.webp" alt="" class="img-fluid" style="width:100%;height:200px;"><br>
                            <div>
                                &nbsp;<span>Room photo and details</span><br>&nbsp;<span><i class="fa fa-wifi" style="color:green"></i> Free Wifi</span><br>&nbsp;<span><i class="fa fa-bed"></i> One king Bed</span><br>&nbsp;<span><i class='fas fa-door-closed'></i> Room size: 23 m??/248 ft?? <span class="float-right" style="font-size: 20px;color: red;">Rs.1,230</span></span><br>&nbsp;<span><i class='fas fa-smoking-ban'></i> No smoking</span><br>&nbsp;<span><i class='fas fa-shower'></i> Shower <span class="float-right text-danger" style="font-size: 14px;">only 2 Rooms left</span></span><button class="btn btn-primary float-right" style="width: 100%;">Search</button>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top:3.3% ;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead>
                                    <tr><th>Benefits</th><th>Sleeps</th><th>price</th><th>Most Booked</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><p>Lowest Price avaliable </p><b><p>Your price includes :</p></b><p>Free breakfast</p><p>Free wifi</p><p>Extra low price (non refundable)</p></td><td></td><td>Save 39% Today</td><td><a href="maredumilli_maps.php"><button class="btn btn-primary text-white">Reserve</button></a></td>  </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="one_card_style" style="margin-top:7%;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 id="room_name_align">Cozy Rooms</h5>
                            <img src="5.webp" alt="" class="img-fluid" style="width:100%;height:200px;"><br>
                            <div>
                                &nbsp;<span>Room photo and details</span><br>&nbsp;<span><i class="fa fa-wifi" style="color:green"></i> Free Wifi</span><br>&nbsp;<span><i class="fa fa-bed"></i> One king Bed</span><br>&nbsp;<span><i class='fas fa-door-closed'></i> Room size: 23 m??/248 ft?? <span class="float-right" style="font-size: 20px;color: red;">Rs.1,230</span></span><br>&nbsp;<span><i class='fas fa-smoking-ban'></i> No smoking</span><br>&nbsp;<span><i class='fas fa-shower'></i> Shower <span class="float-right text-danger" style="font-size: 14px;">only 2 Rooms left</span></span><button class="btn btn-primary float-right" style="width: 100%;">Search</button>
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-top:3.3% ;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead>
                                    <tr><th>Benefits</th><th>Sleeps</th><th>price</th><th>Most Booked</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><p>Lowest Price avaliable </p><b><p>Your price includes :</p></b><p>Free breakfast</p><p>Free wifi</p><p>Extra low price (non refundable)</p></td><td></td><td>Save 39% Today</td><td><a href="maredumilli_maps.php"><button class="btn btn-primary text-white">Reserve</button></a></td>  </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class=" my-5">
    <footer class="text-center text-white" style="background-color: #caced1;width:100%;margin-bottom:-4.2%">
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
        ?? 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Millideals.in</a>
    </div>
    <!-- Copyright -->
    </footer>

    </div>
    <script>
        let btn = document.querySelector("#button_class");
        let ul = document.querySelector("ul");

        btn.onmouseup = function() {
            ul.classList.toggle("show");
        }
    </script>
</body>
</html>