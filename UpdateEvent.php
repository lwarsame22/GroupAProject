<?php
session_start();
$username=$_SESSION['username'];
include_once('DBConnect.php');
if ($_POST['eventuButton']) {

    $e_title=$_POST['ename'];

    $e_description = strip_tags($_POST['description']);

    $e_location = strip_tags($_POST['location']);

    $e_sportID = strip_tags($_POST['sportName']); //Radio BOx

    $e_ID = $_POST['eid'];




// $pass= md5($password)  f;
    $query = "UPDATE  events 
          SET e_username='$username',
          e_title = '$e_title',
          e_description ='$e_description',
          e_location ='$e_location',
          e_sportID ='$e_sportID'
          WHERE e_ID  = '$e_ID' ";


    $result = mysqli_query($conn, $query);

    if ($result) {


        header('Location: viewMyEvents.php '); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
    } else {

        echo "Failed to update=";
    }



}


?>

