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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
                <span>Search</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="searchByLocation.php">Search By Location</a>
                <a class="dropdown-item" href="searchBySport.php">Search By Sport</a>
                <a class="dropdown-item" href="searchForUser.php">SearchByUser</a>
            </div>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Profile</a>
                </li>
                <li class="breadcrumb-item active">View Profile</li>
            </ol>

            <!-- Icon Cards-->
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">My Profile</h1>
                    <br>

                    <?php

                    $query2 = "SELECT * FROM user_profile u, gender g WHERE g.g_ID=u.genderID AND u_username='$username'";
                    $query3 = "SELECT img_name FROM images WHERE u_username='$username'";
                    $result3=mysqli_query($conn, $query3);
                    $result=mysqli_query($conn, $query2);
                    if(mysqli_num_rows($result)==1){
                        while ($row= mysqli_fetch_assoc($result)){

                            $username=$row['u_username'];
                            $email=$row['u_mail'];
                            $firstname=$row['u_name'];
                            $lastname=$row['u_lastname'];

                            $gender=$row['g_option'];
                            $address=$row['address'];
                            $city=$row['city'];
                            $country=$row['country'];
                            $birth=$row['datebirth'];
                            $mobile=$row['mobilenum'];
                            $image =$row['u_img'];

                            $upload = "UploadImg/".$image;
                        }
                        echo" <div class='viewProfileTable''>
    <img src='$upload'' height='100px' width='100 px'>
<table>
    <tr><td >Username:</td><td class='label'>$username</td></tr>
    <tr><td>Firstname:</td><td  class='label'>$firstname</td></tr>
    <tr><td >Lastname:</td><td class='label'>$lastname</td></tr>
    <tr><td>Email:</td><td class='label'>$email</td></tr>
    <tr><td>Gender:</td><td class='label'>$gender</td></tr>
    <tr><td>Address:</td><td class='label'>$address</td></tr>
    <tr><td>City:</td><td class='label'>$city</td></tr>
    <tr><td>Country:</td><td class='label'>$country</td></tr>
    <tr><td>Birth:</td><td class='label'>$birth</td></tr>
    <tr><td>Mobile:</td><td class='label'>$mobile</td></tr>
    </table>
    </div> ";
                    }
                    ?>



                    <button class="btn-success"><a style="color: white" href="profile.php">Edit Profile</a></button>




                </div>



            </div>


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
