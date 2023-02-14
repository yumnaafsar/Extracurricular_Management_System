<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="updateClub.css">
</head>

<body>

<?php
  $con=mysqli_connect("localhost","root","");
  $mydb="club";
  $Db=mysqli_select_db($con,$mydb);
  
  $cname=$_GET['cn'];

  $result=mysqli_query($con, "SELECT * FROM club where cName='$cname'");
  $total= mysqli_num_rows($result);

  $data=mysqli_fetch_assoc($result);

  Error_reporting(0);


?>
<section>
    <form action="#" method="POST" enctype="multipart/form-data">
<table border=5>
        <tr>
            <td colspan="3">
                <h3>UPDATE CLUB DETAILS</h3>
            </td>
        </tr>
        <tr>
            <td>Club Name</td>
            <td colspan=2><input type="text" name="cName" value="<?php echo $data['cName'] ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td colspan=2>
                <textarea type="text" name="desc"><?php echo $data['description']?></textarea>
            </td>
        </tr>
        <tr>
            <td>Club Image</td>
            <td><input type="text" name="uploadfile" value="<?php echo $data['cImage']?>"></td>
           <td> <input type="file" name="cImage" value="choose a file"> </td>
        </tr>
       
        <tr>
            <td colspan="3">
                <input name="update" type="submit" value="Update Record" class="btn">
            </td>
        </tr>
      </table>
    </form>
</section>

<?php


if($_POST['update']){
    $filename = $_FILES["cImage"]["name"];
    $tempname = $_FILES["cImage"]["tmp_name"];
    
    $folder = "clubphotos".$filename;
    
    move_uploaded_file($tempname, $folder);

    $club=$_POST['cName'];
    $desc=$_POST['desc'];
    // $image=$_POST['cImage'];


   $r=mysqli_query($con,"UPDATE club set cName='$club',description='$desc',cImage='$folder' where cName='$cname'");

   if($r)
    {
        echo '<script>alert("Your record has been updated!")</script>';
        ?>

<meta http-equiv="refresh" content="5; url=http://localhost/Project/adminClub.php" />

<?php
    }
    else{
        echo("Failed");
    }

}

?>

</body>