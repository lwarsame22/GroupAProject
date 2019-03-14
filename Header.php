<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        a{
            text-decoration: none;
            color: white;
        }
        .control{
            display: flex;
        }

        ::placeholder{
            color: black;
        }
        form{
            position: absolute;
            right: 5px;
        }
        input{
            font-size: 15px;
        }
    </style>
</head>
<body>


<header class="control"> <!-- class="control " provides the class name for styling the header and footer themes of the webpages, giving the pages a uniform look --> 

    <div class="left"> <!--<section class="left" aligns setion content to the left side of the header -->
        <h2>Playmate</h2>
    </div>

    <div class="right"> <!-- <section class="right" aligns setion content to the right side of the header -->
        <form id = "login"  method="post" action="login.php">
            
            <form class="login">
            <input type="text" placeholder="Username" name="username" class="inputtxt">
            <input type="password" placeholder="Password" name ="password" class="inputtxt">
                <button type="submit" value="Login" name="loginButton" class="btn">Login</button><br>
            <input type="checkbox">Keep me logged in
            <a href="#">Forgotten Password</a>
                
        </form>
        </form>
    </div>
</header>
      
</body>
</html>
