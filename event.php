<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="evtStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@700&family=Dosis:wght@200&family=Gantari:wght@853;900&family=Montserrat:wght@100&family=Open+Sans:wght@300;700&family=Oswald:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <div class="parallax">
            <nav id="navbar">
                <div id="logo">
                    <!-- <img src="logo.png" alt="MyOnlineMeal.com"> -->
    
                </div>
                <ul>
                    <li class="item"><a href="home.php">Home</a></li>
                    <li class="item"><a href="club.php">Club</a></li>
                    <li class="item"><a href="event.php">Events</a></li>
                    <li class="item"><a href="StudentLogin.php">Student Login</a></li>
                    <li class="item"><a href="AdminLogin.php">Admin Login</a></li>
                    <li class="item"><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="overlay">
                <h1>Events</h1>
                <p>Extra-curricular activities help students to learn<br>about themselves and develop and use their skills and<br>knowledge in different contexts.Extracurricular activities help<br>children to develop their social skills, increase self-confidence,<br>build leadership skills and learn how to work in a team<br>to achieve a shared goal.</p>
                <button class="evt-btn">View Upcoming Events</button>
            </div>
        </div>
    </div>

    <section class="event-slider">
        <h2>Upcoming Events</h2>
        <button class="pre-btn"><img src="images/double-arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/double-arrow.png" alt=""></button>
        <div class="event-container">
            <div class="event-card">
                <div class="event-img">
                    <div class="event-info">
                        <h3>Painting Competition</h3>
                        <p>04-Aug-2022 | 2:00 am | Main Campus</p>
                        <p><a href="#one">View Event</a></p>
                    </div>
                    <div class="event-thumb">
                        <img src="images/event2.jpg" alt="painting">
                    </div>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <div class="event-info">
                        <h3>Photography Competition</h3>
                        <p>10-Aug-2022 | 1:00 pm | Main Campus</p>
                        <p><a href="#two">View Event</a></p>
                    </div>
                    <div class="event-thumb">
                        <img src="images/event6.jpg" alt="painting">
                    </div>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <div class="event-info">
                        <h3>Cricket Match</h3>
                        <p>15-Aug-2022 | 10:00 am | Main Stadium</p>
                        <p><a href="#three">View Event</a></p>
                    </div>
                    <div class="event-thumb">
                        <img src="images/event3.jpg" alt="painting">
                    </div>
                </div>
            </div>
           <div class="event-card">
                <div class="event-img">
                    <div class="event-info">
                        <h3>Debate Competition</h3>
                        <p>21-Aug-2022 | 2:30 pm | Main Auditorium</p>
                        <p><a href="#four">View Event</a></p>
                    </div>
                    <div class="event-thumb">
                        <img src="images/event4.jpg" alt="painting">
                    </div>
                </div>
            </div>
            <div class="event-card">
                <div class="event-img">
                    <div class="event-info">
                        <h3>Soccer Match</h3>
                        <p>29-Aug-2022 | 11:00 pm | Main Stadium</p>
                        <p><a href="#five">View Event</a></p>
                    </div>
                    <div class="event-thumb">
                        <img src="images/event5.jpg" alt="painting">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-sec">
        <div class="event-gallery">
            <table class="gallery-table" cellpadding="0" cellspacing="0">
               <tr>
                <td><img src="images/gallery/1.jpg" alt=""></td>
                <td><img src="images/gallery/2.jpg" alt=""></td>
                <td><img src="images/gallery/3.jpg" alt=""></td>
                <td><img src="images/gallery/4.jpg" alt=""></td>
                <td><img src="images/gallery/5.jpg" alt=""></td>
                <td><img src="images/gallery/6.jpg" alt=""></td>
                <td><img src="images/gallery/7.jpg" alt=""></td>
               </tr>
               <tr>
                <td><img src="images/gallery/8.jpg" alt=""></td>
                <td><img src="images//9.jpg" alt=""></td>
                <td class="gallery-head" rowspan="2" colspan="3"><h1>GALLERY</h1><p>The moments we cherish...</p></td>
                <td><img src="images/gallery/10.jpg" alt=""></td>
                <td><img src="images/gallery/11.jpg" alt=""></td>
               </tr>
               <tr>
                <td><img src="images/gallery/12.jpg" alt=""></td>
                <td><img src="images/gallery/13.jpg" alt=""></td>
                <td><img src="images/gallery/14.jpg" alt=""></td>
                <td><img src="images/gallery/15.jpg" alt=""></td>
               </tr>
               <tr>
                <td><img src="images/gallery/16.jpg" alt=""></td>
                <td><img src="images/gallery/17.jpg" alt=""></td>
                <td><img src="images/gallery/18.jpg" alt=""></td>
                <td><img src="images/gallery/19.jpg" alt=""></td>
                <td><img src="images/gallery/20.jpg" alt=""></td>
                <td><img src="images/gallery/21.jpg" alt=""></td>
                <td><img src="images/gallery/22.jpg" alt=""></td>
               </tr>
            </table>
        </div>
    </section>
    <hr>
    <div class="event-all">
        <div class="event-description">
            <div class="desc-img">
                <img id="one" src="images/event2.jpg" alt="">
            </div>
            <div class="desc-info">
                <h2>Painting Competition</h2>
                <h4>04-Aug-2022   |   2:00 am   |   Main Campus</h4>
                <p>The competition is to challenge every artist out there to show us what you got.</p>
                <a href="applyevent.php">Register Now</a>
            </div>
        </div>
        <div class="event-description">
            <div class="desc-img">
                <img id="two" src="images/event6.jpg" alt="">
            </div>
            <div class="desc-info">
                <h2>Photography Competition</h2>
                <h4>10-Aug-2022   |   1:00 pm   |   Main Campus</h4>
                <p>The competition is to challenge every artist out there to show us what you got.</p>
                <a href="applyevent.php">Register Now</a>
            </div>
        </div>
        <div class="event-description">
            <div class="desc-img">
                <img id="three" src="images/event3.jpg" alt="">
            </div>
            <div class="desc-info">
                <h2>Cricket Match</h2>
                <h4>15-Aug-2022   |   10:00 am   |   Main Stadium</h4>
                <p>The competition is to challenge every cricketer out there to show us what you got.</p>
                <a href="applyevent.php">Register Now</a>
            </div>
        </div>
        <div class="event-description">
            <div class="desc-img">
                <img id="four" src="images/event4.jpg" alt="">
            </div>
            <div class="desc-info">
                <h2>Debate Competition</h2>
                <h4>21-Aug-2022   |   2:30 pm   |   Main Auditorium</h4>
                <p>The competition is to challenge every debater out there to show us what you got.</p>
                <a href="applyevent.php">Register Now</a>
            </div>
        </div>
        <div class="event-description">
            <div class="desc-img">
                <img id="five" src="images/event5.jpg" alt="">
            </div>
            <div class="desc-info">
                <h2>Soccer Match</h2>
                <h4>29-Aug-2022   |   11:00 pm   |   Main Stadium</h4>
                <p>The competition is to challenge every soccer player out there to show us what you got.</p>
                <a href="applyevent.php">Register Now</a>
            </div>
        </div>
        <div class="event-description">
            <div class="desc-img">
                <img id="six" src="images/event7.jpg" alt="">
            </div>
            <div class="desc-info">
                <h2>Coding Competition</h2>
                <h4>04-Sep-2022   |   2:00pm   |   Main Lab</h4>
                <p>The competition is to challenge every coder out there to show us what you got.</p>
                <a href="applyevent.php">Register Now</a>
            </div>
        </div>
    </div>
    <script src="event.js"></script>
    
</body>
</html>