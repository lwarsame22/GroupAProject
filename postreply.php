<?php
session_start();
include_once("DBConnect.php");


/*
if ($_SESSION['username']) {
    if (isset($_POST['reply_submit'])) {


        $u_username = $_SESSION['username'];
        $eventid = $_POST['e_ID'];

        $reply_conten = $_POST['reply_content'];
        $query = "INSERT INTO comment_on (c_username,c_eventID,c_timestamp,c_content) VALUES ('" . $u_username . "','" . $eventid . "',now(),'" . $reply_conten . "')";

        $res = mysqli_query($query) or die(mysqli_error(error_reporting()));


    } else {

        exit();
    }
}
else {
    exit()  ;
}

*/

    if ($_POST['commentButton']) {

    $username = $_SESSION['username'];

    $ucomment = strip_tags($_POST['reply_content']);

    $eventid = $_POST['eid'];

    $query = "INSERT INTO comment_on (c_username,c_eventID, c_timestamp,c_content) VALUES ('" . $username . "','" . $eventid . "',now(),'" . $ucomment . "')";


    $result = mysqli_query($conn, $query);

  

       eader('Location: viewEventdetails.php?eid='.$eventid);

   // } else {

    //echo "Failed to update";
    //}
    }

    ?>


