<?php
@ob_start();
@session_start();

include 'config/config.php';
include 'components/functions.php';
include 'frontend/models/model.php';
include 'frontend/models/cart.php';

//xử lý request từ trình duyệt và gọi controller / action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'product';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'frontend/controllers/'.$controller.'/'.$action.'.php';

if (file_exists($file)) {
    require($file);
} else {
    show_404();
}

mysql_close($db);
@ob_end_flush();
