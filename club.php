<?php 
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "club");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <link rel="stylesheet" href="club.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <style>
        .parallax{
            background: url('images/clubs.jfif') no-repeat center;
            background-size: cover;
            background-attachment: fixed;
            height:100vh;
            width: 100%;
        }
    </style>
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
            <section id="home">
                <h1 class="h-primary">Welcome to Clubs</h1>
                <p>Extracurricular activities provide a channel for reinforcing the lessons learned in the classroom, offering students the opportunity to apply academic skills in a real-world context, and are thus considered part of a well-rounded education.<br>Recent research suggests that participation in extracurricular activities may increase students' sense of engagement or attachment to their school, and thereby decrease the likelihood of school failure and dropping out.<br>If, indeed, participation in extracurricular activities can lead to success in school, then the availability of these activities to students of all backgrounds becomes an important equity issue.</p>
            </section>
        </div>
    </div>
    <section class="clubs-container">
        <h1 class="h-primary center">Clubs</h1>
        <div id="clubs">
            <div class="box">
                <img src="images/c1.jpg" alt="" class="club-img">
                <img src="images/cricket2.jpg" alt="" class="top club-img">
                <h2 class="h-secondary center">Cricket Club</h2>
                <p class="center">Our Cricket Club has an envious history of success and is renowned for fielding strong junior teams into which it puts much effort and resources. Players and members of the Cricket Club enjoy a relaxed, yet competitive atmosphere where life-long friendships are formed. As testament to this, the current President, Secretary, and Treasurer as well as many of our senior players all played their junior cricket.</p>
                <button class="box-btn center"><a href="cricket.php">View</a></button>
            </div>
            <div class="box">
                <img src="images/p1.jpg" alt=""  class="club-img">
                <img src="images/p4.jpg" alt=""  class="top club-img">
                <h2 class="h-secondary center">Photography Club</h2>
                <p class="center">Photography is much more than just having a camera and taking pictures. Students in this club have opportunities to hone their skills by understanding and learning about what makes a good photograph, from composition to artistic expression. In addition, members of this club will learn how to use state of the art software to edit and enhance photographic images for their own use, as well as for publication.</p>
                <button class="box-btn center"><a href="photography.php">View</a></button>
            </div>
            <div class="box">
                <img src="images/d3.jpg" alt="" class="club-img">
                <img src="images/d5.jpg" alt="" class="top club-img">
                <h2 class="h-secondary center">Debating Club</h2>
                <p class="center">The purpose of the society is to encourage critical thinking among its members while honing their public speaking and argumentative skills via competitive and formalised debating. Members learn to express themselves clearly and cohesively and to discuss a wide range of social, political and economic issues, thus gaining greater awareness of the world’s burning issues.</p>
                <button class="box-btn center"><a href="debate.php">View</a></button>
            </div>
        </div>
        <div id="clubs">
            <div class="box">
                <img src="images/p2.jpg" alt="" class="club-img">
                <img src="images/p5.jpg" alt="" class="top club-img">
                <h2 class="h-secondary center">Painting Club</h2>
                <p class="center">Each term, children will experience using a wide range of art materials and learn new techniques. From watercolours to pastels and mixed media, they will be inspired to develop their creativity, stimulate their mind and put their own mark in masterpieces they take home – in a warm, relaxed and welcoming environment.</p>
                <button class="box-btn center"><a href="painting.php">View</a></button>
            </div>
            <div class="box">
                <img src="images/c2.jpg" alt="" class="club-img">
                <img src="images/c3.jpg" alt="" class="top club-img">
                <h2 class="h-secondary center">Coders Club</h2>
                <p class="center">Coding Club aims to establish a coding culture on campus, reaching every student passionate about coding. The club's motto is to Create-Build-Innovate. We want to replace statistics anxiety and code fear with inspiration and motivation to learn. We believe that coding can be really fun and also understand the importance of quantitative skills for professional development.</p>
                <button class="box-btn center"><a href="coding.php">View</a></button>
            </div>
            <div class="box">
                <img src="images/f1.jpg" alt="" class="club-img">
                <img src="images/f2.jpg" alt="" class="top club-img">
                <h2 class="h-secondary center">Football Club</h2>
                <p class="center">As a club we strive to provide a friendly and structured environment in which the game of football can be fun and enjoyable. We are keen to encourage the values of fair play and respect to those in our club and remain a family friendly club.The Club programs are designed to provide youth soccer players the opportunity to experience a healthy, safe, and developmentally appropriate environment to learn and love the game of soccer.</p>
                <button class="box-btn center"><a href="Football.php">View</a></button>
            </div>
            <?php 
            
            $query = "SELECT * FROM club WHERE cNAME NOT IN ('Football Club','Photography Club','Coder Club','Debating Club','Cricket Club','Painting Club') ";
            $query_run = mysqli_query($con,$query);
            $check_rows = mysqli_num_rows($query_run) > 0;


            if($check_rows)
            {

               while($row = mysqli_fetch_assoc($query_run))
               {
                   ?>
                   <div class="box">
                        <img src="<?php echo $row['cImage'] ?>" alt="" class="top club-img">
                        <h2 class="h-secondary center"><?php echo $row['cName']; ?></h2>
                        <p class="center"><?php echo $row['description']; ?></p>
                        <button class="box-btn center"><a href="">View</a></button>
                    </div>

                   <?php  
               }
            }
            ?>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.The_great_school.com. All rights reserved!
        </div>
    </footer>
</body>

</html>