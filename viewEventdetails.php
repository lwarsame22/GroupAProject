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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="startbootstrap-sb-admin-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="startbootstrap-sb-admin-gh-pages/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="startbootstrap-sb-admin-gh-pages/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">PlayMate</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item disabled" href="#">Welcome <?php echo $username; ?></a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-user"></i>
                <span>Profile</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="viewProfile.php">View Profile</a>
                <a class="dropdown-item" href="profile.php">Edit Profile</a>
                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span>Messages</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="Inbox.php">Inbox</a>
                <a class="dropdown-item" href="outBox.php">Outbox</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-calendar-alt fa-fw"></i>
                <span>Events</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="viewallEvents.php">View All Events</a>
                <a class="dropdown-item" href="viewMyEvents.php">View My Events</a>
                <a class="dropdown-item" href="event.php">Create an Event</a>
            </div>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Messages</a>
                </li>
                <li class="breadcrumb-item active">Create New Message</li>
            </ol>

            <!-- Icon Cards-->
            <?php


            // if(isset($_GET["eid"]))
            //{
            $e_ID = $_GET["eid"];

            //}
            $userquery="SELECT * FROM user_profile Where u_username='$username'";
            $res=mysqli_query($conn, $userquery);
            if(mysqli_num_rows($res)==1) {
                while ($rue = mysqli_fetch_assoc($res)) {
                    $genderID = $rue['genderID'];
                }
            }
            $query="SELECT * FROM user_profile u, events e WHERE e.e_ID='$e_ID' AND e.e_username=u.u_username";
            // Creator details query
            $result3=mysqli_query($conn, $query);
            if(mysqli_num_rows($result3)==1){
                while ($row= mysqli_fetch_assoc($result3)){
                    $profile=$row['e_username'];
                    $eventID=$row['e_ID'];
                    $eventname=$row['e_title'];
                    $eventdes=$row['e_description'];
                    $eventloc=$row['e_location'];
                    $edate=$row['e_date'];


                }

            }

            $query2="SELECT * FROM events WHERE events.e_ID='$e_ID'  AND e_date >= CURDATE() ORDER BY events.e_date ASC";
            //Event details query
            $result=mysqli_query($conn, $query2);

            if(mysqli_num_rows($result)==1){
                while ($row2= mysqli_fetch_assoc($result)){
                    $profile=$row2['e_username'];
                    $eventID=$row2['e_ID'];
                    $eventname=$row2['e_title'];
                    $eventdes=$row2['e_description'];
                    $eventloc=$row2['e_location'];
                    $edate=$row2['e_date'];

                    $spaces=$row2['e_spaces'];
                    $gender=$row2['e_gender'];

                }


            }
            $query3="SELECT * FROM comment_on co WHERE co.c_eventID='$e_ID'";
            //Commments query
            $result2=mysqli_query($conn, $query3);
            $cmmt="";
            if(mysqli_num_rows($result2)>0){
                while ($row3= mysqli_fetch_assoc($result2)){

                    $c_uname=$row3['c_username'];
                    $c_time=$row3['c_timestamp'];
                    $c_content =$row3['c_content'];
                    $cmmt.= "$c_uname $c_content   $c_time <br> <br>" ;

                }
                // echo $cmmt;
            }













            //Need a query to establish

            ?>

            <div class="creatorProfile">

                <h4><?php echo $profile ?></h4>
                <div>
                    <?php
                    if($profile!=$username) {
                        echo "<a href='createNewMessage.php?user=$profile'>Message User</a>";
                    }
                    ?>
                </div>
            </div>
            <?php


            // create query to check if user has joined an event
            $query4="SELECT * FROM join_event WHERE j_username='$username' AND j_event='$e_ID'";
            $result4=mysqli_query($conn, $query4);


            //--Event details part




            if (mysqli_num_rows($result4) > 0) {
                echo "<div class='viewEventTable'>
        <form action='joinEvent.php' method='post'>
        <h1>$eventname</h1>
        <p style='color: #dddddd'>This event will take place on <font color='#00ced1'>$edate</font> </p>
        <p style='color: #dddddd'>Location: <font color='#00ced1'>$eventloc </font></p>
        <h3 style='color: #dddddd'>$eventdes</h3>
            
            <input type='hidden' name='eid' value='$e_ID' >
            <input type='hidden' name='spaces' value='$spaces'>
            
            <button type='submit' value='leaveEvent' name='leaveButton' class='btn'>Leave Event</button><br>
        </form>


    </div>";

            } else {
                if ($spaces > 0 && ($gender==0 || $gender==$genderID)) {
                    echo "<div class='viewEventTable'>
        <form action='joinEvent.php' method='post'>
        <h1>$eventname</h1>
        <p style='color: #dddddd'>This event will take place on <font color='#00ced1'>$edate</font> </p>
        <p style='color: #dddddd'>Location: <font color='#00ced1'>$eventloc </font></p>
        <h3 style='color: #dddddd'>$eventdes</h3>
            
            <input type='hidden' name='eid' value='$e_ID' >
            <input type='hidden' name='spaces' value='$spaces'>
            <label>There are <b style='color: red'>$spaces</b> spaces left in this event</label><br>
            <button type='submit' value='joinEvent' name='joinButton' class='btn'>Join Event</button><br>
        
        </form>


    </div>";
                }else{
                    echo "<div class='viewEventTable'>
        <form action='joinEvent.php' method='post'>
        <h1>$eventname</h1>
        <p style='color: #dddddd'>This event will take place on <font color='#00ced1'>$edate</font> </p>
        <p style='color: #dddddd'>Location: <font color='#00ced1'>$eventloc </font></p>
        <h3 style='color: #dddddd'>$eventdes</h3>

            <label>You are unable to join this event</label><br>
          
        
        </form>


    </div>";
                }
            }
            ?>

            <div class="attendeesList">
                <?php
                $username=$_SESSION['username'];
                $sql = "SELECT * FROM join_event WHERE j_event = '$e_ID'";
                $result=mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                if (mysqli_num_rows($result) > 0) {
                    echo "<p>'People attending event '</p>";
                    $userList="";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $profile=$row['j_username'];
                        $userList .="<a href='createNewMessage.php?user=".$profile."' class ='cat_links'>".$profile." <br> </a>";
                    }
                    echo $userList;
                } else {
                    echo "<p>No other person is attending this event</p>";
                }
                ?>

            </div>

            <!--Commments part   -->
            <div class="postreply">
                <form action="postreply.php" method="post">
                    <h3 style="color: #dddddd"> <?php echo $cmmt; ?></h3>
                    <p style="color: #f9f9f9">Leave A Comment</p>
                    <textarea name="reply_content" cols="75" rows="5"></textarea>
                    <br>
                    <input type="hidden" name="eid" value="<?php echo $e_ID; ?>">
                    <button type="submit" value="postcomment" name="commentButton" class="btn">Post Comment</button><br>
                </form>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright © Playmate 2019</span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="startbootstrap-sb-admin-gh-pages/vendor/jquery/jquery.min.js"></script>
        <script src="startbootstrap-sb-admin-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="startbootstrap-sb-admin-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="startbootstrap-sb-admin-gh-pages/vendor/chart.js/Chart.min.js"></script>
        <script src="startbootstrap-sb-admin-gh-pages/vendor/datatables/jquery.dataTables.js"></script>
        <script src="startbootstrap-sb-admin-gh-pages/vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="startbootstrap-sb-admin-gh-pages/js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="startbootstrap-sb-admin-gh-pages/js/demo/datatables-demo.js"></script>
        <script src="startbootstrap-sb-admin-gh-pages/js/demo/chart-area-demo.js"></script>

</body>

</html>
