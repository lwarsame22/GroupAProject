<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="homeStyle" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
</head>
<body>

<!-- Header Start -->
<header class="control">
    <h2>Sport Playmate</h2>
    <form id = "login"  method="post" action="login.php">
        <div class="control-align">

                <input type="email" placeholder="Email" name="username" class="inputtxt">
                <input type="password" placeholder="Password" name = "password" class="inputtxt">
                <button type="submit" value="Login" name="loginButton" class="btn">

                <p><input type="checkbox">Keep me logged in</p>
                <p><a href="#">Forgotten Password</a></p>


    </div>

</header>
<!-- Header Ends -->

<!-- Main Starts -->

<main class="content-control">
    <section class="left">
        <h3>Sport Playmate helps you connect and share with the network of sports lovers in your community</h3>
        <img src="images/homesport.png" alt="Sports Home">

    </section>
    <section class="right">
        <h1>Sign Up</h1>
        <h3>Cost-Free! Anyone can join</h3>

        <form class="ipt">
            <form id="register" action="register.php" method="post">

            <Input type="text" placeholder="Enter user name" name="username" class="ipt" required ><br>
            <label for="email">Your Email:</label>
            <Input type="text" placeholder="Enter email here" name="email" class="ipt" required><br>
            <label for="password">New Password:</label>
            <input type="password" placeholder="Enter New Password" name="password" class="ipt"><br>
                <button type="submit" value="Sign Up" name="registerButton" class="btn"></button>

        </form>
    </section>


</main>
<!-- Main Ends -->

<!-- Footer Starts -->
<footer>


</footer>
<!-- Footer Ends -->

</body>
</html>