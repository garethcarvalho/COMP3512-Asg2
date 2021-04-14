<?php
session_start();
if (!isset($_SESSION['favourites'])) {
    $_SESSION['favourites'] = [];
}

$fav = $_SESSION['favourites'];
$fav[] = $_GET['symbol'];
$_SESSION['favourites'] = $fav;

header("Location:" . $_SERVER["HTTP_REFERER"]); 
?>