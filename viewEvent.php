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
//include_once('DBconnect.php');
//session_start();
//if ( isset($_SESSION['username'] )){
    //$username=$_SESSION['username'];
    require "HeaderLoggedin.php";
//}
//else {
//    header('Location: HomePage.php');
//}
?>
<main>

    <?php


    if(isset($_GET["eid"]))
    {
        $e_ID = $_GET["eid"];

    }

   //$e_ID = 'e_ID';


    //$query2="SELECT * FROM events, sports WHERE events.e_ID='.$e_ID.' AND events.e_sportID=sports.s_ID  AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $query2="SELECT * FROM events WHERE events.e_ID='$e_ID' AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $result=mysqli_query($conn, $query2);


    if(mysqli_num_rows($result)==1){
        while ($row= mysqli_fetch_assoc($result)){

            $eventID=$row['e_ID'];
            $eventname=$row['e_title'];

        }
    }

    ?>

    <div class="viewEventTable">
        <?php echo $e_ID; ?>
        <?php echo $eventID; ?>
        <?php echo $eventname; ?>
        <table>

            <tr><th>EventID</th><th>Event Crea tor</th><th>Event title</th><th>Event Description</th><th>Event Location</th><th>Event Date</th><th>Event Sport</th></tr>

            <tr><td >Event ID:</td><td class="label"><?php echo $eventID; ?></td></tr>
            <tr><td>Event name:</td><td  class="label"><?php echo $eventname; ?></td></tr>


        </table>
    </div>

</main>
<!--Main Ends   -->
<!-- Footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>
