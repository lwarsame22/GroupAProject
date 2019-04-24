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
<form name="updatesskills" method="post" action="UpdateSkills.php" >
    <h2>Edit Sport Skills </h2>








<?php
/////// start of mo staff

$m= "SELECT * FROM sports";
$r =  mysqli_query($conn, $m);
while ($rows= mysqli_fetch_assoc($r)){
    $n= $rows['s_name'];

}

/////end of mo staff
    $query2 = "SELECT s_name FROM sports";
    $result=mysqli_query($conn, $query2);

    $query3 = "SELECT * FROM skill_level";
    $result2=mysqli_query($conn, $query3);

$level= "";

while( $row2 = mysqli_fetch_array($result2)){

    echo $level.="<option value='".$row2['levelID']."'>".$row2['Level']."</option>";

}



    while( $row = mysqli_fetch_array($result)){


       for ($i = 0; $i < sizeof($result); $i++) {

           $myArray[$i] = $row['s_name'];

            echo $myArray[$i]."<select>;".$level."</select><br>";

       }

    }





    ?>




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
