<?php
/**
 * Created by PhpStorm.
 * User: 1810356
 * Date: 18/02/2019
 * Time: 11:58
 */


$servername = "127.0.0.1";
$dbname="unip";
$userdb = "root";
$passdb = "";

// Create connection
$conn = new mysqli($servername, $userdb, $passdb, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>