<?php
session_start();

if($_POST['registerButton']){

    $username = strip_tags($_POST['username']);

    $password = strip_tags($_POST['password']);

    $db = mysqli_connect("localhost", "root", '', "users_db_v1") or die ("Failed to connect");

    $query = "INSERT INTO users(username,password,activated) VALUES('$username', '$password','1')";

    $result = mysqli_query($db,$query);

    if($result) {

        echo "Succesfully registered";

        header('Location: login.php');

    }

    else {

        echo "Failed to register";

    }

}
?>


/**
 * Created by PhpStorm.
 * User: 1810356
 * Date: 15/02/2019
 * Time: 14:18
 */