<?php
  $con=mysqli_connect("localhost","root","");
   $mydb="club";
   $Db=mysqli_select_db($con,$mydb);
   $cName=$_GET['cn'];
   $data=mysqli_query($con,"DELETE FROM club where cName='$cName'");
   if($data)
   {
     echo "<script>alert('1 record deleted from database')</script>"?>
     <meta http-equiv="refresh" content="1; url=http://localhost/Project/adminClub.php" />
    <?php 
   }
   else{
    echo("error");
   }
   ?>