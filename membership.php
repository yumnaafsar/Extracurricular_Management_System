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
    <title>Contact</title>
</head>
<body>
    <section id="contact-form">
        <form action="membership.php" method="post">
            <h1 class="h-primary center">Membership Form</h1>
            <table >
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
                    <td>Grade</td>
                    <td>
                        <input type="text" name="grade" id="name" placeholder="Enter your Grade No">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                    </td>
                </tr>
                <tr>
                    <td><label for="clubs">Club</label></td>
                    <td>
                        <select name="clubs" id="clubs">
                            <option>Select anyone</option>
                            <option value="cricket">CRICKET CLUB</option>
                            <option value="football">FOOTBALL CLUB</option>
                            <option value="painting">PAINTING CLUB</option>
                            <option value="photography">PHOTOGRAPGHY CLUB</option>
                            <option value="debate">DEBATE CLUB</option>
                            <option value="coders">CODERS CLUB</option>
                            <?php 
                            /*
                            $query = "SELECT * FROM club WHERE cNAME NOT IN ('Football Club','Photography Club','Coder Club','Debating Club','Cricket Club','Painting Club') ";
                            $query_run = mysqli_query($conn,$query);
                            $check_rows = mysqli_num_rows($query_run) > 0;


                            if($check_rows)
                            {

                                while($row = mysqli_fetch_assoc($query_run))
                                {
                            ?>
                            <option value="coders"><?php echo $row['cName'] ?></option>

                             <?php
                                }
                            }*/
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="sub1">Send Data</button>
                    </td>
                </tr>
            </table>
        </form>    
    </section> 

<?php

if (isset($_POST['sub1']))
{
    $name=$_POST['name'];
    $rollNo=$_POST['rollNo'];
    $grade=$_POST['grade'];
    $email=$_POST['email'];
    $clubs=$_POST['clubs'];
    $status='Pending';


    $result=mysqli_query($con,"INSERT INTO membership(mName,rollNo,sEmail,mGrade,cName,status) VALUES('$name','$rollNo','$email','$grade','$clubs','$status')");
    if($result){
        echo '<script>alert("Your request has been forward, please wait!")</script>';
        header('location:club.php');
    }
    
}
?>
</body>
</html>