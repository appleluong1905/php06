<?php

require_once 'newconnect.php';
class User_Model 
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
	
	public function checkUser($email, $password) 
	{ 
	/*
		require_once 'models/connect.php';
		$query="SELECT * FROM info where email='$email' AND pass='$password'";
		$result = mysqli_query($con,$query);
		var_dump($result); exit;
		return $result;
	*/
		require_once 'models/connect2.php';

		$result = mysql_query("SELECT * FROM user where email='$email' AND pass='$password'", $link);
		$num_rows = mysql_num_rows($result);
		return $num_rows;
	} 
	
	public function getStatus($email) 
	{
		require_once 'models/connect.php';
		$result = mysql_query("SELECT status FROM user where email='$email'");
		//$num_rows = mysql_num_rows($result);
		return $result;
	}
	
	public function getId($email) 
	{
		//require_once 'models/connect.php';
		//$result = mysql_query("SELECT id FROM user where email='$email'");
		$query = "SELECT * FROM user where email='$email'";
		$results = mysqli_query($this->con,$query);
		while($row = mysqli_fetch_array($results)) {
			$result = $row['id'];
		}
		return $result;
	}
	
	public function getIdpriority($email) 
	{ 
		require_once '../models/connect.php';
		$result = mysql_query("SELECT priority FROM user WHERE email='$email'");
		//var_dump($result);
		//$num_rows = mysql_num_rows($result);
		return $result;
	}
	
	public function getListRegisters() 
	{
		require_once 'models/connect.php';
		$query="SELECT * FROM user";
		//$result=mysql_query($query) or die("Get list.".mysql_error());
		$result = mysqli_query($con,$query);
		//$num=mysql_num_rows($result);
		//var_dump($result); exit;
		return $result;
	} 
	public function getRegister($id) 
	{ 
		require_once 'models/connect.php';
		$query="SELECT * FROM user where id='$id'";
		$result = mysqli_query($con,$query);
		return $result;
	} 
	static function checkEmail($email)
	{
		$email=mysql_real_escape_string(trim($email));
		$query="SELECT * FROM user WHERE email='$email'";
		$result=mysql_query($query) or die("check email.".mysql_error());
		$num=mysql_num_rows($result);
		return $num;
	}
	static function addNewUser( $f_name,$l_name,$email,$pass)
	{
		require_once 'models/connect.php';
		$f_name=mysql_real_escape_string(trim($f_name));
		$l_name=mysql_real_escape_string(trim($l_name));
		$email=mysql_real_escape_string(trim($email));
		$pass=mysql_real_escape_string(trim($pass));
		$query="INSERT INTO user(f_name,l_name,email,pass)
		VALUE ('$f_name','$l_name', '$email','$pass')";
		//$results=mysql_query($query) or die("addNewUser :".mysql_error());
		mysqli_query($con,$query);
		return $results;
	}
	
	function insert($title,$content)
	{	require_once '../models/connect.php';
		$sql = "INSERT INTO report (id,title,content,status) VALUES ('','$title','$content',0)";
		//var_dump($sql);
		$rs = mysql_query($sql);
		if ($rs) return true;
		return false;
	}
}  
?>
