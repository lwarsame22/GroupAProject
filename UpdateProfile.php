<?php
session_start();

include_once('DBConnect.php');


$uname = strip_tags($_POST['uname']);

$ulname = strip_tags($_POST['ulname']);

$email = strip_tags($_POST['email']);

$gender = strip_tags($_POST['gender']); //Radio BOx

$address = strip_tags($_POST['address']);

$city = strip_tags($_POST['city']);

$country = strip_tags($_POST['country']);

$datebirth = strip_tags($_POST['datebirth']);

$mobilenumber = strip_tags($_POST['mobilenumber']);

$active = strip_tags($_POST['active']); //Boolean

// $pass= md5($password);


$userID = mysqli_insert_id($conn);

$query = "UPDATE  user_profile 
          SET u_name= $uname, 
          u_lastname =$ulname, 
          gender =$gender, 
          address =$address, 
          city =$city, 
          country =$country, 
          datebirth =$datebirth, 
          mobilenum =$mobilenumber, 
          active=$active
          WHERE p_ID = $userID";



$result = mysqli_query($conn, $query);

if ($result) {


    header('Location: user.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
} else {

    echo "Failed to update";

}


?>

