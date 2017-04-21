<?php 

	include 'header.php';
	include 'connect.php'; 
	//data update
	$id = $_GET['id'];
	//get data
	$sql = "SELECT * FROM users WHERE id = $id";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$id       = $row["id"];
		$name     = $row["name"];
		$email    = $row["email"];
		$birthday = $row["birthday"];
		$phone    = $row["phone"];
	}
?>
<form action="update_action.php?id=<?php echo $id;?>" method="post">
	<p>Name:  <input type="text" name="name" value="<?php echo $name;?>"></p>
	<p>Email: <input type="email" name="email" value="<?php echo $email;?>"></p>
	<p>Birthday:  <input type="date" name="birthday" value="<?php echo $birthday;?>"></p>
	<p>Phone:  <input type="text" name="phone" value="<?php echo $phone;?>"></p>
	<p><input type="submit" name="submit" value="Edit"></p>
</form>
<?php
	$conn->close();
	include 'footer.php';
?>