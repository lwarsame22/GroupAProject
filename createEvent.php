<?php
session_start();

include_once('DBConnect.php');
if ($_POST['eventButton']) {


    $username = $_SESSION['username'];

    $title = strip_tags($_POST['title']);

    $dateevent = strip_tags($_POST['date']);

    $description = strip_tags($_POST['description']);

    $location = strip_tags($_POST['location']);

   $gender = $_POST['genderName'];

    $attendees = $_POST['attendees'];
    $sportname = ($_POST['sportName']);



    $check="";

  if($gender == "no") {
      $query = "INSERT INTO events(e_username, e_title, e_description, e_location, e_date, e_sportID, e_attendees )
     VALUES ('$username','$title','$description','$location','$dateevent','$sportname','$attendees')";
      $res =mysqli_query($conn, $query);
      $check="1";
    }else{

    $query = "INSERT INTO events(e_username, e_title, e_description, e_location, e_date, e_sportID ,e_attendees,  e_gender)
            VALUES ('$username','$title','$description','$location','$dateevent','$sportname', '$attendees', '$gender')";

      $res =mysqli_query($conn, $query);
      $check="1";
   }



    //$res =mysqli_query($conn, $query);


//$num= mysqli_num_rows($res);

     if ($check=="1") {
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
