<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
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
include_once('DBconnect.php');
session_start();
if ( isset($_SESSION['username'] )){
    $query1="Select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, user_profile.username from messages as m1, messages as m2, user_profile where((m1.user1='".$_SESSION['username']."' and m1.user1HasRead='no' and user_profile.username=m1.user2) or (m1.user2='".$_SESSION['username']."' and m1.user2HasRead='no' and user_profile=m1.user1))";
    $query2="Select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, user_profile.username from messages as m1, messages as m2, user_profile where((m1.user1='".$_SESSION['username']."' and m1.user1HasRead='yes' and user_profile.username=m1.user2) or (m1.user2='".$_SESSION['username']."' and m1.user2HasRead='yes' and user_profile=m1.user1))";
    $result1=mysqli_query($conn,$query1);
    $result2=mysqli_query($conn,$query2);

    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}
?>
<h3>Unread Messages(<?php echo intval(mysqli_num_rows($result1)); ?>) :</h3>
<table>
    <tr>
        <th class="titleMessages">Title</th>
        <th>Nb. Replies</th>
        <th>Participant</th>
        <th>Date of creation</th>
    </tr>
    <?php
// display the unread messages list
while($row = mysqli_fetch_array($result1)){
    ?>
    <tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['reps']-1; ?></td>
        <td><?php echo $row['user2'] ?></td>
        <td><?php echo date('Y/m/d H:i:s', $row['timestamp']);?></td>
    </tr>
    <?php
}
// if there are no unread messages
if(intval(mysqli_num_rows($result1))==0)
    {
    ?>
    <tr>
        <td> You have no unread messages</td>
    </tr>
<?php
}
?>
</table>
<br />
    <h3>Read Messages(<?php echo intval(mysqli_num_rows($result2)); ?>) :</h3>
    <table>
        <tr>
            <th class="titleMessages">Title</th>
            <th>Nb. Replies</th>
            <th>Participant</th>
            <th>Date of creation</th>
        </tr>
        <?php
        // display the unread messages list
        while($row2 = mysqli_fetch_array($result2)){
            ?>
            <tr>
                <td><?php echo $row2['title'] ?></td>
                <td><?php echo $row2['reps']-1; ?></td>
                <td><?php echo $row2['user2'] ?></td>
                <td><?php echo date('Y/m/d H:i:s', $row2['timestamp']);?></td>
            </tr>
            <?php
        }
        // if there are no unread messages
        if(intval(mysqli_num_rows($result2))==0)
        {
            ?>
            <tr>
                <td> You have no read messages</td>
            </tr>
            <?php
        }
        ?>
    </table>
    
</body>
</html>
