<?php
session_start();

include_once('DBConnect.php');
if ($_POST['joinButton']) {

    $username = $_SESSION['username'];
    $e_ID = $_GET['eid'];

    $query = "INSERT INTO join_event(j_username, j_event) VALUES('$username','$e_ID')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: viewEventdetails.php?eid=' . $e_ID);
    }
}
?>
