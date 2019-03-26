<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        main{
            background: url("images/updateprofile.jpg");
        }
    </style>
    <style>
        .viewProfileTable{
            color: white;
            font-size: 20px;
            font-family: Arial, sans-serif;
            font-weight: bold;

            width: 400px;
            background-color: rgba(0, 0, 255, 0.2);
            transparency: .80;
        }
        a{
            text-decoration: none;
            color: turquoise;
        }
        table, td{
            text-align: right;
        }
        .label{
            text-align: left;
            padding: 20px;
        }
    </style>
</head>
<body>
<?php
//include_once('DBconnect.php');
//session_start();
//if ( isset($_SESSION['username'] )){
 //   $username=$_SESSION['username'];
    require "HeaderLoggedin.php";
//}
//else {
 //   header('Location: HomePage.php');
//}
?>
<main>
<?php

$query2 = "SELECT * FROM user_profile WHERE u_username='$username'";
$query3 = "SELECT img_name FROM images WHERE u_username='$username'";
$result3=mysqli_query($conn, $query3);
$result=mysqli_query($conn, $query2);
if(mysqli_num_rows($result)==1){
    while ($row= mysqli_fetch_assoc($result)){

        $username=$row['u_username'];
        $firstname=$row['u_name'];
        $lastname=$row['u_lastname'];
        $email=$row['u_mail'];
        $gender=$row['gender'];
        $address=$row['address'];
        $city=$row['city'];
        $country=$row['country'];
        $birth=$row['datebirth'];
        $mobile=$row['mobilenum'];
        $image =$row['u_img'];

        $upload = "UploadImg".$image;
    }
}
?>

<div class="viewProfileTable">
    <?php echo $upload; ?>
<table>
    <tr><td >Username:</td><td class="label"><?php echo $username; ?></td></tr>
    <tr><td>Firstname:</td><td  class="label"><?php echo $firstname; ?></td></tr>
    <tr><td >Lastname:</td><td class="label"><?php echo $lastname; ?></td></tr>
    <tr><td>Email:</td><td class="label"><?php echo $email; ?></td></tr>
    <tr><td>Gender:</td><td class="label"><?php echo $gender; ?></td></tr>
    <tr><td>Address:</td><td class="label"><?php echo $address; ?></td></tr>
    <tr><td>City:</td><td class="label"><?php echo $city; ?></td></tr>
    <tr><td>Country:</td><td class="label"><?php echo $country; ?></td></tr>
    <tr><td>Birth:</td><td class="label"><?php echo $birth; ?></td></tr>
    <tr><td>Mobile:</td><td class="label"><?php echo $mobile; ?></td></tr>
</table>
</div>
<a href="profile.php">Edit Profile</a>
</main>
<!--Main Ends -->
<!-- Footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>

