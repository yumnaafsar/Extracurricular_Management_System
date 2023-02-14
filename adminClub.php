<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    body{
        background:#d5cbcb;
        padding-bottom:20px ;
    }
    .admin-btn{
    margin-right: 450px;
    float: right;
   }
  .admin-btn button{
    height: 50px;
    width: 135px;
    background-color: rgb(156, 26, 26);
    color: white;
    padding: 15px;
    border-radius: 15px;
    border-style: none;
    margin-top: 15px;
    margin-left: 10px;
  }
  .admin-btn button a{
    color: white;
    text-decoration: none;
  }
</style>
</head>


<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <div class="admin-btn">
        <button><a href="addClub.php">Add Club</a></button>
        <button><a href="userrequest.php">User Request</a></button>
        <button><a href="adminClub.php">Manage Clubs</a></button>
    </div>
    <br><br><br>
    <div>
      <h1 style="text-align:center; margin:40px; font-size:50px; font-weight:bold">CLUBS AVAILABLE</h1>
    </div>

    <div class="container text-center">
    <div class="row row-cols-3">

<?php
$con=mysqli_connect("localhost","root","");
$mydb="club";
$Db=mysqli_select_db($con,$mydb);

$query_run= mysqli_query($con,"SELECT * FROM club");
$check_club= mysqli_num_rows($query_run)>0;

if($check_club){
  while ($row=mysqli_fetch_assoc($query_run))
   {    
    ?>
        <div class="col" style="margin-top:25px">
        <div class="g-col-6 card" style="width: 18rem; height: 455px;">
          <img src="<?php echo $row['cImage'] ?>" class="card-img-top" alt="..." style="height:191px">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['cName'] ?></h5>
            <p class="card-text" style="height:144px"><?php echo $row['description']; ?></p>
           <?php echo "
            <a href='updateClub.php?cn=$row[cName]&cd=$row[description]&ci=$row[cImage]' class='btn btn-primary'>Edit</a>
           "?>
           <?php echo"
            <a href='deleteClub.php?cn=$row[cName]' class='btn btn-primary'>Delete</a> 
           "?>
          </div>
        </div>
      </div>
    <?php

  }
}
else{
    echo "No record found";

}
?>
   </div>
  </div>

</body>

</html>

