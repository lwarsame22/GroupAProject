
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
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
                <div class="userRegister">
                    <h1>Register</h1>
                    <label for="username">User Name:</label><br>
                    <Input type="text" placeholder="Enter username" name="username" required><br>
                    <label for="email">Email:</label><br>
                    <Input type="text" placeholder="Enter email" name="email" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" placeholder="Enter Password" name="password" required><br>
                    <button type="submit" value="Register" name="registerButton">Register</button>
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
</html>
