<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/homeStyle.css">
</head>

<?php
require "Header.php";
?>


<!-- Main Starts -->

<main class="content-control">

    <section class="boxregister">

        <img id="Sportbanner" src="images/sports.jpg" alt="Sports Home">

    </section>
    <section id="form" class="right">
        <h1 id="right1">Sign Up</h1>
        <h3 id="right1">Cost-Free! Anyone can join</h3><br><br>

        <form class="ipt">
            <form id="register" action="register.php" method="post">

                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username" required >
                </div>

                <div>
                    <label for="email">Your Email:</label>
                    <input type="text" name="email" required>
                </div>

                <div>
                    <label for="password">New Password:</label>
                    <input type="password"  name="password">
                </div>

                <div id="smt">
                    <button type="submit" value="Sign Up" name="registerButton">
                </div>

            </form>

    </section>


</main>
<!-- Main Ends -->
<h3>Sport Playmate helps you connect and share with the network of sports lovers in your community</h3>

<!-- Footer Starts -->
<?php
require "Footer.php";
?>
<!-- Footer Ends -->

</body>

