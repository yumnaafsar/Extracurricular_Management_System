<?php 
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "club");

session_start();

    $user_profile = $_SESSION['user_name'];

    if($user_profile == true)
    {

    }
    else
    {
        header('location:StudentLogin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="member.css">
    <title>Event Apply</title>
</head>
<body>

    <section id="contact-form">
        <form action="applyevent.php" method="POST">
            <h1 class="h-primary center">Apply For Event</h1>
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </td>
                </tr>
                <tr>
                    <td>Roll No</td>
                    <td>
                        <input type="text" name="rollNo" id="name" placeholder="Enter your Roll No">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                    </td>
                </tr>
                <tr>
                    <td>Grade</td>
                    <td>
                        <input type="text" name="grade" id="name" placeholder="Enter your Grade No">
                    </td>
                </tr>
                <tr>
                    <td>Event Name</td>
                    <td>
                        <input type="text" name="event" id="event" placeholder="Enter event name">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" value="submit" name="sub2">Send Data</button>
                    </td>
                </tr>
            </table>
        </form>    
    </section> 
<?php
if (isset($_POST['sub2']))
{
    $name=$_POST['name'];
    $rollNo=$_POST['rollNo'];
    $email=$_POST['email'];
    $grade=$_POST['grade'];
    $event=$_POST['event'];


    $result=mysqli_query($con,"INSERT INTO event_request(mName,rollNo,sEmail,mGrade,eName) VALUES('$name','$rollNo','$email','$grade','$event')");
    if($result){
        echo '<script>alert("Your request has been forward, please wait!")</script>';
    }
    header('location:event.php');
}
?>

</body>
</html>