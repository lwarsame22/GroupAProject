<?php
session_start();
include_once('DBConnect.php');
$username=$_SESSION['username'];


$messages = strip_tags($_POST['message']);

$creator=$_POST['user'];
// $pass= md5($password);


$query = "INSERT INTO message(messages, fromUser, toUser) 
          VALUES('$messages', '$username', '$creator')";
//$idInsertLast = mysqli_insert_id($conn);
//$result = mysqli_query($conn, $query);
// $query2 ="INSERT INTO user_profile(u_mail) VALUES ('$email')";
// $result2= mysqli_query($conn, $query2);
if (mysqli_query($conn, $query)) {
$last_id = mysqli_insert_id($conn);
// if ($result) {
    //$last_id = mysqli_insert_id($conn);
    $query2="INSERT INTO user_mailboxes(user, mailbox, message_id) VALUES ('$username', 'out', '$last_id')";
    $query3="INSERT INTO user_mailboxes(user, mailbox, message_id) VALUES ('$creator', 'in', '$last_id')";
    $result2=mysqli_query($conn, $query2);
    $result3-mysqli_query($conn,$query3);
    header('Location: outBox.php');
} else {

    echo "Failed to register";

}


?>
