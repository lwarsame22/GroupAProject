<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/pstyle.css">
  <style>
       body{
           background-color: white;

      }
      .profilebakground h2{
            color: whitesmoke;
     }
      main{
           background: url("Images/updateprofile.jpg") no-repeat ;
        background-position: center;
    }
      .control{
       text-align: center;
        color: black;
       }
        .profilebtn{
            display: flex;
        }
       h2{
           text-align: center;
       }
      .profileform{
          width: 600px;
          border: 1px solid turquoise;
          font-family: Arial, sans-serif;
          font-size: 18px;
          background-color: rgba(0, 0, 255, 0.2);

      }

    </style>
</head>

<?php
require "HeaderLoggedin.php";
?>

<body>

<main class="profilebakground">    
 <div class="profileform">
<form name="updateprofile" method="post" action="UpdateProfile.php" enctype="multipart/form-data">
    <h2>Edit Profile</h2>
    <label for="firstname">First name:</label><br>
    <Input type="text" placeholder="Enter First name" name="uname" class="inputbox" required><br>
    <label for="lastname">Last name:</label><br>
    <input type="text" placeholder="Enter Last name" name="ulname" class="inputbox" required><br>
    <label for="gender">Gender: </label><br>

        <select class="genderdropdown" name="gender">
        <?php
        $query2 = "SELECT * FROM gender";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['g_ID']."'>".$row['g_option']."</option>";

        }
        ?>
        </select><br><br>

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
    <label for="mobile">Sport interests:</label><br>
    <Input type="checkbox" placeholder="Enter Sports" name="sports" class="inputbox"><br>
    <div  id="dropBoxImg">
        <label for="imgUpload">Select file to upload</label><br>
    </div>
    <input type="file" name="file" class="inputbox" id="imgInput" />
    <!-- Main Section End  <input type="submit" name="submit" value="Upload"/> -->

    <br><br>



<div class="profilebtn">
    <button type="submit" value="updateProfile" name="profileButton" class="btn">Update Profile</button><br>
<button type="submit" value="cancelprofile" name="cancelButton" class="btn">Cancel</button></div>
</form>
</div>
        </main>        
<!-- Main Section End  -->
 <!-- Footer Starts -->       
<?php

require ("Footer.php")
?>
        
</body>
</html>
