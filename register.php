<?php
session_start();

    include_once('DBConnect.php');


    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

    // $pass= md5($password);


        $query = "INSERT INTO user_profile(u_mail, u_username, password) 
          VALUES('$email', '$username', '$password')";

        $result = mysqli_query($conn, $query);
        // $query2 ="INSERT INTO user_profile(u_mail) VALUES ('$email')";
        // $result2= mysqli_query($conn, $query2);

        if ($result) {

            $_SESSION['username'] = $username;
           header('Location: user.php');
        } else {

            echo "Failed to register";

        }


?>

