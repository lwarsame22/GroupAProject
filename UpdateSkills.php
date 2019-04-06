<?php
session_start();

include_once('DBConnect.php');
if ($_POST['SkillsButton']) {

    $sport1=strip_tags($_POST['sports1']);

    $skills1 = strip_tags($_POST['skills1']);

    $query2 = "SELECT s_name FROM sports";


for(i=1, i<){



}



// Display status message
echo $sport1;
    echo $skills1;



}


?>

