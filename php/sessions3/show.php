<?php 
    include 'connect.php'; 
	$id = $_GET['id'];
?>
<?php 
$sql = "SELECT * FROM user LIMIT 100 OFFSET $id";
$result = $conn->query($sql);
?>
<?php if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["email"].' ';
	}
 }else{
	 	echo "0 results";
		  }
			$conn->close();
	?>