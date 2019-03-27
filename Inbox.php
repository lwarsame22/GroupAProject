<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("images/homepage.jpg");
        }

        .viewMessages{
            color: white;
            font-size: 20px;
            font-family: Arial, sans-serif;
            font-weight: bold;

            width: 400px;
            background-color: rgba(0, 0, 255, 0.2);
        }
        a{
            text-decoration: none;
            color: turquoise;
        }
        table, td{
            text-align: right;

        }
        .label{
            text-align: left;
            padding: 20px;
        }



    </style>
</head>
<body>
<?php

require_once ('HeaderLoggedin.php');

?>
<main>
    <?php

    $query2 = "SELECT * FROM user_mailboxes LEFT JOIN message ON message.id = user_mailboxes.message_id 
              WHERE user_mailboxes.user = '$username' AND user_mailboxes.mailbox = 'in'";
    $result=mysqli_query($conn, $query2);
    //$row= mysqli_fetch_assoc($result);
    $msgList="";
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $msgID=$row['id'];
            $message=$row['messages'];
            $fromUser=$row['fromUser'];
            $when=$row['timestamp'];
            $msgList .="<a href='viewMessages.php?msgID=".$msgID."' class ='cat_links'>".$message." -<br> <font size=''-3', color='#778899'>".$fromUser."<br></a>";
        }
        echo $msgList;
    } else{
        echo "<p style='color: #f9f9f9' class='searchresult'>Your Inbox is currently empty</p>";
    }

    ?>

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
