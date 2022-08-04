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
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>

        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="maredumilli1.css?v=<?php echo time(); ?>">
    </head>
    <style>
        @media only screen and (max-width:620px){
            nav,main{
                width:100%;
            }
        }
    </style>
    <body>
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
        <div class="mobile_style" style="margin-top:3%">
            <img src="6.webp" alt="" class="hotel_image">
            <span class="hotel_name">Hotel Maharaja</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"></p>
            <p class="reviews_score">5.4 Review score (239 reviews)</p>
            <p class="location">Pahar Ganj-City center</p>
            <span class="offer_style">55% OFF TODAY</span><br>
            <p class="rupees_m">Rs1,200</p>
            <p class="rupees_s"><S>Rs.2,656</S></p>
        </div>
        <div class="mobile_style" style="margin-top:3%">
            <img src="2.webp" alt="" class="hotel_image">
            <span class="hotel_name">Seven Hills Resorts</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"></p>
            <p class="reviews_score">5.2 Review score (241 reviews)</p>
            <p class="location">Pahar Ganj-City center</p>
            <span class="offer_style">56% OFF TODAY</span><br>
            <p class="rupees_m">Rs1,570</p>
            <p class="rupees_s"><S>Rs.2,130</S></p>
        </div>
        <div class="mobile_style" style="margin-top:3%">
            <img src="8.webp" alt="" class="hotel_image">
            <span class="hotel_name">OAK TREE GARDEN RESORT</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"></p>
            <p class="reviews_score">5.3 Review score (298 reviews)</p>
            <p class="location">Pahar Ganj-City center</p>
            <span class="offer_style">52% OFF TODAY</span><br>
            <p class="rupees_m">Rs1,379</p>
            <p class="rupees_s"><S>Rs.2,234</S></p>
        </div>
        <div class="pc_style" style="margin-top:10%">
            <img src="5.webp" alt="" class="hotel_image">
            <span class="hotel_name">Hotel Maharaja</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style_no"></p>
            <p class="reviews_score">5.4 Review score (241 reviews)</p>
            <p class="location">&nbsp&nbsp<i class="fa fa-map-marker"></i> Pahar Ganj-City center</p>
            <a href="maredumilli_rooms.php"><button class="reserve">Reserve</button></a>
            <div class="vertical_line"></div>
            <span class="rating">5.8</span>
            <span class="verygood">Excellent</span>
            <span class="free_wifi"><i class="fa fa-wifi" style="color:green"></i> Free wifi</span>
            <span class="left_rooms">Only 3 rooms left</span>
            <span class="offer_style">55% OFF TODAY</span><br>
            <p class="rupees_s"><S>Rs.2,656</S></p>
            <p class="rupees_m">Rs1,200</p>
        </div>
        <div class="pc_style" style="margin-top:28%">
            <img src="6.webp" alt="" class="hotel_image">
            <span class="hotel_name">Seven hills</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"></p>
            <p class="reviews_score">5.1 Review score (234 reviews)</p>
            <p class="location">&nbsp&nbsp<i class="fa fa-map-marker"></i> Pahar Ganj-City center</p>
            <a href="maredumilli_rooms.php"><button class="reserve">Reserve</button></a>
            <div class="vertical_line"></div>
            <span class="rating">5.3</span>
            <span class="verygood">Good</span>
            <span class="free_wifi"><i class="fa fa-wifi" style="color:green"></i> Free wifi</span>
            <span class="left_rooms">Only 2 rooms left</span>
            <span class="offer_style">51% OFF TODAY</span><br>
            <p class="rupees_s"><S>Rs.2,345</S></p>
            <p class="rupees_m">Rs1,500</p>
        </div>
        <div class="pc_style" style="margin-top:46.2%">
            <img src="7.webp" alt="" class="hotel_image">
            <span class="hotel_name">Satya Residency</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style_no"></p>
            <p class="reviews_score">5.2 Review score (218 reviews)</p>
            <p class="location">&nbsp&nbsp<i class="fa fa-map-marker"></i> Pahar Ganj-City center</p>
            <a href="maredumilli_rooms.php"><button class="reserve">Reserve</button></a>
            <div class="vertical_line"></div>
            <span class="rating">5.2</span>
            <span class="verygood">Excellent</span>
            <span class="free_wifi"><i class="fa fa-wifi" style="color:green"></i> Free wifi</span>
            <span class="left_rooms">Only 2 rooms left</span>
            <span class="offer_style">70% OFF TODAY</span><br>
            <p class="rupees_s"><S>Rs.2,450</S></p>
            <p class="rupees_m">Rs1,150</p>
        </div>
        <div class="pc_style" style="margin-top:64%">
            <img src="8.webp" alt="" class="hotel_image">
            <span class="hotel_name">The woods</span><br>
            <p><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style"><span class="fa fa-star checked" id="star_style_no"><span class="fa fa-star checked" id="star_style_no"></p>
            <p class="reviews_score">5.6 Review score (221 reviews)</p>
            <p class="location">&nbsp&nbsp<i class="fa fa-map-marker"></i> Pahar Ganj-City center</p>
            <a href="maredumilli_rooms.php"><button class="reserve">Reserve</button></a>
            <div class="vertical_line"></div>
            <span class="rating">5.1</span>
            <span class="verygood">Good</span>
            <span class="free_wifi"><i class="fa fa-wifi" style="color:green"></i> Free wifi</span>
            <span class="left_rooms">Only 2 rooms left</span>
            <span class="offer_style">60% OFF TODAY</span><br>
            <p class="rupees_s"><S>Rs.2,6789</S></p>
            <p class="rupees_m">Rs1,050</p>
        </div>
        <div class="responsive_add">
                <img src="responsive_add.png" alt="">
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