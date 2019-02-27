<?php
session_start();

    include_once('DBConnect.php');





    $username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

    // $pass= md5($password);

        $query = "INSERT INTO user_validation(v_mail, username, password) 
          VALUES('$email', '$username', '$password')";
       // $userID= last_insert_id();
       // "INSERT INTO user_profile(u_mail) WHERE user_profile.u_ID=$userID";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $last_id = mysqli_insert_id($conn);
            echo " last nserted id ". $last_id;
            $query_2="INSERT INTO user_profile(u_ID) VALUES ('$last_id)";
            $result_2 = mysqli_query($conn, $query_2);
            $_SESSION['username'] = $username;
           // header('Location: user.php'); //NEED TO EDIT THIS LATER
        } else {

            echo "Failed to register";

        }


?>

