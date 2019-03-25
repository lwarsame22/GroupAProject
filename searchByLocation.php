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
            $query2 = "SELECT * FROM events, sports WHERE events.e_sportID=sports.s_ID AND events.e_location LIKE '%" . $keyword . "%' AND e_date >= CURDATE() ORDER BY events.e_date ASC ";

            $result = mysqli_query($conn, $query2);
            
    $events="";
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $e_ID = $row['e_ID'];
    $e_title = $row['e_title'];
    $location = $row['e_location'];
    $e_date = $row['e_date'];
    $events .="<a href='viewEventdetails.php?eid=".$e_ID."' class = 'cat_links'>".$e_title." -<br> <font size='-3', color='#778899'>".$location."-</font><font class='edate' >.$e_date</font></a>";
    }
    echo $events;
    } else {
    echo "<p style='color: #f9f9f9' class='searchresult'>There are no event available in associated with $keyword ...</p>";
    }


    ?>




</main>
<!--Main Ends -->
<!--footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>
