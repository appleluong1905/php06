<?php
/** setting **/
define('BASEURL' , 'http://training.dev/php06/php/php/sessions7/');
define('BASEPATH', dirname(__FILE__) . '/');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'root', 'none') or die('Could not connect to Server');
mysql_select_db('shop_php06') or die('Could not connect to Database');
mysql_set_charset('utf-8');