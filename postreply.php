<?php
session_start();
include_once("DBConnect.php");

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
    exit();
}


if ($_POST['commentButton']) {

    $username = $_SESSION['username'];

    $uname = strip_tags($_POST['uname']);

    $ulname = strip_tags($_POST['ulname']);

    $gender = strip_tags($_POST['gender']); //Radio BOx

    $address = strip_tags($_POST['address']);

    $city = strip_tags($_POST['city']);

    $country = strip_tags($_POST['country']);

    $datebirth = strip_tags($_POST['datebirth']);

    $mobilenumber = strip_tags($_POST['mobilenumber']);

    $img_name = basename($_FILES["file"]["name"]);
}
?>

