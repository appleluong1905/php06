<?php include 'header.php';?>
	<h1>Input your information</h1>

	<form action="insert.php" method="post" enctype="multipart/form-data">

		<p>Name:  <input type="text" name="name"></p>
		<p>Email: <input type="email" name="email"></p>
		<p>Username: <input type="text" name="username"></p>
		<p>Password: <input type="password" name="password"></p>
		<p>Birthday:  <input type="date" name="birthday"></p>
		<p>Phone:  <input type="text" name="phone"></p>

		<p>Avatar <input type="file" name="avatar"></p>

		<p><input type="submit" name="submit" value="Submit"></p>
	</form>
<?php include 'footer.php';?>