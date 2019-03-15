
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("Images/americanfoot.jpg") no-repeat scroll;
            background-position: center;
            background-size: cover;
            height: 550px;
        }
        .eventform {
            width: 700px;
            background-color: mediumseagreen;
            border-color: black;
            height: 550px;
            border-radius: 20px;

        }
        .eventform label{
            color: black;
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
            padding: 40px;
            font-family: 'Roboto', sans-serif;
        }


    </style>
</head>
<body>
<?php
include_once('DBconnect.php');
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    
    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}
?>
    <main class="evntbakground">
    <div class="eventform">
    <h2>Create An Event</h2>
<form name="createEvent" method="post" action="createEvent.php">
    <label for="title">Event Title:</label><br>
    <Input type="text" placeholder="Enter Event Title" name="title" class="inputbox"><br>
    <label for="date">Event date:</label><br>
    <input type="date" placeholder="Enter Event date="name="date" class="inputbox"><br>
    <label for="description">Description: </label><br>
    <input type="text" placeholder="Enter Description" name="description" class="inputbox"><br>
    <label for="location">Location : </label><br>
    <input type="text" placeholder="Enter location" name="location" class="inputbox"><br><br>
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




<!--
<select class="sportdropdown" name="sportName">

    $query2 = "SELECT s_ID FROM sports";
    $result=mysqli_query($conn, $query2);
    for($x=0; $x<mysqli_num_rows($result); $x++){
        while ($row= mysqli_fetch_assoc($result)){
            echo "<option value=".$row['s_ID']." name=".$row['s_ID'].">" . $row['s_ID'] . "</option>";
        }
    }

</select>  -->
