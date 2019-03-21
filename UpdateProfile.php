<?php
session_start();

include_once('DBConnect.php');
if ($_POST['profileButton']) {
$username=$_SESSION['username'];

$uname = strip_tags($_POST['uname']);

$ulname = strip_tags($_POST['ulname']);



$gender = strip_tags($_POST['gender']); //Radio BOx

$address = strip_tags($_POST['address']);

$city = strip_tags($_POST['city']);

$country = strip_tags($_POST['country']);

$datebirth = strip_tags($_POST['datebirth']);

$mobilenumber = strip_tags($_POST['mobilenumber']);

    $targetDir = "UploadedImg/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_FILES['imgInput'])){
    $errors= array();
    $file_name = $_FILES['imgInput']['name'];
    $file_size = $_FILES['imgInput']['size'];
    $file_tmp = $_FILES['imgInput']['tmp_name'];
    $file_type = $_FILES['imgInput']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['imgInput']['name'])));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"UploadedImg/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}




// $pass= md5($password);
$query = "UPDATE  user_profile
          SET u_name= '$uname',
          u_lastname ='$ulname',
          gender ='$gender',
          address ='$address',
          city ='$city',
          country ='$country',
          datebirth='$datebirth',
          mobilenum='$mobilenumber',
          active='1'
          WHERE u_username = '$username'";


$result = mysqli_query($conn, $query);

if ($result) {


    header('Location: user.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
} else {

    echo "Failed to update";
}
}


?>

<!--  -->