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
   // $e_ID = $_GET['e_ID']; pau comment
    //$query2 = "SELECT * FROM events";
    //$query2="SELECT * FROM events, sports WHERE events.e_ID='.$e_ID.' AND events.e_sportID=sports.s_ID AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $query2="SELECT * FROM events WHERE events.e_ID='e_ID' AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $result=mysqli_query($conn, $query2);
    $row= mysqli_fetch_assoc($result);
    // maybe this is a for loop because there will be several results since it retrieves all
    // of the event rows
   $row= mysqli_fetch_assoc($result)
        while ($row= mysqli_fetch_assoc($result)){

            $eventID=$row['e_ID']    ;
            $creator=$row['e_username'];
            $eventTitle=$row['e_title'];
            $eventDescription=$row['e_description'];
           /$location=$row['e_location'];
           /$date=$row['e_date'];
            $sportID=$row['e_sportID'];

        }
    }
    ?>

    <div class="viewEventTable">
        <table>
            <tr><th>EventID</th><th>Event Creator</th><th>Event title</th><th>Event Description</th><th>Event Location</th><th>Event Date</th><th>Event Sport</th></tr>
<?php do{ ?>
            <tr><td><?php echo $row['e_ID']; ?></td><td><?php echo $row['e_username']; ?></td><td><?php echo $row['e_title']; ?></td>
                <td><?php echo $row['e_description']; ?></td><td><?php echo $row['e_location']; ?></td><td><?php echo $row['e_date']; ?></td>
                <td><?php echo $row['s_name']; ?></td>
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
