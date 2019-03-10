<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.csstyle.css">
</head>
<body>
<?php
session_start();

include_once('DBConnect.php');
$username=$_SESSION['username'];

$query2 = "SELECT * FROM user_profile WHERE u_username='$username'";
$result=mysqli_query($conn, $query2);
if(mysqli_num_rows($result)==1){
    while ($row= mysqli_fetch_assoc($result)){
        echo "Hello ".$row['u_username'];
        echo $row['u_name'] ." ".$row['u_lastname'] ." " .$row['u_mail'] ." " . $row['gender'] ." " .$row['address'] ." " .$row['city'] ." " .$row['country'] ." " .$row['datebirth'] ." " .$row['mobilenum'];
    }
}
?>
</body>
</html>

/**
 * Created by PhpStorm.
 * User: 1812315
 * Date: 10/03/2019
 * Time: 16:14
 */