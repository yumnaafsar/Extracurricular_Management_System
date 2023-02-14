<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "club");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      html, body {
      min-height: 100%;
      background-color: peru;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
    .admin-btn{
        height: 50px;
        width: 135px;
        background-color: rgb(156, 26, 26);
        color: white;
        padding: 15px;
        border-radius: 15px;
        border-style: none;
        margin-top: 30px;
        margin-left: 10px;
    }
    .admin-btn a{
        color: white;
        text-decoration: none;
    }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 42px;
      font-size: 42px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
    
      margin :auto;
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      margin-top:30px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #d6e0f5; 
      }
      .banner {
      position: relative;
      height: 100px;
      background-image: url(./clubphotos/ClubHome.jpg);  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
    .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #d6e0f5;
      color: black;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 28px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      input[type="submit"] {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #0087cc;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      input[type="submit"]:hover {
      background: #6eb8dd;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
        }
    </style>
</head>
<body>
    
    <center>
        <button class="admin-btn"><a href="addClub.php">Add Club</a></button>
        <button class="admin-btn"><a href="userrequest.php">User Request</a></button>
        <button class="admin-btn"><a href="adminClub.php">Manage Clubs</a></button>
        <div class="testbox">
            <form method="POST" action="#" enctype="multipart/form-data">
                <div class="banner">
                    <h1>ADD NEW CLUB</h1>
                </div>
                <div class="item">
                    <p>Club Name</p>
                    <div class="name-item">
                        <input type="text" name="clubName" placeholder="Enter New Club Name" />
                    </div>
                </div>
                <div class="item">
                    <p>Club Description</p>
                    <textarea rows="4" name="desc" placeholder="Enter Description About Club"></textarea>
                </div>
                <div class="item">
                    <p>Choose an Image For The Club</p>
                    <input type="file" name="uploadfile" value="choose a file">
                </div>
                <div class="btn-block">
                    <input type="submit" name="added" value="Add">
                </div>
            </form>
        </div>
    </center>
</body>
</html>

<?php

if(isset($_POST['added']))
{
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    
    $folder = "clubphotos/" .$filename;
    
    move_uploaded_file($tempname, $folder);

    $cname = $_POST['clubName'];
    $cdesc = $_POST['desc'];

    $query = "INSERT INTO club(cName, description, cImage) values('$cname','$cdesc','$folder')";

    $data = mysqli_query($con,$query);

    if($data)
    {
        echo "<script>alert('The Club has been Added')</script>";
    }
    else
    {
        echo "Failed";

    }    
}


?>