
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        body{
            background-color: black;

        }
        .profilebakground h2{
            color: white;
        }
        main{
            background: url("Images/updateprofile.jpg") no-repeat ;
           background-position: center;
        }
        .control{
        text-align: center;
            color: white;
        }
        .profilebtn{
            display: flex;
        }
        h2{
            text-align: left 50px;
        }

    </style>
</head>
<body>
<?php
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}

?>
<main class="profilebakground">    
 <div class="profileform">
<form name="updateprofile" method="post" action="UpdateProfile.php">
    <h2>Edit Profile</h2>
    <label for="firstname">First name:</label><br>
    <Input type="text" placeholder="Enter First name" name="uname" class="inputbox" required><br>
    <label for="lastname">Last name:</label><br>
    <input type="text" placeholder="Enter Last name" name="ulname" class="inputbox" required><br>
    <label for="gender">gender: </label><br>
    <input type="text" placeholder="Enter f or m" name="gender" class="inputbox"><br>
    <label for="address">Address:</label><br>
    <Input type="text" placeholder="Enter Address" name="address" class="inputbox" ><br>
    <label for="city">City:</label><br>
    <input type="text" placeholder="Enter City" name="city" class="inputbox" ><br>
    <label for="country">Country</label><br>
    <Input type="text" placeholder="Enter Country" name="country" class="inputbox"><br>
    <label for="datebirth">Date Of Birth:</label><br>
    <input type="date" placeholder="Enter Date Of Birth" name="datebirth" class="inputbox"><br>
    <label for="mobile">Mobile Number:</label><br>
    <Input type="tel" placeholder="Enter Mobile Number" name="mobilenumber" class="inputbox"><br>

    <br><br>



<div class="profilebtn">
    <button type="submit" value="updateProfile" name="profileButton" class="btn">Update Profile</button><br>
<button type="submit" value="cancelprofile" name="profileButton" class="btn">Cancel</button></div>
</form>
</div>
        </main>        
<!-- Main Section End -->
 <!-- Footer Starts -->       
<?php

require ("Footer.php")
?>
        
</body>
</html>
