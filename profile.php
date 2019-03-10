
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
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
 <div class="profileform">
<form name="updateprofile" method="post" action="UpdateProfile.php">
    <label for="firstname">First name:</label><br>
    <Input type="text" placeholder="Enter First name" name="uname" class="profileinputbox" required><br>
    <label for="lastname">Last name:</label><br>
    <input type="text" placeholder="Enter Last name" name="ulname" class="profileinputbox" required><br>
    <label for="gender">gender: </label><br>
    <input type="text" placeholder="Enter f or m" name="gender" class="profileinputbox"><br>
    <label for="address">Address:</label><br>
    <Input type="text" placeholder="Enter Address" name="address" class="profileinputbox" ><br>
    <label for="city">City:</label><br>
    <input type="text" placeholder="Enter City" name="city" class="profileinputbox" ><br>
    <label for="country">Country</label><br>
    <Input type="text" placeholder="Enter Country" name="country" class="profileinputbox"><br>
    <label for="datebirth">Date Of Birth:</label><br>
    <input type="date" placeholder="Enter Date Of Birth" name="datebirth" class="profileinputbox"><br>
    <label for="mobile">Mobile Number:</label><br>
    <Input type="tel" placeholder="Enter Mobile Number" name="mobilenumber" class="profileinputbox"><br>

    <br><br>



<div class="profilebtn">
    <button type="submit" value="updateProfile" name="profileButton" class="btn">Update Profile</button><br></div>
</form>
</div>
</body>
</html>
