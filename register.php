<?php
session_start();

if($_POST['registerButton']){

    include_once('DBConnect.php');

    $firstname = strip_tags($_POST['firstname']);

    $lastname = strip_tags($_POST['lastname']);

    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

    $gender = strip_tags($_POST['gender']);

    $db = mysqli_connect("localhost", "root", '', "users_db_v1") or die ("Failed to connect");

    $query = "INSERT INTO users(Name,LastName,UserName, email, password, gender, activated) 
    VALUES('$firstname' , '$lastname', '$username', '$email', '$password','$gender','1')";

    $result = mysqli_query($db,$query);

    if($result) {

        echo "Succesfully registered";

        header('Location: HomePage.php'); //NEED TO EDIT THIS LATER

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