<?php
session_start();

include_once('DBConnect.php');
if ($_POST['SkillsButton']) {

    $sport1=$_SESSION['sports1'];

    $skills1 = strip_tags($_POST['skills1']);






    //Image querys
    $statusMsg = '$sport1'.'$skills1';





// Display status message
echo $statusMsg;



}


?>

