<!DOCTYPE html>
<html>
	<head>
		<title>San Joaquin Valley Town Hall | speakers and luncheons</title>
		<link rel="shortcut icon" href="favicon.ico">
		<meta charset="utf-8">
		<meta name="description" content="Test HTML5">
		<meta name="keywords" content="Test HTML5">
	</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" id="username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" id="password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"/></td>
		</tr>
	</table>
</form>
<a href="index.php">List member</a>
<br/>
<?php 
	if(isset($_POST['submit'])){
		require_once 'user.php';
		$name     = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = new User();
		// save user
		if($user->addNewUser($name, $username, $password)){
			echo "Add new user successfull";
		}else{
			echo "Add new user fail";
		}


	}
?>
</body>
</html>