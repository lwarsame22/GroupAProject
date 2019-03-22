<?php
//session_start();

include_once('DBConnect.php');
if ($_POST['eventButton']) {


  $username=$_SESSION['username'];

  $title = strip_tags($_POST['title']);

  $dateevent = strip_tags($_POST['date']);

  $description = strip_tags($_POST['description']);

  $location = strip_tags($_POST['location']);

  $sportname=($_POST['sportName']);
  //$sportName = $_POST['sportName'];


// $pass= md5($password)esto sss;
    $query = "INSERT INTO events(e_username, e_title, e_description, e_location, e_date, e_sportID)
     VALUES ('$username','$title','$description','$location','$dateevent','$sportname')";


     $result = mysqli_query($conn, $query);

     if ($result) {


     header('Location: viewEvent.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
      } else {

          echo "Failed to update";
       }
}


?>
