<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/leestemplate.css">
    <style>
        main{
            <!--background: url("images/updateprofile.jpg"); -->
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


    if(isset($_GET["eid"]))
    {
        $e_ID = $_GET["eid"];

    }

    //$query2="SELECT * FROM events, sports WHERE events.e_ID='.$e_ID.' AND events.e_sportID=sports.s_ID  AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    //$query2="SELECT * FROM events WHERE events.e_ID='$e_ID' AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $query2="SELECT * FROM events WHERE events.e_ID='$e_ID'  AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $query3="SELECT * FROM comment_on co WHERE co.c_eventID='$e_ID'";

    //Event details query
    $result=mysqli_query($conn, $query2);

    //Commments query
    $result2=mysqli_query($conn, $query3);


    if(mysqli_num_rows($result)==1){
        while ($row= mysqli_fetch_assoc($result)){

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
        echo $cmmt;
    }  else {
        echo "<p>nada.</p>";
    }


    ?>

    <!--<div class="view EventTable">

            <tr><td><?php echo $eventID; ?></td><td><?php echo $eventname; ?></td><td> <?php echo $eventdes; ?> </td> <td> <?php echo $eventloc; ?> </td></tr>



    </div> -->
    <div class="viewEventTable">
        <h1><?php echo $eventname; ?></h1>
        <p style="color: #dddddd">This event will take place on <font color="#00ced1"><?php echo $edate; ?></font> </p>
        <p style="color: #dddddd">Location: <font color="#00ced1"><?php echo $eventloc; ?></font></p>
        <h3 style="color: #dddddd"> <?php echo $eventdes; ?></h3>



    </div>


<div class="postreply">
    <form action='postreply.php' method="post">
        <h3 style="color: #dddddd"> <?php echo $cmmt; ?></h3>
        <p style="color: #f9f9f9">Leave A Comment</p>
        <textarea name="reply_content" cols="75" rows="5"></textarea>
        <br>
        <input type="hidden" name="cid" value="<?php echo $e_ID; ?>">
        <!--input type="submit" name="reply_submit" value="Post Your Reply"-->
        <button type="submit" value="postcomment" name="commentButton" class="btn">Post Comment</button><br>
    </form>

<!--</div>
    <div class="editevent">
        <a href="editEvent.php">Edit Event</a>
    </div> -->
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
