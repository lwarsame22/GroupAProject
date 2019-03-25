<?php

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
            $query2 = "SELECT * FROM events, sports WHERE events.e_sportID=sports.s_ID AND sports.s_name LIKE '%" . $keyword . "%' AND e_date >= CURDATE() ORDER BY events.e_date ASC ";

            $result = mysqli_query($conn, $query2);
            $row = mysqli_fetch_assoc($result);

?>


             <div class="viewEventTable">
        <table>
            <tr><th>EventID</th><th>Event Creator</th><th>Event title</th><th>Event Description</th><th>Event Location</th><th>Event Date</th><th>Event Sport</th></tr>
<?php do{ ?>
    <tr><td><?php echo $row['']; ?></td><td><?php echo $row['']; ?></td><td><?php echo $row['']; ?></td>
        <td><?php echo $row['']; ?></td><td><?php echo $row['']; ?></td><td><?php echo $row['e_date']; ?></td>
        <td><?php echo $row['']; ?></td>
        <?php }while ($row= mysqli_fetch_assoc($result)) ?>
        </table>
        </div>


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
