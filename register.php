<?php
session_start();

    include_once('DBConnect.php');


    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);


        $query = "INSERT INTO user_profile(u_mail, u_username, password) 
          VALUES('$email', '$username', '$password')";

        $result = mysqli_query($conn, $query);

        if ($result) {

            $_SESSION['username'] = $username;
           header('Location: user2.php');
        } else {

            echo "Failed to register";

        }


?>

