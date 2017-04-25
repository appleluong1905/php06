<?php

//DATABASE SETTING
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','none');
define('DB_NAME','php06');

$connect=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect database. <br>'.mysql_error());
mysql_select_db(DB_NAME, $connect) or die('Could not select database.'.mysql_error());

//$connect= mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD) or die(" could not connect database");
//mysql_select_db(DB_NAME, $connect ) or die (' could not select database.'.mysql_error());
?>