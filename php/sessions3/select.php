<?php include 'header.php';?>
<?php include 'connect.php'; ?>
<?php 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
	<h1>List user information</h1>
	<a href='example1.php'>Add users</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Avatar</th>
				<th>Email</th>
				<th>Birthday</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$avatar = $row["avatar"];
				echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>";
					echo "<img src='uploads/$avatar' width=200px height = 200px>";
					echo "</td>";
					echo "<td>".$row["email"]."</td>";
					echo "<td>".$row["birthday"]."</td>";
					echo "<td>".$row["phone"]."</td>";
					echo "<td><a href='update.php?id=$id'>Edit</a>
					|
					<a href='delete.php?id=$id'>Delete</a></td>";
				echo "</tr>";
			}
		 }else{
			 	echo "0 results";
	 		  }
	 			$conn->close();
	 	?>
		</tbody>
	</table>
<?php include 'footer.php';?>