
<?php
session_start();
include_once('DBConnect.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        header{
            /*background: black;*/
            width: 1200px;
            border: 1px solid black;
            margin-right: auto;
            margin-left: auto;
            background-color: black;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
            width: 100%;
        }

        .navbar a {
            float: left;
            font-size: 20px;
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
            font-size: 20px;
            font-family: Arial, sans-serif;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: Arial, sans-serif;
            margin: 0;
            font-weight: bold;
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
            font-size: 30px;
            font-family: Arial, sans-serif;

        }
        .dropdown-content a {
            float: none;
            font-family: Arial, sans-serif;
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
            font-family: Arial, sans-serif;
            font-size: 20px;
        }
        h1{
            color: white;
            font-weight: bold;
            font-size: 30px;
        }

    </style>
</head>
    <!--class="control"    <nav class="grid-container"> -->
<body>
     <div class="playmatetitle">
      <header>
         <h1>Playmate</h1>
      </header>
     </div>
     <!-- Main Section Be  gins -->
     <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
         <h4>Welcome <?php echo $username; ?></h4>
     </section>
     <div class = "navbar">


                <div class="dropdown">
                <a href="user.php">Home</a>
                    <i class="fa fa-caret-down"></i>
                </div>

                <div class="dropdown">
                <button class="dropbtn">
                    <a href="viewProfile.php">Profile</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                        <div class="dropdown-content">
                            <a href="viewProfile.php">View</a>
                            <a href="profile.php">Edit Profile</a>
                            <a href="Skills.php">Edit Skills</a>
                        </div>
                </div>

            <div class="dropdown">
             <button class="dropbtn">
                 <a href="#">Messages</a>
                 <i class="fa fa-caret-down"></i>
             </button>
                <div class="dropdown-content">
                 <a href="Inbox.php">View My Inbox</a>
                 <a href="outbox.php">My Outbox</a>
                </div>
            </div>

                <div class="dropdown">
                <button class="dropbtn">
                    <a href="event.php">Event</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                        <div class="dropdown-content">
                            <a href="viewallEvents.php">View All Events</a>
                            <a href="viewMyEvents.php">View My Events </a>
                            <a href="event.php">Create Event</a>
                        </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="searchBySport.php">Search</a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="searchForUser.php">Search by user</a>
                        <a href="searchByLocation.php">Search by location</a>
                        <a href="searchBySport.php">Search by sport</a>
                    </div>
                </div>



     <section class="right">
         <form id = "logout"  method="post" action="logout.php">
             <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
         </form>
     </section>
     </div>

   
     

</header>
<!-- Header Ends -->

</body>
</html>
