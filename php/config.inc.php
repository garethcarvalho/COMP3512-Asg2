<?php
define('DBHOST', 'localhost');
define('DBNAME', 'stocks');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING', 'sqlite:./database/sqlite/stocks.db');
// define('DBCONNSTRING',"mysql:host=" . DBHOST . ";dbname=" . DBNAME);
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
