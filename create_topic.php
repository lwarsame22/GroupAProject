<?php session_start(); ?>
<?php
if ((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")) {
    header ("Location: HomePage.php");
    exit();
}
$cid = $_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Events</title>
    <link rel="stylesheet" href="css/style.csstyle.css">
</head>
<body>
<?php
include_once('DBconnect.php');
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];


    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}
?>
<div id="wrapper">
    <h2>view topics</h2>
    <?php
    echo "<p> You are logged in as ".$_SESSION['username']." &bull; <a href='logout.php'>Logout</a>"
    ?>
    <hr />
    <div id="content">
        <br action="create_topic_parse.php" method="post">
            <p>Topic Title</p>
            <input type="text" name="topic_title" size="98" maxlength="150" />
            <p>Topic Content</p>
            <textarea name="topic_content" rows="5" cols="75"></textarea>
            <br></br>
        <input type="hidden" name="cid" value="<?php echo $cid; ?>"/>
        <input type="submit" name="topic_submit" value="Create Your Topic" />
        </form>
    </div>
</div>

</body>
</html>