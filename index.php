<?php
    //starting login session
    session_start();
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
            <a href="list.php" style="width: 100%;"><li>Companies</li></a>
            <li><a href="favourites.php">Favourites</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="about.php">Credits</a></li>
        </div>

        <div class="container" id="main-container">
            <div id="welcome-banner" class="banner">
                <div <?php if (isset($_SESSION["is_user_logged_in"])) {
                    echo "style='margin: 150px 0px'";
                } else {
                    echo "style='margin: 250px 0px'";
                }?>>
                    <h2>Welcome!</h3>
                    <p class="large" style="margin: 10px;">Want to keep track of your favourite companies?</p>
                    <!--allows links for the different pages to be visible in the form of buttons-->
                    <?php
                        if(isset($_SESSION["is_user_logged_in"])){
                            echo "<a href='favourites.php' class='button-label'>Favourites</a>";
                            echo "<p class='small'>All your favorite companies in one place</p>";
                            echo "</br>";
                            echo "<a href= 'profile.php' class= 'button-label'>Profile</a>";
                            echo "<p class='small'>Coming soon!</p>";
                            echo "</br>";
                            echo "<a href= 'portfolio.php' class= 'button-label'>Portfolio</a>";
                            echo "<p class='small'>Check out your companies and their profiles</p>";
                            echo "</br>";
                            echo "<a href= 'logout.php' class= 'button-label'>Logout</a>";
                        }
                        else {
                            // echo "<a href='registration.php' class='button-label'>Register</a>";
                            // echo "<p class='small'>Already have an account? Log in!</p>";
                            echo "</br>";
                            echo "<a href= 'login.php' class= 'button-label'>Login</a>"; 
                        }
                    ?>
                </div>
            </div>
            <div id="companies-banner" class="container">
                <a href="./list.php" class="button-label banner-button"></a>
                <div>
                    <h3>Company Search</h3>
                    <p>Investigate companies' stock information!</p>
                </div>
            </div>
            <div id="about-banner" class="container">
                <div>
                    <h3>About Us!</h3>
                    <p>To learn more about how the project was created, go to about us!</p>
                </div>
                <a href="about.php" class="button-label banner-button"></a>
            </div>

        </div>
    </body>
</html>

