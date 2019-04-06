<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Profiiile</title>
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
<form name="updatesskills" method="post" action="UpdateSkills.php" enctype="multipart/form-data">
    <h2>Edit Sport Skills </h2>
    <div class="sport1">
    <label for="skill1">Sport 1 skill:</label><br>
    <select class="sportsdropdown" name="sports1">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select> <br>
    <label for="level1">Skill Level :</label><br>
    <select class="skillsdropdown" name="skills1">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br><br>
    </div>  <br>
    <div class="sport2">
    <label for="skill2">Sport 2 skill:</label>
    <select class="sportsdropdown" name="sports2">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level2">Skill Level</label><br>
    <select class="skillsdropdown" name="skills2">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br> <br>
    </div>
    <div class="sport3">
    <label for="skill3">Sport 3 skill:</label>
    <select class="sportsdropdown" name="sports3">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level3">Skill Level</label><br>
    <select class="skillsdropdown" name="skills3">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br><br>
    </div>
    <div class="sport4">
    <label for="skill4">Sport 4 skill:</label>
    <select class="sportsdropdown" name="sports4">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level4">Skill Level</label><br>
    <select class="skillsdropdown" name="skills4">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br> <br>
    </div>
    <label for="skill5">Sport 5 skill:</label>
    <select class="sportsdropdown" name="sports5">
        <?php

        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
    </select>
    <label for="level5">Skill Level</label><br>
    <select class="skillsdropdown" name="skills5">
        <?php

        $query3 = "SELECT * FROM skill_level";
        $result2=mysqli_query($conn, $query3);

        while( $row = mysqli_fetch_array($result2)){

            echo "<option value='".$row['levelID']."'>".$row['Level']."</option>";

        }
        ?>
    </select><br>


 </div>

<div class="profilebtn">
    <button type="submit" value="updateSkills" name="SkillsButton" class="btn">Update Skills</button><br>
<button type="submit" value="cancelSkills" name="cancelButton" class="btn">Cancel</button></div>
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
