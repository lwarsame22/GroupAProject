<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.csstyle.css">
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



<div id=content>
    <?php
    $cid = $_GET['cid'];
    if (isset($_SESSION['uid'])) {
        $logged = " | <a href='create_topic.php?cid=".$cid.">Click Here to create an Event</a>";
    } else  {
        $logged = " | Please log in to create events.";
    }
    $sql= "SELECT id FROM categories WHERE id='".$cid."' LIMIT 1";

    $res = mysqli_query($sql) or die(mysqli_error());
    if (mysqli_num_rows($res) == 1) {
    } else {
        echo "<a href='HomePage.php'>Return to Home</a>";

    }
    ?>

</body>
</html>
