<?php
require_once 'models/user_model.php';
class Login_Controller 
{
	public $model; 
	public $action = "index";
	public function  __construct() 
	{
		//$this->index();
		$this->model = new User_Model();
		if(isset($_GET["action"])) $this->action = $_GET["action"];
		$this->{$this->action}();
	}

	public function index() 
	{
		session_start();
		if(isset($_SESSION['useremail'])) {
			Header("location: index.php?controller=home");
		}
		
		if (isset($_POST['email'])){
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			
			if($this->model->checkUser($email, $pass) ) {
				$_SESSION['useremail']=$email;
				$_SESSION['id']=$this->model->getId($email);
				Header("location: index.php?controller=home");
			} else 
				include "views/login.php";
		} else {
			include "views/login.php";
		}
	}
	
	public function logout() 
	{
		session_start();
	//	if(isset($_SESSION['useremail']))
	//	  unset($_SESSION['useremail']);
	    session_destroy();
		Header("location: index.php?controller=login");
	}
}
?>

