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
//include_once('DBconnect.php');
//session_start();
//if ( isset($_SESSION['username'] )){

//    $username=$_SESSION['username'];
    require "HeaderLoggedin.php";
//}
//else {
//    header('Location: HomePage.php');
//}
?>
<main>
    <form method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input name="keyword" size="20">
        <button type="submit">Search</button>
    </form>


    <?php


    $query2="SELECT * FROM events, sports WHERE events.e_sportID=sports.s_ID ORDER BY events.e_date ASC ";
    $keyword=$_GET['keyword'];

       // if(isset($keyword)) {
            // if keyword is set and is the name of a sport. search bar browses for events with sport name matching the keyword
            $query2 = $query2 . "where sports.s_name LIKE '%" . $keyword . "%'";
            $result = mysqli_query($conn, $query2);
            //$row = mysqli_fetch_assoc($result);


        print "<table>\n";
        print "<tr>\n";
        print "<th>Event ID</th><th>Event Creator</th><th>Event title</th><th>Event Description</th><th>Event Location</th><th>Event Date</th><th>Event Sport</th>\n";
        print "</tr>\n";
        if(mysqli_num_rows($result)==0){
            echo "<p> No events found matching your search.</p>\n";
        } else {
            foreach($result as $row){

                print "<tr>\n";

print "<td>".$row["e_ID"]."</td>\n";

//use column name as index into row to get value

print "<td>".$row["e_username"]."</td>\n";

print "<td>".$row["e_title"]."</td>\n";

print "<td>".$row["e_description"]."</td>\n";

print "<td>".$row["e_location"]."</td>\n";

print "<td>".$row["e_date"]."</td>\n";
print "<td>".$row["s_name"]."</td>\n";
print "</tr>\n";
//finish the row
            }

print "</table>\n";
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
