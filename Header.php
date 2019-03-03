
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/homeStyle.css">
</head>
<body>
<?php
session_start();
if (isset($_SESSION['username'])){
    $username=$_SESSION['username'];

echo $username;

    <div id="quicklinks">


<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="Profile.php">MyProfile</a></li>
        <li><a href="#">My Teams</a></li>
        <li><a href="#">Welcome echo $username;</a></li>
<li><a href="#"><form action="logout.php"><input type="submit" value="logout" name="logoutButton"></a></li>
</ul>
</nav>

<img id= "Sportbanner" src="Images/Sports.jpg" alt="Sports App">
</div>

} else {

<header class="control">

    <section class="left">
        <h2>Sport Playmate</h2>
    </section>

    <section class="right">
        <form id = "login"  method="post" action="login.php">
            <input type="text" placeholder="username" name="username" class="inputtxt" required>
            <input type="password" placeholder="password" name="password" class="inputtxt" required>
            <button type="submit" value="Login" name="loginButton" class="btn"><br>
            <input type="checkbox">Keep me logged in
    <a href="#">Forgotten Password</a>
        </form>
    </section>
</header>

}
?>

</body>
</html>