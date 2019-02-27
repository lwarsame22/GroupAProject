<?php
session_start();

    include_once('DBConnect.php');

    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

    // $pass= md5($password);

        $query = "INSERT INTO user_validation(v_mail, username, password) 
          VALUES('$email', '$username', '$password')";


        $result = mysqli_query($conn, $query);

        if ($result) {
            $userID= mysqli_insert_id();

            $IDrequest= mysqli_query($conn, $userID);
            $query_2 = "INSERT INTO user_profile(u_ID) VALUES('$userID')";
            $result_2= mysqli_query($conn, $query_2);
            $query_3 = "UPDATE user_profile SET u_mail=$email WHERE user_validation.u_ID=user_profile.u_ID";
            $result = mysqli_query($conn, $query_3);

            echo "Succesfully registered";
            $_SESSION['username'] = $username;
            header('Location: user.php'); //NEED TO EDIT THIS LATER
        } else {

            echo "Failed to register";

        }


?>

