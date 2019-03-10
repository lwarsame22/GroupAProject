<?php
session_start();

include_once('DBConnect.php');
if ($_POST['eventButton']) {


  $username=$_SESSION['username'];

  $title = strip_tags($_POST['title']);

  $dateevent = strip_tags($_POST['date']);

  $decription = strip_tags($_POST['description']);

  $location = strip_tags($_POST['location']);

  $sportname=($_POST['sportName']);
  //$sportName = $_POST['sportName'];


// $pass= md5($password)esto sss;
    $query = "INSERT INTO events(e_username, e_title, e_description, e_location, e_sportID)
     VALUES ('$username','$title','$description','$location',$sportname)";


     $result = mysqli_query($conn, $query);

     if ($result) {


     header('Location: user.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
      } else {

          echo "Failed to update";
       }
}


?>
