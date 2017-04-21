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
      
      <h2>Login form</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == '123456') {

                  $_SESSION['username'] = 'admin';

                  header("Location: admin.php");

               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> 
      
      <div class = "container">
         <form class = "form-signin" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" name = "username" placeholder = "admin" required autofocus></br>
            <input type = "password" class = "form-control" name = "password" placeholder = "123456" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>
         </form>
      </div>   
   </body>
</html>