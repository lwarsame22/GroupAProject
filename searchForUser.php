<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        main{
            background: url("images/updateprofile.jpg");
        }
    </style>
    <style>
        .viewEventTable{
            color: white;
            font-size: 20px;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color: turquoise;
        }
        th{
            text-align: center;
        }
        table, td{
            text-align: left;
        }
        table, th, td {
            border: 1px solid red;
            border-collapse: collapse;
        }

    </style>
</head>
<body>
<?php

require "HeaderLoggedin.php";

?>
<main>
    <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input name="keyword" size="20">
        <button type="submit">Search</button>
    </form>

    <?php

            if(isset($_GET["keyword"])){
                $keyword = $_GET["keyword"];
            }else{
                $keyword="";
            }


            $result = "";

            // if(isset($keyword)) {
            // if keyword is set and is the name of a sport. search bar browses for events with sport name matching the keyword

            //$row = mysqli_fetch_assoc($result);
            $query2 = "SELECT * FROM user_profile WHERE u_username LIKE '%" . $keyword . "%' ";// query needs to change

            $result = mysqli_query($conn, $query2);
            $userList="";
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){

                    $profile=$row['u_username'];
                    $location=$row['city'];
                    $userList .="<a href='createNewMessage.php?user=".$profile."' class ='cat_links'>".$profile." -<br> <font size=''-3', color='#778899'>".$location."><br></a>";
                }
                echo $userList;
            } else{
                echo "<p style='color: #f9f9f9' class='searchresult'>There are no users associated with $keyword </p>";
            }

?>

</main>
<!--Main Ends -->
<!-- Footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>
