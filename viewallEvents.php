
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Events</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
//include_once('DBconnect.php');
//session_start();
//if ( isset($_SESSION['username'] )){
// $username=$_SESSION['username'];


require "HeaderLoggedin.php";
//}
//else {
//    header('Location: HomePage.php');
//}
?>



<div >
    <?php

    //$query2="SELECT * FROM events, sports WHERE events.e_sportID=sports.s_ID AND events.e_username='$username'"; LEE code

    $query2="SELECT * FROM events WHERE e_date >= CURDATE()";
    $result=mysqli_query($conn, $query2);
    $events="";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $e_ID = $row['e_ID'];
            $e_title = $row['e_title'];
            $location = $row['e_location'];
            $e_date = $row['e_date'];
            $events .="<a href='viewEvent.php?eid=".$e_ID."' class = 'cat_links'>".$e_title." -<br> <font size='-3', color='#778899'>".$location."-</font><font class='edate' >.$e_date</font></a>";
        }
        echo $events;
    } else {
        echo "<p>There are no event available yet...</p>";
    }


    ?>

</body>
</html>