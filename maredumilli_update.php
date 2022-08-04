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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Horizontal Card Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="maredumilli_update.css">
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
    <!--First div tag-->
    <div id="android" style="margin-top: 20%;position: relative;z-index: -1;">
        <div class="container mt5" style="width:100%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-3">
                        <img src="6.webp" alt="" class="img-fluid" style="width: 100%;height:200px;">
                    </div>
                    <div class="col-md-7">
                        <span class="card-title mt-1 text-center text-danger ml-1">The Gallivant king hotel</span><br>
                        <i class="fa fa-star rating-color ml-1"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i><br>  
                        <span id="parking_demo" class="text-primary" style="font-size:14px"><i class="fa fa-map-marker" style="color: blue;;" aria-hidden="true"></i>Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-info ml-1">Parking</button>&nbsp<button class="btn btn-info">Free wifi</button><br>
                        <button class="btn btn-primary btn-lg mt-1" style="width: 100%;">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!--second div tag-->
        <div class="container mt5" style="width:100%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-3">
                        <img src="7.webp" alt="" class="img-fluid" style="width:100%;height:200px;">
                    </div>
                    <div class="col-md-7">
                        <span class="card-title mt-1 text-center text-danger">The Gallivant king hotel</span><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i><br>
                        <span id="parking_demo" class="text-primary" style="font-size:14px"><i class="fa fa-map-marker" style="color: blue;" aria-hidden="true"></i>Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-info">Parking</button>&nbsp<button class="btn btn-info">Free wifi</button><br>
                        <button class="btn btn-primary btn-lg mt-1" style="width: 100%;">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!--third div tag-->
        <div class="container mt5" style="width:100%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-3">
                        <img src="5.webp" alt="" class="img-fluid" style="width:100%;height:200px;">
                    </div>
                    <div class="col-md-7">
                        <span class="card-title mt-1 text-center text-danger">The Gallivant king hotel</span><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i><br>  
                        <span id="parking_demo" class="text-primary" style="font-size:14px"><i class="fa fa-map-marker" style="color: blue;" aria-hidden="true"></i>Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-info">Parking</button>&nbsp<button class="btn btn-info">Free wifi</button><br>
                        <button class="btn btn-primary btn-lg mt-1" style="width: 100%;">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!--fourth div tag-->
        <div class="container mt5" style="width:100%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-3">
                        <img src="4.webp" alt="" class="img-fluid" style="width:100%;height:200px;">
                    </div>
                    <div class="col-md-7">
                        <span class="card-title mt-1 text-center text-danger">The Gallivant king hotel</span><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i><br>  
                        <span id="parking_demo" class="text-primary" style="font-size:14px"><i class="fa fa-map-marker" style="color: blue;" aria-hidden="true"></i>Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-info">Parking</button>&nbsp<button class="btn btn-info">Free wifi</button><br>
                        <button class="btn btn-primary btn-lg mt-1" style="width: 100%;">Search</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--End of the android div tag-->
    <!--Starting of the windows div tag-->
    <div id="windows" style="margin-top: 9%;">
        <div style="margin-left:0.5%;width:20%;float: left;">
            <div class="container bg-warning" style="margin-top: -1%;">
                <h2>Search</h2>
                <form action="maredumilli_update.php" method="POST">
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
            </div>
            <div class="container">
                <iframe style="margin-left:-2% ;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15212.194557295803!2d81.70909879999999!3d17.60042505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a373b673b8e73f3%3A0x1909145907cea2cf!2sMaredumilli%2C%20Andhra%20Pradesh%20533295!5e0!3m2!1sen!2sin!4v1659328416556!5m2!1sen!2sin" width="260" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="float-right">
            <img src="responsive_add.PNG" style="width:200px;" alt="">
        </div>
        <div class="container" style="width:60%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="6.webp" alt="" class="img-fluid" style="width:350px;height:200px;">
                    </div>
                    <div class="col-md-5">
                        <b><span class="card-title mt-1 text-center" style="font-size: 1.3rem;">The Gallivant king hotel</span></b><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i><br>  
                        <i class="fa fa-map-marker" style="color:black" aria-hidden="true"></i><span class="text-primary">Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-light">Parking</button>&nbsp<button class="btn btn-light">Express check-in</button><br>
                        <p class="text-danger">popular latest booked 6 hours ago</p>
                        <a href="maredumilli_rooms_upda.php"><button class="btn btn-primary" style="width: 200px">Select Rooms</button></a>
                    </div>
                    <div class="col-md-3" id="border_property">
                        <div class="float-right" style="margin:10px 10px">
                            <div>Excellent <span class="bg-primary text-white lead">8.3</span><br><span class="blockquote-footer">884 reviews</span></div>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="mt-1"><i class="fal fa-wifi" style="font-size: 1.2rem;color:green"></i>24 hours Free wifi</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="bg-danger text-white">2 Left at the price</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <s>Rs.2,345</s>
                            <span style="color:red;font-size:1.6rem">Rs.1,356</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--second windows div tag-->
        <div class="container" style="width:60%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="7.webp" alt="" class="img-fluid" style="width:350px;height:200px;">
                    </div>
                    <div class="col-md-5">
                        <b><span class="card-title mt-1 text-center" style="font-size: 1.3rem;">The Gallivant king hotel</span></b><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i><br>  
                        <i class="fa fa-map-marker" style="color:black" aria-hidden="true"></i><span class="text-primary">Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-light">Parking</button>&nbsp<button class="btn btn-light">Express check-in</button><br>
                        <p class="text-danger">popular latest booked 6 hours ago</p>
                        <a href="maredumilli_rooms_upda.php"><button class="btn btn-primary" style="width: 200px">Select Rooms</button></a>
                    </div>
                    <div class="col-md-3" id="border_property">
                        <div class="float-right" style="margin:10px 10px">
                            <div>Excellent <span class="bg-primary text-white lead">8.3</span><br><span class="blockquote-footer">884 reviews</span></div>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="mt-1"><i class="fal fa-wifi" style="font-size: 1.2rem;color:green"></i>24 hours Free wifi</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="bg-danger text-white">2 Left at the price</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <s>Rs.2,345</s>
                            <span style="color:red;font-size:1.6rem">Rs.1,356</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--third  windows div tag-->
        <div class="container" style="width:60%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="8.webp" alt="" class="img-fluid" style="width:350px;height:200px;">
                    </div>
                    <div class="col-md-5">
                        <b><span class="card-title mt-1 text-center" style="font-size: 1.3rem;">The Gallivant king hotel</span></b><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i><br>  
                        <i class="fa fa-map-marker" style="color:black" aria-hidden="true"></i><span class="text-primary">Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-light">Parking</button>&nbsp<button class="btn btn-light">Express check-in</button><br>
                        <p class="text-danger">popular latest booked 6 hours ago</p>
                        <a href="maredumilli_rooms_upda.php"><button class="btn btn-primary" style="width: 200px">Select Rooms</button></a>
                    </div>
                    <div class="col-md-3" id="border_property">
                        <div class="float-right" style="margin:10px 10px">
                            <div>Excellent <span class="bg-primary text-white lead">8.3</span><br><span class="blockquote-footer">884 reviews</span></div>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="mt-1"><i class="fal fa-wifi" style="font-size: 1.2rem;color:green"></i>24 hours Free wifi</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="bg-danger text-white">2 Left at the price</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <s>Rs.2,345</s>
                            <span style="color:red;font-size:1.6rem">Rs.1,356</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fourth windows div tag-->
        <div class="container" style="width:60%;">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="4.webp" alt="" class="img-fluid" style="width:350px;height:200px;">
                    </div>
                    <div class="col-md-5">
                        <b><span class="card-title mt-1 text-center" style="font-size: 1.3rem;">The Gallivant king hotel</span></b><br>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i><br>  
                        <i class="fa fa-map-marker" style="color:black" aria-hidden="true"></i><span class="text-primary">Georgetown,penang-0.7km to the center</span><br>
                        <button class="btn btn-light">Parking</button>&nbsp<button class="btn btn-light">Express check-in</button><br>
                        <p class="text-danger">popular latest booked 6 hours ago</p>
                        <a href="maredumilli_rooms_upda.php"><button class="btn btn-primary" style="width: 200px">Select Rooms</button></a>
                    </div>
                    <div class="col-md-3" id="border_property">
                        <div class="float-right" style="margin:10px 10px">
                            <div>Excellent <span class="bg-primary text-white lead">8.3</span><br><span class="blockquote-footer">884 reviews</span></div>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="mt-1"><i class="fal fa-wifi" style="font-size: 1.2rem;color:green"></i>24 hours Free wifi</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <p class="bg-danger text-white">2 Left at the price</p>
                        </div>
                        <div class="float-right" style="margin-right:10px;">
                            <s>Rs.2,345</s>
                            <span style="color:red;font-size:1.6rem">Rs.1,356</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of the windows div tag-->
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
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Millideals.in</a>
    </div>
    <!-- Copyright -->
    </footer>

    </div>
    <script>
        $(document).ready(function(){
            $(window).resize(function(){location.reload();});
            var w = window.innerWidth;
            if(w<700){
                $("#windows").hide();
            }else{
                $("#android").hide();
            }
        });
    </script>
    <script>
        let btn = document.querySelector("#button_class");
        let ul = document.querySelector("ul");

        btn.onmouseup = function() {
            ul.classList.toggle("show");
        }
    </script>
    <script>/*
        document.getElementById("button_class").addEventListener("click", on_mouse_enter);
        document.getElementById("button_class").addEventListener("mouseleave", on_mouse_leave);
        function on_mouse_enter(){
            document.getElementById('android').style.margin="66% 0%";
        }
        function on_mouse_leave(){
            document.getElementById('android').style.margin="20% 0%";
        }*/
    </script>
</body>

</html>
