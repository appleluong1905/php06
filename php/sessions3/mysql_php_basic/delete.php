<?php 
include 'connect.php';
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM users WHERE id =$id";

if ($conn->query($sql) === TRUE) {

    echo "Record deleted successfully";
    echo "<a href='select.php'>Go to list users</a>";
    
} else {

    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>