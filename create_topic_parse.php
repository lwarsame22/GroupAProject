<?php
session_start();
if ($_SESSION['uid'] == "") {
    header("Location: HomePage.php");
    exit();
}
if (isset($_POST['topic_submit'])) {
    if (($_POST['topic_title'] == "") && ($_POST['topic_content'] == "")) {
        echo "You did not fill in both fields. Please Return to the previous page.";
        exit();
    } else {
        include_once("DBConnect.php");
        $cid = $_POST['cid'];
        $title = $_POST['topic_title'];
        $content = $_POST['topic_content'];
        $creator = $_SESSION['uid'];
        $sql = "INSERT INTO topics (category_id, topic_title, topic_creator, topic_date, topic_reply_date) VALUES ('" . $cid . "', '" . $title . "', '" . $creator . "', now(),now())";
        $res = mysqli_query($sql) or die(mysqli_error());
        $new_topic_id = mysqli_insert_id();
        $sql2 = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUE ('" . $cid . "', '" . $new_topic_id . "','" . $creator . "','" . $content . "', now())";
        $res2 = mysqli_query($sql2) or die(mysqli_error());
        $sql3 = "UPDATE categories SET last_post)date=now(), last_user_posted='" . $creatpr . "' WHERE id='" . $cid . "' LIMIT 1";
        $res3 = mysqli_query($sql3) or die(mysqli_error());
        if (($res) && ($res) && ($res)) {
            header("Location: view_topic.php?cid=".$cid."&tid=".$new_topic_id);
        }
    }
}

?>

<?php
session_start();
if (isset($_POST['eventButton'])) {
    if (($_POST['e_location'] == "") && ($_POST['e_date'] == "")) {
        echo "You did not fill in important fields. Please Return to the previous page.";
        exit();
    } else {
        include_once("DBConnect.php");
        $username=$_SESSION['username'];
        $title = $_POST['title'];
        $dateevent = $_POST['date'];
        $description=$_POST['description'];
        $location=$_POST['location'];
        $sportname=$_POST['sportname']; // is this the id or the name of the sport
        //$creator = $_SESSION['uid'];
        $query = "INSERT INTO events(e_username, e_title, e_description, e_location, e_sportID) <!-- this e_sportID and $sportname could be the issue -->
        VALUES ('$username','$title','$description','$location','$sportname')";

        $res = mysqli_query($conn, $query);
        $new_event_id = mysqli_insert_id();
        $sql2 = "INSERT INTO posts (e_sportID, e_ID, e_username, e_title, post_date) VALUE ('$sportname' ,'$new_event_id','$username', '$title', now())";
        $res2 = mysqli_query($conn, $sql2);

        if (($res) && ($res2) {
            header("Location: viewEvent.php?sportID=".$sportname."&event id=".$new_event_id);
        }
    }
}

?>
