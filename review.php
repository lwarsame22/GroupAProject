<?php
session_start();
include_once('DBConnect.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
}
?>
<main>
        <?php
        $eventsquery="SELECT * FROM events e, join_event j WHERE e.e_ID=j.j_event AND j.j_username='$username' AND e.e_date<=CURDATE()";
        $res=mysqli_query($conn, $eventsquery);
        $events="";

        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $userReview = $row['e_username'];
            $e_title = $row['e_title'];
            $location = $row['e_location'];
            $e_date = $row['e_date'];
            $events .="<a href='reviewUser.php?user=".$userReview."' class = 'cat_links'>".$e_title." -<br> <font size='-3', color='#778899'>".$location."-</font><font class='edate' >.$e_date</font></a>";
            echo $events;
        } else {
            echo "<p>You have not been to an Event yet</p>";
        }


        ?>


    </article>
</main>
