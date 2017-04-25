<html>
<title> </title>
<body>
<form METHOD="POST" ACTION="<?php echo $_SERVER['PHP_SELF'];?>?controller=login">
<table>

<tr><td>Username:</td>
    <td><input type="text" name="email"><td>
</tr>

<tr><td>Password:</td>
    <td><input type="text" name="pass"><td>
</tr>

<tr><td><input type="submit"  name="submit" value="submit"></td>
    <td><a href="dangky.php">Create an account</a><td>
</tr>

<tr>
			<td colspan="2"><?php if (isset($_POST["submit"])) echo $message;?></td>
		</tr>

</table>
</form>
</body>
</html>