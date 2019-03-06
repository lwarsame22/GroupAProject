<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<header class="control"> <!-- class="control " provides the class name for styling the header and footer themes of the webpages, giving the pages a uniform look --> 

    <section class="left"> <!--<section class="left" aligns setion content to the left side of the header -->
        <h2>Sport Playmate</h2>
    </section>

    <section class="right"> <!-- <section class="right" aligns setion content to the right side of the header -->
        <form id = "login"  method="post" action="login.php">
            
            <form class="login">
            <input type="text" placeholder="Username" name="username" class="inputtxt">
            <input type="password" placeholder="Password" name ="password" class="inputtxt">
            <button type="submit" value="Login" name="loginButton" class="btn"><br>
            <input type="checkbox">Keep me logged in
            <a href="#">Forgotten Password</a>

         <!-- delete if not in use   <input type="text" placeholder="username" name="username" class="inputtxt" required>
            <input type="password" placeholder="password" name="password" class="inputtxt" required>
            <button type="submit" value="Login" name="loginButton" class="btn"><br>
            <input type="checkbox">Keep me logged in
    <a href="#">Forgotten Password</a> this should work now -->
        </form>
    </section>
</header>
      




</body>
</html>
