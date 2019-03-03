<html>
<head>
    <title><?php echo $firstname; ?>  <php echo $lastname; ?>'s profile</title>
</head>
<body>
<?php
include_once('DBConnect.php');
//check for form submission
if (isset($_GET['1810356'])){
    $username =$_GET['1810356'];
    mysql_connect() or die("");
    mysql_select_db("")or die("CSDM-WEBDEV");
    $userquery =mysql_query("SELECT * FROM users where username'$username'";
        die("that username could not be found!")
}
while(mysql_fetch_array($userquery, MYSQL_ASSOC)){
        $firstname = $row['firstname'];
        $lastname =$row['lastname'];
        $email = $row['email'];
        $dbusername =$row['username'];
        $activated =$row['activated'];
        $access =$row['access'];
        if ($username != db1810356_qvan){
            die ("There has been a fatal error. Please try again.")

        }
        if (activated ==0){
            $active ="The account has not been activated."
        } else {
            $active ="The account has been activated."
        }
        if ($active ==0){
            $admin = "This user is not an administartor.";
            } else{
            $admin ="This user is an administrator.";
        }
?>
    <h2><?php echo $firstname; ?> <?php echo $lastname; ?>s profile </h2><br />
<table>
    <tr><td>Firstname:</td><td><?php echo $firstname; ?></td></tr>
    <tr><td>Lastname:</td><td><?php echo $Lastname; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $Email; ?></td></tr>
    <tr><td>Username:</td><td><?php echo $Username; ?></td></tr>
    <tr><td>Activated:</td><td><?php echo $Active; ?></td></tr>
    <tr><td>Access:</td><td><?php echo $Access; ?></td></tr>
</table>

<?php
}}
else die("you need to specify a username!");
?>

</body>
</html>