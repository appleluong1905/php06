<?php
require_once 'newconnect.php';
class Report_Model 
{
	public $con;
	public function  __construct() 
	{
		$this->con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();	exit();
		}
	}
	public function getListReports() 
	{
		$query="SELECT r.id,r.userId,r.title,r.content,u.email
				FROM report AS r, user AS u
				WHERE r.userId=u.id";
		$result = mysqli_query($this->con,$query);
		return $result;
	}
	public function getReport($id) 
	{
		$query="SELECT * FROM report where id='$id'";
		$result = mysqli_query($this->con,$query);
		return $result;
	} 
	function addReport($title,$content)
	{
		$title=mysql_real_escape_string(trim($title));
		$content=mysql_real_escape_string(trim($content));
		session_start();
		if(isset($_SESSION['id'])) {
			$userId =	$_SESSION['id'];
		} else {
			$userId = 0;
		}
		$userId=mysql_real_escape_string(trim($userId));
		$query="INSERT INTO report(title,content,userId) VALUE ('$title','$content', '$userId')";
		mysqli_query($this->con,$query);
		return $results;
	}
}
?>
