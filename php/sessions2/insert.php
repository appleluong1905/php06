<?php 
include 'connect.php';
//data input
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$birthday = date('Y-m-d',strtotime($birthday));

$phone = $_POST['phone'];
//insert data
$sql = "INSERT INTO users (name, email,birthday, phone)
VALUES ('$name','$email','$birthday','$phone')";

if ($conn->query($sql) === TRUE) {

    echo "New users created successfully.";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>