<!DOCTYPE html>
<html>
<head>
    <title>Stock Browser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Our style sheet  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- Top Navigation Menu
        <div class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="list.php">Companies</a>
        </div> -->
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

    <div id="main">
        <h1>Companies</h1>
    

    <div style="background-color:#ffffff;padding:10px;text-align:center;">
        <form id="filter-form" method="post">
            <label>Filter:</label>
            <input type="text" name="symbol" id="symbol" placeholder="Enter company symbol.." required>
            <button type="submit">Go</button><button id="btn-clear">Clear</button>
        </form>
    </div>

    <!-- <div id="list-container" style="overflow: none;"> -->
    <!-- style="height: 700px; overflow-y: scroll" -->
        <div id="zoom-div"><img id="zoom-image" src="./img/logos/A.svg"></div>
        <div id="loading" style="text-align:center;width:100px;height:100px;"><img style="width:80px;height: 80px;object-fit:cover;text-align:center;" src="img/loading.gif"></div>
        <table id="list-table"  style="height: 720px; overflow-y: scroll; margin: auto;">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Symbol</th>
                    <th colspan="2">Name</th>
                </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
    <!-- </div> -->
    </div>
    <script src="js/list.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
