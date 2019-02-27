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
            $id = mysqli_insert_id($conn);
            $query2= "INSERT INTO user_profile(u_name, u_lastname, u_mail, gender, address, city, country, datebirth, mobilenum, active, u_ID, p_ID)
            VALUES ('NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '$id', 'NULL')";
            $result2 = mysqli_query($conn, $query2);
            echo " last nserted id ". $id;

            $_SESSION['username'] = $username;
           // header('Location: user.php'); //NEED TO EDIT THIS LATER
        } else {

            echo "Failed to register";

        }


?>

