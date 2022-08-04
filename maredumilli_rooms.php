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
		$children = $_POST['children'];
		$Rooms = $_POST['Rooms'];
		// database insert SQL code
		$sql = "INSERT INTO `book` (`Address`, `Indate`, `Outdate`, `Adults`,`children`,`Rooms`) VALUES ( '$Address', '$Indate', '$Outdate', '$Adults','$children','$Rooms')";
		// insert in database 
		$rs = mysqli_query($con, $sql);
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>

        </title>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="maredumilli_rooms.css">
    </head>
<body>
    <div style="position:absolute;width:70%;height:100vh;background-color:white;margin-left:26%;margin-top:10%">
        <iframe src="grid_images.html" frameborder="0" style="width:120%;height:114vh"></iframe>
    </div>
    <div class="banner">
        <nav class="header">
        <a href="#" class="logo"><img src="logo_l.png" alt=""></a>
            <ul>
                <li><a href="signin.php"><button class="signin">Sign in</button></a></li>
                <li><a href="Register.html"><button class="register">Register</button></a></li>
            </ul>
        </nav>
    </div>
  <div>
    <div class="search_bar">
    <h1 class="search_font">Search</h1>
        <span class="searchbar_font">Enter you destination</span>
        <input list="list" placeholder="Enter your destination" class="destination">
        <datalist id="list">
            <option value="Kaikaluru">
            <option value="Hyderabad">
            <option value="Vijayawada">
            <option value="Banglore">
            <option value="Kolkata">
            <option value="Vizag">
        </datalist>
        <span class="searchbar_font">Indate</span>
        <input type="date" class="indate"> 
        <span class="searchbar_font">Outdate</span>
        <input type="date" class="outdate"> 
        <span class="searchbar_font">Adults - Childrens - Rooms</span>
        <input type="text" placeholder="Adults" class="numbers">
        <input type="text" placeholder="Childrens" class="numbers">
        <input type="text" placeholder="Rooms" class="numbers">
        <br><br>
        <input type="button" class="submit_b" value="Search">
    </div>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15212.194557295803!2d81.70909879999999!3d17.60042505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a373b673b8e73f3%3A0x1909145907cea2cf!2sMaredumilli%2C%20Andhra%20Pradesh%20533295!5e0!3m2!1sen!2sin!4v1655011626386!5m2!1sen!2sin" width="270px" height="500px"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<br>
<div class="mobile_style">
    <img src="mimg.jpg" alt="">
    <p class="room_name">Superior King Shared Bathroom</p>
    <P class="star_rating">Entire apartment <i class="fas fa-child" style="font-size:2vw"></i><i class="fas fa-child" style="font-size:2vw"></i><i class="fas fa-child" style="font-size:2vw"></i></P>
    <p class="review_score">5.4 Review score (239 Reviews)</p>
    <div class="div_para">As mentioned we got all the facilities in the property and wonderful beach view where you can spend your....</div>
    <div class="mapping">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15212.194557295803!2d81.70909879999999!3d17.60042505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a373b673b8e73f3%3A0x1909145907cea2cf!2sMaredumilli%2C%20Andhra%20Pradesh%20533295!5e0!3m2!1sen!2sin!4v1655011626386!5m2!1sen!2sin" width="85%" height="160px"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="rooms_style">
        <img src="mimg.jpg" alt="">
        <p>Room photo and details</p>
        <p><i class="fa fa-wifi" style="color:green"></i> Free Wifi</p>
        <p><i class="fa fa-bed"></i> One king Bed</p>
        <p><i class='fas fa-door-closed'></i> Room size: 23 m²/248 ft²</p>
        <p><i class='fas fa-smoking-ban'></i> No smoking</p>
        <p><i class='fas fa-shower'></i> Shower</p>
    </div>
</div>
<div class="pc_style" style="margin-top:53%">
    <p class="Room-size">Cozy Room</p>
    <img src="6.webp" alt="">
    <p>Room photo and details</p>
    <p><i class="fa fa-wifi" style="color:green"></i> Free Wifi</p>
    <p><i class="fa fa-bed"></i> One king Bed</p>
    <p><i class='fas fa-door-closed'></i> Room size: 23 m²/248 ft²</p>
    <p><i class='fas fa-smoking-ban'></i> No smoking</p>
    <p><i class='fas fa-shower'></i> Shower</p>
    <div class="table_style">
            <table style="width:100%;line-height:37px">
                <tr>
                    <th style="width:40%">Benefits</th>
                    <th style="width: 15%;">Sleeps </th>
                    <th style="width:23%">Price per night</th>
                    <th style="width:30%">Most Booked</th>
                </tr>
                <tr>
                    <td><span>Lowest price avaliable!</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Your price includes :</b></td>
                    <td></td>
                    <td style="font-size:1.1vw"><span class="save_percentage">SAVE 39% TODAY</span></td>
                    <td><button class="room_count">1</button><a href="maredumilli_maps.php"><button class="room_reserve">Reserve</button></a></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free breakfast for 2</td>
                    <td></td>
                    <td><span class="room_money">Rs 1,270</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free Wi-Fi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Extra low price! (non-refundable)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
    </div>
</div>
<div class="pc_style" style="margin-top:86%">
    <p class="Room-size">Seven Hills</p>
    <img src="7.webp" alt="">
    <p>Room photo and details</p>
    <p><i class="fa fa-wifi" style="color:green"></i> Free Wifi</p>
    <p><i class="fa fa-bed"></i> One king Bed</p>
    <p><i class='fas fa-door-closed'></i> Room size: 22 m²/278 ft²</p>
    <p><i class='fas fa-smoking-ban'></i> No smoking</p>
    <p><i class='fas fa-shower'></i> Shower</p>
    <div class="table_style">
            <table style="width:100%;line-height:37px">
                <tr>
                    <th style="width:40%">Benefits</th>
                    <th style="width: 15%;">Sleeps </th>
                    <th style="width:23%">Price per night</th>
                    <th style="width:30%">Most Booked</th>
                </tr>
                <tr>
                    <td><span>Lowest price avaliable!</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Your price includes :</b></td>
                    <td></td>
                    <td style="font-size:1.1vw"><span class="save_percentage">SAVE 38% TODAY</span></td>
                    <td><button class="room_count">1</button><a href="maredumilli_maps.php"><button class="room_reserve">Reserve</button></a></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free breakfast for 2</td>
                    <td></td>
                    <td><span class="room_money">Rs 1,457</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free Wi-Fi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Extra low price! (non-refundable)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
    </div>
</div>
<div class="pc_style" style="margin-top:119%">
    <p class="Room-size">Larvo Room</p>
    <img src="8.webp" alt="">
    <p>Room photo and details</p>
    <p><i class="fa fa-wifi" style="color:green"></i> Free Wifi</p>
    <p><i class="fa fa-bed"></i> One king Bed</p>
    <p><i class='fas fa-door-closed'></i> Room size: 24 m²/261 ft²</p>
    <p><i class='fas fa-smoking-ban'></i> No smoking</p>
    <p><i class='fas fa-shower'></i> Shower</p>
    <div class="table_style">
            <table style="width:100%;line-height:37px">
                <tr>
                    <th style="width:40%">Benefits</th>
                    <th style="width: 15%;">Sleeps </th>
                    <th style="width:23%">Price per night</th>
                    <th style="width:30%">Most Booked</th>
                </tr>
                <tr>
                    <td><span>Lowest price avaliable!</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Your price includes :</b></td>
                    <td></td>
                    <td style="font-size:1.1vw"><span class="save_percentage">SAVE 39% TODAY</span></td>
                    <td><button class="room_count">1</button><a href="maredumilli_maps.php"><button class="room_reserve">Reserve</button></a></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free breakfast for 2</td>
                    <td></td>
                    <td><span class="room_money">Rs 1,650</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free Wi-Fi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Extra low price! (non-refundable)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
    </div>
</div>
<div class="pc_style" style="margin-top:152%">
    <p class="Room-size">Jelly King</p>
    <img src="9.webp" alt="">
    <p>Room photo and details</p>
    <p><i class="fa fa-wifi" style="color:green"></i> Free Wifi</p>
    <p><i class="fa fa-bed"></i> One king Bed</p>
    <p><i class='fas fa-door-closed'></i> Room size: 24 m²/253 ft²</p>
    <p><i class='fas fa-smoking-ban'></i> No smoking</p>
    <p><i class='fas fa-shower'></i> Shower</p>
    <div class="table_style">
            <table style="width:100%;line-height:37px">
                <tr>
                    <th style="width:40%">Benefits</th>
                    <th style="width: 15%;">Sleeps </th>
                    <th style="width:23%">Price per night</th>
                    <th style="width:30%">Most Booked</th>
                </tr>
                <tr>
                    <td><span>Lowest price avaliable!</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Your price includes :</b></td>
                    <td></td>
                    <td style="font-size:1.1vw"><span class="save_percentage">SAVE 39% TODAY</span></td>
                    <td><button class="room_count">1</button><a href="maredumilli_maps.php"><button class="room_reserve">Reserve</button></a></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free breakfast for 2</td>
                    <td></td>
                    <td><span class="room_money">Rs 1,798</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Free Wi-Fi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="color:green">&#10004;</span> Extra low price! (non-refundable)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
    </div>
</div>
<footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <i class="fab fa-slack"></i>
              <span class="logo_name">Logo</span>
            </div>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Company</li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Get started</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Services</li>
              <li><a href="#">App design</a></li>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Logo design</a></li>
              <li><a href="#">Banner design</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Account</li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">My account</a></li>
              <li><a href="#">Prefrences</a></li>
              <li><a href="#">Purchase</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Courses</li>
              <li><a href="#">HTML & CSS</a></li>
              <li><a href="#">JavaScript</a></li>
              <li><a href="#">Photography</a></li>
              <li><a href="#">Photoshop</a></li>
            </ul>
            <ul class="box input-box">
              <li class="link_name">Subscribe</li>
              <li><input type="text" placeholder="Enter your email"></li>
              <li><input type="button" value="Subscribe"></li>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 <a href="#">Logo.</a>All rights reserved</span>
            <span class="policy_terms">
              <a href="#">Privacy policy</a>
              <a href="#">Terms & condition</a>
            </span>
          </div>
        </div>
      </footer>
  <script>
    window.addEventListener('scroll', function(){
    var header = document.querySelector('.header');
    header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>
</body>
</html>