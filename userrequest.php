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
    <title>Document</title>
    <link rel="stylesheet" href="userrequest.css">
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
    <form class="search" action="search.php" method="GET">
        <input class = 'search_box' type = 'text' name = 'search' value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="Search">
        <button class="search_btn" type="submit">Search</button>
    </form>
    <div class="admin-btn">
        <button><a href="addClub.php">Add Club</a></button>
        <button><a href="userrequest.php">User Request</a></button>
        <button><a href="adminClub.php">Manage Clubs</a></button>
    </div>
    <div class="overlay">
        <h1>Members</h1> <br>
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
        <?php
        $result = mysqli_query($con, "select mId, mName, rollNo, sEmail, mGrade, cName from membership where status = 'Accepted'");
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
        ?>
    </table>
    <div class="overlay">
        <h1>User Request</h1> <br>
    </div>
    <table class="request-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Email</th>
            <th>Grade</th>
            <th>Club</th>
            <th>User Request</th>
        </tr>
        <?php
        $result = mysqli_query($con, "select mId, mName, rollNo, sEmail, mGrade, cName from membership where status = 'Pending'");
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
            <td>
                <form action="userrequest.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $rows['mId']; ?>">
                    <input class="acc-btn" type="submit" name="accept" value="Accept">
                    <input class="dec-btn" type="submit" name="decline" value="Decline">
                </form>
            </td>
        </tr>
        
        <?php
        }
        ?>
    </table>
    
    <?php
    if(isset($_POST['accept']))
    {
        $mid = $_POST['id'];
        $result = mysqli_query($con, "Update membership set status='Accepted' where mId = '$mid'");
    }
    if(isset($_POST['decline']))
    {
        $mid = $_POST['id'];
        $result = mysqli_query($con, "Delete from membership where mId = '$mid'");
    }
    ?>
</body>
</html>