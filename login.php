<?php
session_start();

        if ($_POST['loginButton']) {
            include_once('DBConnect.php');
            $username = strip_tags($_POST['username']);
            $password = strip_tags($_POST['password']);

            // $pass= md5($password);

            $sql = "SELECT *  FROM user_profile where u_username = '$username' AND password ='$password' LIMIT 1 ";
            $query = mysqli_query($conn, $sql);


            if(mysqli_num_rows($query)==1){
                $_SESSION['username'] = $username;

                header('Location: user.php');//NEED TO EDIT THIS LOCATION LATER
            } else {
                echo "<b><i>Incorrect credentials</i><b>";
            }
            }

?>

