<?php
session_start();

include_once('DBConnect.php');


$username = strip_tags($_POST['username']);
$messages = strip_tags($_POST['message']);
$touser=$_GET['user'];

// $pass= md5($password);


$query = "INSERT INTO message(messages, fromUser, toUser, timestamp) 
          VALUES('$messages', '$username', '$touser', now())";

$result = mysqli_query($conn, $query);
// $query2 ="INSERT INTO user_profile(u_mail) VALUES ('$email')";
// $result2= mysqli_query($conn, $query2);

if ($result) {

    $_SESSION['username'] = $username;
    header('Location: user.php');
} else {

    echo "Failed to register";

}


?>
