<html>
<head>
    <title>profile</title>
</head>
<body>


//check for form submission


<table>
    <tr><td>Firstname:</td><td><?php echo $firstname; ?></td></tr>
    <tr><td>Lastname:</td><td><?php echo $Lastname; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $Email; ?></td></tr>
    <tr><td>Username:</td><td><?php echo $Username; ?></td></tr>
    <tr><td>Activated:</td><td><?php echo $Active; ?></td></tr>
    <tr><td>Access:</td><td><?php echo $Access; ?></td></tr>
</table>



</body>
</html>



//ViewProfile shaun
<?php

$query2 = "SELECT * FROM user_profile WHERE u_username='$username'";
$result=mysqli_query($conn, $query2);
if(mysqli_num_rows($result)==1){
    while ($row= mysqli_fetch_assoc($result)){
        echo "Hello ".$row['u_username'];
        echo $row['u_name'] ." ".$row['u_lastname'] ." " .$row['u_mail'] ." " . $row['gender'] ." " .$row['address'] ." " .$row['city'] ." " .$row['country'] ." " .$row['datebirth'] ." " .$row['mobilenum'];
    }
}
?>



//Dropdown menu

<?php
$query2 = "SELECT s_ID FROM sports";
$result=mysqli_query($conn, $query2);
for($x=0; $x<mysqli_num_rows($result); $x++){
    while ($row= mysqli_fetch_assoc($result)){
        echo "<option value=".$row['s_ID']." name=".$row['s_ID'].">" . $row['s_ID'] . "</option>";
    }
}
?>


// shaun view events details
<?php do{ ?>
    <tr><td><?php echo $row['e_ID']; ?></td><td><?php echo $row['e_username']; ?></td><td><?php echo $row['e_title']; ?></td>
    <td><?php echo $row['e_description']; ?></td><td><?php echo $row['e_location']; ?></td><td><?php echo $row['e_date']; ?></td>
    <td><?php echo $row['s_name']; ?></td>
<?php }while ($row= mysqli_fetch_assoc($result)) ?>