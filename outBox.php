<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sent Messages</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("images/updateprofile.jpg");
        }
    </style>
    <style>

        a{
            text-decoration: none;
            color: turquoise;
        }
        table, td{
            text-align: right;
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
    WHERE user_mailboxes.user = '$username' AND user_mailboxes.mailbox = 'out'";
$result=mysqli_query($conn, $query2);
$row= mysqli_fetch_assoc($result);
if($row==0){
    echo "you currently have no messages in your outbox";
}
else{
    $message=$row['messages'];
    $toUser=$row['toUser'];
    $when=$row['timestamp'];

}

?>

<div class="viewMessages">
    <table>
        <tr><th>Message</th><th>From</th><th>Date</th></tr>
        <?php do{ ?>
        <tr><td><?php echo $row['messages']; ?></td><td><?php echo $row['toUser']; ?></td><td><?php echo $row['timestamp']; ?></td>
            <?php }while ($row= mysqli_fetch_assoc($result)) ?>
    </table>
</div>
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

