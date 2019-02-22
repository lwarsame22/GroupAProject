<?php
session_start();

    include_once('DBConnect.php');

    $firstname = strip_tags($_POST['firstname']);

    $lastname = strip_tags($_POST['lastname']);

    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

    $gender = strip_tags($_POST['gender']);
    // $pass= md5($password);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail='InvalidEmail';
        echo header('Location HomePage.php?msg=$errorEmail');
    }
    else {

        $query = "INSERT INTO sports(Name,LastName,UserName, email, password, gender) 
    VALUES('$firstname' , '$lastname', '$username', '$email', '$password','$gender')";

        $result = mysqli_query($conn, $query);

        if ($result) {

            echo "Succesfully registered";

            header('Location: user.php'); //NEED TO EDIT THIS LATER

        } else {

            echo "Failed to register";

        }
    }

?>

