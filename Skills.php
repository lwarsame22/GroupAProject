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
<form name="updatesskills" method="post" action="UpdateProfile.php" enctype="multipart/form-data">
    <h2>Edit Sport Skills </h2>

    <label for="skill1">Sport 1 skill:</label>
    <select class="sportsdropdown" name="sports">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select> <br> <br>
    <label for="level1">Skill Level</label><br>
    <select class="skillsdropdown" name="skills">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br><br>

    <label for="skill2">Sport 2 skill:</label>
    <select class="sportsdropdown" name="sports">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level2">Skill Level</label><br>
    <select class="skillsdropdown" name="skills">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br> <br>
    <label for="skill3">Sport 3 skill:</label>
    <select class="sportsdropdown" name="sports">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level3">Skill Level</label><br>
    <select class="skillsdropdown" name="skills">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br><br>
    <label for="skill4">Sport 4 skill:</label>
    <select class="sportsdropdown" name="sports">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level4">Skill Level</label><br>
    <select class="skillsdropdown" name="skills">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br>
    <label for="skill5">Sport 5 skill:</label>
    <select class="sportsdropdown" name="sports">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level5">Skill Level</label><br>
    <select class="skillsdropdown" name="skills">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br>




<div class="profilebtn">
    <button type="submit" value="updateProfile" name="profileButton" class="btn">Update Skills</button><br>
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
