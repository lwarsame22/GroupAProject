<?php
session_start();
include_once("DBConnect.php");
if ($_SESSION['username']) {
    if (isset($_POST['reply_submit'])) {


        $u_username = $_SESSION['username'];
        $eventid = $_POST['e_ID'];

        $reply_conten = $_POST['reply_content'];
        $query = "INSERT INTO comment_on (c_username,c_eventID,c_timestamp,c_content) VALUES ('" . $u_username . "','" . $eventid . "',now(),'" . $reply_conten . "')";

        $res = mysqli_query($query) or die(mysqli_error());


    } else {
        exit();
    }
}
else {
    exit();
}
?>

