
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            width: 1000px;
            margin-left: auto;
            margin-right: auto
            background: white url("Images/img2/eventbg.jpg") no-repeat scroll center;
            background-size: cover;
            height: 700px;
        }
        .eventform {
            width: 600px;
            background-color: rgba(0, 0, 255, 0.2);
            border-color: black;
            height: 700px;
            border-radius: 20px;
            padding-left: 20px;
        }
        .eventform input{
            padding-top: -40px;
        }
        .eventform label{
            color: white;
            font-family: Arial, sans-serif;
            font-weight: bold;

        }
        select{
            padding: 15px 20px;
            font-size: 20px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            margin-left: 200px;
        }
        .btn{
            position: relative;
        }
        h2{
            text-align: center;
            padding: 20px;
            font-family: Arial, sans-serif;
            color: white;
        }


    </style>
</head>
<body>
<?php
//include_once('DBconnect.php');
//session_start();
//if ( isset($_SESSION['username'] )){
//    $username=$_SESSION['username'];
    require "HeaderLoggedin.php";
//}
//else {
//    header('Location: HomePage.php');
//}
?>
    <main class="evntbakground">
    <div class="eventform">
    <h2>Create an Event!</h2>
<form name="createEvent" method="post" action="createEvent.php">
    <label for="title">Event Title:</label><br>
    <Input type="text" placeholder="Enter Event Title" name="title" class="inputbox"><br>
    <label for="date">Event date:</label><br>
    <input type="date" value="2019-03-30"  name="date" class="inputbox"><br>
    <label for="description">Description: </label><br>
    <input type="text" placeholder="Enter Description" name="description" class="inputbox"><br>
    <label for="location">Location : </label><br>
    <input type="text" placeholder="Enter location" name="location" class="inputbox"><br><br>
    <label for="attendees">Limit Attendees? : </label><br>
    <input type="text" placeholder="Enter attendees" name="attendees" class="inputbox"><br><br>
    <label for="gender">Restrict Gender? </label><br>
    <select class="sportdropdown" name="genderName">
        <?php
        $query2 = "SELECT * FROM gender";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

            echo "<option value='".$row['g_ID']."'>".$row['g_option']."</option>";

        }
       ?>
    </select><br><br><br>
       <label for="sport">Sport related: </label><br>
    <select class="sportdropdown" name="sportName">
        <?php 
        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

                echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }
        ?>
        </select><br><br><br>
    <button type="submit" value="createEvent" name="eventButton" class="btn">Create Event</button><br>
</form>
    </main>
        <!-- Main Ends -->
        <!-- Footer -->
<?php

require ("Footer.php")
?>
<!-- Footer ends -->
</body>
</html>





