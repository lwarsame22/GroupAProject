<?php
session_start();
$username=$_SESSION['username'];
include_once('DBConnect.php');

    $e_ID = $_GET['eid'];


// $pass= md5($password)  f;
    $query = "DELETE FROM  events WHERE e_ID  = '$e_ID' ";


    $result = mysqli_query($conn, $query);

    if ($result) {


        header('Location: viewMyEvents.php '); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
    } else {

        echo "Failed to delete";
    }






?>