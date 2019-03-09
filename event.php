
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.csstyle.css">
</head>
<body>
<?php
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}

?>
<form name="updateprofile" method="post" action="UpdateProfile.php">
    <label for="eventTitle">Event Title:</label><br>
    <Input type="text" placeholder="Enter Event Title" name="title"><br>
    <label for="eventDate">Event date:</label><br>
    <input type="date" placeholder="Enter Event date="date" required><br>
    <label for="location">Location: </label><br>
    <input type="text" placeholder="Enter location" name="location"><br>
    <select name="sports">
        <?php
            $query="SELECT s_name FROM sports";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($result);
            while($row){
                $sport_name=$row('s_name');
                echo  "<option value='$sport_name'>$sport_name</option>";
            }
        ?>
    </select>
    <button type="submit" value="CreateEvent" name="eventButton" class="btn">Create Event</button><br>
</form>
</body>
</html>