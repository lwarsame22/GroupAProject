
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Events</title>
    <link rel="stylesheet" href="css/style.css">
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



<div
        id=content>
    <?php
    $sql = "SELECT * FROM categories ORDER BY category_title ASC";
    $res = mysqli_query($conn, $sql);
    $categories="";
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['category_title'];
            $description = $row['category_description'];
            $categories .="<a href='viewCatergory.php?cid=".$id."' class = 'cat_links'>".$title." - <font size='-1'>".$description."</font></a>";
        }
        echo $categories;
    } else {
        echo "<p>There are no event available yet...</p>";
    }


    ?>

</body>
</html>