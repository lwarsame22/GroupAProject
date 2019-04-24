<?php
session_start();

include_once('DBConnect.php');
$sport="";
$skills1="";
for($i=0; $i<9; $i++) {
    $sport[$i] = $_POST['s_name'];

    $skills1[$i] = $_POST['level'];

    //    echo "sport name is: " .$sport[$k]. " and level was: " . $skills1[$k];
    //}

    echo "$sport . $skills1";

}
    $query2 = "SELECT s_name FROM sports";



?>





