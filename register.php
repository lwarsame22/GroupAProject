<?php
session_start();

    include_once('DBConnect.php');

    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

    // $pass= md5($password);

        $query = "INSERT INTO user_validation(u_mail, username, password) 
    VALUES('$email', '$username', '$password')";

        $result = mysqli_query($conn, $query);

        if ($result) {

            echo "Succesfully registered";
            $_SESSION['username'] = $username;
            header('Location: user.php'); //NEED TO EDIT THIS LATER

        } else {

            echo "Failed to register";

        }


?>

