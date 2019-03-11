<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Events</title>
    <--link rel="stylesheet" href="css/style.csstyle.css"-->
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

<hr />
<div id=content>
    <?php
    $cid = $_GET['id'];
    if (isset($_SESSION['id'])) {
        $logged = " | <a href='create_topic.php?cid=".$cid."'>Click Here to create an Event</a>";
    } else  {
        $logged = " | Please log in to create events.";
    }
    $sql= "SELECT id FROM categories WHERE id='".$cid."' LIMIT 1";

    $res = mysqli_query($sql) or die(mysqli_error());
    if (mysqli_num_rows($res) == 1) {
        $sql2 = "SELECT * FROM topics WHERE category_id='".$cid."' ORDER BY topic_reply_date DESC";
        $res2 = mysqli_query($sql2) or die(mysqli_error());
        if (mysqli_num_rows($res2) > 0) {
            $topics .="<table width='100%' style='border-collapse: collapse;'>";
            $topics .= "<tr><td colspan='3''><a href='HomePage.php'>Return to Home</a>".$logged."<hr/>></tr>td></tr>";
            $topics .= "<tr style='background-color: #dddddd;'><td> Topic Title</td><td width='65' align='center'>Replies</td><td width='65' align='center'>Views</td></tr>";
            $topic .= "<tr><td colspan='3'><hr /></td></tr>";
            while ($row = mysqli_fetch_assoc($res2)) {
                $tid = $row['id'];
                $title = $row['topic_title'];
                $views = $row['topic_views'];
                $date = $row ['topic_date'];
                $creator = $row['topic_creator'];
                $topics .= "<td><td><a href='view_topic.php?cid".$cid."&tid=".$tid."'>".$title."</a><br/><span class='post_info'>Poster by: ".$creator."on ".$date."</span> </td><td align='center'>0</td><td align='center'>".$views."</td></tr>";
                $topics .= "<tr><td colspan='3'><hr/></td></tr>";
            }
            $topics .= "</table>";


    } else {

            echo "<a href='HomePage.php'>Return to Home</a>";
            echo "<p> YOU are trying to view a Event category that does not exist yet.</p>";
        }}

    ?>
</div>

</body>
</html>