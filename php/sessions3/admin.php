<?php
   ob_start();
   session_start();
?>
<html lang = "en">
   
   <head>
      <title>San Joaquin Valley Town Hall | speakers and luncheons</title>
      <link rel="shortcut icon" href="favicon.ico">
      <meta charset="utf-8">
      <meta name="description" content="Test HTML5">
      <meta name="keywords" content="Test HTML5">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
	
   <body>
      <?php 
         if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            echo "Hi $username <br/>'";
            echo 'You was login<br/>';
            echo '<a href = "logout.php">Logout</a>';
         }else{
            header("Location: logout.php");
         }
      ?>
   </body>
</html>