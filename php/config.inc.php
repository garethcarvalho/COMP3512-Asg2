<?php
define('DBHOST', '127.0.0.1');
define('DBNAME', 'stocks');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING',"mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4;");
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
