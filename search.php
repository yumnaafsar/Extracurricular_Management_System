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
    <link rel="stylesheet" href="userrequest.css">
    <title>Document</title>
    <style>
        .member-table {
            margin-top: 100px;
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
                    <li class="item"><a href="Student.php">Student Login</a></li>
                    <li class="item"><a href="AdminLogin.php">Admin Login</a></li>
                    <li class="item"><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <table class="member-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Email</th>
            <th>Grade</th>
            <th>Club</th>
        </tr>
        <td>
            <?php 
            if(isset($_GET['search']))
            {
                $filtervalues = $_GET['search'];
                $query = "select mId, mName, rollNo, sEmail, mGrade, cName from membership where mName like '%$filtervalues%'";
                $result = mysqli_query($con, $query);

                if(mysqli_num_rows($result) > 0){
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <tr>
                            <td><?php echo $rows['mId'] ?></td>
                            <td><?php echo $rows['mName'] ?></td>
                            <td><?php echo $rows['rollNo'] ?></td>
                            <td><?php echo $rows['sEmail'] ?></td>
                            <td><?php echo $rows['mGrade'] ?></td>
                            <td><?php echo $rows['cName'] ?></td>
                        </tr>
        
                        <?php
                    }
                }
                else {
                    ?>
                    <tr>
                        <td>No Record Found</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </td>
    </table>
</body>
</html>