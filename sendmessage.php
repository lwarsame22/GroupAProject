<?php
session_start();
include_once('DBConnect.php');
$username=$_SESSION['username'];


$messages = strip_tags($_POST['message']);

$creator=$_POST['user'];
// $pass= md5($password);


$query = "INSERT INTO message(messages, fromUser, toUser) 
          VALUES('$messages', '$username', '$creator')";

$result = mysqli_query($conn, $query);
// $query2 ="INSERT INTO user_profile(u_mail) VALUES ('$email')";
// $result2= mysqli_query($conn, $query2);

if ($result) {

     echo $username;
} else {

    echo "Failed to register";

}


?>
