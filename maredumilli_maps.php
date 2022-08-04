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
    <link rel="stylesheet" href="maredumilli_maps.css">
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
    <div class="container" id="container_style">
      <div class="row">
        <div class="col-lg-4">
            <div style="border:1px solid silver;padding:10px">
                <?php
                    $con=mysqli_connect('localhost','root','','hbooking');
                    if(mysqli_connect_error()){
                        echo 'failed'.mysqli_connect_error();
                    }
                    session_start();
                    $query="select * from book where id in (select max(id) from book)";
                    $result1=mysqli_query($con,$query);
                    while($rows=mysqli_fetch_array($result1)){
                        ?>
                        <h4 class="text-center">Your Details</h4><hr>
                        <span class="mt-2">Your Entered Destination :</span><br>
                        <?php echo $rows['Address'];?><hr>
                        <span>Indate : </span><span style="margin-left:30%">Outdate : </span><br>
                        <?php echo $rows['Indate'];?><span style="margin-left:22%"><?php echo $rows['Outdate'];?></span><hr>
                        <span>Adults Childrens Rooms : </span><br>
                        <?php echo $rows['Adults'];?>
                    <?php
                    }
                ?>

            </div><br>
            <div>
                <img src="res_add.jpeg" alt="" style="width:90%" class="responsive_image">
            </div>
        </div>
        <div class="col-lg-8" id="second_div_style">
            <form action="" style="border:1px solid silver;padding:10px;height:100%">
              <h3>Let us know  who are you  </h3>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter full name">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter email id">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter password">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter confirm password">
              </div>
              <div class="form-group">
                        <label for="exampleInputPassword1">Indate</label><label for="exampleInputPassword1" style="margin-left:44%" >Outdate</label><br>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter your mobile no" wid style="width:49%;display:inline">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Country" style="width:49%;display:inline">
              </div>
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <div>
                <p>By proceeding with this booking, I agree to Agoda’s Terms of Use and Privacy Policy.</p>
                <p class="text-success" style="float:right">RISK FREE! No cancellation fee before 23:59 hrs. on August 3, 2022 (property local time)</p>
                <button class="btn btn-primary btn-lg" style="float:right">Next:Final-Step</button>
                <p class="text-success" style="float:left;margin-top:1%;margin-left:54%">You pay Rs.0 today. You'll pay at the property.</p>
              </div>
            </form>
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