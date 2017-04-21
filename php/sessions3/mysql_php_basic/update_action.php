<?php  
include 'connect.php';

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$birthday = date('Y-m-d',strtotime($birthday));

$phone = $_POST['phone'];

//insert data
$sql = "UPDATE users SET name = '$name', email = '$email', birthday = '$birthday', phone = '$phone' WHERE id = $id";

if ($conn->query($sql) === TRUE) {

    echo "Users update successfully.";
    echo "<a href='select.php'>Go to list users</a>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>