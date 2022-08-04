<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project_m.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="banner">
        <nav class="header">
            <a href="#" class="logo"><img src="logo_l.png" alt=""></a>
            <ul>
                <li><a href="res_signin.html"><button class="signin">Sign in</button></a></li>
                <li><a href="Register_login_form.html"><button class="register">Register</button></a></li>
            </ul>
        </nav>
    </div>
    <!--Clock date and time-->
    <div class="container_con">
        <div class="weekday">
            <div class="" id="weekday">
                Display Day of The Week.
            </div>
        </div>
        <div class="digital-clock" id="digital-clock"></div>
    </div>
    <form action="maredumilli_update.php" method="POST">
      <div class="container" style="float: left;">
          <div class="title">Search</div>
          <div class="input-form">
                <div class="section-1">
                  <div class="items">
                    <label class="label">Enter your destination or property</label>
                    <input type="text" class="input" maxlength="16" name="Address" value="Maredumilli">
                  </div>
                </div>
              <div class="section-3">
                <div class="items">
                  <label class="label">Indate</label>
                  <input type="date" class="input" placeholder="MM/DD/YY" name="Indate">
                </div>
                <div class="items">
                  <div class="cvc">
                    <label class="label">Outdate</label>
                  </div>
                  <input type="date" class="input" placeholder="MM/DD/YY" name="Outdate">
                </div>
              </div>
              <div class="section-2">
                <div class="items">
                  <label class="label">Adults-Childrens-Rooms</label>
                  <div class="acr">
                    <input type="text" class="input" placeholder="Adults-Childrens-Rooms" name="Adults" value="Adults 1 Childrens 1 Rooms 1">
                    <div class="Rooms_incremnet">
                        <p class="room_span">
                          Adults
                          <span class="pm">+</span>
                          <span class="pm">-</span>
                        </p>
                        <p class="room_span">
                          Childrens
                          <span class="pm">+</span>
                          <span class="pm">-</span>
                        </p>
                        <p class="room_span">
                          Rooms 
                          <span class="pm">+</span>
                          <span class="pm">-</span>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <script src="project_m.js">
          </script>
          <div class="btnws"><button class="search_btn">Search</button></div>
        </div>  
      </form>
    <div id="slider" style="float: left;">
        <ul id="slideWrap"> 
          <li><img src="p2.jpg" alt=""></li>
          <li><img src="p3.jpg" alt=""></li>
          <li><img src="p4.jpg" alt=""></li>
          <li><img src="p5.jpg" alt=""></li>
          <li><img src="p6.jpg" alt=""></li>
          <li><img src="p7.jpg" alt=""></li>
          <li><img src="p8.jpg" alt=""></li>
          <li><img src="p9.jpg" alt=""></li>
          <li><img src="p1.jpg" alt=""></li>
        </ul>
        <a id="prev" href="#">&#8810;</a>
        <a id="next" href="#">&#8811;</a>
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
      <!--Sticky-->
      <script>
        window.addEventListener('scroll', function(){
        var header = document.querySelector('.header');
        header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <!--Digital clock-->
    <script type="text/javascript">
        let clock = document.getElementById("digital-clock");

        setInterval(() => {
          let date = new Date();
          clock.innerHTML = date.toLocaleTimeString();
        }, 1000);

    </script>
    <script type="text/javascript">
        let date = new Date();
        let dayNumber = date.getDay();
        let theDayIs;
        let quote;
      
        switch(dayNumber){
            case 0:
                theDayIs = 'Sunday';
                quote = 'Time to chillax!';
                break;
            case 1:
                theDayIs = 'Monday';
                quote = 'Monday morning blues!';
                break;
            case 2:
                theDayIs = 'Tuesday';
                quote = 'Taco Time!';
                break;
            case 3:
                theDayIs = 'Wednesday';
                quote = 'Two more days to the weekend.';
                break;
            case 4:
                theDayIs = 'Thursday';
                quote = 'The weekend is almost here...';
                break;
            case 5:
                theDayIs = 'Friday';
                quote = 'Weekend is here!';
                break;
            case 6:
                theDayIs = 'Saturday';
                quote = 'Time to party 🎉';
                break;
        }
      
          let spanOfWeekday = document.getElementById("weekday");
          spanOfWeekday.innerHTML = `${theDayIs}`;
      
          let spanOfQuote = document.getElementById("quote");
          spanOfQuote.innerHTML = `${quote}`;
      </script>
    <!--Image sliding-->
    <script>
        var responsiveSlider = function() {
        var slider = document.getElementById("slider");
        var sliderWidth = slider.offsetWidth;
        var slideList = document.getElementById("slideWrap");
        var count = 1;
        var items = slideList.querySelectorAll("li").length;
        var prev = document.getElementById("prev");
        var next = document.getElementById("next");
    
        window.addEventListener('resize', function() {
          sliderWidth = slider.offsetWidth;
        });
    
        var prevSlide = function() {
          if(count > 1) {
            count = count - 2;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
          }
          else if(count = 1) {
            count = items - 1;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
          }
        };
    
        var nextSlide = function() {
          if(count < items) {
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
          }
          else if(count = items) {
            slideList.style.left = "0px";
            count = 1;
          }
        };
    
        next.addEventListener("click", function() {
          nextSlide();
        });
    
        prev.addEventListener("click", function() {
          prevSlide();
        });
    
        setInterval(function() {
          nextSlide()
        }, 5000);
    
        };
    
        window.onload = function() {
        responsiveSlider();  
        }
      </script>
</body>
</html>