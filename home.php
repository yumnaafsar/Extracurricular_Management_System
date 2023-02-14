<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link type="text/css" href="home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;800&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>

    <div class="Video">
        <video  src="./videos/home.mp4"  autoplay loop muted>
        </video>
    </div>
    <div class="navigation1">
        <img class="imglogo" src="images/logoreal.jpg">
        <h1>KINGSWOOD EXTRACURRICULLAR<br> ACTIVITIES</h1>
        <nav class="navbar">
            <ul>
                <li><a href="home.php"class="active">Home</a></li>
                <li><a href="club.php">Clubs</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="StudentLogin.php">Student Login</a></li>
                <li><a href="AdminLogin.php">Admin Login</a></li>
                <li class="lout"><a href="logout.php">Logout</a></li>
            </ul>
        </nav> 
    </div>

    <div class="moto">
        <h3>Our Moto</h3><hr>
        <p>Extracurricular activities enrich the student's personality <br>as it includes voluntary involvement. An extracurricular activity helps a student with responsibility<br> and time management.</p>
        <br><br>
        <h1>A Warm Welcome Awaits You!</h1>
    </div>
    <div class="imgslider-container-events bg-img" >
        <h1 >LATEST UPCOMING EVENTS!</h1>
        <div class="img1 image1" onmouseover='imgchange("images/f1.jpg")'>
            <img src="images/f2.jpg" height="250px" width="250px">
            <div class="text-area">
                <p>Match<br>Ocean FC Club<br><br><span>18:00<br> friday August 1st</span></p>
                <br>
                <a href="event.php">View</a>
            </div>

        </div>
        <div class="img1 image2" onmouseover='imgchange("images/paint7.jpg")'>
            <img src="images/p2.jpg"  height="250px" width="250px">
            <div class="text-area">
                <p>Match<br>Ocean FC Club<br><br><span>18:00<br> friday August 1st</span></p>
               <br>
               <a href="event.php">View</a>
            </div>
        </div>
        <div class="img1 image3" onmouseover='imgchange("images/d3.jpg")'>
            <img src="images/d5.jpg"  height="250px" width="250px">
            <div class="text-area">
                <p>Match<br>Ocean FC Club<br><br><span>18:00<br> friday August 1st</span><br><br></p>
                
                <a href="event.php">View</a>
                
            </div>
        </div>     
    </div>
    
    <div class="slider-container">
      <h1 id="ach">Our Achievements</h1>
      <div class="slider">
        <div class="slide active">
          <img src="images/f2.jpg "   alt="">
          <div class="info">
            <h2>Football Club</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/p2.jpg" alt="">
          <div class="info">
            <h2>Painting Club</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/cricket2.jpg" alt="">
          <div class="info">
            <h2>Cricket Club</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/p1.jpg" alt="">
          <div class="info">
            <h2>Photography Club</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/d3.jpg" alt="">
          <div class="info">
            <h2>Debate Club</h2>
          </div>
        </div>
        <div class="slide">
          <img src="images/c4.jpg" alt="">
          <div class="info">
            <h2>Coding Club</h2>
          </div>
        </div>
        <div class="navigation">
          <i class="fas fa-chevron-left prev-btn"></i>
          <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
          <div class="slide-icon active"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
          <div class="slide-icon"></div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer-info">
        <div class="social-links">
          <div class="img-foot">
            <h3>KINGSWOOD EXTRACURRICULLAR ACTIVITIES</h3>
          </div>
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="color: blue"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube" style="color: red"></i></a>
          <a href="https://www.twitter.com/"><i class="fab fa-twitter" style="color: rgb(19, 174, 226)"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram" style="color: rgb(200, 50, 145)"></i></a>
          <a href="https://www.google.com/"><i class="fab fa-google" style="color: red"></i></a>
          <a href="https://www.whatsappWeb.com/"><i class="fab fa-whatsapp" style="color: green"></i></a>
        </div>
        <div class="quick-links">
          <h2>Quicks Links</h2>
          <a href="event.php">Events</a><br><br>
          <a href="club.php">Clubs</a><br><br>
          <a href="StudentLogin.php">Login</a><br><br>
        </div>
        <div class="contacts">
          <h2>Reach Us</h2>
          <p><span>Address</span>322,G3 Kingswood strret no 2,London,U.K<br><span class="span2">E-mail</span>www.kingswood.edu.uk<br><span class="span3">Contact</span>(+44) 111-234-678</p>
        </div>
      </div>
       
    </div>
    
      <script  type="text/javascript">
        let imgchange = (e) =>{
        document.querySelector('.bg-img').style.backgroundImage = `url(${e})`;
        document.querySelector('.bg-img').style.backgroundSize ="cover";
        //document.querySelector('.bg-img').style.opacity=".9"  ;
        }
        const slider = document.querySelector(".slider");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide-icon");
    const numberOfSlides = slides.length;
    var slideNumber = 0;

    //image slider next button
    nextBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber++;

      if(slideNumber > (numberOfSlides - 1)){
        slideNumber = 0;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider previous button
    prevBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber--;

      if(slideNumber < 0){
        slideNumber = numberOfSlides - 1;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
      playSlider = setInterval(function(){
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber++;

        if(slideNumber > (numberOfSlides - 1)){
          slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      }, 4000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    slider.addEventListener("mouseover", () => {
      clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    slider.addEventListener("mouseout", () => {
      repeater();
    });
    </script>
</body>
</html>