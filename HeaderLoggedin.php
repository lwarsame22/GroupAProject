
<?php

include_once('login.php');
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        body{
            background: black;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
            width: 100%;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: gray;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .playmatetitle{
            background-color: black;
            font-size: 20px;
            font-family: 'Roboto', sans-serif;

        }
        .dropdown-content a {
            float: none;
            font-family: 'Roboto', sans-serif;
            color: black;
            padding: 18px 22px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: turquoise;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }


        h4{
            color: turquoise;
        }
        h1{
            color: white;
            font-weight: bold;
        }

    </style>
</head>
    <!--class="control"    <nav class="grid-container"> -->
<body>

 <header >
     <div class="playmatetitle">
         <h1>Playmate</h1>
     </div>

     <div class = "navbar">


                <div class="dropdown">
                <a href="HomePage.php">Home</a>
                </div>

                <div class="dropdown">
                <button class="dropbtn">
                    <a href="viewProfile.php">Profile</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                        <div class="dropdown-content">
                            <a href="viewProfile.php">View</a>
                            <a href="profile.php">Edit</a>
                        </div>
                </div>

            <div class="dropdown">
             <button class="dropbtn">
                 <a href="#">Messages</a>
                 <i class="fa fa-caret-down"></i>
             </button>
                <div class="dropdown-content">
                 <a href="viewMessages.php">View My Messages</a>
                 <a href="sendMessage.php">New Message</a>
                </div>
            </div>

                <div class="dropdown">
                <button class="dropbtn">
                    <a href="event.php">Event</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                        <div class="dropdown-content">
                            <a href="viewEvent.php">View Events</a>
                            <a href="event.php">Create Event</a>
                        </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="search.php">Search</a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="search.php">Search</a>
                    </div>
                </div>



     <section class="right">
         <form id = "logout"  method="post" action="logout.php">
             <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
         </form>
     </section>
     </div>
   <!-- Main Section Begins -->
     <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
         <h4>Welcome <?php echo $username ?></h4>
     </section>
   
     

</header>
<!-- Header Ends -->

</body>
</html>
