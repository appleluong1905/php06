<?php

require_once 'database.php';

class User
{
	public $con;

	public function __construct()
	{
		$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();	exit();
		}
	}
	
	public function getAllMembers() 
	{
		$query = "SELECT * FROM users";
		$results = mysqli_query($this->con,$query);
		$result = array();
		while($row = mysqli_fetch_array($results)) {
			$result[] = $row;
		}
		return $result;
	}

	public function addNewUser($name, $username, $password)
	{

		$query = "INSERT INTO users(name, username, password)
		VALUE ('$name', '$username', '$password')";
		return mysqli_query($this->con, $query);
	}
}  
?>
