<?php
session_start();

include_once('DBConnect.php');
if ($_POST['eventButton']) {


  $username=$_SESSION['username'];

  $title = strip_tags($_POST['title']);

  $dateevent = strip_tags($_POST['date']);

  $description = strip_tags($_POST['description']);

  $location = strip_tags($_POST['location']);

  $sportname=($_POST['sportName']);
  //$sportName = $_POST['sportName'];



    $query = "INSERT INTO events(e_username, e_title, e_description, e_location, e_date, e_sportID)
     VALUES ('$username','$title','$description','$location','$dateevent','$sportname')";




     if (mysqli_query($conn, $query)) {
         //store the event id that was created in the last insert sql query
         $last_id = mysqli_insert_id($conn);
        $query2="INSERT INTO join_event(j_username, j_event) VALUES ('$username','$last_id')";
        $result2 = mysqli_query($conn,$query2);

     header('Location: viewallEvents.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
      } else {

          echo "Failed to update";
       }
}


?>
