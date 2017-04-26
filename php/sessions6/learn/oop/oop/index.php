<?php
if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'list';

$file = $action.'.php';

if (file_exists($file)) {
    require($file);
} else {
    require('error404.php');
}