<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout page</title>
</head>
<body>
<form action = "HomePage.php">
    <input type="submit" name="redirect" value = "Go back to home">
</form>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: 1812315
 * Date: 20/02/2019
 * Time: 17:10
 */