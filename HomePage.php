

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SportsMatch</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">

</head>
<body>
<!-- HEADER START-->
<!--lee>
<!--pams second try changes>
<!--Ifeoma>

<header>
    <img id= "Sportlogo" src="Images/SportLOGO.png" alt="Sports Logo">

    <div id="quicklinks">

        <!-- Nav START
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">MyProfile</a></li>
        <li><a href="#">My Teams</a></li>

    </ul>
</nav>
Nav END-->
<img id= "Sportbanner" src="Images/Sports.jpg" alt="Sports App">
</div>
</header>
<!-- HEADER END -->

<main class="grid-container">

    <!--Section 1 DESCRIPTION-->
    <section id="AppDescription" class="grid-100">
        <h1>    Playmate / Matchy / Sporty/ Kudofy  </h1>
        <img id= "Sportapp" src="Images/sportapp.jpg" alt="Sports App">
        <h2> Making it easier to find people around you to organize and play your sport </h2>
        <p> QUICK PLAYs
            Smart way to find members willing to play a sport and arrange activities with each other
            TEAM MANAGEMENT
            Join one or more teams and schedule your matches in order to no overlap. Feed you app with the amount of minutes you played in the match or if you score some points
            EVENTS AND COMPETITIONS
            Create a quick event of event run for a competition, leagues or tournaments.
            Organize one-off or recurring activities, event or training sessions
            Accept new entries
        </p>
    </section>


    <!--Section 1 FOR users-->

    <section class="grid-60">
        <form id = "login"  method="post" action="login.php">
            <div class="userLogin">
                <h1>Login</h1>
                <label for="username">Username:</label><br>
                <Input type="text" placeholder="Enter Username" name="username" required><br>
                <label for="password">Password:</label><br>
                <input type="password" placeholder="Enter Password" name="password" required><br>

                <button type="submit" value="Login" name="loginButton">Login</button>
                <label><input type="checkbox" checked="checked" name="remember">Remember Me</label>
            </div>

            <div id="forgotten details">
                <nav>
                    <ul>
                        <li><a href="#">Forgotten username ?</a></li>
                        <li><a href="#">Forgotten password ?</a></li>
                    </ul>
                </nav>
            </div>
        </form>

    </section>
    <!-- End of Section 1 USERS-->


    <!--Section 2 NEW users-->
    <section  class="grid-60">
        <form id = "register" action="register.php" method="post">
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
    <!--END Section 2 NEW users-->
</main>
</body>
</html>
