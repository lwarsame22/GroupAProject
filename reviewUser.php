<?php
session_start();
include_once('DBConnect.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
}
?>
<main>
    <?php

    $userReview=$_GET['user'];
    $query="SELECT * FROM hasrated WHERE receivingReview='$userReview' AND writeReview='$username'";
    $result=mysqli_query($conn, $query);
    if($result && mysqli_num_rows($result)>0){
        echo "you have already reviewed this user";
    }else{
        $find_rating="SELECT * FROM ratings WHERE username='$userReview'";
        $result2=mysqli_query($conn, $find_rating);
        while($row=mysqli_fetch_assoc($result2)){
            $current_rating=$row['rating'];
            $hits=$row['hits'];
            if($hits>0) {
                $rank = $current_rating / $hits;
            }else {$rank=0;}
            echo " <form action='rate.php' method='POST'>
                    $userReview: <select name='rating'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    <input type='hidden' value='$userReview' name='user'>
                    <input type='submit' value='Rate!'>Current Rating:
                $rank/5; 
                </form> ";
        }
    }
    ?>


    </article>
</main>
