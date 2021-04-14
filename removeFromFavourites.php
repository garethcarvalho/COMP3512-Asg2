<?php
session_start();
$fav = [];
if (isset($_SESSION["favourites"])) {
    $fav = $_SESSION["favourites"];

    if (isset($_GET["all"]) && $_GET["all"] == "y") {
        removeAllFavourites();
    }
    if (isset($_GET["symbol"])) {
        removeFromFavourites($_GET["symbol"]);
    }

    $_SESSION["favourites"] = $fav;

    header("Location:" . $_SERVER["HTTP_REFERER"]); 

}

function removeFromFavourites($symbol) {
    global $fav;
    $arr = [];
    foreach ($fav as $company) {
        if ($company != $symbol) {
            $arr[] = $company;
        }
    }
    $fav = $arr;
}

function removeAllFavourites() {
    global $fav;
    $fav = [];
}
?>