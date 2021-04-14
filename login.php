<?php
    session_start();
    require_once('./php/config.inc.php');
    // require_once('action.php');
    if(isset($_SESSION[("is_user_logged_in")])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>index</title>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="stylesheet" href="css/index.css"/>
        <script src="js/index.js"></script> 
    </head>
    <body>
        <header>
            <a href="./index.php"><img src="./img/logos/logo.png" id="logo"></a>
            <span id="hamburger-button"></span>
        </header>
        <!--dropdown menu bar-->
        <div id="hamburger-menu" style="display:none;">
            <li><a href="index.php">Home</a></li>
            <li><a href="list.php">Companies</a></li>
            <li><a href="favourites.php">Favourites</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="about.php">Credits</a></li>
        </div>
        
        <main>
        </br></br></br></br></br></br></br>
        <!-- email and password field for logging into your account -->
        <!-- taken from w3schools https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_password-->
        <form action="action.php" method="POST" style="background-color:lightblue;text-align:left; border-style: solid; padding: 35px; margin-left:50px; margin-right:50px;">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="pwd">Password:</label>
            <input type="password" id="password" name="password" minlength="8"><br><br>
            <input type="submit">
        </form>

        </main>
    </body>
</html>

