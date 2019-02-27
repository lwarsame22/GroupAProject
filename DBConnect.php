<?php
/**
 * Created by PhpStorm.
 * User: 1810356
 * Date: 18/02/2019
 * Time: 11:58
 */


$servername = "CSDM-WEBDEV";
$dbname="db1810356_qvan";
$username = "1810356";
$password = "1810356";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>