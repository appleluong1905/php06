<?php 
include 'header.php';
include 'connect.php';
//data input

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$birthday = date('Y-m-d',strtotime($birthday));
$avatarName = $_FILES['avatar']['name'];
$avatarName = uniqid().'.'.pathinfo($avatarName, PATHINFO_EXTENSION);
$phone = $_POST['phone'];

//insert data
$sql = "INSERT INTO users (name, username, password, avatar, email,birthday, phone)
VALUES ('$name', '$username', '$password', '$avatarName', '$email', '$birthday', '$phone')";


if ($conn->query($sql) === TRUE) {
	//upload files

	move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatarName);

    echo "New users created successfully.";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include 'footer.php';
?>