
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

    $query2="SELECT * FROM events, sports WHERE events.e_sportID=sports.s_ID AND events.e_username='$username'";
    $result=mysqli_query($conn, $query2);
    $events="";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $e_ID = $row['e_ID'];
            $e_title = $row['e_title'];
            $description = $row['e_description'];
            $events .="<a href='viewEvent.php?cid=".$e_ID."' class = 'cat_links'>".$e_title." - <font size='-1'>".$description."</font></a>";
        }
        echo $events;
    } else {
        echo "<p>There are no event available yet...</p>";
    }


    ?>

</body>
</html>