<?php
session_start();
include_once('DBConnect.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Play-Mate</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/bootstrap/examples/jumbotron/jumbotron.css" rel="stylesheet">


</head>

<body>
<header>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Play-Mate</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" id = "login"  method="post" action="login.php">
                <div class="form-group">
                    <input type="text" placeholder="Username" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Sign in</button>
                <input type="checkbox"> Keep me logged in
            </>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
</header>


</body>
</html>
