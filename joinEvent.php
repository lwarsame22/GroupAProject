<?php
session_start();

include_once('DBConnect.php');
if (isset($_POST['joinButton'])) {
$e_ID = $_POST['eid'];
    $username = $_SESSION['username'];

    $query = "INSERT INTO join_event(j_username, j_event) VALUES('$username','$e_ID')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: viewEventdetails.php?eid=' . $e_ID);
    }
}

if (isset($_POST['leaveButton'])) {
    $e_ID = $_POST['eid'];
    $username = $_SESSION['username'];

    $query = "DELETE FROM join_event WHERE j_username='$username' AND j_event='$e_ID'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: viewEventdetails.php?eid=' . $e_ID);
    }
}
?>
