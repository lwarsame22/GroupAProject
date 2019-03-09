
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

    $query2 = "SELECT e_sportname FROM sports";
    $result=mysqli_query($conn, $query2);
    $row=mysqli_fetch_assoc($result);
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
    <label for="location">Location <?php echo $row ?>: </label><br>
    <input type="text" placeholder="Enter location" name="location"><br>

    <button type="submit" value="createEvent" name="eventButton" class="btn">Create Event</button><br>
</form>
</body>
</html>