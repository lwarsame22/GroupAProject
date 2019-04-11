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


   // if(isset($_GET["eid"]))
    //{
        $e_ID = $_GET["eid"];

    //}
    $query="SELECT * FROM user_profile u, events e WHERE e.e_ID='$e_ID' AND e.e_username=u.u_username";

    $query2="SELECT * FROM events WHERE events.e_ID='$e_ID'  AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $query3="SELECT * FROM comment_on co WHERE co.c_eventID='$e_ID'";


    // Creator details query
    $result3=mysqli_query($conn, $query);
    //Event details query
    $result=mysqli_query($conn, $query2);

    //Commments query
    $result2=mysqli_query($conn, $query3);

    //WHY IS THIS HERE?
    $eventID="";
    $eventname="";
    $eventdes="";
    $eventloc="";
    $edate="";

    if(mysqli_num_rows($result3)==1){
        while ($row= mysqli_fetch_assoc($result)){
            $profile=$row['e_username'];
            $eventID=$row['e_ID'];
            $eventname=$row['e_title'];
            $eventdes=$row['e_description'];
            $eventloc=$row['e_location'];
            $edate=$row['e_date'];

        }

    }

    if(mysqli_num_rows($result)==1){
        while ($row= mysqli_fetch_assoc($result)){
            $profile=$row['e_username'];
            $eventID=$row['e_ID'];
            $eventname=$row['e_title'];
            $eventdes=$row['e_description'];
            $eventloc=$row['e_location'];
            $edate=$row['e_date'];

        }
      

    }


    $cmmt="";
    if(mysqli_num_rows($result2)>0){
        while ($row= mysqli_fetch_assoc($result2)){

            $c_uname=$row['c_username'];
            $c_time=$row['c_timestamp'];
            $c_content =$row['c_content'];
            $cmmt.= "$c_uname $c_content   $c_time <br> <br>" ;

        }
        // echo $cmmt;
    }  else {
        echo "<p>nada.</p>";
    }

    ?>

    <div class="creatorProfile">

        <h4><?php echo $profile ?></h4>
         <div>
            <?php
            if($profile!=$username) {
                echo "<a href='createNewMessage.php?user=$profile'>Message User</a>";
            }
            ?>
        </div>
    </div>
<?php


// create query to check if user has joined an event
$query4="SELECT * FROM join_event WHERE j_username='$username' AND j_event='$e_ID'";
$result4=mysqli_query($conn, $query4);


    //--Event details part


if(mysqli_num_rows($result4)>0){
    echo "<div class='viewEventTable'>
        <form action='joinEvent.php' method='post'>
        <h1>$eventname</h1>
        <p style='color: #dddddd'>This event will take place on <font color='#00ced1'>$edate</font> </p>
        <p style='color: #dddddd'>Location: <font color='#00ced1'>$eventloc </font></p>
        <h3 style='color: #dddddd'>$eventdes</h3>
            
            <input type='hidden' name='eid' value='$e_ID' >
            <button type='submit' value='leaveEvent' name='leaveButton' class='btn'>Leave Event</button><br>
        </form>


    </div>";

}else{
    echo "<div class='viewEventTable'>
        <form action='joinEvent.php' method='post'>
        <h1>$eventname</h1>
        <p style='color: #dddddd'>This event will take place on <font color='#00ced1'>$edate</font> </p>
        <p style='color: #dddddd'>Location: <font color='#00ced1'>$eventloc </font></p>
        <h3 style='color: #dddddd'>$eventdes</h3>
            
            <input type='hidden' name='eid' value='$e_ID' >
            <button type='submit' value='joinEvent' name='joinButton' class='btn'>Join Event</button><br>
        </form>


    </div>";
}

?>


    <!--Commments part   -->
<div class="postreply">
    <form action="postreply.php" method="post">
        <h3 style="color: #dddddd"> <?php echo $cmmt; ?></h3>
        <p style="color: #f9f9f9">Leave A Comment</p>
        <textarea name="reply_content" cols="75" rows="5"></textarea>
        <br>
        <input type="hidden" name="eid" value="<?php echo $e_ID; ?>">
        <button type="submit" value="postcomment" name="commentButton" class="btn">Post Comment</button><br>
    </form>







</main>
<!--Main Ends   -->

<!-- Footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>
