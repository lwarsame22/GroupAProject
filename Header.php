<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<header class="control"> <!-- class="control " provides the class name for styling the header and footer themes of the webpages, giving the pages a uniform look --> 

    <section class="left"> <!<section class="left" aligns setion content to the left side of the header -->
        <h1>Sport Playmate</h2>
    </section>

    <section class="right"> <!<section class="right" aligns setion content to the right side of the header -->
        <form id = "login"  method="post" action="login.php">
            
            <form class="login">
            <input type="email" placeholder="Email" class="inputtxt">
            <input type="password" placeholder="Password" class="inputtxt">
            <input type="button" value="Login" class="btn"><br>
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
        <!--    Main Begins -->
   <main class="grid-container">

    <!--Section 1 DESCRIPTION-->
    <section id="AppDescription" class="grid-100">
       <h2> Making it easier to find people around you to organize and play your sport </h2>
        <p> QUICK PLAYs
            Smart way to find members willing to play a sport and arrange activities with each other
            TEAM MANAGEMENT
            Join one or more teams and schedule your matches in order to no overlap. Feed you app with the amount of minutes you played in the match or if you score some points
            EVENTS AND COMPETITIONS
            Create a quick event of event run for a competition, leagues or tournaments.
            Organize one-off or recurring activities, event or training sessions
            Accept new entries
        </p> </section><br><br>
     <section class="right">

    </section>


    <section  class="grid-60">
        <form id = "register" action="register.php" method="post">
            <div class="userRegister">
                <h2>Register</h2>
                <h2>Cost-Free! Anyone can join</h2><br>

                <label for="email">User Name:</label>
                <Input type="text" placeholder="Enter username" name="username" required><br>


                <label for="email">Email:</label>
                <Input type="email" placeholder="Enter email" name="email" required><br>


                <label for="password">Password:</label>
                <input type="password" placeholder="Enter Password" name="password" required><br>

                <label for="password">Password:</label>
                <input type="password" placeholder="Confirm Password" name="Confirm password" required><br>


                <div id="submit">
                    <input type="submit" value="Register" name="registerButton">
                </div>

            </div>

        </form>
    </section>



    <!--END Section 2 NEW users-->
</main><br><br><br><br>

<!-- Footer Begins -->
<footer class="control">

<h4>Connect and share with a network of sports lovers in your community</h4>
     <!--  <span>
           <li><a><i class="fab fa-facebook-square"></i></a></li>
           <l><a href="http://www.facebook.com"><img src="facebooklogo.png" alt="Facebook"</a></l>
           <li><a href="http://www.twitter.com"><img src="twitterlogo.png" alt="twitter"</a></li>
           <li><a href="http://www.linkedin.com"><img src="linkedinlogo.png" alt="linkedin"</a></li>
           <li><a href="http://www.googleplus.com"><img src="googlepluslogo.png" alt="Google+"</a></li>
           <li><a href="http://www.youtube.com"><img src="youtubelogo.png" alt="YouTube"</a></li>
       </span>-->
<h4>Copyright &copy; 2019. Software Project Engineering (CMM004)</h4>
    <p>All Rights Reserved</p>
    <small> Developed and Maintain by <a href="#">Group A Team</a></small>
</footer>

<!-- Footer Ends -->




</body>
</html>
