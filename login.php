<?php
session_start();

        if ($_POST['loginButton']) {
            include_once('DBConnect.php');
            $username = strip_tags($_POST['username']);
            $password = strip_tags($_POST['password']);

            $sql = "SELECT Name,LastName, UserName, email, password, gender  FROM sports where username = '$username' LIMIT 1";
            $query = mysqli_query($db, $sql);

            if ($query) {
                $row = mysqli_fetch_row($query);
                $firstname = $row[0];
                $dbUserName = $row[1];
                $dbPassword = $row[2];
            }
            if ($username == $dbUserName && $password == $dbPassword) {
                $_SESSION['username'] = $username;
                header('Location: user.php');//NEED TO EDIT THIS LOCATION LATER
            } else {
                echo "<b><i>Incorrect credentials</i><b>";
            }
        }

?>