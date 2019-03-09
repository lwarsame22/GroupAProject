
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <!--link rel="stylesheet" href="css/style.csstyle.css"-->
</head>
<body>
<?php
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    $query2 = "SELECT s_name FROM sports";
    $result=mysqli_query($conn, $query2);
    $row=mysqli_fetch_array($result);
    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}

?>
<form name="createEvent" method="post" action="createEvent.php">
    <label for="title">Event Title:</label><br>
    <Input type="text" placeholder="Enter Event Title" name="title"><br>
    <label for="date">Event date:</label><br>
    <input type="date" placeholder="Enter Event date="name="date"><br>
    <label for="description">Description: </label><br>
    <input type="text" placeholder="Enter Description" name="description"><br>
    <label for="location">Location : </label><br>
    <input type="text" placeholder="Enter location" name="location"><br>
    <?php
    while($row) {
        echo "Works" .$row['s_name']. ".$query2";
    } ?>
    <button type="submit" value="createEvent" name="eventButton" >Create Event</button><br>
</form>
</body>
</html>