<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("images/updateprofile.jpg");
        }
    </style>
    <style>
        .viewEventTable{
            color: white;
            font-size: 20px;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color: turquoise;
        }
        th{
            text-align: center;
        }
        table, td{
            text-align: left;
        }
        table, th, td {
            border: 1px solid red;
            border-collapse: collapse;
        }

    </style>
</head>
<body>
<?php

    require_once ('HeaderLoggedin.php');


?>
<main>
    <?php


    $query2="SELECT * FROM events WHERE events.e_username='$username'";
    $result=mysqli_query($conn, $query2);
    $row= mysqli_fetch_assoc($result);
    $events="";
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $e_ID = $row['e_ID'];
                $e_title = $row['e_title'];
                $location = $row['e_location'];
                $e_date = $row['e_date'];
                $events .="<a href='viewEventdetails.php?eid=".$e_ID."' class = 'cat_links'>".$e_title." -<br> <font size='-3', color='#778899'>".$location."-</font><font class='edate' >.$e_date</font></a>";
            }
            echo $events;
        } else {
            echo "<p>You have not created an Event yet</p>";
        }


        ?>

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
