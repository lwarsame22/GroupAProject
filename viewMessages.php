<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("images/updateprofile.jpg");
        }
    </style>
    <style>

        a{
            text-decoration: none;
            color: turquoise;
        }
        table, td{
            text-align: right;
        }

    </style>
</head>
<body>
<?php
include_once('DBconnect.php');
session_start();
if ( isset($_SESSION['username'] )){


    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}
?>
