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
        // $query2 ="INSERT INTO user_profile(u_mail) VALUES ('$email')";
        // $result2= mysqli_query($conn, $query2);

        if ($result) {
            $userID = mysqli_insert_id($conn);
            $SeLECT = "SELECT * FROM user_validation";
            $result3=mysqli_query($conn, $SeLECT);

            $query2= "INSERT INTO user_profile(u_name, u_lastname, u_mail, gender, address, city, country, datebirth, mobilenum, active, u_ID)
             VALUES ('NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '$userID')";
            $result2 = mysqli_query($conn, $query2);
                echo $result2;
            echo " last nserted id ". $userID . Sresult3;

            $_SESSION['username'] = $username;
           // header('Location: user.php'); //NEED TO EDIT THIS LATER
        } else {

            echo "Failed to register";

        }


?>

