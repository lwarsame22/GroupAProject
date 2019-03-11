
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        body{
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("Images/profile.jpg");
            background-color: black;
            background-attachment: scroll;
        }
        .profilebakground h2{
            color: white;
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
    <button type="submit" value="updateProfile" name="profileButton" class="btn">Update Profile</button><br></div>
</form>
</div>
        </main>        
<!-- Main Section End -->
 <!-- Footer Starts -->       
<footer class="control">

<h4>Connect and share with a network of sports lovers in your community</h4>
     <!--  <span>
           <li><a><i class="fab fa-facebook-square"></i></a></li>
           <l><a href="http://www.facebook.com"><img src="facebooklogo.png" alt="Facebook"</a></l>
           <li><a href="http://www.twitter.com"><img src="twitterlogo.png" alt="twitter"</a></li>
           <li><a href="http://www.linkedin.com"><img src="linkedinlogo.png" alt="linkedin"</a></li>
           <li><a href="http://www.googleplus.com"><img src="googlepluslogo.png" alt="Google+"</a></li>
           <li><a href="http://www.youtube.com"><img src="youtubelogo.png" alt="YouTube"</a></li>
       </span>-->
<h4>Copyright &copy; 2019. Software Project Engineering (CMM004)</h4>
    <p>All Rights Reserved</p>
    <small> Developed and Maintain by <a href="#">Group A Team</a></small>
</footer>
        
</body>
</html>
