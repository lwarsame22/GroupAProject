<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/leestemplate.css">
    <style>
        body{
            background: url("Images/americanfo.jpg") scroll no-repeat;
            background-size: cover;
            background-position: center;
        }

        main{
            width: 1200px;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <style>
        .viewEventTable{
            color: black;
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
    <section>
    <?php


    if(isset($_GET["eid"]))
    {
        $e_ID = $_GET["eid"];

    }


    $query2="SELECT * FROM events WHERE events.e_ID='$e_ID'  AND e_date >= CURDATE() ORDER BY events.e_date ASC";
    $query3="SELECT * FROM comment_on co WHERE co.c_eventID='$e_ID'";



    //Event details query
    $result=mysqli_query($conn, $query2);

    //Commments query
    $result2=mysqli_query($conn, $query3);


    if(mysqli_num_rows($result)==1){
        while ($row= mysqli_fetch_assoc($result)){
            $Creator=$row['e_username'];
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



    <div class="viewEventTable">
        <form >
            <h1 style="color: black"><?php echo $eventname; ?></h1>
            <p style="color: black">This event will take place on <color="black"><?php echo $edate; ?></font> </p>
            <p style="color: black">Location: <color="black"><?php echo $eventloc; ?></font></p>
            <h3 style="color: black"> <?php echo $eventdes; ?></h3>

            <?php
            if($Creator==$username) {
                echo "<a href='editEvent.php?eid=$e_ID'>Edit Event</a>";
            }
            ?>
        </form>


    </section>
    <section>
    </div>


    <div class="postreply">
        <form action="postreply.php" method="post">
            <h3 style="color: black"> <?php echo $cmmt; ?></h3>
            <p style="color: black">Leave A Comment</p>
            <textarea name="reply_content" cols="75" rows="5"></textarea>
            <br>
            <input type="hidden" name="eid" value="<?php echo $e_ID; ?>">

            <button type="submit" value="postcomment" name="commentButton" class="btn">Post Comment</button><br>
        </form>


    </section>




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
