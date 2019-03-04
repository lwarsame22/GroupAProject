
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!--link rel="stylesheet" href="css/style.css"-->
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">

</head>
<body>


<!--This PHP IF logic is using a choosing a different header depending if the user is logged in or not -->

<?php
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    require "HeaderLoggedin.php";
}
else {
    require "Header.php";
}

?>







</body>
</html>
