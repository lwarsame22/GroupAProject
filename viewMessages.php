<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/leestemplate.css">
    <link rel="stylesheet" href="css/bootstrap-3.3.7/">
    <style>
        main{
            background-color: url("Images/updateprofile.jpg");
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <style>
        .viewEventTable{
            color: white;
            font-size: 20px;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color: turquoise;

        }
        h1{
            text-align: center;
            text-decoration: underline;
            font-size: 20px;
            font-family: Arial;
        }
        p{
            text-align: center;
            font-size: 18px;
            font-family: Arial;
        }
        h3 {
            text-align: center;
            font-size: 18px;
            font-family: Arial;
            word-wrap: break-word;
            border: #782A7E;
        }
        .postreply {
            padding-top: 50px;
            justify-content: center;
            text-align: center;

        }

    </style>
</head>
<body>
<?php

require "HeaderLoggedin.php";

?>
<main>
    <?php
        //if(isset($_GET['msgID'])) {
            $msgID = $_GET['msgID'];
        //}

$query = "SELECT * FROM message  
              WHERE message.id ='$msgID'";
$result=mysqli_query($conn, $query);

if(mysqli_num_rows($result)==1){
    while ($row= mysqli_fetch_assoc($result)){
        $msgID=$row['id'];
        $message=$row['messages'];
        $profile=$row['fromUser'];
        $timestamp=$row['timestamp'];



    }

}
?>
    <?php echo $msgID, $profile; ?>
    <div class="Inbox">
        <form >
            <h1><?php echo "Message from: $profile" ?></h1>
            <p style="color: #dddddd">Was delivered on <font color="#00ced1"><?php echo $timestamp; ?></font> </p>
            <p style="color: #dddddd">Message: <font color="#00ced1"><?php echo $message; ?></font> </p>
        </form>


    </div>

    <div class="pmReply">
        <form action="sendmessage.php" method="post">
            <p style="color: #f9f9f9">Reply to <?php echo $profile; ?>: </p>
            <textarea name="message" cols="75" rows="5"></textarea>
            <br>
            <input type="hidden" name="user" value="<?php echo $profile; ?>">

            <button type="submit" value="messageReply" name="replyMessage" class="btn">Send Message</button><br>
        </form>


</div>
</main>
</body>
</html>
