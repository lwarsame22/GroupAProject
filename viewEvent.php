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
<main>
    <?php

    $query2 = "SELECT * FROM events";
    $result=mysqli_query($conn, $query2);
    // maybe this is a for loop because there will be several results since it retrieves all
    // of the event rows
   // $row= mysqli_fetch_assoc($result)
        //while ($row= mysqli_fetch_assoc($result)){

          //  $eventID=$row['e_ID'];
          //  $creator=$row['e_username'];
          //  $eventTitle=$row['e_title'];
           // $eventDescription=$row['e_description'];
           // $location=$row['e_location'];
           // $date=$row['e_date'];
            //$sportID=$row['e_sportID'];

       // }
   // }
    ?>

    <div class="viewEventTable">
        <table>
            <tr><td>EventID</td><td>Event Creator</td><td>Event title</td><td>Event Description</td><td>Event Location</td><td>Event Date</td><td>Event sportID</td></tr>
<?php do{ ?>
            <tr><td><?php echo $row['e_ID']; ?></td><td><?php echo $row['e_username']; ?></td><td><?php echo $row['e_title']; ?></td>
                <td><?php echo $row['e_description']; ?></td><td><?php echo $row['e_location']; ?></td><td><?php echo $row['e_date']; ?></td>
                <td><?php echo $row['e_sportID']; ?></td>
<?php }while ($row= mysqli_fetch_assoc($result)) ?>
        </table>
    </div>

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
