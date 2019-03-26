!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        body{
            background-color: white;

        }
        .profilebakground h2{
            color: black;
        }
        main{
            background: url("Images/updateprofile.jpg") no-repeat ;
            background-position: center;
        }
        .control{
            text-align: center;
            color: black;
        }
        .profilebtn{
            display: flex;
        }
        h2{
            text-align: left 50 px;
        }

    </style>
</head>
<body>
<?php

require "HeaderLoggedin.php";
  
    if(isset($_GET["eid"]))
    {
        $e_ID = $_GET["eid"];

    }
?>
<main class="">
    <div class="">
        <form name="updateEvent" method="post" action="UpdateEvent.php" enctype="multipart/form-data">
            <h2>Edit Event</h2>
            <label for="Title">Title:</label><br>
            <input type="hidden" name="eid" value="<?php echo $e_ID; ?>" />
            <Input type="text" placeholder="Name of the Event" name="ename" class="inputbox" required><br>
            <label for="Description">Event Description:</label><br>
            <input type="text" placeholder="Enter Description" name="description" class="inputbox" required><br>
            <label for="location">Location : </label><br>
            <input type="text" placeholder="Enter location" name="location" class="inputbox"><br><br>
            <select class="sportdropdown" name="sportName">
                <?php
                $query2 = "SELECT * FROM sports";
                $result=mysqli_query($conn, $query2);

                while( $row = mysqli_fetch_array($result)){

                    echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

                }



                ?>
            </select><br><br><br>

            <div class="">
                <button type="submit" value="updateEvent" name="eventuButton" class="btn">Update Event</button><br>
                <button type="submit" value="cancelEvent" name="eventcButton" class="btn">Cancel</button></div>
        </form>
    </div>
</main>
<!-- Main Section End  -->
<!-- Footer Starts -->
<?php

require ("Footer.php")
?>
