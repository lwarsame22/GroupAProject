<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("images/updateprofile.jpg");
        }
    </style>

</head>
<body>
<?php

require "HeaderLoggedin.php";
if(isset($_GET["user"]))
{
    $creator = $_GET["user"];
//simple form here need action page seperate
    // redirected to sentbox
}

    ?>
<?php echo "TO: ".$creator
?>
<main>
    <form method="Post" action="sendmessage.php">
        <input type="hidden" name="user" value="<?php echo $creator; ?>" />
        <textarea name="message" cols="75" rows="5"></textarea>
        <button type="submit" name="sendmessage" >Send message</button>
    </form>


</main>
<!--Main Ends -->
<!-- Footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>

